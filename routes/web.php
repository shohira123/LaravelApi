<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get("/test",function(){
    return ["name"=>"sho","degree"=>"BCA"];
});
Route::view('/home','home');   // to directly open a view
Route::view('/welcome','welcome');

Route::get("/clients",[ClientController::class,'list']);// to open call controller finction get is compulsaory
 
// to pass a dynamic data
 Route::get("/about/{name}",function($name){
    echo $name;
return view('about',["name"=>$name]);
 });