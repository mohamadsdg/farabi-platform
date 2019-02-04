<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\Http\Requests\Frontend\Startup\TeamRequest;
use App\Team;

class TeamController extends BaseController
{
    public function create()
    {
        if (session()->has('current-step') && session('current-step') > 2) {
            return redirect(route('frontend.startup.register.team.edit'));
        }

        if (!(session()->has('current-step') && session('current-step') == 2)) {
            return $this->_handle();
        }

        return view('frontend.startup.register.team.create');
    }

    public function store(TeamRequest $request)
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
        $team->founder_id = $this->getUser()->founder->id;
        $team->save();

        // members data
        $team->members()->createMany($members);

        // set session
        session()->put('current-step', 3);

        return $this->_handle();
    }

    public function edit()
    {
        if (!(session()->has('current-step') && session('current-step') > 2)) {
            return redirect()->back();
        }

        $data = [];
        $data['team'] = $this->getUser()->founder->team;

        return view('frontend.startup.register.team.edit', compact('data'));
    }

    public function update(TeamRequest $request)
    {
        // retrieve data
        $members = $request->get('members');

        // team data
        $team = $this->getUser()->founder->team;
        $team->background = $request->get('background');
        $team->employees_count = $request->get('employees_count');
        $team->introduction = $request->get('introduction');
        $team->teamwork = $request->get('teamwork');
        $team->description = $request->get('description');
        $team->save();


        // members data
        $team->members()->delete();
        $team->members()->createMany($members);

        return redirect()->back()->with('msg', 'اطلاعات با موفقیت به‌روز شد');
    }
}
