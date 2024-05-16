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
    public function DropdownSettings()
    {
        // sleep(3);
        return Inertia::render('DropdownSettings');

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
        return Inertia::render('DeptHead');
    }
    public function civilstatus()
    {
        // sleep(3);
        return Inertia::render('civilstatusdd');
    }
    public function Program()
    {
        // sleep(3);
        return Inertia::render('Program');
    }
    public function EducBg()
    {
        // sleep(3);
        return Inertia::render('EducBg');
    }
    public function YouthClassification()
    {
        // sleep(3);
        return Inertia::render('YouthClassification');
    }
}
