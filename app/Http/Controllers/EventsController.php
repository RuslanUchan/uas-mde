<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KeteranganEvent;

class EventsController extends Controller
{
    public function __construct()
    {
    }

    public function createEvent()
    {
        return view('create-event');
    }

    public function store(Request $request)
    {
        $event = new KeteranganEvent();

        $event->name = $request->input('name');
        $event->schedule = $request->input('schedule');

        $event->save();

        return response()->json([
            'message' => 'Success'
        ]);
    }
}
