<?php

namespace App\Http\Controllers;
use App\KategoriPengumuman;
use Illuminate\Http\Request;

class KategoriPengumumanAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoriPengumumans=KategoriPengumuman::all();
        return $kategoriPengumumans;

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
        $kategoriPengumuman=KategoriPengumuman::create($input);
        return  $kategoriPengumuman;
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
        $kategoriPengumuman=KategoriPengumuman::find($id);
        return $kategoriPengumuman;
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
        
        $kategoriPengumuman=KategoriPengumuman::find($id);
        if(empty($kategoriPengumuman)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriPengumuman->update($input);
        
        return response()->json($kategoriPengumuman);
    
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
        $kategoriPengumuman=KategoriPengumuman::find($id);
        if(empty($kategoriPengumuman)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriPengumuman->delete();

        return response()->json(['message'=>'data berhasil dihapus']);
    
    }
}
