<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="C:\wamp64\www\GestionVote\resources\css\app.css">
    <title>Vote</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand text-info" href="/">Gestion Vote</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active text-black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestion Candidat
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/ajouter/candidat">Ajouter</a>
                            <a class="dropdown-item " href="/liste/candidat"> Liste</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active text-black" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Gestion Electeur
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/ajouter/electeur">Ajouter</a>
                            <a class="dropdown-item" href="/liste/electeur"> Liste</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        {{-- <img src="https://www.mitsubishi-motors.co.za/wp-content/uploads/2017/10/ElectionBackground1.jpg" class="img-fluid" alt="..."> --}}
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
  <style>
    
  </style>
</html>