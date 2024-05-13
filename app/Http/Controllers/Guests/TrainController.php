<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $timeNow = now()->toDateString();
        $trains = Train::where('departure_date', '>=', $timeNow)->paginate(6);
        // dd($timeNow, $trains);

        return view('homepage', compact('trains'));
    }
}
