<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display home page
     */
    public function index()
    {
        return view('layouts.web.home.index');
    }
    /**
     * Display about page
     */
    public function about()
    {
        return view('layouts.web.about.index');
    }
    /**
     * Display shop page
     */
    public function shop()
    {
        return view('layouts.web.shop.index');
    }
    /**
     * Display blog page
     */
    public function blog()
    {
        return view('layouts.web.blog.index');
    }
    /**
     * Display adopt page
     */
    public function adopt()
    {
        return view('layouts.web.adopt.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
