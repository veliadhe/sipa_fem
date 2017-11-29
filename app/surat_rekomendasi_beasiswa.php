<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_rekomendasi_beasiswa extends Model
{
  protected $fillable = [
      'semester', 'ipk', 'sks', 'id_user'
  ];

  public function beasiswa(){
    return $this->hasMany(Beasiswa::class);
  }
}
