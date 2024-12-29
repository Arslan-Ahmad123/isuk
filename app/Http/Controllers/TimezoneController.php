<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TimezoneController extends Controller
{
    public function setTimeZone(Request $request)
    {
        $request->validate([
            'timeZone' => 'required|string'
        ]);

        // Store the time zone in the session
        Session::put('user_time_zone', $request->timeZone);

        return response()->json(['message' => 'Time zone set successfully']);
    }
}
