<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Participant;

class DashboardController extends Controller
{
    function show(){
        $participants = new Participant();

        return view('admin.dashboard', compact('participants'));
    }
}
