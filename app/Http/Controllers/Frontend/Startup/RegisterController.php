<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\Grade;
use App\Http\Controllers\Controller;
use App\Skill;
use App\University;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function founder()
    {
        $data = [];
        $data['skill'] = Skill::all()->split(2);
        $data['grade'] = Grade::all();
        $data['university'] = University::all();

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
