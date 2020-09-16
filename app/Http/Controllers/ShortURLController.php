<?php

namespace App\Http\Controllers;

use App\Models\ShortURL;
use Faker\Provider\Uuid;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ShortURLController extends Controller
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
        $shortURL = ShortURL::create([
            'url' => $request->get('url'),
            'short_url' => Uuid::numberBetween(1000, 9999),
            'misc' => json_encode($request)
        ]);
        return URL::to('/') . "/" . $shortURL->short_url;
        dd(URL::to('/') . "/" . $shortURL->short_url);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShortURL  $shortURL
     * @return \Illuminate\Http\Response
     */
    public function show(ShortURL $shortURL)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShortURL  $shortURL
     * @return \Illuminate\Http\Response
     */
    public function edit(ShortURL $shortURL)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShortURL  $shortURL
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShortURL $shortURL)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShortURL  $shortURL
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShortURL $shortURL)
    {
        //
    }
}
