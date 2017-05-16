<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\SubCompany;
use App\Substation;

/**
* 
*/
class LayoutsComposer
{
	
	function __construct()
	{
		# code...
	}

	public function compose(View $view)
	{
		$subComp = SubCompany::with('stations')->get();
		// dd($subCompanies);
		$view->with([
			'subComp' => $subComp,
			]);
	}
}