<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChartController extends Controller
{
    public function index(Request $request)
    {
        $response = Http::get('http://localhost:3030/api/users');

        $items = json_decode($response);

        var_dump($items);

        return view('dashboard')->with('items', json_decode($response, true));
    }
}
