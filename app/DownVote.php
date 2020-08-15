<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DownVote extends Model
{
    protected $table = "down_vote";
    protected $fillable = ['id_vote', 'id_pertanyaan', 'down_vote'];
}
