<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoutingController extends Controller
{
    public function index(Request $request)
    {
        // dd(Auth::check());

        return view('index');
    }

    /**
     * Display a view based on first route param
     *
     * @return \Illuminate\Http\Response
     */
    public function root(Request $request, $first)
    {
        return view($first);
    }

    /**
     * second level route
     */
    public function secondLevel(Request $request, $first, $second)
    {
        return view($first . '.' . $second);
    }
}
