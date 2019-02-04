<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\Domain;
use App\Founder;
use App\Grade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\Startup\FounderRequest;
use App\Http\Requests\Frontend\Startup\TeamRequest;
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
            return 'founder edit page';
        }

        if (!session()->has('current-step')) {
            session()->put('current-step', 1);
        }

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

        return $this->_handle();
    }

    public function team()
    {
        // session handle
        if (session()->has('current-step') && session('current-step') > 2) {
            return 'team edit page';
        }

        if (!(session()->has('current-step') && session('current-step') == 2)) {
            return $this->_handle();
        }

        return view('frontend.startup.register.team-form');
    }

    public function doTeam(TeamRequest $request)
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

        return $this->_handle();
    }

    public function complete()
    {
        // session handle
        if (session()->has('current-step') && session('current-step') > 3) {
            return 'complete edit page';
        }

        if (!(session()->has('current-step') && session('current-step') == 3)) {
            return $this->_handle();
        }

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

        return $this->_handle();
    }

    protected function _handle()
    {
        if (session()->has('current-step')) {
            switch (session('current-step')) {
                case 1:
                    return redirect(route('frontend.startup.register.founder-form'));
                    break;
                case 2:
                    return redirect(route('frontend.startup.register.team-form'));
                    break;
                case 3:
                    return redirect(route('frontend.startup.register.complete-form'));
                    break;
                case 4:
                    // return status
                    break;
                default:
                    return redirect(route('frontend.startup.register.founder-form'));
                    break;
            }
        }
        return redirect(route('frontend.startup.register.founder-form'));
    }
}
