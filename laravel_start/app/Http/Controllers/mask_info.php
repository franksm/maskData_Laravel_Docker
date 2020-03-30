<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class mask_info extends Controller
{

    public function show_all()
    {
        $urlApi = "http://laravel.test/api/mask";
        $data = json_decode(file_get_contents($urlApi),true);
        return view('mask',['data'=>$data]);
    }

    public function show_section(Request $get)
    {
        $address = $get->query('address');
        if($address==null){
            $address = "123";
        }
        $urlApi = "http://laravel.test/api/mask_address?address=".$address;
        $data = json_decode(file_get_contents($urlApi),true);
        return view('mask',['data'=>$data]);
    }
}
