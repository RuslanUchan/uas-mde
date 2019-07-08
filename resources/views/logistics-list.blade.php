@extends('layouts.front.app')

@section('content')
    <hr>

    <div class="container">
        <h1>List {{ ucfirst($category) }}</h1>

        @foreach($data as $d)
{{--            <a href="{{ route('') }}">{{ $d->name }}</a>--}}
            <p>{{ $d->name }}</p>
        @endforeach
    </div>
@endsection