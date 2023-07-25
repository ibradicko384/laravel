<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style1.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <title>Liste des étudiants</title>
    <style>
        body {
            background-color: teal;
        }
    </style>
</head>
<body>
    <div class="container mt-3 text-white">
        <div class="row">
            <div class="col">
            <h1 class="text-white">Détail de l'étudiant</h1>
       
             <h3>Nom : {{ $etudiant->nom }}</h3>
             <h3>Prénom : {{ $etudiant->prenom }}</h3>
             <h3>Email : {{ $etudiant->email }}</h3>
             <h3>Téléphone : {{ $etudiant->telephone }}</h3>

            </div>
        </div>    
    </div>
   
    <script src="{{ asset('css/jquery.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="css/datatables.min.js"></script>
    <script src="{{ asset('css/javascript.js') }}"></script>
</body>
</html>
