<?php

namespace App\Http\Controllers;
use App\Galeri;
use Illuminate\Http\Request;

class GaleriAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galeris=Galeri::all();
        return $galeris;
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

        $galeri=Galeri::create($input);

        return $galeri;
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
        $galeri=Galeri::find($id);
        return $galeri;
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
        

        $galeri=Galeri::find($id);
        if(empty($galeri)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $galeri->update($input);

        return response()->json($galeri);
    
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
        $galeri=Galeri::find($id);
        if(empty($galeri)){
            return response()->json(['message'=>'data tidak ditemukan'],404);
        }
        $galeri->delete();

        return response()->json(['message'=>'data berhasil dihapus']);
    
    }
}
