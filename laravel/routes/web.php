<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DatproController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('hoten/{ten}', function ($ten) {
//     echo "ten cua ban la :".$ten;
// })->where(['ten'=>'[0-9]+']);

//  Route::get('route',['as'=>'myroute',function(){
//     echo "xin chao cac bajn";
//  }]);

//  Route::get('thehell',function(){
//     return redirect()->route('myroute');
//  });

// Route::get('route',function(){
//     echo "chon cai lao`";
//  })->name('myroute');

// Route::get('thehell',function(){
//     return redirect()->route('myroute');
// });

//  Route::group(['prefix'=>'Mygroup'],function(){
//     Route::get('user1',function(){
//         return "chi la cuc cuc user1";
//     });
//     Route::get('user2',function(){
//         return "chi la cuc cuc user2";
//     });
//     Route::get('user4',function(){
//         return "chi la cuc cuc user3";
//     });
//  });

Route::get('/dat', [DatproController::class,'datdeptrai']);
Route::get('/getform',function(){
    return view('kiemtra');
});
Route::post('postform', [DatproController::class,'setcookie'])->name('postform');
Route::get('getuot', [DatproController::class,'getcookie']);


// Route::get('home', function () {
//     return response($content)
//     ->header('Content-Type', $type)
//     ->cookie('name', 'value', $minutes);
// });
// Route::get('home1', function () {
//     echo "Hello World";
// });

// Route::get('aaa', function () {
//     return view('pages.home');
// })->name('home');
// Route::get('home/create', function () {
//     return view('pages.add');
// })->name('add');
// Route::get('cratetable', function () {
//     schema::create('informat');
// });
Route::Resource('/home', StudentController::class);