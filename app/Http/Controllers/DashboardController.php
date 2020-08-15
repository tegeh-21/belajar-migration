<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use App\ResultVote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pertanyaans = Pertanyaan::all();
        $results = ResultVote::all();
        return view('dashboard', compact('pertanyaans', 'results'));
        // return view('dashboard');
    }

}
