@extends('layout/main')
@section('title','List Order User')
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

              <a href="/order/add" class="btn btn-sm btn-primary">Tambah Order User</a><span style="padding-left: 5px;">
              <a href="/order/exportData" target="_blank" class="btn btn-sm btn-success">Print / Export PDF Data Order User</a></span><p>
                
              <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Pesanan</th>
                    <th class="text-center">Nama Pembeli</th>
                    <th class="text-center" width="200px">Email</th>
                    <th class="text-center">No. HP</th>
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1 ?>
                    @foreach ($order as $data)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center"><img src="{{ url('img/'.$data->foto_produk) }}" width="110"></td>
                            <td class="text-center">{{ $data->nama_produk }}</td>
                            <td class="text-center">{{ $data->nama_pembeli }}</td>
                            <td class="text-center">{{ $data->email_pembeli }}</td>
                            <td class="text-center">{{ $data->hp_pembeli }}</td>
                            <td class="text-center">{{ $data->alamat_pembeli }}</td>
                            <td class="text-center">{{ $data->harga_produk }}</td>
                            <td class="text-center">
                                <div><a href="/order/detail/{{ $data->id_order }}" class="btn btn-sm btn-success">Detail</a></div>
                                <div style="padding-top: 5px;"><a href="/order/edit/{{ $data->id_order }}" class="btn btn-sm btn-warning">Edit</a></div>
                                <div style="padding-top: 5px;"><a href="/order/delete/{{ $data->id_order }}" class="btn btn-sm btn-danger">Delete</a></div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>

              </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
@endsection