<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function liste()
    {
        $clients = [
            'Jean',
            'Marc',
            'Virgine'
        ];
        return view("client.index", [
            "clients" => $clients
        ]);
    }
}
