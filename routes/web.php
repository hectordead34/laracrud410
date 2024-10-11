<?php

use App\Http\Controllers\TestController;
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
    return view('welcome');
});

Route::get('/testView', function () {
return view('testView');
});

Route::get('/texto', function () {
    echo "Hi world";
    echo "<h1>Hola mundo</h1>";
    });
    
    Route::get('/echo', function () {
        echo view('text2');
        });

        Route::get('/MasRutas', function () {
            return "podemo tener mas rutas tipo get, POST
            DELETE , Path";

            });

            Route::get('/custom', function () {
               $msj=" Mensaje desde el servidor ";
               $id=" 500 ";
      return view('custom',['msj'=>$msj,"Identy"=>$id,"A"=> 29 ]);
            });
           
            Route::get('/contact', function () {
                return view('contacto');
            })-> name('contact');
            
            Route::get('/testdb',[TestController::class,'test']);


