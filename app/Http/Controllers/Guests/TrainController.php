<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $timeNow = now()->toTimeString();
        $trains = Train::where('departure_time', '>', $timeNow)->get();
        dd($trains);

        return view('homepage', compact('trains'));
    }
}
