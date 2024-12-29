<?php

use App\Jobs\Attendance\ProcessAttendanceRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/employee/attendance', function (Request $request) {

    collect($request->get('attendance_data', []))->chunk(50)->each(function ($chunk) {
        ProcessAttendanceRecord::dispatch($chunk);
    });
    return response()->json([
        'message' => 'Attendance updated successfully'
    ]);
})->name('attendance');
