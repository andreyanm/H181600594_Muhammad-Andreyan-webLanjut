<?php

namespace App\Http\Controllers;
use App\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoriBeritas=KategoriBerita::all();
        return $kategoriBeritas;
    
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

        $kategoriBerita=KategoriBerita::create($input);

        return $kategoriBerita;
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
        $kategoriBerita=KategoriBerita::find($id);

        return $kategoriBerita;
    
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
        
        $kategoriBerita=KategoriBerita::find($id);
        if(empty($kategoriBerita)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriBerita->update($input);
        
        return response()->json($kategoriBerita);
    
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
        $kategoriBerita=KategoriBerita::find($id);
        if(empty($kategoriBerita)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriBerita->delete();

        return response()->json(['message'=>'data berhasil dihapus']);
    
    }
}
