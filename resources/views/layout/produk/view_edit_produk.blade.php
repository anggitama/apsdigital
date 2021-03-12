@extends('layout/main')
@section('title','Edit Produk')
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

                    <form action="/produk/update/{{ $produk->id_produk }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="content">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nama Produk</label>
                                        <input name="nama_produk" class="form-control" value="{{ $produk->nama_produk }}">
                                        <div class="text-danger">
                                            @error('nama_produk')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Deskripsi Produk</label>
                                        <input name="deskripsi_produk" class="form-control" value="{{ $produk->deskripsi_produk }}">
                                        <div class="text-danger">
                                            @error('deskripsi_produk')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Harga Produk</label>
                                        <input name="harga_produk" class="form-control" value="{{ $produk->harga_produk }}">
                                        <div class="text-danger">
                                            @error('harga_produk')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="col-sm-6">
                                            <img src="{{ url('img/'.$produk->foto_produk) }}" width="200">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>Foto Produk</label>
                                                <input type="file" name="foto_produk" class="form-control" value="{{ $produk->foto_produk }}">
                                                <div class="text-danger">
                                                    @error('foto_produk')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    

                                    <div class="form-group">
                                        <button class="btn btn-sm btn-success">Update</button>
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