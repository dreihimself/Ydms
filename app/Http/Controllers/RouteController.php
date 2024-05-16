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

    public function login()
    {
        // sleep(3);
        return Inertia::render('Login');

    }
    public function skofficials()
    {
        // sleep(3);
        return Inertia::render('SkOfficials');
    }
    public function brgyreg()
    {
        // sleep(3);
        return Inertia::render('BrgyReg');
    }
    public function dept_head()
    {
        // sleep(3);
        return Inertia::render('DepartmentHead');
    }
}
