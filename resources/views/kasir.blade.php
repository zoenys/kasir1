<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kasir</title>
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
        <li class="list-group-item">Menu Kasir</li>
      </ul>
    </div>
  </div>
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
