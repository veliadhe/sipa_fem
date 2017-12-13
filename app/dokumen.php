<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
  protected $fillable = [
    'nama_dokumen', 'dokumen'
  ];
}
