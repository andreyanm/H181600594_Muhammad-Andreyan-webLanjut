<?php

namespace App\Http\Controllers;
use App\KategoriArtikel;
use Illuminate\Http\Request;

class KategoriArtikelAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoriArtikels=KategoriArtikel::all();
        return $kategoriArtikels;
    
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input=$request->all();

        $kategoriArtikel=KategoriArtikel::create($input);

        return $kategoriArtikel;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kategoriArtikel=KategoriArtikel::find($id);

        return $kategoriArtikel;
    
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $input=$request->all();
        
        $kategoriArtikel=KategoriArtikel::find($id);
        if(empty($kategoriArtikel)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriArtikel->update($input);
        
        return response()->json($kategoriArtikel);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $kategoriArtikel=KategoriArtikel::find($id);
        if(empty($kategoriArtikel)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriArtikel->delete();

        return response()->json(['message'=>'data berhasil dihapus']);
    
    }
}
