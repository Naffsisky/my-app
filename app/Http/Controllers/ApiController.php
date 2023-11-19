<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function getNotes(){
        $urlNotes = "http://35.219.123.247/app2";
        $serverResponse = Http::get($urlNotes);

        if ($serverResponse->successful()) {

            $data = $serverResponse->json()['data'];

            // if (isset($data['notes'])) {
            //     $notes = $data['notes'];
            //     return view('notes', compact('notes'));
            // } else {
            //     return "Notes not found in the API response";
            // }
        } else {
            return "Failed to fetch data from API";
        }
        return view('notes', compact('data'));
    }
}
