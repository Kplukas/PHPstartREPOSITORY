<?php

namespace App\Http\Controllers;

use App\Models\Saskaita;
use App\Http\Requests\StoreSaskaitaRequest;
use App\Http\Requests\UpdateSaskaitaRequest;

class SaskaitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSaskaitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSaskaitaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Saskaita  $saskaita
     * @return \Illuminate\Http\Response
     */
    public function show(Saskaita $saskaita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Saskaita  $saskaita
     * @return \Illuminate\Http\Response
     */
    public function edit(Saskaita $saskaita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSaskaitaRequest  $request
     * @param  \App\Models\Saskaita  $saskaita
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSaskaitaRequest $request, Saskaita $saskaita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Saskaita  $saskaita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Saskaita $saskaita)
    {
        //
    }
}
