@extends('pages.home')
@section('content')
    <div class="container mt-3 p-4">
        <div class="card">
            <div class="card-header">
                <h4 class="float-start">TAMBAH SERVIS</h4>
            </div>
            <div class="card-body m-4">
                <form method="post" action="/servis/store">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Pelanggan</label>
                        <input type="text" name="namapelanggan" value="{{ old('namapelangan') }}"
                            class="form-control @error('kode') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('namapelangan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Mekanik</label>
                        <select name="mekanik" class="form-control" id="">
                            @foreach ($mekanik as $data)
                                <option value="{{ $data->id }}">{{ $data->namamekanik }}</option>
                            @endforeach
                        </select>
                        @error('namamekanik')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" value="{{ old('alamat') }}"
                            class="form-control @error('alamat') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('alamat')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telp</label>
                        <input type="text" name="telp" value="{{ old('telp') }}"
                            class="form-control @error('telp') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('telp')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Masuk</label>
                        <input type="date" name="tanggalmasuk" value="{{ old('tanggalmasuk') }}"
                            class="form-control @error('tanggalmasuk') is-invalid @enderror" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        @error('tanggalmasuk')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>





                    <!-- data tambah servis -->
                    <div class="row">
                        <div class="p-3">
                            <a href="#"
                                style="  background-color: #04AA6D;
                            border: none;
                            color: white;
                            text-align: center;
                            padding: 5px 10px;
                            text-decoration: none;
                            display: inline-block;
                            float:right;
                            font-size: 16px;
                            margin: 2px 2px;
                            border-radius: 50%;"
                                onclick="event.preventDefault();tes()"><i class="fa fa-plus"></i></a>

                        </div>
                        <div class="col">
                            <div class="tes" id="tambahkemari">
                                <div class="row my-2">
                                    <div class="col-auto d-flex ">
                                        <div class="align-self-center" style="font-size: 14px">1</div>
                                    </div>
                                    <div class="col">Nama Barang :<input type="text" name="barang[]" placeholder=""
                                            class="form-control" placeholder="kerusakan"></div>
                                    <div class="col">Kerusakan<input type="text" name="kerusakan[]" placeholder=""
                                            class="form-control" placeholder="kerusakan"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        var nomor = 1;

                        function tes() {
                            nomor++;
                            $('  <div class="row my-2"> <div class="col-auto d-flex "><div class="align-self-center" style="font-size: 14px">' +
                                    `${nomor}` +
                                    '</div></div><div class="col">Nama Barang :<input type="text"  name="barang[]"  placeholder="" class="form-control" placeholder="kerusakan"></div><div class="col">Kerusakan<input type="text"  name="kerusakan[]"  placeholder="" class="form-control" placeholder="kerusakan"></div></div> '
                                )
                                .appendTo('#tambahkemari');
                        }
                    </script>
            </div>
        </div>
        <button type="submit" class="btn btn-danger t">Tambah</button>
        <a href="/servis/index" class="btn btn-secondary ">Batal</a>
        </form>
    </div>
    </div>
    </div>
@endsection