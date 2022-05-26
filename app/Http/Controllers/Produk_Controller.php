<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;

use Illuminate\Routing\Controller as BaseController;

class Produk_Controller extends BaseController
{
    public function index()
    {
        $client = new Client(); //GuzzleHttp\Client
        $url = "http://127.0.0.1:8000/api/product";


        $response = $client->request('GET', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
        // dd($responseBody);

        return view('produk.index', compact('responseBody'));
    }

    public function create()
    {
        return view('produk.input');
    }
}
