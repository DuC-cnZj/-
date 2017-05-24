<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCompany;
use Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        // dd($request->hasFile('file'));
        if($request->hasFile('file'))
        {
            $file = $request->file;
            $name = str_random(10) . '.jpg';
            $path = public_path() . '/thumbnails/' . $name;
            $img = Image::make($file)->resize(35, 35)->save($path); //resize 压缩， fit 裁剪
            // $size = $img->filesize();
            // dd($size);
            return $name;
        }
    }
}
