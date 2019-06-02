<?php

namespace App\Http\Controllers;

class VideoGameController extends Controller
{
    public function index()
    {
        $conn = curl_init();
        curl_setopt($conn, CURLOPT_URL, config('apiroutes.videogame') . '/api/videos');
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($conn);
        curl_close($conn);
        $response = (array)json_decode($responseJson);
        $response = $response['video'];
        return view('videogame', ['data' => $response]);
    }

    public function get($id)
    {
        $conn = curl_init();
        curl_setopt($conn, CURLOPT_URL, config('apiroutes.videogame') . 'api/videos/' . $id);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($conn);
        curl_close($conn);
        $response = (array)json_decode($responseJson);
        return response()->json(['data' => $responseJson]);
    }
}
