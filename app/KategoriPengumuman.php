<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriPengumuman extends Model
{
    //
    protected $table='kategori_pengumuman';
    protected $fillable=[
        'nama','users_id'
    ];
    public function pengumumans(){
        return $this-hasMany(\App\Pengumuman::class,'kategori_pengumuman_id','id');
    }
    public function user(){
        return $this-belongsTo(\App\User::class,'users_id','id');
    }
}
