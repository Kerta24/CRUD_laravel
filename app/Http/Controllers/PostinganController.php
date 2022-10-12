<?php

namespace App\Http\Controllers;

use App\Models\Postingan;
use App\Http\Requests\StorePostinganRequest;
use App\Http\Requests\UpdatePostinganRequest;

class PostinganController extends Controller
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
     * @param  \App\Http\Requests\StorePostinganRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostinganRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function show(Postingan $postingan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function edit(Postingan $postingan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostinganRequest  $request
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostinganRequest $request, Postingan $postingan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postingan  $postingan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postingan $postingan)
    {
        //
    }
}
