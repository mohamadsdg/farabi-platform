<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\User;
use App\Founder;
use App\Grade;
use App\University;
use App\Skill;
use Illuminate\Http\Request;
use App\Http\Requests\Frontend\Startup\FounderRequest;
use Illuminate\Support\Facades\Auth;

class FounderController extends BaseController
{
    public function create()
    {
        // session handle
        if (session()->has('current-step') && session('current-step') > 1) {
            return redirect(route('frontend.startup.register.founder.edit'));
        }

        if (!session()->has('current-step')) {
            session()->put('current-step', 1);
        }

        $data = [];
        $data['skill'] = Skill::all()->split(2);
        $data['grade'] = Grade::all();
        $data['university'] = University::all();

        return view('frontend.startup.register.founder.create', compact('data'));
    }

    public function store(FounderRequest $request)
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

        // set session
        session()->put('current-step', 2);

        return $this->_handle();
    }

    public function edit(Request $request)
    {
        if (!(session()->has('current-step') && session('current-step') > 1)) {
            return redirect()->back();
        }

        $data = [];
        $data['skill'] = Skill::all()->split(2);
        $data['grade'] = Grade::all();
        $data['university'] = University::all();

        $data['user'] = $this->getUser();
        $data['founder'] = $this->getUser()->founder;
        $data['skills'] = $this->getUser()->founder->skills()->pluck('skill_id')->toArray();

        return view('frontend.startup.register.founder.edit', compact('data'));
    }

    public function update(FounderRequest $request)
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
        $user = $this->getUser();
        $user->name = $firstName . ' ' . $lastName;
        $user->email = $email;
        $user->mobile = $mobile;
        $user->gender = $gender;
        $user->save();

        // founder data
        $founder = $this->getUser()->founder;
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

        return redirect()->back()->with('msg', 'اطلاعات با موفقیت به‌روز شد');
    }
}
