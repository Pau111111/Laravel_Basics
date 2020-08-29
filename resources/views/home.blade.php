@extends('master')

@section('title', 'homepage')

@section('content')

<h2>Post a message:</h2>

<form action="/create" method="POST">
    <input type="text" name="title" placeholder="title">
    <input type="text" name="content" placeholder="content">
    {{ csrf_field() }} <!-- This puts an input type hidden token to make the request -->
    <button type="submit">Submit</button>
</form>

    <h2>Recent Messages:</h2>

    <ul>
        @foreach ($messages as $message)
            <li>
                <strong>{{$message->title}}</strong>
                <ul>
                    <li>
                    {{ $message->content }}
                    </li>
                    <li>
                        {{-- {{$message->created_at->format('d/m/Y H:i:s')}} --}}
                        {{ $message->created_at->diffForHumans() }}
                    </li>
                    <li>
                    <a href="/message/{{ $message->id }}">View</a>
                    </li>
                </ul>
            </li>
        @endforeach
    </ul>

@endsection