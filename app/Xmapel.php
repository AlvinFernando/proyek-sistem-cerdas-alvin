<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xmapel extends Model
{
    //
    protected $table = 'xmapel';
    protected $fillable = ['kode','nm_xmapel','kelas','semester'];


    //Many to Many
    public function xsiswa(){
        return $this->belongsToMany(Xsiswa::class);
    }

    //One to many tabel guru->mapel
    public function xguru(){
        return $this->belongsTo(Xguru::class);
    }
}
