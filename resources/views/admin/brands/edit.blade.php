@extends('layout.main_template')
@section('content')
@include('fragments.formstyles')
<h2>Editar Marcas</h2>
<form action="{{route('brand.update',$brand->id)}}" method="POST">
    @csrf
    @method("PUT")
<label for="">Nombre de la Marca</label>
<input type="text "name="brand" value="{{$brand->brand}}">

<label for="">Descripcion de la Marca</label>
<input type="text "name="description" value="{{$brand->description}}">



<button type="submit">Actualizar Marca </button>
</form>

@endsection