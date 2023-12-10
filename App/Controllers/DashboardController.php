<?php

namespace App\Controllers;

use App\Core\Auth\Auth;
use jDateTime;

class DashboardController
{
    public function index()
    {
        view('dashboard', [
            'page_title' => 'داشبورد',
            'today' => jDateTime::date('l j F Y H:i'),
            'user' => Auth::user()
        ]);
    }
}
