<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['isi', 'tanggal_dibuat', 'tanggal_diperbaharui', 'pertanyaan_id'];
}
