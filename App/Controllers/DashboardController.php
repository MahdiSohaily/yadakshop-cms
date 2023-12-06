<?php

namespace App\Controllers;

class DashboardController
{
    public function index()
    {
        view('index', ['page_title' => 'Dashboard']);
    }
}
