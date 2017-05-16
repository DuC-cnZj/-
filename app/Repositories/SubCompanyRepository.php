<?php 
namespace App\Repositories;

use App\SubCompany;

/**
* 
*/
class SubCompanyRepository
{
	protected $company;
	function __construct(SubCompany $company)
	{
		$this->company = $company;
	}

	public function storeCompany($request)
	{
		$this->company->create([
			'name' => $request->name,
			'addr' => $request->addr,
			'description' => $request->description,
			'email' => $request->email,
			'phone' => $request->phone,
		]);
	}

	public function updateCompany($request, $id)
	{
		$company = $this->company->findOrFail($id);
		$company->update([
			'name' => $request->name,
			'addr' => $request->addr,
			'description' => $request->description,
			'email' => $request->email,
			'phone' => $request->phone,
			]);
	}
}