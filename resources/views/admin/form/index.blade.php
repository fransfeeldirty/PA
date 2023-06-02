@extends('admin.layout.app')

@section('title', 'Gallery Add Data')

@section('content')


<div class="main-panel">
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Form Pelengkapan Penjahit</h4>
            </div>
        </div>
        <form action="{{ route('penjahit.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-check">
                            <label>jenis Kelamin</label><br/>
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" name="jenis_kelamin" value="laki-laki"  checked="">
                                <span class="form-radio-sign">Laki Laki</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" name="jenis_kelamin" value="perempuan  ">
                                <span class="form-radio-sign">Perempuan</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">No HP</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="Masukkan No HP">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Alamat Lengkap</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat Lengkap">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Link Iframe</label>
                        <input type="text" class="form-control" name="link_iframe" placeholder="Masukkan Alamat Lengkap Menggunakan Ifram Google Maps">
                    </div>
                </div>
            </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-check">
                            <label>Kategori</label><br/>
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" name="kategori" value="penjahit"  checked="">
                                <span class="form-radio-sign">Penjahit</span>
                            </label>
                            <label class="form-radio-label ml-3">
                                <input class="form-radio-input" type="radio" name="kategori" value="permak">
                                <span class="form-radio-sign">Permak</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Jenis Layanan</label>
                            <textarea class="form-control" placeholder="Masukkan Jenis Layanan" name="jenis_layanan" id="" cols="10" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input type="text" class="form-control" name="kecamatan" placeholder="Masukkan Kecamatan">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Deskripsi Penjahit</label>
                            <textarea class="form-control" placeholder="Masukkan Deskripsi Penjahit" name="deskripsi" id="" cols="10" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Jam Buka</label>
                            <input type="time" class="form-control" name="jam_buka" placeholder="Masukkan Jam Buka">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Jam Tutup</label>
                            <input type="time" class="form-control" name="jam_tutup" placeholder="Masukkan Jam Tutup">
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="gambar">Gambar Thumbnail</label>
                        <input type="file" class="form-control" name="thumbnail" placeholder="Gambar Thumbnail">
                    </div>
                </div>
                <div class="col-6">
                    <div class="card-body">
                        <input type="submit" class="btn btn-success" value="Submit">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
