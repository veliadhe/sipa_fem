<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
         'name', 'email','username', 'password', 'nrp', 'tempat_lahir', 'tanggal_lahir', 'departemen', 'alamat', 'no_hp'
     ];

     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
     protected $hidden = [
         'password', 'remember_token', 'roles_id'
     ];

     public function role(){
       return $this->belongsTo(Role::class, 'roles_id');
     }

     public function surat_aktif_kuliah(){
       return $this -> hasMany(surat_aktif_kuliah::class);
     }

     public function punyaRule($namaRule){
       if($this->role->namaRule == $namaRule){
         return true;
       }
       return false;
     }
}
