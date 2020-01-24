<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function artikels(){
        return $this->hasMany(\App\Artikel::class,'users_id','id');
    }
    public function kategoriArtikels(){
        return $this->hasMany(\App\KategoriArtikel::class,'users_id','id');
    }
    public function beritas(){
        return $this->hasMany(\App\Berita::class,'users_id','id');
    }
    public function kategoriBeritas(){
        return $this->hasMany(\App\KategoriBerita::class,'users_id','id');
    }
    public function galeris(){
        return $this->hasMany(\App\Galeri::class,'users_id','id');
    }
    public function kategoriGaleris(){
        return $this->hasMany(\App\KategoriGaleri::class,'users_id','id');
    }
    public function pengumumans(){
        return $this->hasMany(\App\Pengumuman::class,'users_id','id');
    }
    public function kategoriPengumumans(){
        return $this->hasMany(\App\KategoriPengumuman::class,'users_id','id');
    }
}

