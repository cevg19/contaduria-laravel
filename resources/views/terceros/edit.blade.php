@extends('layouts.layout')

@section('title','Terceros')

@section('content')

<form action="{{ route('terceros.update',$terceros)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')    
    @include('terceros.partials.form',[
    'cardTitle' => 'Editar Tercero',
    'buttonTitle' => 'Actualizar'
    ])
</form>
@endsection
