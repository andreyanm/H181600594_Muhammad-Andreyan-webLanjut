<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    //
    protected $table='artikel';

    protected $fillable=[
        'judul','isi','users_id','kategori_artikel_id'
    ];

    public function kategoriArtikel(){
        return $this->belongsTo(\App\KategoriArtikel::class,'kategori_artikel_id','id');
    }
    public function user(){
        return $this->belongsTo(\App\User::class,'users_id','id');
    }
}
