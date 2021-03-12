@extends('layout/main')
@section('title','Detail Order')
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
                            <th width="100px">Foto<th>
                            <th width="30px"> : <th>
                            <th><img src="{{ url('img/'.$order->foto_produk) }}"><th>
                        </tr>
                        <tr>
                            <th width="100px">Pesanan<th>
                            <th width="30px"> : <th>
                            <th>{{ $order->nama_produk }}<th>
                        </tr>
                        <tr>
                            <th width="100px">Nama Pembeli<th>
                            <th width="30px"> : <th>
                            <th>{{ $order->nama_pembeli }}<th>
                        </tr>
                        <tr>
                            <th width="100px">Email Pembeli<th>
                            <th width="30px"> : <th>
                            <th>{{ $order->email_pembeli }}<th>
                        </tr>
                        <tr>
                            <th width="100px">No. HP Pembeli<th>
                            <th width="30px"> : <th>
                            <th>{{ $order->hp_pembeli }}<th>
                        </tr>
                        <tr>
                            <th width="100px">Alamat Pembeli<th>
                            <th width="30px"> : <th>
                            <th>{{ $order->alamat_pembeli }}<th>
                        </tr>
                        <tr>
                            <th width="100px">Harga Produk<th>
                            <th width="30px"> : <th>
                            <th>{{ $order->harga_produk }}<th>
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