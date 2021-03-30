<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\User;

class DatproController extends Controller
{
    public function datdeptrai(Request $ten)
    {
       if($ten->is('dat')){
           echo $ten->input();
       }else {
           echo "ko dat";
       }
    }
    public function insert(Request $hi)
    {
        if($hi->has('hihi')){
            echo $hi->hoten;

        }else {
            echo "khong co tham so";
        }

    }
    public function setcookie(Request $request){
        
        $response = new Response();
        $response->withCookie('name', $request->hoten ,2);
        return $response;
    }
    public function getcookie(Request $request){
        return $request->cookie('name');
    }
}
?>