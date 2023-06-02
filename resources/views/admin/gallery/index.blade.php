@extends('admin.layout.app')

@section('title', 'Gallery')

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

            <a href="/gallery/create" class="btn btn-primary mb-3">Tambah Data</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $gallery as $gallery )
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $gallery->judul }}</td>
                        <td>
                        <img src="{{ asset('storage/' . $gallery->gambar) }}" class="img-fluid" width="200">
                        </td>
                        <td class="row">
                            <a href="{{ route('gallery.edit', $gallery->id) }}" class="btn btn-warning m-1">Edit</a><br></br>
                            <form class="m-1 " action="{{ route('gallery.destroy', $gallery->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>

@endsection
