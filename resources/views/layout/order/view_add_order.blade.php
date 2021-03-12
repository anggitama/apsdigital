@extends('layout/main')
@section('title','Tambah Order User')
@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                <!-- <div class="card-header">
                    <h3 class="card-title">Produk</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                    </div>
                </div> -->
                <div class="card-body">

                    <form action="/order/insert" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Barang yang di Pesan</label>
                                        <select name="id_barang" class="form-select" style="width: 100%; height: calc(2.25rem + 2px); padding-left: 8px;">
                                            <option selected disabled>Pilih Barang</option>
                                            @foreach($produk as $data)
                                            <option value="{{ $data->id_produk }}">{{ $data->nama_produk }}</option>
                                            @endforeach
                                        </select>
                                        <div class="text-danger">
                                            @error('id_barang')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Pembeli</label>
                                        <input name="nama_pembeli" class="form-control" value="{{ old('nama_pembeli') }}">
                                        <div class="text-danger">
                                            @error('nama_pembeli')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Pembeli</label>
                                        <input name="email_pembeli" class="form-control" value="{{ old('email_pembeli') }}">
                                        <div class="text-danger">
                                            @error('email_pembeli')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>No. HP Pembeli</label>
                                        <input name="hp_pembeli" class="form-control" value="{{ old('hp_pembeli') }}">
                                        <div class="text-danger">
                                            @error('hp_pembeli')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat Pembeli</label>
                                        <input name="alamat_pembeli" class="form-control" value="{{ old('alamat_pembeli') }}">
                                        <div class="text-danger">
                                            @error('alamat_pembeli')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-sm btn-success">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        
                    </form>

                </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

@endsection