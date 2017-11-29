<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beasiswa extends Model
{
  protected $fillable = [
      'nama_beasiswa', 'periode', 'dana_perbulan', 'status', 'id_surat_rekomendasi_beasiswa'
  ];

  public function surat_rekomendasi_beasiswa(){
    return $this->belongsTo(Surat_rekomendasi_beasiswa::class);
  }
}
