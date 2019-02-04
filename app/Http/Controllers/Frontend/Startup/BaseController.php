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

class BaseController extends Controller
{
    protected function _handle()
    {
        if (session()->has('current-step')) {
            switch (session('current-step')) {
                case 1:
                    return redirect(route('frontend.startup.register.founder.create'));
                    break;
                case 2:
                    return redirect(route('frontend.startup.register.team.create'));
                    break;
                case 3:
                    return redirect(route('frontend.startup.register.startup.create'));
                    break;
                case 4:
                    // return status
                    break;
                default:
                    return redirect(route('frontend.startup.register.founder.create'));
                    break;
            }
        }
        return redirect(route('frontend.startup.register.founder.create'));
    }
}
