<?php

namespace App\Http\Controllers;

use App\SubCompany;
use Illuminate\Http\Request;
use App\Repositories\SubCompanyRepository;

class SubCompanyController extends Controller
{
    public function __construct(SubCompanyRepository $company)
    {
        $this->repo = $company;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $subCompanies = SubCompany::all();
            return view('admin.company.index', compact('subCompanies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company._createSubCompany');
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
       $this->repo->storeCompany($request);
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCompany  $subCompany
     * @return \Illuminate\Http\Response
     */
    public function show(SubCompany $subCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCompany  $subCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCompany $subCompany, $id)
    {
        $company = SubCompany::findOrFail($id);
        // dd($company);
        return view('admin.company._editSubCompany', compact('company', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCompany  $subCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCompany $subCompany, $id)
    {
             $this->authorize('update', $subCompany);
             // $this->authorize('show', SubCompany::class);
            $this->repo->updateCompany($request, $id);
            return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCompany  $subCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCompany $subCompany, $id)
    {
         $re = SubCompany::destroy($id);
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
        // dd($company);
    }
}
