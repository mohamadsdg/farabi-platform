<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\Domain;
use App\Founder;
use App\Grade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Startup\FounderRequest;
use App\Prop;
use App\Skill;
use App\Team;
use App\University;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function founder()
    {
        // session handle
        if (session()->has('current-step') && session('current-step') > 1) {
            // redirect to edit page
        }

        session()->put('current-step', 1);

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

        // set session
        session()->put('current-step', 2);

        return redirect(route('frontend.startup.register.team'));
    }

    public function team()
    {
        // session handle
        if (session()->has('current-step') && session('current-step') > 2) {
            // redirect to edit page
        }

        $this->_handle(2);

        // set session
        session()->put('current-step', 2);

        return view('frontend.startup.register.team-form');
    }

    public function doTeam(Request $request)
    {
        // retrieve data
        $members = $request->get('members');

        // team data
        $team = new Team();
        $team->background = $request->get('background');
        $team->employees_count = $request->get('employees_count');
        $team->introduction = $request->get('introduction');
        $team->teamwork = $request->get('teamwork');
        $team->description = $request->get('description');
        $team->save();

        // members data
        $team->members()->createMany($members);

        // set session
        session()->put('current-step', 3);
    }

    public function complete()
    {
        // session handle
        if (session()->has('current-step') && session('current-step') > 3) {
            // redirect to edit page
        }

        $this->_handle(3);

        $data = [];
        $data['domain'] = Domain::all()->split(4);
        $data['prop'] = Prop::all()->split(4);

        return view('frontend.startup.register.complete-form', compact('data'));
    }

    public function doComplete(Request $request)
    {
        return $request->all();

        // set session
        session()->put('current-step', 4);
    }

    protected function _handle($currentStep)
    {
        if (session()->has('current-step')) {
            switch (session('current-step')) {
                case 1:
                    if ($currentStep == 1) {
                        return 1;
                    }
                    return redirect(route('frontend.startup.register.founder-form'));
                    break;
                case 2:
                    if ($currentStep == 2) {
                        return 1;
                    }
                    return redirect(route('frontend.startup.register.team-form'));
                    break;
                case 3:
                    if ($currentStep == 3) {
                        return 1;
                    }
                    return redirect(route('frontend.startup.register.complete-form'));
                    break;
                case 4:
                    // return status
                    break;
                default:
                    break;
            }
        }
        return redirect(route('frontend.startup.register.founder-form'));
    }
}
