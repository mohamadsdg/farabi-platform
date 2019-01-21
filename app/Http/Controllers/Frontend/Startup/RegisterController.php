<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function founder()
    {
        $data = [];
        return view('frontend.startup.register.founder-form', compact('data'));
    }

    public function team()
    {
        $data = [];
        return view('frontend.startup.register.team-form', compact('data'));
    }

    public function complete()
    {
        $data = [];
        return view('frontend.startup.register.complete-form', compact('data'));
    }
}
