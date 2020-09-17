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
            <li class="li_father" id="{{ $message->id }}">
                <strong class="title">{{$message->title}}</strong>
                <ul>
                    <li>
                    {{ $message->content }}
                    </li>
                    <li class="date" data-date="{{ $message->created_at }}">
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

    <div id="js">
        
    </div>

@endsection

@section('script')
<script type="text/javascript" src="{{ asset('assets/js/utils.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
@endsection