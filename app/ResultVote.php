<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResultVote extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['id_pertanyaan', 'result'];
}
