@extends('user.layout.app')

@section('app')
    <section id="content">
        <div class="row">
            <div class="col-12 col-md-6 mb-3 mb-md-0">
                <div class="card mb-4">
                    <img src="{{ asset('storage/' . $penjahit->thumbnail) }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h1 class="card-title">{{ $penjahit->user->name }}</h1>
                            <div class="border border-success rounded bg-success text-white px-3 d-flex align-items-center">
                                <h3 class="card-title mb-0">{{ $penjahit->jam_buka }}</h3>
                            </div>
                            <div class="border border-success rounded bg-danger text-white px-3 d-flex align-items-center">
                                <h3 class="card-title">{{ $penjahit->jam_tutup }}</h3>
                            </div>
                        </div>
                        <h2 class="card-subtitle mb-2">{{ $penjahit->kecamatan }}</h2>
                        <h2 class="text-success">{{ $penjahit->jenis_layanan }}</h2>
                        <p class="card-text">{{ $penjahit->deskripsi }}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">
                            <strong>{{ $penjahit->alamat }}</strong>
                        </h5>
                        <div class="mapouter mb-3">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="250" id="gmap_canvas" src="{{ $penjahit->link_iframe }}"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
                        <h5 class="card-title">Gallery</h5>
                        <div class="row">
                            @foreach ($penjahit->gallery as $g)
                                <div class="col-4 mb-2">
                                    <a href="{{ asset('storage/' . $g->gambar) }}" class="gallery-link">
                                        <img src="{{ asset('storage/' . $g->gambar) }}" alt=""
                                            class="img-fluid rounded">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Pesan
                    </button>
                    <a href="https://wa.me/" class="btn btn-success" style="margin-left: 12px">
                        Whatsapp
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Form Pemesanan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('order.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="penjahit_id" value="{{ $penjahit->id }}">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Pesanan</label>
                            <input type="text" name="nama_pesanan" class="form-control" id="nama_pesanan"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Deskripsi Pesanan</label>
                            <input type="text" name="deskripsi_pesanan" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Lampiran</label>
                            <input type="file" name="lampiran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ukuran</label>
                            <input type="text" name="ukuran" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Layanan</label>
                            <input type="text" name="jenis_layanan" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Jenis Kain</label>
                            <input type="text" name="jenis_kain" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Alamat Pemesan</label>
                            <input type="text" name="alamat" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Kecamatan</label>
                            <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="Simpan" class="btn btn-primary">
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
