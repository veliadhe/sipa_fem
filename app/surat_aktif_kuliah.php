<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class surat_aktif_kuliah extends Model
{
  protected $fillable = [
      'semester', 'kebutuhan', 'fcktm', 'fcspp', 'id_user'
  ];
}
