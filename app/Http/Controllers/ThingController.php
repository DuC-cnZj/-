<?php

namespace App\Http\Controllers;

use App\Thing;
use App\SubCompany;
use App\Substation;
use Illuminate\Http\Request;
use App\Repositories\ThingRepository;
use Validator;

class ThingController extends Controller
{
    protected $repo;
    public function __construct(ThingRepository $thing)
    {
        $this->repo = $thing;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.thing.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = SubCompany::all();
        return view('admin.thing._createThing', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
       $number = $this->repo->storeThing($request);
        return view('admin.thing._success', compact('number'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function show(Thing $thing)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function edit(Thing $thing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thing $thing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Thing  $thing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thing $thing)
    {
        //
    }

    public function deliver()
    {
        $companies = SubCompany::all();
        $stations = Substation::all();
        return view('admin.thing.deliverGoods', compact('companies', 'stations'));
    }

    public function updateThing(Request $request)
    {
        // dd($request->all());
        $rules = ['number' => 'exists:things'];
        $messages = [
            'number' => '编号不存在.',
        ];
            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                return redirect('deliver')
                            ->withErrors($validator)
                            ->withInput();
            }
       return $this->repo->updateThing($request);
      
    }
    public function statistics()
    {
        $companies = SubCompany::all();
        return view('statistics.index', compact('companies'));
    }
    public function tongjiAll(Request $request)
    {
        // dd($request->all());
        return $this->repo->tongjiAll($request);

    }
}
