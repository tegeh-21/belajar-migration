<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UpVote extends Model
{
    protected $table = "up_vote";
    protected $fillable = ['id_vote', 'id_pertanyaan', 'up_vote'];
}
