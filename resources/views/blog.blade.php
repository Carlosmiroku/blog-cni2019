@extends('layouts.master')

@section('titulo', 'Inicio')

@section('content')
    <h1>@lang('message.welcome')</h1>


    @foreach($posts as $post)
    <h1>{{ $post->title }}</h1>
    <h3>{{ $post->description }}</h3>
    @endforeach
    @endsection

