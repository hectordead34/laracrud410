@extends('layout.main_template')
@section('content')
    <h1>Detalles de la marca</h1>
    <h3>Marca:{{$brands ->brand}}</h3>
    <h3>Descripcion:{{$brands ->description}}</h3>
 
    <!--TODO Show Image -->
    
@endsection