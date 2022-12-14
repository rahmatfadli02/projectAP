@extends('pages.home')
@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="main">
        <div class="page-header">
            <h4 class="page-title">FORM DATA SERVIS</h4>
            <div class="breadcrumb page-title-right">
                <span class="me-1 text-gray"><i class="feather icon-home"></i></span>
                <div class="breadcrumb-item"><a href="/"> Dashboard </a></div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <h4 class="float-start"></h4>
                <a href="/servis/form" class="float-end btn btn-secondary">Tambah Data</a>
            </div>
            <div class="mx-4 mt-4">
                <table id="example1" class="table display">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Nama Pelanggan</th>
                            <th scope="col">Nama Mekanik</th>
                            <th scope="col">Jenis Layanan</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telp</th>
                            <th scope="col">TanggalMasuk</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($servis as $item)
                            <tr>
                                <td scope="row">{{ $nomor++ }}</td>
                                <td>{{ $item->namapelanggan }}</td>
                                <td>{{ $item->mekaniks->namamekanik }}</td>
                                <td>
                                    {{ $item->layanans->jenislayanan }}
                                </td>
                                <td>{{ $item->kerusakan }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->telp }}</td>


                                <td>{{ $item->tanggalmasuk }}</td>



                                <td>

                                    <a href="/servis/edit/{{ $item->id }}" class="btn btn-primary btn-sm "><i
                                            class="fa fa-pencil"></i></a>

                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop{{ $item->id }}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    <div class="modal fade" id="staticBackdrop{{ $item->id }}"
                                        data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title text-black" id="staticBackdropLabel">Peringatan
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-black">
                                                    Yakin Data servis {{ $item->namapelangan }} Ingin Di Hapus?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Batal</button>

                                                    <form method="POST" action="/servis/{{ $item->id }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <a href="/servis/sruktur" class="btn btn-primary btn-sm "><i
                                        class="fa fa-print"></i></a> --}}

                                    <!-- Button trigger modal -->



                                    {{-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#detail{{ $item->id }}">
                                        <i class="fa fa-print"> </i>
                                    </button> --}}

                                    <!-- Modal -->
                                    <div class="modal fade" id="detail{{ $item->id }}" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Data Servis</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <table class="table table-striped">


                                                        <thead>



                                                            <tr>
                                                                <td>Nama Pelanggan</td>
                                                                <td>{{ $item->namapelanggan }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Mekanik</td>
                                                                <td>{{ $item->mekaniks->namamekanik }} </td>
                                                            </tr>
                                                            <tr>
                                                                <td>Alamat</td>
                                                                <td>{{ $item->alamat }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Tanggal</td>
                                                                <td>{{ $item->tanggalmasuk }}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="vertical-align: top;">Jenis
                                                                    Layanan</td>
                                                                <td>
                                                                    {{ $item->layanans->jenislayanan }}
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="vertical-align: top;">Kerusakan
                                                                </td>
                                                                <td>
                                                                    {{ $item->kerusakan }}
                                                                </td>
                                                            </tr>
                                                        </thead>

                                                    </table>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>

                                                </div>


                                            </div>
                                        </div>
                                    </div>



                                </td>

                            </tr>
                        @empty
                            <td colspan="4">Tidak Ada Data</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection

