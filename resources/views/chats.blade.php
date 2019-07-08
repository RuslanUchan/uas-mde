@extends('layouts.front.app')

@section('content')
    <div class="container chats">
        <chats :user="{{ auth()->user()  }}"></chats>
    </div>
@endsection
@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection