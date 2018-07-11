@extends('layouts.app')

@section('content')

<h1>USER: {{ Auth::user()->name }}</h1>

@endsection