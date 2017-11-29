<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_tidak_menerima_beasiswa extends Model
{
  protected $fillable = [
      'semester', 'id_user'
  ];
}
