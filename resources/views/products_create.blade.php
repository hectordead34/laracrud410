@extends('layout.main_template')
@section('content')
@include('fragments.formstyles')
<h2>Create de Productos</h2>
<form action="{{route('products.store')}}" method="POST">
    @csrf
<label for="">Nombre del Producto</label>
<input type="text "name="name_product">


<label for="">Marca</label>
<input type="text " name="brand">

<label for="">Cantidad</label>
<input type="number" name="stock">

<label for="">Precio Unitario</label>
<input type="text" name="unit_price">

<label for="">Imagen</label>
<input type="text" name="image">

<button type="submit">Registrar</button>
</form>

@endsection