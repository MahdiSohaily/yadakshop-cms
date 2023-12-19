<?php

namespace App\Controllers;

use App\Core\Request;
use jDateTime;

class PartSearchController
{
    public function index()
    {
        view('inventory/pages/insertGood', [
            'page_title' => 'ورود اجناس',
            'today' => jDateTime::date('l j F Y H:i')
        ]);
    }

    public function find(Request $request)
    {
        $pattern = $request->input('pattern');
        echo ($pattern);
    }
}
