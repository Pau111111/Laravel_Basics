@extends('master')

@section('title', 'homepage')

@section('content')

<h3>{{ $message->title }}</h3>
<p>{{ $message->content }}</p>

<a href="/">Back</a>

@endsection