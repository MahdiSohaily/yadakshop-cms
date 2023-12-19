<?php

namespace App\Controllers;

use jDateTime;
use App\Models\Brand;

class GoodsInsertController
{
    public function index()
    {
        $brand = new Brand();

        view('inventory/pages/insertGood', [
            'page_title' => 'ورود اجناس',
            'brands' => $brand->getAll(),
            'today' => jDateTime::date('l j F Y H:i')
        ]);
    }

    public function findPartNumber(String $pattern)
    {
    }
}
