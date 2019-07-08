<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KeteranganEvent;
use App\Logistic;

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
            'message' => 'Events added successfully',
            'id' => $event->id
        ]);
    }

    public function addLogistics(Request $request, $category, $id)
    {
        $event = new KeteranganEvent();

        $event->$category = $id;
        $event->save();

        $message = 'Logistics added successfully';
        return redirect()->route('create-event')->with(compact([
            'message',
            'category'
        ]));
    }
}
