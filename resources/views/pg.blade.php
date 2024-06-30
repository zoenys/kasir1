<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Petugas Gudang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background-color: white; }
    .btn-secondary { background-color: #007bff !important; border-color: #007bff !important; }
  </style>
</head>
<body>
  <div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
    <h1>Halo</h1>
    <div>Selamat Datang, {{ Auth::user()->name }}</div>
    <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
    <div class="card mt-3">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Menu Petugas Gudang</li>
      </ul>
    </div>
  </div>
  <main class="container">
    @if (Session::has('success'))
      <div class="pt-3">
        <div class="alert alert-success">
          {{ Session::get('success') }}
        </div>
      </div>
    @endif
     <div class="container my-3 p-3 bg-body rounded shadow-sm">
      <!-- FORM PENCARIAN -->
      <div class="pb-3">
          <form class="d-flex" action="{{ url('petugasgudang') }}" method="get">
              <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
              <button class="btn btn-secondary" type="submit">Cari</button>
          </form>
      </div>
      
      <!-- TOMBOL TAMBAH DATA -->
      <div class="pb-3">
          <a href='{{ url('petugasgudang/create') }}' class="btn btn-primary">+ Tambah Barang</a>
      </div>
  
      <table class="table table-striped">
          <thead>
              <tr>
                  <th class="col-md-1">No</th>
                  <th class="col-md-2">Kode Barang</th>
                  <th class="col-md-3">Nama</th>
                  <th class="col-md-1">Satuan</th>
                  <th class="col-md-2">Harga Jual</th>
                  <th class="col-md-1">Stok</th>
                  <th class="col-md-2">Barcode</th>
                  <th class="col-md-2">Aksi</th>
              </tr>
          </thead>
          <tbody>
            <?php $i = $data->firstItem() ?>
              @foreach ($data as $item)
              <tr>
                  <td>{{ $i }}</td>
                  <td>{{  $item->KodeBarang }}</td>
                  <td>{{ $item->Nama }}</td>
                  <td>{{ $item->Satuan }}</td>
                  <td>{{ $item->HargaJual }}</td>
                  <td>{{ $item->Stok }}</td>
                  <td>{{ $item->Barcode }}</td>
                  <td>
                      <a href="{{ url('petugasgudang/'.$item->KodeBarang.'/edit') }}" class="btn btn-warning btn-sm">Edit</a>
                      <form class = 'd-inline' action ="{{ url('petugasgudang/'.$item->KodeBarang) }}" method = "post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                      </form>
                  </td>
              </tr>
              <?php $i++ ?>
              @endforeach
          </tbody>
      </table>
      {{ $data->links() }}
  </div>
       <!-- AKHIR DATA -->
 </main>
  <script>
    // Push state untuk mendeteksi navigasi
    history.pushState(null, null, location.href);
    window.addEventListener('popstate', function(event) {
      // Mengarahkan ke /logout ketika tombol back di browser ditekan
      window.location.href = '/logout';
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
