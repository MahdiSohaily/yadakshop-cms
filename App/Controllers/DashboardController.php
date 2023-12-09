<?php

namespace App\Controllers;

use jDateTime;

class DashboardController
{
    public function index()
    {
        echo jDateTime::date('l j F Y H:i');
        view('dashboard', ['page_title' => 'داشبورد']);
    }
}
