<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentsController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return view('admin.appointments.index', compact('appointments'));
    }
}
