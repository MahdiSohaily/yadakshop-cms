<?php

namespace App\Controllers;

use App\Utilities\Url;

class DashboardController
{
    public function index()
    {
        print_r(Url::route('login.check'));
        view('dashboard', ['page_title' => 'داشبورد']);
    }
}
