@extends('admin.layout.app')

@section('title', 'Gallery')

@section('content')

<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title">Pesanan Penjahit</h4>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nomor Pesanan</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Deskripsi Produk</th>
                        <th scope="col">Lampiran</th>
                        <th scope="col">Ukuran</th>
                        <th scope="col">Jenis Layanan</th>
                        <th scope="col">Jenis Kain</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Kecamatan</th>
                        <th scope="col">Tanggal Pemesanan</th>
                        <th scope="col">Status Pemesanan</th>
                        {{-- <th scope="col">Verifikasi</th> --}}
                        <th scope="col">Catatan</th>
                        <th scope="col">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesanan as $pesanan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            {{ $pesanan->prefix }}{{ str_pad($pesanan->id, 6, '0',STR_PAD_LEFT)}}
                        </td>
                        <td>{{ $pesanan->nama_pesanan }}</td>
                        <td>{{ $pesanan->deskripsi_pesanan }}</td>
                        <td>
                        <img src="{{ asset('storage/' . $pesanan->lampiran) }}" class="img-fluid" width="200">
                        </td>
                        <td>{{ $pesanan->ukuran }}</td>
                        <td>{{ $pesanan->jenis_layanan }}</td>
                        <td>{{ $pesanan->jenis_kain }}</td>
                        <td>{{ $pesanan->alamat }}</td>
                        <td>{{ $pesanan->kecamatan }}</td>
                        <td>{{ $pesanan->tanggal_pesanan }}</td>
                        <td>{{ $pesanan->status_pesanan }}</td>
                        {{-- <td>{{ $pesanan->verifikasi }}</td> --}}
                        <td>{{ $pesanan->catatan }}</td>
                        <td class="row">
                            @switch($pesanan->status_pesanan)
                                @case('pending')
                                    <button type="button" class="btn btn-success" id="button_terima" data-id="{{ $pesanan->id }}">
                                        Terima
                                    </button>
                                    <form class="m-1 " action="{{ route('pesanan.status', $pesanan->id) }}" method="post">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-danger">Tolak</button>
                                        <input type="hidden" name="status_pesanan" value="Tolak">
                                    </form>
                                    @break
                                @case('diterima')
                                <form class="m-1 " action="{{ route('pesanan.status', $pesanan->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-success">Selesai</button>
                                    <input type="hidden" name="status_pesanan" value="Selesai">
                                </form>
                                <form class="m-1 " action="{{ route('pesanan.status', $pesanan->id) }}" method="post">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" class="btn btn-danger">Batal</button>
                                    <input type="hidden" name="status_pesanan" value="Batal">
                                </form>
                                    @break
                                @default
                                    <p>-</p>
                            @endswitch
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
</div>
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Masukkan Catatan </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="catatan">Catatan</label>
                <textarea class="form-control" id="catatan" name="catatan" rows="3"></textarea>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="button" id="save" class="btn btn-primary">Kirim</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('body').on('click', '#button_terima', function(e) {
        var id = $(this).data('id');
        $.ajax({
            url: 'pesanan/' + id + '/edit',
            type: 'GET',
            success: function(response) {
                // console.log(response.result)
                $('#exampleModal').modal('show');
                $('#catatan').val(response.result.catatan),
                $('#save').click(function() {
                    save(id);
                });
            }
        });
    });

    function save(id) {
        var action = 'pesanan/update/' + id;
        var method = 'POST';
        $.ajax({
            url: action,
            type: method,
            data: {
                _token: "{{ csrf_token() }}",
                catatan: $('#catatan').val(),
            },
            success: function(html) {
                location.reload();
            },
        });
    }

    $('#exampleModal').on('hidden.bs.modal', function() {
        $('catatan').val();
    });

</script>
@endsection
