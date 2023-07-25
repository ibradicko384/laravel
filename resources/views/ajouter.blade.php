<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style1.css')}}">
    <title>Ajouter étudiant</title>
    <style>
         body {
            background-color: teal;
        }
        .d{
            color: red;
        }
        label{
            color: teal;
        }
    </style>
</head>
<body>
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow height:12rem;" >
 <h1><a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Application d'inscription</a></h1>
        <div class='navbar-nav'>
        <div class='nav-item text-nowrap ml-5'>
        <p><button type="button" class="btn btn-danger"><a class="abc"  href="deconnexion.php">Paramètres</a></button></p>
        </div>
    </div>
</header>
    <div class="container"><div class="row"><div class="col-9"></div></div></div>
    <div class="container">
        <div class="row pt-4">
            <div class="col-4 bg-white rounded">
            <h1 class="text-center text-teal pb-3">Ajouter un étudiant</h1>
            @if (session('status'))
            <div class="alert alert-success">
            {{session('status')}}
            </div>
            @endif
            <form  action="/ajouter/traitement" method="POST" class="form-group">
                @csrf  
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" required><br>
            <label for="prenom">prénom:</label>
            <input type="text" id="prenom" name="prenom" required><br>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" required><br>
            <label for="mot_de_passe">Téléphone:</label>
            <input type="text" id="telephone" name="telephone" required><br>
            <button class="d rounded" id="Ajouter" type="submit" name="Ajouter" value="Ajouter">Ajouter</button>
            </form>
            <button class="dd"><a class="dd text-white rounded" href="/etudiant">LISTE</a></button><br> 
            <br>
            </div>
        </div>
    </div>
    <div class="container"><div class="row"><div class="col-6"></div></div></div>
    <div class="bg-dark text-center mt-3">
  <p class="text-white">
    Tous les droits sont reserveees 2023
  </p>

</div>
    <script src="{{ asset('script/script.js') }}"></script>
    <script src="{{ asset('style/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
