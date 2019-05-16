<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $shop_items = Cache::remember('storeItems', 30, function () {

            $api_key = env('ETSY_KEY');
            $client = new \GuzzleHttp\Client();
            return json_decode($client->request('GET', 'https://openapi.etsy.com/v2/shops/DelicateKnots/listings/active?includes=MainImage&api_key=' . $api_key)->getBody())->results;
        });
        return view('home-page', compact('shop_items'));
    }
}
