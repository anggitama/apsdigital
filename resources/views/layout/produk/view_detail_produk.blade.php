@extends('layout/main')
@section('title','Detail Produk')
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

                    <table class="table">
                        <tr>
                            <th width="100px">Nama Produk<th>
                            <th width="30px"> : <th>
                            <th>{{ $produk->nama_produk }}<th>
                        </tr>
                        <tr>
                            <th width="100px">Deskripsi Produk<th>
                            <th width="30px"> : <th>
                            <th>{{ $produk->deskripsi_produk }}<th>
                        </tr>
                        <tr>
                            <th width="100px">Harga Produk<th>
                            <th width="30px"> : <th>
                            <th>{{ $produk->harga_produk }}<th>
                        </tr>
                        <tr>
                            <th width="100px">Foto<th>
                            <th width="30px"> : <th>
                            <th><img src="{{ url('img/'.$produk->foto_produk) }}"><th>
                        </tr>
                    </table>

                </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>

@endsection