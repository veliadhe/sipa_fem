<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_rekomendasi_beasiswa extends Model
{
  protected $fillable = [
      'semester', 'ipk', 'sks', 'id_user', 'fcktm', 'fcspp', 'formulir_beasiswa','surat_pernyataan_sedang_tidak_menerima_beasiswa', 'beasiswa'
  ];

  public function beasiswa(){
    return $this->hasMany(Beasiswa::class);
  }
}
