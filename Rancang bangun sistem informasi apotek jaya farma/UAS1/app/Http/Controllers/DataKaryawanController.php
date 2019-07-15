<?php

namespace App\Http\Controllers;

use App\DataKaryawan;
use Illuminate\Http\Request;

class DataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $DataKaryawan = DataKaryawan::all();
        return view('DataKaryawan.index', compact('DataKaryawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('DataKaryawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('image')->store('karyawan');
        DataKaryawan::create([
            'title' => $request->title,
            'description' => $request->deskripsi,
            'image' => $image,]);
      
         return redirect()->route('DataObat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataKaryawan  $dataKaryawan
     * @return \Illuminate\Http\Response
     */
    public function show(DataKaryawan $dataKaryawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DataKaryawan  $dataKaryawan
     * @return \Illuminate\Http\Response
     */
    public function edit(DataKaryawan $dataKaryawan)
    {
        $DataKaryawan = DataKaryawan::find($id);
        return view('DataKaryawan.edit',compact('DataKaryawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataKaryawan  $dataKaryawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataKaryawan $dataKaryawan)
    {
        $DataKaryawan = DataKaryawan::find($id);
                $DataKaryawan->title = $request->title;
                $DataKaryawan->description = $request->deskripsi;

                $image = $request->file('image');
                if ($image == '') {
                    $DataKaryawan->image = $request->old_image;
                } else{
                                        $DataKaryawan->image = $request->file('image')->store('karyawan');

                }
                $DataKaryawan->update();
                         return redirect()->route('DataKaryawan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataKaryawan  $dataKaryawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataKaryawan $dataKaryawan)
    {
        $DataKaryawan = DataKaryawan::find($id);
        $DataKaryawan->delete();
        return redirect()->route('DataKaryawan');
    }
}
