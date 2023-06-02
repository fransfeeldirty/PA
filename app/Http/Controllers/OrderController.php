<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'ngapain';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';
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
            'nama_pesanan' => 'required',
            'deskripsi_pesanan' => 'required',
            'lampiran' => [
                'required',
                File::image()
            ],
            'jenis_layanan' => 'required',
            'jenis_kain' => 'required',
            'alamat'    => 'required',
            'kecamatan' => 'required'
        ]);

        $validateData['lampiran'] = $request->file('lampiran')->store('img-lampiran');

        $input = [
            'penjahit_id'       => $request->penjahit_id,
            'pemesan_id'        => Auth::user()->id,
            'prefix'            => 'NP',
            'nama_pesanan'       => $request->nama_pesanan,
            'deskripsi_pesanan'  => $request->deskripsi_pesanan,
            'lampiran'          => $request->file('lampiran')->store('lampiran-order'),
            'jenis_layanan'     => $request->jenis_layanan,
            'jenis_kain'        => $request->jenis_kain,
            'ukuran'            => $request->ukuran,
            'alamat'            => $request->alamat,
            'kecamatan'         => $request->kecamatan,
            'tanggal_pesanan' => date('Y-m-d'),
            'status_pesanan'    => 'Pending',
            'verifikasi'        => 0
        ];

        Order::create($input);

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
