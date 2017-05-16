<?php 
namespace App\Repositories;

use App\Subcourier;
use App\Courier;

/**
* 
*/
class CourierRepository
{
	protected $courier;
	function __construct(Courier $courier)
	{
		$this->courier = $courier;
	}

	public function storeCourier($request, $id)
	{
		$this->courier->create([
			'name' => $request->name,
			'addr' => $request->addr,
			'age' => $request->age,
			'phone' => $request->phone,
			'substation_id' => $id
		]);
	}

	public function updateCourier($request, $id , $comp_id)
	{
		$courier = $this->courier->findOrFail($id);
		$courier->update([
			'name' => $request->name,
			'addr' => $request->addr,
			'description' => $request->description,
			'email' => $request->email,
			'phone' => $request->phone,
			'sub_company_id' => $comp_id
			]);
	}
}
