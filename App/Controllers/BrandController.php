<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Brand;

class BrandController
{
    public function find(Request $request)
    {
        $pattern = $request->input('pattern');
        $good = new Brand();

        $data =  $good->get(['id', 'name'], ['name[~]' => $pattern]);
        // Set headers to indicate JSON response
        header('Content-Type: application/json');

        // Output JSON-encoded data
        echo json_encode($data);
    }
}
