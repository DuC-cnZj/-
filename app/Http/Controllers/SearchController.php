<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thing;
use Illuminate\Support\Collection;

class SearchController extends Controller
{
     public function __invoke(Request $request)
    {
    	$good = Thing::where('number', $request->number)->first();
        if (! $good) {
            return redirect()->back()->withErrors(['error' => '快递不存在 !']);
        }
        if ($good->status) {
                $arr = explode('-', $good->path);
                $array = array_except($arr, [0,1]);
                array_unshift($array, '出发站');
                array_push($array, '目的地(已送达)');
                                // $end = $arr[1];
                // array_push($array, $end);
               // dd($array);
                $collection = collect($array);
                $count = count($arr)+1 ;
        }else{
                $arr = explode('-', $good->path);
                $array = array_except($arr, [0,1]);
                array_unshift($array, '出发站');
                array_push($array, '目的地');
               // $array = array_push($array, $end);
                 $collection = collect($array);
                $count = count($arr) - 1;
            }

        return view('search.search', compact('good', 'count', 'collection'));
    }
}
