<?php

namespace App\Http\Controllers;

use DB;

class listController extends Controller
{
    public function getData()
    {
        $data['data'] = DB::table('p_user')->get();

        return view('home', $data);
    }
}
