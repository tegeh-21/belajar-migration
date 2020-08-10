<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['id', 'judul', 'isi', 'tanggal_dibuat', 'tanggal_diperbaharui', 'jawaban_tepat_id', 'profil_id'];
}
