<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('style1.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <title>Liste des étudiants</title>
    <style>
        body{
            background-color: olive;
        }
    </style>
</head>
<body>
      <div class="container mt-3 text-white">
        <h2 class="">La liste des étudiants</h2>
		<table class="table table-striped text-white mt-5">
            <thead>
            <tr>
				<th>N°</th>
                <th>Nom</th>
				<th>Prénom</th>
				<th>Email</th>
                <th>Téléphone</th>
                <th>Action</th>
			</tr>
            </thead>
            <tbody>
                @foreach($etudiant as $etudiant)
                <tr>
                <td>{{$etudiant->id}}</td>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->email}}</td>
                <td>{{$etudiant->telephone}}</td>
                <td>
                    <a href="#" class="btn btn-info">Modifier</a>
                    <a href="#" class="btn btn-info">Supprimer</a>
                </td>
                </tr>
                @endforeach
            </tbody>
      </table>
</div>
	<script src="../style/bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="../style/bootstrap-5.2.3-dist/js/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="javascript/javascript.js"></script>
</body>

</html>