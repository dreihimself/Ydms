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
<<<<<<< HEAD
    }

    public function login()
    {
        // sleep(3);
        return Inertia::render('Login');
=======
>>>>>>> 54f94f3707037a6ca9e32cb0f086b45e58caebb5
    }
    public function skofficials()
    {
        // sleep(3);
        return Inertia::render('SkOfficials');
    }
}