<?php 
namespace App\Repositories;

use App\Substation;

/**
* 
*/
class SubstationRepository
{
	protected $station;
	function __construct(Substation $station)
	{
		$this->station = $station;
	}

	public function storeStation($request, $id)
	{
		$this->station->create([
			'name' => $request->name,
			'addr' => $request->addr,
			'description' => $request->description,
			'email' => $request->email,
			'phone' => $request->phone,
			'sub_company_id' => $id
		]);
	}

	public function updateStation($request, $id , $comp_id)
	{
		$station = $this->station->findOrFail($id);
		$station->update([
			'name' => $request->name,
			'addr' => $request->addr,
			'description' => $request->description,
			'email' => $request->email,
			'phone' => $request->phone,
			'sub_company_id' => $comp_id
			]);
	}
}