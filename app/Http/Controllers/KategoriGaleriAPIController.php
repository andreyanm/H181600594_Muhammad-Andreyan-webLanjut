<?php

namespace App\Http\Controllers;
use App\KategoriGaleri;
use Illuminate\Http\Request;

class KategoriGaleriAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategoriGaleris=KategoriGaleri::all();
        return $kategoriGaleris;
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
        $kategoriGaleri=KategoriGaleri::create($input);
        return $kategoriGaleri;
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
        $kategoriGaleri=KategoriGaleri::find($id);
        return $kategoriGaleri;
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
        
        $kategoriGaleri=KategoriGaleri::find($id);
        if(empty($kategoriGaleri)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriGaleri->update($input);
        
        return response()->json($kategoriGaleri);
    
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
        $kategoriGaleri=KategoriGaleri::find($id);
        if(empty($kategoriGaleri)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $kategoriGaleri->delete();

        return response()->json(['message'=>'data berhasil dihapus']);
    
    }
}
