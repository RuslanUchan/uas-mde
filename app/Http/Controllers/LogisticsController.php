<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogisticsController extends Controller
{
    public function showList($category)
    {
        return "$category";
    }
}
