<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/',[EventController::class, 'index']);
Route::get('/events/create',[EventController::class, 'create']);
Route::post('/events', [EventController::class, 'store']);

