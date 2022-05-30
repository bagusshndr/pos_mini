<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

    public function postRequest(Request $request)
    {
        $client = new \GuzzleHttp\Client();
        $url = "http://localhost:8000/api/product";
        $response = $client->request('POST', $url, [
        'form_params' => [
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'harga_produk' => $request->harga_produk,
            'kategori_id' => $request->kategori_id,
            'gambar_produk' => $request->gambar_produk,
            'status' => $request->status,
        ]
        ]);

        // $response = $client->post($url, [
        //     'form_params' => [
        //         'nama_produk' => 'AAAA',
        //         'deskripsi_produk' => 'AAAAA',
        //         'harga_produk' => 2,
        //         'kategori_id' => 2,
        //         'gambar_produk' => 'AAA',
        //         'status' => 1,
        //     ]
        //     ]);

        // $response = $client->post(
        //         $url,
        //         array(
        //             'form_params' => array(
        //                 'nama_produk' => 'AAAA',
        //                 'deskripsi_produk' => 'AAAAA',
        //                 'harga_produk' => 2,
        //                 'kategori_id' => 2,
        //                 'gambar_produk' => 'AAA',
        //                 'status' => 1,
        //             )
        //         )
        //     );

        $response = $response->getBody()->getContents();
        return $this->index();
        // echo '<pre>';
        // dd($response);
    }

    public function deleteRequest(Request $request){           
        $client = new Client(); //GuzzleHttp\Client
        $url = "http://127.0.0.1:8000/api/product/" . $id;


        $response = $client->request('delete', $url, [
            'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody()); 
        dd($responseBody);
        // return $this->index();
        // return view('produk.update', compact('responseBody'));
    }
}
