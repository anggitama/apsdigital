@extends('layout/main')
@section('title','Produk')
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

              <?php if(Auth::user()->name == 'Administrator'){ ?>
                <a href="/produk/add" class="btn btn-sm btn-primary">Tambah Produk</a><p>
              <?php } ?>
                
              <table class="table table-bordered">
                <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Produk</th>
                    <th class="text-center" width="200px">Deskripsi</th>
                    <th class="text-center">Harga</th>
                    <th class="text-center">Foto</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                    <?php $no=1 ?>
                    @foreach ($produk as $data)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td class="text-center">{{ $data->nama_produk }}</td>
                            <td class="text-center">{{ $data->deskripsi_produk }}</td>
                            <td class="text-center">{{ $data->harga_produk }}</td>
                            <td class="text-center"><img src="{{ url('img/'.$data->foto_produk) }}" width="110"></td>
                            <?php if(Auth::user()->name == 'Administrator'){ ?>
                              <td class="text-center">
                                <a href="/produk/detail/{{ $data->id_produk }}" class="btn btn-sm btn-success">Detail</a>
                                <a href="/produk/edit/{{ $data->id_produk }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="/produk/delete/{{ $data->id_produk }}" class="btn btn-sm btn-danger">Delete</a>
                              </td>
                            <?php } else{ ?>
                              <td class="text-center">
                                <a href="/order/add/" class="btn btn-sm btn-success">Pesan</a>
                              </td>
                            <?php } ?>
                            
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