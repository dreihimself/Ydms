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
    public function barangayregistry()
    {
        // sleep(3);
        return Inertia::render('BarangayRegistry');
    }
    public function departmenthead()
    {
        // sleep(3);
        return Inertia::render('DepartmentHead');
    }
    public function civilstatus()
    {
        // sleep(3);
        return Inertia::render('CivilStatus');
    }
    public function Program()
    {
        // sleep(3);
        return Inertia::render('Program');
    }
    public function educationalbackground()
    {
        // sleep(3);
        return Inertia::render('EducationalBackground');
    }
    public function YouthClassification()
    {
        // sleep(3);
        return Inertia::render('YouthClassification');
    }
    public function workingstatus()
    {
        // sleep(3);
        return Inertia::render('WorkingStatus');
    }
}
