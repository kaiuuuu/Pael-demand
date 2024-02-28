<?php

use App\Http\Controllers\loginController;
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
    
    $busca = request('busca');
    
    return view('products', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id = null) {
    return view('product',['id' => $id]);
});

Route::get('/regist', function () {
    return view('regist');
});


Route::get('/login', [loginController::class, 'login']);
Route::get('/events/create', [loginController::class, 'create']);
Route::post('/loginr', [loginController::class, 'loginr']);

