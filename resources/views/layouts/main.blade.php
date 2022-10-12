<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Kerta laravel | CRUD</title>
</head>
<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">Dashboard</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li>
                {{-- <a class="nav-link {{ ($title === "Home") ? 'active' : ''}} " href="/home">Home</a> --}}
              </li>
              <li class="nav-item">
                {{-- <a class="nav-link {{ ($title === "Table") ? 'active' : ''}} " href="/table">Tabel</a> --}}
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div>
        @yield('mainlayout')
    </div>
</body>
</html>