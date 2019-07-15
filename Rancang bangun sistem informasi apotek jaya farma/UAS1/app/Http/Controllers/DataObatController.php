<?php

namespace App\Http\Controllers;

use App\DataObat;
use Illuminate\Http\Request;

class DataObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DataObat = DataObat::all();
        return view('DataObat.index', compact('DataObat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DataObat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('obat');
        DataObat::create([
            'title' => $request->title,
            'description' => $request->deskripsi,
            'image' => $image,]);
      
         return redirect()->route('DataObat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataObat  $dataObat
     * @return \Illuminate\Http\Response
     */
    public function show(DataObat $dataObat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataObat  $dataObat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $DataObat = DataObat::find($id);
        return view('DataObat.edit',compact('DataObat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataObat  $dataObat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
                $DataObat = DataObat::find($id);
                $DataObat->title = $request->title;
                $DataObat->description = $request->deskripsi;

                $image = $request->file('image');
                if ($image == '') {
                    $DataObat->image = $request->old_image;
                } else{
                                        $DataObat->image = $request->file('image')->store('obat');

                }
                $DataObat->update();
                         return redirect()->route('DataObat');




        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataObat  $dataObat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $DataObat = DataObat::find($id);
        $DataObat->delete();
        return redirect()->route('DataObat');
    }
}
