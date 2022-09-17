<?php

namespace App\Http\Controllers;

use Laravolt\Indonesia\Models\Province;

class DependentDropdownController extends Controller
{
    public function index()
    {
       

        return view('dependent-dropdown.index', [
            'provinces' => $provinces,
        ]);
    }
}