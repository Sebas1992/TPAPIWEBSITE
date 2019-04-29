<?php

namespace App\Http\Controllers;

class VideoGameController extends Controller
{
    public function index()
    {
        $conn = curl_init();
        curl_setopt($conn, CURLOPT_URL, config('apiroutes.videogame') . 'produits');
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($conn);
        dd(curl_error($conn));
        curl_close($conn);

        return view('videogame', ['data' => $responseJson]);
    }
}
