<!-- START FORM -->
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
    <div class="container my-3 p-3 bg-body rounded shadow-sm">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action='{{ url('barang') }}' method='post'>
        @csrf
            <a href="{{ url('petugasgudang') }}" class="btn btn-secondary">Back</a>
            <div class="mb-3 row">
                <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="KodeBarang" value="{{ Session::get('KodeBarang') }}" id="KodeBarang" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Nama" value="{{ Session::get('Nama') }}" id="Nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Satuan" class="col-sm-2 col-form-label">Satuan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="Satuan" value="{{ Session::get('Satuan') }}" id="Satuan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="HargaJual" class="col-sm-2 col-form-label">Harga Jual</label>
                <div class="col-sm-10">
                    <input type="number" step="0.01" class="form-control" name="HargaJual" value="{{ Session::get('HargaJual') }}" id="HargaJual">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Stok" class="col-sm-2 col-form-label">Stok</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="Stok" value="{{ Session::get('Stok') }}" id="Stok">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Barcode" class="col-sm-2 col-form-label">Barcode</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" name="Barcode" value="{{ Session::get('Barcode') }}"  id="Barcode">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="button" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" name="submit">+ Tambah Barang</button>
                </div>
            </div>
        </form>
    </div>

     <!-- AKHIR FORM -->
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
    