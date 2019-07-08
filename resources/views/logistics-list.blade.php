@extends('layouts.front.app')

@section('content')
    <hr>

    <div class="container">
        <h1>List {{ ucfirst($category) }}</h1>

        @foreach($data as $d)
{{--            <a href="{{ route('') }}">{{ $d->name }}</a>--}}
            <a href="{{ route('add-logistics', ['id' => $d->id) }}"> {{ $d->name }}</a><br>
        @endforeach
    </div>
@endsection