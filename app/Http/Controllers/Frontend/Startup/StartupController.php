<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\Domain;
use App\Http\Requests\Frontend\Startup\StartupRequest;
use App\Prop;
use App\Startup;
use Illuminate\Http\Request;

class StartupController extends BaseController
{
    public function create()
    {
        // session handle
        if (session()->has('current-step') && session('current-step') > 3) {
            return redirect(route('frontend.startup.register.startup.edit'));
        }

        if (!(session()->has('current-step') && session('current-step') == 3)) {
            return $this->_handle();
        }

        $data = [];
        $data['domain'] = Domain::all()->split(4);
        $data['prop'] = Prop::all()->split(4);

        return view('frontend.startup.register.startup.create', compact('data'));
    }

    public function store(StartupRequest $request)
    {
        // retrieve data
        $domains = $request->get('domains');
        $props = $request->get('props');

        $startup = new Startup();
        $startup->name = $request->get('name');
        $startup->start_date = $request->get('start_date');
        $startup->introduction = $request->get('introduction');
        $startup->type = $request->get('type');
        $startup->stage = $request->get('stage');
        $startup->is_mvp_ready = $request->get('is_mvp_ready');
        $startup->mvp_address = $request->get('mvp_address');
        $startup->working = $request->get('working');
        $startup->similar_startup = $request->get('similar_startup');
        $startup->is_idea_submitted = $request->get('is_idea_submitted');
        $startup->company_name = $request->get('company_name');
        $startup->company_rn = $request->get('company_rn');
        $startup->market_research = $request->get('market_research');
        $startup->description = $request->get('description');

        $startup->founder_id = $this->getUser()->founder->id;
        $startup->team_id = $this->getUser()->founder->team->id;


        if (!$startup->save()) {
            return redirect()->back()->withInput()->with('err', 'مجدد امتحان کنید');
        }

<<<<<<< HEAD
=======
        $team = $this->getUser()->founder->team;
        $team->startup_id = $startup->id;
        $team->save();

>>>>>>> 3b6d9a390ce1c33bbf4c7704d61dab4676335a4a
        $startup->is_completed = true;
        $startup->save();

        $startup->domains()->sync($domains);
        $startup->props()->sync($props);

        // set session
        session()->put('current-step', 4);

        return $this->_handle();
    }

    public function edit()
    {
        if (!(session()->has('current-step') && session('current-step') > 3)) {
            return redirect()->back();
        }

        $data = [];
        $data['domain'] = Domain::all()->split(4);
        $data['prop'] = Prop::all()->split(4);

        $data['user'] = $this->getUser();
        $data['startup'] = $this->getUser()->founder->startup;
        $data['domains'] = $this->getUser()->founder->startup->domains()->pluck('domain_id')->toArray();
        $data['props'] = $this->getUser()->founder->startup->props()->pluck('prop_id')->toArray();

        return view('frontend.startup.register.startup.edit', compact('data'));
    }

    public function update(StartupRequest $request)
    {
        // retrieve data
        $domains = $request->get('domains');
        $props = $request->get('props');

        $startup = $this->getUser()->founder->startup;
        $startup->name = $request->get('name');
        $startup->start_date = $request->get('start_date');
        $startup->introduction = $request->get('introduction');
        $startup->type = $request->get('type');
        $startup->stage = $request->get('stage');
        $startup->is_mvp_ready = $request->get('is_mvp_ready');
        $startup->mvp_address = $request->get('mvp_address');
        $startup->working = $request->get('working');
        $startup->similar_startup = $request->get('similar_startup');
        $startup->is_idea_submitted = $request->get('is_idea_submitted');
        $startup->company_name = $request->get('company_name');
        $startup->company_rn = $request->get('company_rn');
        $startup->market_research = $request->get('market_research');
        $startup->description = $request->get('description');

        $startup->founder_id = $this->getUser()->founder->id;
        $startup->team_id = $this->getUser()->founder->team->id;

        $startup->domains()->sync($domains);
        $startup->props()->sync($props);

        if (!$startup->save()) {
            return redirect()->back()->withInput()->with('err', 'مجدد امتحان کنید');
        }

        return redirect()->back()->with('msg', 'اطلاعات با موفقیت به‌روز شد');
    }
}
