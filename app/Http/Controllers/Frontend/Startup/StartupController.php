<?php

namespace App\Http\Controllers\Frontend\Startup;

use App\Domain;
use App\Prop;
use Illuminate\Http\Request;

class StartupController extends BaseController
{
    public function create()
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

        return view('frontend.startup.register.startup.create', compact('data'));
    }

    public function store(Request $request)
    {
        return $request->all();

        // set session
        session()->put('current-step', 4);

        return $this->_handle();
    }

    public function edit()
    {
        if (!(session()->has('current-step') && session('current-step') > 3)) {
            return redirect()->back();
        }

        return 'startup edit';
    }

    public function update()
    {
        //
    }
}
