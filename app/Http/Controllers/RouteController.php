<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;

class RouteController extends Controller
{
    public function index()
    {
        // sleep(3);
        return Inertia::render('IndexPage');
    }

    public function home()
    {
        // sleep(3);
        return Inertia::render('HomePage');
    }
    public function preference()
    {
        // sleep(3);
        return Inertia::render('PreferencePage');
    }
    public function usersettings()
    {
        // sleep(3);
        return Inertia::render('usersettings');
    }
    public function skofficials()
    {
        // sleep(3);
        return Inertia::render('SkOfficials');
    }
}