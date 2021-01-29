<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xsiswa extends Model
{
    //
    protected $table = 'xsiswa';
    protected $fillable = ['kd_xsiswa','nm_xsiswa','kelas','jk',
                            'agama','alamat','telp',
                            'nm_ayah','pekerjaan_ayah','nm_ibu','pekerjaan_ibu','avatar','user_id'];

    public function getAvatar(){
        if(!$this->avatar){
            return asset('images/default.png');
        } 
        
        return asset('images/'.$this->avatar);
    }

    //Many to Many
    public function xmapel(){
        return $this->belongsToMany(Xmapel::class)->withTimeStamps();
    
    }
    
}