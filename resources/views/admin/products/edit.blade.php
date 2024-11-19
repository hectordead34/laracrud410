@extends('layout.main_template')
@section('content')
@include('fragments.formstyles')
<h2>Editar Productos</h2>
<form action="{{route('products.update',$product->id)}}" method="POST">
    @csrf
    @method("PUT")
<label for="">Nombre del Producto</label>
<input type="text "name="name_product" value="{{$product->name_product}}">


<label for="">Marca</label>
<select name="brand_id">
<option value="">Selecciona ...</option>

@foreach ($brands as $brand => $id)
<option {{$product->brand_id == $id ? 'selected':'' }} value="{{$id}}">{{$brand}}</option>
@endforeach

</select> <br> <br> 
<label for="">Cantidad</label>
<input type="number" name="stock" value="{{$product->stock}}">

<label for="">Precio Unitario</label>
<input type="text" name="unit_price" value="{{$product->unit_price}}">

<label for="">Imagen</label>
<input type="file" name="image">

<button type="submit">Registrar</button>
</form>

@endsection