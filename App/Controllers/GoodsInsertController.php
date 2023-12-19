<?php

namespace App\Controllers;

use jDateTime;

class GoodsInsertController
{
    public function index()
    {
        view('inventory/pages/insertGood', [
            'page_title' => 'ورود اجناس',
            'today' => jDateTime::date('l j F Y H:i')
        ]);
    }
}
