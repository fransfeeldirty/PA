@extends('admin.layout.app')

@section('title', 'Profile')

@section('content')

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <h4 class="page-title">User Profile</h4>
                <div class="row">
                    <div class="col-md-8">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile"
                                    type="button" role="tab" aria-controls="profile"
                                    aria-selected="false">Profile</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                <div class="card-body">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Name</label>
                                                <input type="email" class="form-control" name="email" placeholder="Name"
                                                    value="{{ $user->name }}" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Name"
                                                    value="{{ $user->email }}" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" id="datepicker" name="datepicker"
                                                    value="{{ $user->penjahit->tanggal_lahir }}" placeholder="Birth Date"
                                                    readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>Jenis Kelamin</label>
                                                <select class="form-control" id="gender" readonly>
                                                    <option
                                                        {{ $user->penjahit->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}
                                                        disabled>Laki Laki</option>
                                                    <option
                                                        {{ $user->penjahit->jenis_kelamin == 'perempuan' ? 'selected' : '' }}
                                                        disabled>Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group form-group-default">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" readonly
                                                    value="{{ $user->penjahit->no_hp }}" name="phone" placeholder="Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>Address</label>
                                                <input type="text" class="form-control"
                                                    value="{{ $user->penjahit->alamat }}" readonly name="address"
                                                    placeholder="Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Kecamatan</label>
                                                <input type="text" class="form-control" name="kecamatan" readonly
                                                    value="{{ $user->penjahit->kecamatan }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Kode Pos</label>
                                                <input type="text" class="form-control" name="kode_pos" readonly
                                                    value="{{ $user->penjahit->kode_pos }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mb-1">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>About Me</label>
                                                <textarea class="form-control" name="about" placeholder="About Me" rows="3" readonly> {{ $user->penjahit->deskripsi }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="text-right mt-3 mb-3">
                                        <button class="btn btn-success">Save</button>
                                        <button class="btn btn-danger">Reset</button>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="" method="post">
                                    <div class="card-body">
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>Name</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Name"
                                                        value="{{ $user->name }}" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" name="email" placeholder="Name"
                                                        value="{{ $user->email }}" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>Tanggal Lahir</label>
                                                    <input type="date" class="form-control" id="datepicker" name="datepicker"
                                                        value="{{ $user->penjahit->tanggal_lahir }}" placeholder="Birth Date"
                                                        >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>Jenis Kelamin</label>
                                                    <select class="form-control" id="gender" >
                                                        <option
                                                            {{ $user->penjahit->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}
                                                            >Laki Laki</option>
                                                        <option
                                                            {{ $user->penjahit->jenis_kelamin == 'perempuan' ? 'selected' : '' }}
                                                            >Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group form-group-default">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $user->penjahit->no_hp }}" name="phone" placeholder="Phone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Address</label>
                                                    <input type="text" class="form-control"
                                                        value="{{ $user->penjahit->alamat }}"  name="address"
                                                        placeholder="Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>Kecamatan</label>
                                                    <input type="text" class="form-control" name="kecamatan"
                                                        value="{{ $user->penjahit->kecamatan }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group form-group-default">
                                                    <label>Kode Pos</label>
                                                    <input type="text" class="form-control" name="kode_pos"
                                                        value="{{ $user->penjahit->kode_pos }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mt-3 mb-1">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>About Me</label>
                                                    <textarea class="form-control" name="about" rows="3" > {{ $user->penjahit->deskripsi }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group form-group-default">
                                                    <label>Jenis Layanan</label>
                                                    <input type="text" class="form-control" name="jenis_layanan"
                                                        value="{{ $user->penjahit->jenis_layanan }}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="text-right mt-3 mb-3">
                                            <button class="btn btn-success">Save</button>
                                            <button class="btn btn-danger">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile card-secondary">
                            <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                                <div class="profile-picture">
                                    <div class="avatar avatar-xl">
                                        {{-- <img src="{{ asset('storage/' . $user->$penjahit->thumbnail) }}"         class="avatar-img rounded-circle"> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
