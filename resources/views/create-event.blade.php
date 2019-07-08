@extends('layouts.front.app')

@section('content')
    <div class="container">
        <h1>Create Event</h1>
        <p>Nama</p><br>
        <p>Schedule</p><br>
        Tenda <a href="{{ url('logistics/tenda') }}">+</a><br>
        Catering <a href="{{ url('logistics/catering') }}">+</a><br>
        Sound System <a href="{{ url('logistics/sound') }}">+</a><br>
        Lighting <a href="{{ url('logistics/lighting') }}">+</a><br>
        Alat Pendukung <a href="{{ url('logistics/support') }}">+</a><br>
        <button style="margin-top: 20px;" class="btn btn-primary" type="button">Pesan</button>
    </div>
@endsection