@extends('layouts.layout')

@section('title','Terceros')

@section('content')

<form action="{{ route('terceros.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('terceros.partials.form',[
    'cardTitle' => 'Crear Tercero',
    'buttonTitle' => 'Guardar'
    ])
</form>





@endsection
