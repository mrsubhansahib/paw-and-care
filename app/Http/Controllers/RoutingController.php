<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoutingController extends Controller
{
    public function index(Request $request)
    {
<<<<<<< Updated upstream
        // dd(Auth::check());

        return view('index');
=======
        return view('layouts.web.home.index');
>>>>>>> Stashed changes
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
