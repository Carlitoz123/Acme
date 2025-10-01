<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanosController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'dashboard'],function(){

    RoutE::get("/", function(){ 
        return view('admin.dashboard');
    }); 
    RoutE::get("/planos",[PlanosController::class,'getPlanos']);
    RoutE::post("/planos",[PlanosController::class,'createPlanos']);
    


});
