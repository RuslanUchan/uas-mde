@extends('layouts.front.app')

@section('content')
    <div class="container">
        <hr>
        <h3><strong>Create Event</strong></h3>
        <br>
        <form action="">
            <p style="margin-right: 10%; display: inline-block;">Event Name</p>
            <input name="event-name" style="width: 50%; display: inline-block;" type="text" class="form-control" placeholder="Event Name..."><br>

            <p style="margin-right: 12%; display: inline-block;">Schedule</p>
            <input name="event-schedule" style="width: 15%; display: inline-block;" type="date" class="form-control"><br>

            <button id="process-event" class="btn btn-primary" type="button" onclick="processEvent();">Create Event</button>
        </form>
        <br><br>

        <div id="logistics-option" style="display: none;">
{{--            <span style="color: blue;" data-name="tenda">Tenda</span> <a href="{{ url('logistics/tenda') }}">+</a><br>--}}
            <span data-name="tenda">Tenda</span> <a href="{{ url('logistics/tenda') }}">+</a><br>
            <span data-name="catering">Catering</span> <a href="{{ url('logistics/catering') }}">+</a><br>
            <span data-name="sound">Sound System</span> <a href="{{ url('logistics/sound') }}">+</a><br>
            <span data-name="lighting">Lighting</span> <a href="{{ url('logistics/lighting') }}">+</a><br>
            <span data-name="support">Alat Pendukung</span> <a href="{{ url('logistics/support') }}">+</a><br>
            <button id="make-order" style="margin-top: 20px;" class="btn btn-primary" type="button" onclick="makeOrder();">Make Order</button>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function processEvent() {
            // Check filled form
            let en = document.getElementsByName('event-name')[0].value;
            let es = document.getElementsByName('event-schedule')[0].value;

            // if (en.length < 3 || es.length === 0) { // if both is empty
            //     alert('Please fill out the required form');
            //     return;
            // }

            // Store created event to database
            fetch('api/create-event/store', {
                method: 'POST',
                mode: 'cors', // no-cors, cors, *same-origin
                cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
                credentials: 'same-origin', // include, *same-origin, omit
                headers: {
                    'Content-Type': 'application/json',
                    // 'Content-Type': 'application/x-www-form-urlencoded',
                },
                redirect: 'follow', // manual, *follow, error
                referrer: 'no-referrer', // no-referrer, *client
                body: JSON.stringify({
                    name: en,
                    schedule: es,
                    "_token": "{{ csrf_token() }}"
                }),
            })
                .then((response) => {
                    if (response.status !== 200) {
                        console.log(`There's some problem ${response.status}`);
                        return;
                    }

                    response.json()
                        .then((data) => {
                            console.log(data);
                        })
                })
                .catch((err) => console.log(err));

            // Show hidden events
            document.getElementById('logistics-option').style.display = 'block';
            document.getElementById('process-event').setAttribute('disabled', 'disabled');
        }

        function makeOrder() {

        }
    </script>
@endsection