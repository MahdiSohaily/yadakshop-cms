<?php

namespace App\Controllers;

use App\Core\Request;
use App\Models\Good;
use jDateTime;

class PartSearchController
{
    public function find(Request $request)
    {
        $pattern = $request->input('pattern');
        $good = new Good();

        $data =  $good->get(['id', 'partnumber'], ['partnumber[~]' => $pattern]);
        // Set headers to indicate JSON response
        header('Content-Type: application/json');

        // Output JSON-encoded data
        echo json_encode($data);
    }
}
