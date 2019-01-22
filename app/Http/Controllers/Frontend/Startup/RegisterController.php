<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\Founder;
use App\Grade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Startup\FounderRequest;
use App\Skill;
use App\University;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function doFounder(FounderRequest $request)
    {
        // retrieve data
        $firstName = $request->get('first_name');
        $lastName = $request->get('last_name');
        $gradeId = $request->get('grade_id');
        $universityId = $request->get('university_id');
        $major = $request->get('major');
        $email = $request->get('email');
        $mobile = $request->get('mobile');
        $gender = $request->get('gender');
        $soldiershipStatus = $request->get('soldiership_status');
        $skills = $request->get('skills');
        $achievement = $request->get('achievement');

        // user data
        $user = new User();
        $user->name = $firstName . ' ' . $lastName;
        $user->email = $email;
        $user->mobile = $mobile;
        $user->gender = $gender;
        $user->password = str_random('10');
        session()->put('pass', $user->password);
        // TODO ** set password and email **

        $user->save();
        Auth::login($user, true);

        // founder data
        $founder = new Founder();
        $founder->user_id = $user->id;
        $founder->first_name = $firstName;
        $founder->last_name = $lastName;
        $founder->grade_id = $gradeId;
        $founder->university_id = $universityId;
        $founder->major = $major;
        $founder->soldiership_status = $soldiershipStatus;
        $founder->achievement = $achievement;
        $founder->save();

        // founder skills
        $founder->skills()->sync($skills);

        return redirect(route('frontend.startup.register.team'));
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
