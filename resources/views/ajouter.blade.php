<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style1.css')}}">
    <title>Ajouter étudiant</title>
    <style>
        body{
            background-color: olive;
        }
    </style>
</head>
<body>
    <h1>Ajouter un étudiant</h1>
    <div class="container">
        <div class="row">
            <div class="col-6">

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
            <input id="Ajouter" type="submit" name="Ajouter" value="Ajouter">
            </form><br>
            <button type="submit" class="btn btn-dark"><a href="/etudiant">La liste</a></button>
            <br>
            </div>
        </div>
    </div>
    <script src="script/script.js"></script>
    <script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
