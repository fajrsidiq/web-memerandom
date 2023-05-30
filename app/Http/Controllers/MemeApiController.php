<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MemeApiController extends Controller
{
    public function getMemes()
{
    $client = new Client();
    $response = $client->request('GET', 'https://api.imgflip.com/get_memes');
    $data = json_decode($response->getBody(), true);

    $memes = $data['data']['memes'];
    $randomMeme = $memes[array_rand($memes, 1)];

    return view('memes', ['meme' => $randomMeme]);
}



}
