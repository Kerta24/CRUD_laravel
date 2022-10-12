<?php

namespace App\Http\Controllers;

use App\Models\biodata;
use App\Http\Requests\StorebiodataRequest;
use App\Http\Requests\UpdatebiodataRequest;


class BiodataController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          //get posts
          $biodatas = biodata::latest()->paginate(10);

          //render view with posts
          return view('table', compact('biodatas'));
          
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorebiodataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebiodataRequest $request)
    {

        return $request;
        // $this->validate($request,[
        //     'name' => 'required',
        //     'tl' => 'required',
        //     'tanggal' => 'required',
        //     'jk' => 'required',
        //     'prodi' => 'required',
        //     'hobi' => 'required'
        //     'alamat' => 'required'
        // ]);

        // $table = biodata::create(
        //     [
        //     'nama' => $request->nama,
        //     'tl' => $request->tempat_lahir,
        //     'tanggal' => $request->tanggal_lahir,
        //     'jk' => $request->jenis_kelamin,
        //     'prodi' => $request -> prodi,
        //     'hobi' => $request -> hobi
        //     'alamat' => $request -> alamat
        // ]);

        // if($table){
        //     //redirect dengan pesan sukses
        //     return redirect()->route('table.index')->with(['success' => 'Data Berhasil Disimpan!']);
        //   }else{
        //     //redirect dengan pesan error
        //     return redirect()->route('table.index')->with(['error' => 'Data Gagal Disimpan!']);
        //   }
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function show(biodata $biodata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function edit(biodata $biodata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebiodataRequest  $request
     * @param  \App\Models\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebiodataRequest $request, biodata $biodata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\biodata  $biodata
     * @return \Illuminate\Http\Response
     */
    public function destroy(biodata $biodata)
    {
        //
    }


}
