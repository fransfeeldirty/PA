<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjahit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PenjahitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjahit = Penjahit::all();
        return view('admin.form.index',compact(('penjahit')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'jenis_kelamin'     => 'required|max:255',
            'no_hp'             => 'required|max:255',
            'alamat'            => 'required|max:255',
            'link_iframe'       => 'required',
            'tanggal_lahir'     => 'required|max:255|before:today',
            'kategori'          => 'required|max:255',
            'jenis_layanan'     => 'required|max:255',
            'deskripsi'         => 'required',
            'kecamatan'         => 'required|max:255',
            'jam_buka'          => 'required|max:255',
            'jam_tutup'          => 'required|max:255',
            'thumbnail'         => 'required|image|file'
        ]);

        $validateData['thumbnail'] = $request->file('thumbnail')->store('img-thumbnail');
        $validateData['user_id'] = Auth::user()->id;

        Penjahit::create($validateData);

        return redirect('/dashboard');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }
}
