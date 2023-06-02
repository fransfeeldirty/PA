<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Penjahit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::where('penjahit_id', Auth::user()->penjahit->id)->get();
        return view('admin.gallery.index', compact(('gallery')));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'judul'     => 'required|max:255',
            'gambar'    => 'required|image|file'
        ]);

        $validateData['gambar'] = $request->file('gambar')->store('img-gallery');

        $input = [
            'penjahit_id' => Auth::user()->penjahit->id,
            'judul'     => $request->judul,
            'gambar'    => $request->file('gambar')->store('img-gallery')
        ];

        Gallery::create($input);

        return redirect('/gallery');
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
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact(('gallery')));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $validateData = $request->validate([
            'judul'     => 'required|max:255',
            'gambar'    => 'image|file'
        ]);

        $gallery->update($request->except(['_token','gambar',]));
        if($request->file('gambar') != null){
            $validateData['gambar'] = $request->file('gambar')->store('img-gallery');
            $gallery->gambar = $request->file('gambar')->store('img-gallery');
        }

        $gallery->update($validateData);

        return redirect('/gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();
        return redirect('/gallery');
    }
}
