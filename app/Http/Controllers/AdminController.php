<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shop_items = Cache::remember('storeItems', 30, function () {
            $api_key = env('ETSY_KEY');
            $client = new \GuzzleHttp\Client();
            return json_decode($client->request('GET', 'https://openapi.etsy.com/v2/shops/DelicateKnots/listings/active?includes=MainImage&api_key=' . $api_key)->getBody())->results;
        });
        return view('admin.dashboard', compact('shop_items'));
    }

    /**
     * Show the form for creating a new resource.\
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $api_key = env('ETSY_KEY');
        $client = new \GuzzleHttp\Client();
        $shop_item = json_decode($client->request('GET', 'https://openapi.etsy.com/v2/listings/' . $id . '?includes=MainImage&api_key=' . $api_key)->getBody())->results;
        // dd($shop_item);
        return view('admin.listing', compact('shop_item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
