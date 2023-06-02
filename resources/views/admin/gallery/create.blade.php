@extends('admin.layout.app')

@section('title', 'Gallery Add Data')

@section('content')


<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Gallery Penjahit</h4>
                {{-- <div class="btn-group btn-group-page-header ml-auto">
                     <button type="button" class="btn btn-light btn-round btn-page-header-dropdown dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-ellipsis-h"></i>
                    </button>
                     <div class="dropdown-menu">
                        <div class="arrow"></div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div> --}}
            </div>
        </div>
        <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                <label for="">Judul</label>
                <input type="text" class="form-control" name="judul" placeholder="Masukkan Judul">
            </div>
            {{-- <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div> --}}
            <div class="form-group">
                <label for="gambar">Gambar Gallery</label>
                <input type="file" class="form-control" name="gambar" placeholder="Gambar Gallery">
            </div>
            <div class="card-body">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </form>
    </div>
</div>
@endsection
