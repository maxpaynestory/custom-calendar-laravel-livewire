<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $eventCalendarSetting = User::findOrFail('39c8aaca-6227-42d9-a0c6-12c095993df0')->eventCalendarSetting;
        dd($eventCalendarSetting);
        return view('welcome');
    }
}
