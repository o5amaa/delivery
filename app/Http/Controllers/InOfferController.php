<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInOfferRequest;
use App\Http\Requests\UpdateInOfferRequest;
use App\Models\InOffer;

class InOfferController extends Controller
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
     * @param  \App\Http\Requests\StoreInOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInOfferRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InOffer  $inOffer
     * @return \Illuminate\Http\Response
     */
    public function show(InOffer $inOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InOffer  $inOffer
     * @return \Illuminate\Http\Response
     */
    public function edit(InOffer $inOffer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInOfferRequest  $request
     * @param  \App\Models\InOffer  $inOffer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInOfferRequest $request, InOffer $inOffer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InOffer  $inOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(InOffer $inOffer)
    {
        //
    }
}
