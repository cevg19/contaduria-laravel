@extends('layouts.layout')

@section('title','Terceros')

@section('content')

<div class="row">
    <div class="col-4">
        @if (session('info'))
        <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
            {{session('info')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif</div>
</div>
<div class="row ">

    <div class="col-2 py-2">
        <h1>Terceros</h1>
    </div>
    <div class="col-2 py-2">
        <a href="{{ route('terceros.create')}}" class="btn btn-success ">Crear Tercero</a>
    </div>
    <div class="col-8 py-2">@include('terceros.partials.search')</div>
</div>

@if ($terceros->count())


<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Tercero</th>
            <th>Identificación</th>
            <th>RUT</th>
            <th>Activo</th>
            <th colspan="2">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($terceros as $tercero)
        <tr>

            <td scope="row">{{$loop->iteration}}</td>
            <td>{{$tercero->nombre}} {{$tercero->nombre2}} {{$tercero->apellido}} {{$tercero->apellido2}}</td>
            <td>{{$tercero->identificacion}}</td>
            <td>@isset($tercero->rut)
                <a href="/storage/{{$tercero->rut }}"><i class="text-success bi bi-check-circle-fill"></i></a>
                @else
                <i class="text-danger bi bi-x-circle-fill"></i></i>
                @endisset</td>

            <td>@if ($tercero->activo === "SI")
                <i class="text-success bi bi-circle-fill"></i>
                @else
                <i class="text-danger bi bi-circle-fill"></i>
                @endif</td>
            <td>
                <a type="button" class="btn btn-link text-primary" href="{{ route('terceros.edit', $tercero)}}"
                    title="Editar"><i class="bi bi-pencil-square"></i></a>
            </td>
            <td>

                <a href="#" class="btn btn-link text-danger" title="Eliminar" data-toggle="modal"
                    data-target="#ModalDelete{{$tercero}}"><i class="bi bi-x-square"></i></a>
            </td>
            @include('layouts.delete')



        </tr>
        @endforeach


    </tbody>
</table>
<div class="text-center">
    {{$terceros->render("pagination::bootstrap-4")}}
</div>

@else
<h3>No hay registros...</h3>
@endif

@endsection
