<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('Dog index ok 123');
        return view('A.index');
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


    public function A1()
    {
        return view('A.A1');
    }

    public function A2()
    {
        return view('A.A2');
    }

    public function A3()
    {
        return view('A.A3');
    }
    
}
