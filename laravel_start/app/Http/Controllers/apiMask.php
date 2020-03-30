<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

/**
 * @OA\Info(title="My First API", version="0.1")
 */

class apiMask extends Controller
{

/**
 * @OA\Get(
 *     path="/api/mask",
 *     tags={"maskSearch"},
 *     summary="取得全台口罩數量資訊",
 *     description="無需參數即可使用",
 *     @OA\Response(
 *      response="200",
 *      description="An example resource"
 *     )
 * )
 */
 
    public function show_all()
    {
        $data = DB::select('Select * From maskdata order by adult_count DESC');
        $data = array_map(function ($value) {
            return (array)$value;
        }, $data);
        
        return $data;
    }

/**
 * @OA\Get(
 *     path="/api/mask_address",
 *     tags={"maskSearch"},
 *     summary="取得區域口罩剩餘數量",
 *     description="需填寫想查詢的地址資訊",
 *     @OA\Parameter(name="address", in="query",@OA\Schema(type="string"), required=true, description="請輸入查詢地址"),
 *     @OA\Response(
 *      response="200",
 *      description="An example resource"
 *     )
 * )
 */
    public function show_section(Request $get)
    {
        $address = $get->query('address');
        $data = DB::select('Select * From maskdata Where address Like "%'.$address.'%" order by adult_count DESC');
        $data = array_map(function ($value) {
            return (array)$value;
        }, $data);
 
        return $data;
    }
}
