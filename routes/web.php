<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    
       $nome = "kaiuuu";
       $idade = '19';
       $trabalho = "progammer";

       $arr = [10,20,30,40,50];

       $nomes = ["Kaio", "Felipe", "Rafa", "Mayo"];
       
    return view('welcome', 
       
       ['nome' => $nome, 
        'idade' => $idade, 
        'trabalho' => $trabalho,
        'arr' => $arr,  
        'nomes' => $nomes
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});