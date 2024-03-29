<?php

namespace App\Http\Controllers;

use App\Models\RenaultRadioCode;
use Illuminate\Http\Request;

class RenaultRadioCodeController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RenaultRadioCode  $renaultRadioCode
     * @return \Illuminate\Http\Response
     */
    public function show(RenaultRadioCode $renaultRadioCode)
    {
        //
    }

    public function showBySecurityCode($securityCode)
    {
        $radioCode = RenaultRadioCode::where('security_code', '=', $securityCode)->firstOrFail();
        
        return $radioCode->radio_code;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RenaultRadioCode  $renaultRadioCode
     * @return \Illuminate\Http\Response
     */
    public function edit(RenaultRadioCode $renaultRadioCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RenaultRadioCode  $renaultRadioCode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RenaultRadioCode $renaultRadioCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RenaultRadioCode  $renaultRadioCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(RenaultRadioCode $renaultRadioCode)
    {
        //
    }
}
