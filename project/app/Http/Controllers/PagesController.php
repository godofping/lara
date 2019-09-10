<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function home()
    {
        $datas = ['lion', 'monkey', 'eagle'];

        return view('index')->with([
            'datas' => $datas,
        ]);
    }


    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}
