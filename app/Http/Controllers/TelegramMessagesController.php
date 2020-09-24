<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RenaultRadioCode;
use App\Models\TelegramMessages;
use Illuminate\Support\Facades\Http;
use Facade\FlareClient\Http\Exceptions\BadResponse;

class TelegramMessagesController extends Controller
{
    public function webhook(Request $request)
    {
        $telegramMessage = new TelegramMessages();
        $telegramMessage->json = json_encode($request->all());
        $telegramMessage->save();
        $telegramMsg = $request->json()->get('message')['text']
        if(isset($telegramMsg['text'])){
            $text = $telegramMsg['text'];
            $chatId = $request->json()->get('message')['chat']['id'];
        }
        
        try {
            $radioCode = RenaultRadioCode::where('security_code', '=', $text)->firstOrFail();
            $url = sprintf(
                'https://api.telegram.org/bot%s/sendMessage?chat_id=%s&text=%s',
                env('TELEGRAM_BOT_API_KEY'),
                $chatId,
                $radioCode->radio_code
            );
        } catch (\Throwable $th) {
            $url = sprintf(
                'https://api.telegram.org/bot%s/sendMessage?chat_id=%s&text=%s',
                env('TELEGRAM_BOT_API_KEY'),
                $chatId,
                "Couldn't find code for: " . $text
            );
        }
        $response = Http::get($url);
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
