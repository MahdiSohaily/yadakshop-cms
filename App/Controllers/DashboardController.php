<?php

namespace App\Controllers;

class DashboardController
{
    public function index()
    {
        view('dashboard', ['page_title' => 'داشبورد']);
    }
}
