<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class CatVoteController extends Controller
{
    public function catVote(Request $request)
    {
        $catId = $request->input('imageId');
        $vote  = $request->input('vote');

        try {
            $client = new Client();
            $result = $client->post('https://api.thecatapi.com/v1/votes', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'x-api-key'    => 'a18c6473-74dc-4557-b39a-9f370277e0b6'
                ],
                'json'    => [
                    'image_id' => $catId,
                    'value'    => $vote
                ]
            ]);

            return response()->view('home', ['response' => json_decode($result->getBody())]);
        } catch (GuzzleException $e) {
            dd($e->getMessage());
        }
    }
}
