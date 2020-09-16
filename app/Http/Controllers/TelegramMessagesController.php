<?php

namespace App\Http\Controllers;

use App\Models\RenaultRadioCode;
use App\Models\TelegramMessages;
use Illuminate\Http\Request;

class TelegramMessagesController extends Controller
{
    public function webhook(Request $request)
    {
        $telegramMessage = new TelegramMessages();
        $telegramMessage->json = json_encode($request->all());
        $telegramMessage->save();
        return true;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        dd(TelegramMessages::all());
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
     * @param  \App\Models\TelegramMessages  $telegramMessages
     * @return \Illuminate\Http\Response
     */
    public function show(TelegramMessages $telegramMessages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TelegramMessages  $telegramMessages
     * @return \Illuminate\Http\Response
     */
    public function edit(TelegramMessages $telegramMessages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TelegramMessages  $telegramMessages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TelegramMessages $telegramMessages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TelegramMessages  $telegramMessages
     * @return \Illuminate\Http\Response
     */
    public function destroy(TelegramMessages $telegramMessages)
    {
        //
    }
}
