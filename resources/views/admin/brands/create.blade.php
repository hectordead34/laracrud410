@extends('layout.main_template')
@section('content')
@include('fragments.formstyles')
<h2>Crear marcas</h2>
<form action="{{route('brands.store')}}" method="POST">
    @csrf
<label for="">Nombre de la marca</label>
<input type="text "name="brand">


<label for="">Descripcion</label>
<input type="text" name="description">
<button type="submit">Registrar</button>
</form>
@endsection
