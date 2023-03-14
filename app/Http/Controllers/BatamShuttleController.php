<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BatamShuttleController extends Controller
{
    public function show() {
        return view('application.batam-shuttle', [
            'title' => 'Batam Shuttle Laundry',
            'active' => 'Batam Shuttle Laundry',
        ]);
    }
}
