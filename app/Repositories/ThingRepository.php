<?php 
namespace App\Repositories;

use App\Thing;
use App\Courier;
use App\Substation;

/**
* 
*/
class ThingRepository
{
	protected $thing;
	function __construct(Thing $thing)
	{
		$this->thing = $thing;
	}

	public function storeThing($request)
	{
		$mix = explode('-', $request->destination) ;
		$random = mt_rand(10000000,99999999);
		// dd($random);
		$this->thing->create([
			'destination' => $mix[1],
			'person' => $request->person,
			'weight' => $request->weight,
			'RMB' => $request->RMB,
			'sub_company' => $mix[0],
			'number' => $random,
			'path' => $request->destination
		]);
		return $random;
	}

	public function updateThing($request)
	{
		$thing = Thing::where('number', $request->number)->first();
		if ($thing->status) {
			return redirect()->back()->with('msg', '已经运达!!');
		}
		// dd($thing->path);
		$path = $thing->path . '-' . $request->station;
		// dd($path);
		$thing->update([
			'path' => $path,
			'courier_id' => $request->courier_id,
			'status' => $request->status
		]);
		return redirect()->route('thing.index');
	}

	public function tongjiAll($request)
	{
		switch ($request->tianojian) {
			case '0':
				return $this->timeTj($request);
				break;
			case '1':
				return $this->companyTj($request);
				break;
			case '2':
				return $this->stationTj($request);
				break;
			case '3':
				return $this->courierTj($request);
				break;
			default:
				# code...
				break;
		}

	}
	public function courierTj($request)
	{

		$courier = Courier::where('name', $request->courier_name)->first();
		$name = $request->courier_name;
		$things = $courier->things;
		// dd($things);
		$count = $things->pluck('status')->filter(function ($v, $k) {
			return $v != null;
		})->count();
		return view('statistics._courier', compact('things', 'count' ,'name'));
	}

	public function stationTj($request)
	{
		$thingsS  = Substation::where('name', $request->station_name)->first();
		$countS = $thingsS->couriers;
		$a = [];
		$things = [];
		// dd($count);
		foreach ($countS as $key => $value) {
			 $a[] = $value->things->pluck('courier_id')->filter(function ($v, $k) {
				return $v != null;
			})->count();
			 $things[$key] = $value->things;
			 // dd($value->things) ;
		}
		$count = array_sum($a);
		$things = array_collapse($things);
// dd($things);
		$b = [];
		foreach ($countS as $key => $value) {
			 $b[] = $value->things->where('status', 1)->count();
		}
		$sendthings = array_sum($b);

		// dd($sendthings);
		  return view('statistics._stat', compact('things', 'count' ,'sendthings'));
		
	}

	public function companyTj($request)
	{
		$things  = Thing::where('sub_company', $request->company_name)->get();
		$count = $things->pluck('courier_id')->filter(function ($v, $k) {
			return $v != null;
		})->count();
	        $sendthings  = Thing::where([
	        		'sub_company' => $request->company_name,
	                        'status' => 1
	        ])->count();
		// dd($things);
		  return view('statistics._company', compact('things', 'count' ,'sendthings'));
		// dd($request->all());
	}

	public function timeTj($request)
	{
	        $time = substr($request->date, 4,11);
	        $t = explode(' ', $time);
	        $trans = trans('datedu.'.$t[0]);
	        $day = $t[1];
	        $t[0] = $trans;
	        $year = array_pop($t);
	        array_unshift($t, $year);
	        $date = implode('-', $t);
	        $things  = Thing::whereDate('created_at', $date)->get();
	        $sendthings  = Thing::whereDate(
	            'updated_at', $date
	            )->where([
	                        'status' => 1
	        ])->count();
	        // $count  = $thing->whereNotNull('courier_id')->count();
	        $count = $things->pluck('courier_id')->filter(function ($v, $k) {
	            return $v != null;
	        })->count();
	        return view('statistics._time', compact('things', 'count' ,'sendthings'));
	}
}