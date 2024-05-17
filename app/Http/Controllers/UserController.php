<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function usersettings()
    {
        // sleep(3);
        return Inertia::render('usersettings');

    }
}
