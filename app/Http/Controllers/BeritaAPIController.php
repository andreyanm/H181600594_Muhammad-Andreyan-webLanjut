<?php

namespace App\Http\Controllers;
use App\Berita;
use Illuminate\Http\Request;

class BeritaAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $beritas=Berita::all();
        return $beritas;
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

        $berita=Berita::create($input);

        return $berita;
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
        $berita=Berita::find($id);

        return $berita;
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
        

        $berita=Berita::find($id);
        if(empty($berita)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $berita->update($input);

        return response()->json($berita);
    
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
        $berita=Berita::find($id);
        if(empty($berita)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $berita->delete();

        return response()->json(['message'=>'data berhasil dihapus']);
    
    }
}
