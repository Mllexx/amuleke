<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FrontendController extends Controller
{
    public function index()
    {
        $client = new Client();
        /*
        $response = $client->request('GET', 'https://api.medium.com/v1/users/1cdea0d2f90e3d15b47ff58ff08d958ee7cb25e8013d48b9443099033729c0e9a/publications', [
            'headers' => [
                'Authorization' => 'Bearer 21a4e60ac1d02d5c7ac87fa41f0f2d002b0dd8b53dc9c3455e576c31eff2d6dc2',
                'Accept' => 'application/json',
            ],
        ]);

        $publications = json_decode($response->getBody(), true);
        */
        $xml = simplexml_load_file('https://amuleke.medium.com/feed');
        $json = json_encode($xml);
        $publications = json_decode($json, true);
        dd($publications);
        ## return view('medium', ['publications' => $publications]);
        return view('home');
    }

}
