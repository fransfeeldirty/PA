@extends('user.layout.app')

@section('app')
    <section id="hero" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <h1>Mau Cari Penjahit?</h1>
                    <h4>Berinteraksi langsung dengan penjahit disini!</h4>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('img/sewing-machine (2).png') }}" alt="sewing machine">
                </div>
            </div>
        </div>
    </section>

    <section id="search" class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="Search" placeholder="Cari penjahit...">
                            <button class="btn btn-success rounded" type="button" id="button-addon2">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="tailor-list" class="py-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3">
                @foreach ($penjahit as $p)
                    <div class="col">
                        <a href="{{ route('dashboard.detail', ['id' => $p->id]) }}">
                            <div class="card h-100">
                                <img src="{{ asset('storage/'.$p->thumbnail) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $p->user->name }}</h5>
                                    <p class="card-text"><span class="badge bg-primary">{{ $p->kategori }}</span></p>
                                    <p class="card-text"><strong>{{ $p->alamat }}</strong></p>
                                    <p class="card-text text-success">{{ $p->jenis_layanan }}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
