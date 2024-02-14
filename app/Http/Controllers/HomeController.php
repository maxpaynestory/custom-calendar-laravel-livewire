<?php

namespace App\Http\Controllers;

use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $eventCalendarSetting = User::findOrFail('39c8aaca-6227-42d9-a0c6-12c095993df0')->eventCalendarSetting;
        return view('welcome');
    }
}
