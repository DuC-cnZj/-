<?php

namespace App\Http\Controllers;

use App\Courier;
use Illuminate\Http\Request;
use App\Substation;
use App\Repositories\CourierRepository;

class CourierController extends Controller
{
    protected $repo;
    public function __construct(CourierRepository $courier)
    {
        $this->repo = $courier;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($station_id)
    {
        $couriers = Courier::where('substation_id', $station_id)->latest()->get();
        $station_name = SubStation::find($station_id)->name;
        $company_name = SubStation::find($station_id)->SubCompany->name;
        return view('admin.courier.index', compact('couriers', 'station_name', 'company_name', 'station_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($station_id)
    {
        return view('admin.courier._createCourier', compact('station_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $station_id)
    {
        $this->repo->storeCourier($request, $station_id);
        return redirect()->route('station.courier.index', $station_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function show(Courier $courier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function edit(Courier $courier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courier $courier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courier  $courier
     * @return \Illuminate\Http\Response
     */
    public function destroy($station_id, $courier_id)
    {
  
         $re = Courier::where('id', $courier_id)->delete();
          if ($re) {
            $data = [
                'status' => 0,
                'msg' => "删除成功！"
            ];
        }else{
             $data = [
                'status' => 1,
                'msg' => '删除失败，请重试！'
            ];
        }
        return $data;
    }
}
