<?php

namespace App\Controllers;

use jDateTime;

class DashboardController
{
    public function index()
    {
        view('dashboard', [
            'page_title' => 'داشبورد',
            'today' => jDateTime::date('l j F Y H:i')
        ]);
    }
}
