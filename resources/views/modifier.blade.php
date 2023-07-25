<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css')}}">
</head>
<style>
        body {
            background-color: teal;
        }
        label{
            color: white;
        }
    </style>
<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow height:12rem;" >
 <h1><a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Application d'inscription</a></h1>
        <div class='navbar-nav'>
        <div class='nav-item text-nowrap ml-5'>
        <p><button type="button" class="btn btn-silver"><a class="abc"  href="deconnexion.php">Paramètres</a></button></p>
        </div>
    </div>
</header>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
            <h2 class="text-white">Modifier un étudiant</h2>
          <form action="{{ route('mettre_a_jour', $etudiant->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" name="nom" id="nom" class="form-control" value="{{ $etudiant->nom }}" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom :</label>
                <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $etudiant->prenom }}" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ $etudiant->email }}" required>
            </div>
            <div class="form-group">
                <label for="telephone">Téléphone :</label>
                <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $etudiant->telephone }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>

            </div>
        </div>
    </div>
    <div class="bg-dark text-center p-5 mt-3">
  <p class="text-white">
    Tous les droits sont reserveees 2023
  </p>

</div>
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
