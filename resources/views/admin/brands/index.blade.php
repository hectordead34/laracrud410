@extends('layout.main_template')
@section('content')
<button><a href="{{route('products.index')}}">Regresar</a></button>
<table>
    <thead>
        <th>Marca</th>
        <th>Descripcion</th>
        <th>Acciones</th>
    </thead>

    <tbody>
        @foreach ($brand as $b)
        <tr>
            <td>{{$b->brand}}</td>
            <td>{{$b->description}}</td>
            <td>
                <button><a href="{{route("brands.edit",$b)}}">Editar</a></button>
                <form action="{{route("brands.destroy",$b)}}"method="POST">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>

</table>
@endsection