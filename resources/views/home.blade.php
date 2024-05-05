@extends('layouts.app')

@section('titulo')
    Pagina Principal
@endsection

@section('contenido')
    
    <x-listar-post :posts="$posts"></x-listar-post>

@endsection