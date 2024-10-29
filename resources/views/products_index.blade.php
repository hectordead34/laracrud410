@extends('layout.main_template')

@section('content')
<h2> Index Productos</h2>

<button><a href="{{route('products.create')}}">Crear Producto</a></button>
@endsection