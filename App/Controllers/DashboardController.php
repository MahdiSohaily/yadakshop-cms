<?php

namespace App\Controllers;

use App\Core\Auth\Auth;

class DashboardController
{
    public function index()
    {
        print_r(Auth::user());
        view('dashboard', ['page_title' => 'داشبورد']);
    }
}
