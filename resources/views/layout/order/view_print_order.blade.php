
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>rumahLaptop | Invoice Print</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}//dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <i class="fas fa-globe"></i> rumahLaptop
          <small class="float-right">Date: <?php echo date("d/m/Y") ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Admin rumahLaptop</strong><br>
          Perumahan Araya 75A, Greenwood<br>
          Malang, Jawa Timur<br>
          Phone: (+62) 813481928<br>
          Email: info@rumahlaptop.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>Angkasa Pura Sarana Digital</strong><br>
          Terminal 1A, Room No. AOD006<br>
          Tangerang, Banten<br>
          Phone: (+62) 81384439977<br>
          Email: partnership@apsdigital.co.id
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Pesanan</th>
            <th>Nama Pembeli</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Alamat</th>
            <th>Harga</th>
          </tr>
          </thead>
          <tbody>
          <?php $no = 1; ?>
          @foreach($order as $data)
          <tr>
            <td>{{ $no++ }}</td>
            <td><img src="{{ url('img/'.$data->foto_produk) }}" width="110"></td>
            <td>{{ $data->nama_produk }}</td>
            <td>{{ $data->nama_pembeli }}</td>
            <td>{{ $data->email_pembeli }}</td>
            <td>{{ $data->hp_pembeli }}</td>
            <td>{{ $data->alamat_pembeli }}</td>
            <td>{{ $data->harga_produk }}</td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
<script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>
