<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorteurController extends Controller
{
    public function create()
    {
        return view('porteur');
    }
}
