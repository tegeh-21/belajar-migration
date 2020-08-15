<?php

namespace App\Http\Controllers;

use App\Jawaban;
use App\Pertanyaan;
use App\ResultVote;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pertanyaans = Pertanyaan::all();
        $results = ResultVote::all();

        $jawabans = Jawaban::all();

        return view('dashboard', compact('pertanyaans', 'results', 'jawabans'));
        //return view('dashboard');
    }

}
