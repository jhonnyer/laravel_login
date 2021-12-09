<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    // $user=Auth::user();
    // if($user->EsAdmin()){
    //     echo "Eres usuario Administrador";
    // }else{
    //     echo "Eres Estudiante";
    // }
    return view('welcome');
    // if(Auth::check()){
    //     return view('home');
    //     // return "Estas logeado";   
    // }
    // else{
    //     return "No estas logeado";
    //     // return view('welcome');
    // }
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');

Route::get('/admin/user/roles',['middleware'=>'role',function(){
    return "Middleware role";
}]);


Route::get('/admin','App\Http\Controllers\AdministradorController@index');