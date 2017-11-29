<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penghubung_surat_aktif extends Model
{
    protected $hidden =[
      'id_user', 'id_surat_aktif_kuliah', 'tanggal_keluar'
    ];
}
