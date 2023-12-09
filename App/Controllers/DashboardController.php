<?php

namespace App\Controllers;

use App\Utilities\Url;

class DashboardController
{
    public function index()
    {
        view('dashboard', ['page_title' => 'داشبورد']);
    }
}
