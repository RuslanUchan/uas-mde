<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logistic;

class LogisticsController extends Controller
{
    public function showList($category)
    {
        $data = Logistic::where('category', $category)->get();

        return view('logistics-list', compact(
            "category",
            "data"
        ));
    }
}
