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
                
            </div>
        </div>
        <h1 class="text-white">La liste des étudiants</h1>
        <table id="etudiantsTable" class="table table-striped text-dark mt-5">
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
                @php
                $i = 1;
                @endphp
                @forelse ($etudiant as $etudiant)
                <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->prenom }}</td>
                    <td>{{ $etudiant->email }}</td>
                    <td>{{ $etudiant->telephone }}</td>
                    <td>
                    <a class="btn btn-danger" href="{{ route('supprimer', $etudiant->id) }}" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?')">Supprimer</a>
                        <a class="btn btn-info" href="{{ route('modifier', $etudiant->id) }}">Modifier</a>
                        <a class="btn btn-primary" href="{{ route('detail', $etudiant->id) }}">Détail</a>
                    </td>
                </tr>
                @php
                $i++;
                @endphp
                @empty
                <tr>
                    <td colspan="6">Aucun étudiant trouvé.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
   
    <script src="{{ asset('css/jquery.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap.min.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="css/datatables.min.js"></script>
    <script src="{{ asset('css/javascript.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#etudiantsTable').DataTable();
        });
    </script>
</body>
</html>
