<?php

namespace App\Http\Controllers;

class ComputerController extends Controller
{
    public function index()
    {
        $conn = curl_init();
        curl_setopt($conn, CURLOPT_URL, config('apiroutes.computer') . 'api/computer');
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($conn);
        curl_close($conn);
        $response = json_decode($responseJson);
        return view('computer', ['data' => $response]);
    }

    public function get($id)
    {
        $conn = curl_init();
        curl_setopt($conn, CURLOPT_URL, config('apiroutes.computer') . 'api/computer/' . $id);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($conn);
        curl_close($conn);
        // $response = json_decode($responseJson);
        return response()->json([$responseJson]);
    }
}
