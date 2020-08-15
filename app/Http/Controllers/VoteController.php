<?php

namespace App\Http\Controllers;

use App\UpVote;
use App\DownVote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function upVote($idPertanyaan, Request $request) {
        $vote = UpVote::where('id_pertanyaan', $idPertanyaan)->exists();

        if($vote) {
            // $vote->id_pertanyaan = $idPertanyaan;
            // $vote->up_vote += 15;
            // $vote->down_vote = null;
            // $vote->save(); 
            UpVote::where('id_pertanyaan', $idPertanyaan)->increment('up_vote', 15);
        } else {
            UpVote::create([
                'id_pertanyaan' => $idPertanyaan,
                'up_vote' => 15
            ]);
        }

        return redirect('dashboard');
    }

    public function DownVote($idPertanyaan, Request $request) {
        $vote = DownVote::where('id_pertanyaan', $idPertanyaan)->exists();

        if($vote) {
            // $vote->id_pertanyaan = $idPertanyaan;
            // $vote->up_vote += 15;
            // $vote->down_vote = null;
            // $vote->save(); 
            DownVote::where('id_pertanyaan', $idPertanyaan)->increment('down_vote', 1);
        } else {
            DownVote::create([
                'id_pertanyaan' => $idPertanyaan,
                'down_vote' => 1
            ]);
        }

        return redirect('dashboard');
    }
}
