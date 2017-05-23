<?php

namespace App\Http\Controllers;

use App\Substation;
use App\SubCompany;
use Illuminate\Http\Request;
use App\Repositories\SubstationRepository;

class SubstationController extends Controller
{
    protected $repo;
    public function __construct(SubstationRepository $station)
    {
        $this->repo = $station;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $company = SubCompany::with('stations')->findOrFail($id);
         $substation = $company->stations;
            return view('admin.station.index', compact('substation', 'id' ,'company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('admin.station._createSubstation', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $this->repo->storeStation($request, $id);
        return redirect()->route('company.station.index', $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Substation  $substation
     * @return \Illuminate\Http\Response
     */
    public function show(Substation $substation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Substation  $substation
     * @return \Illuminate\Http\Response
     */
    public function edit(Substation $substation, $comp_id, $station_id)
    {
         $station = Substation::findOrFail($station_id);
        return view('admin.station._editSubstation', compact('comp_id', 'station_id', 'station'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Substation  $substation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Substation $substation, $comp_id, $station_id)
    {
        $this->repo->updateStation($request, $station_id ,$comp_id);
        return redirect()->route('company.station.index', $comp_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Substation  $substation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Substation $substation, $company_id, $sub_id)
    {
         $re = Substation::destroy($sub_id);
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
