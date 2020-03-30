<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Exception;

class cal extends Controller
{
    public function getWeek(Request $date){
        $arr = ['日','一','二','三','四','五','六'];
        $get = $date->query('date');
        $week = date("w", strtotime($get));
        if(date('Y-m-d', strtotime($get))==$get){
            return JsonResponse::create(['星期'=>$arr[$week]]);
        }
        else{
            return JsonResponse::create(['message'=>'不合乎時間規範']);
        }
    }
}
