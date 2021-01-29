<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xguru extends Model
{
    //Isi Tabel Guru
    protected $table = 'xguru';
    protected $fillable = ['nm_xguru','telp','alamat'];



    //table many to one mapel->guru
    public function xmapel(){
        return $this->hasMany(Xmapel::class);
    }

   
}
