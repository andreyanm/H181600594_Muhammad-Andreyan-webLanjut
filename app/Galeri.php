<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    //
    protected $table='galeri';
    protected $fillable=[
        'nama','keterangan','path','users_id','kategori_galeri_id'
    ];
    public function kategoriGaleri(){
        return $this->belongsTo(\App\KategoriGaleri::class,'kategori_galeri_id','id');
    }
    public function user(){
        return $this->belongsTo(\App\User::class,'users_id','id');
    }

}
