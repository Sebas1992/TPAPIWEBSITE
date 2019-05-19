<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneController extends Controller
{
   public function index()
    {
        $conn = curl_init();
        curl_setopt($conn, CURLOPT_URL, config('apiroutes.phone') . 'api/phones');
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($conn);
        curl_close($conn);
        $response = (array)json_decode($responseJson);
        $response = $response['phones'];
        return view('phone', ['data' => $response]);
    }

    public function get($id)
    {
        $conn = curl_init();
        curl_setopt($conn, CURLOPT_URL, config('apiroutes.phone') . 'api/phones/' . $id);
        curl_setopt($conn, CURLOPT_RETURNTRANSFER, 1);
        $responseJson = curl_exec($conn);
        curl_close($conn);
        return response()->json([$responseJson]);
    }
}
