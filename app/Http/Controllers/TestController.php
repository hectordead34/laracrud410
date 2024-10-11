<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Client;
class TestController extends Controller
{
    function test(){
        //conectar con el modelo que conecta a la base de datos.
        $client= Client::find(1);
       
        // paso 2 retornar una vista con la informacion del modelo.
        return view('testdb',['client'=>$client]);
    }
}
