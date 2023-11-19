<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function getQuakeData()
    {
        $urlQuake = "http://35.219.123.247/quake";
        $quakeResponse = Http::get($urlQuake);

        if ($quakeResponse->successful()) {
            $quakeData = $quakeResponse->json()["data"];
        } else {
            // Handle kesalahan saat mengambil data dari API quake
            return "Failed to fetch quake data from API";
        }

        $urlBigQuake = "http://35.219.123.247/list-quake";
        $quakeBigResponse = Http::get($urlBigQuake);

        if ($quakeBigResponse->successful()) {
            $quakeBigData = $quakeBigResponse->json()["data"];
        } else {
            // Handle kesalahan saat mengambil data dari API big-quake
            return "Failed to fetch big quake data from API";
        }

        return view('quake', compact('quakeData', 'quakeBigData'));
    }
}


// class ApiController extends Controller
// {
//     public function getQuakeData()
//     {
//         $response = Http::get('http://35.219.123.247/quake');

//         // Periksa apakah respons dari API berhasil diterima
//         if ($response->successful()) {
//             $quakeData = $response->json();
//             $status = $quakeData["success"];
    
//             if ($status != true) {
//                 // Tangani respons yang tidak berhasil
//                 return "Bad Response";
//             }
    
//             // Lakukan sesuatu dengan $quakeData["data"]
//             return view('quake', ['quakeData' => $quakeData["data"]]);
//         } else {
//             // Tangani kesalahan saat mengakses API
//             return "Failed to fetch data from API";
//         }
//     }

//     public function getBigQuakeData()
//     {
//         $response = Http::get("http://35.219.123.247/list-quake");

//         if ($response->successful()) {
//             $bigQuakeData = $response->json();
//             $status = $bigQuakeData["success"];

//             if ($status != true) {
//                 return "Bad Response";
//             }

//             return view('quake', ['bigQuakeData' => $bigQuakeData["data"]]);
//         } else {
//             return "Failed to fetch data from API";
//         }
//     }
// }
