<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultVote extends Model
{
    protected $table = "result_vote";
    protected $fillable = ['id_pertanyaan', 'result'];
}
