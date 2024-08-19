<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parapharmacie commandes</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


</head>
<body class="parapharmacie-theme">
<style>
body.parapharmacie-theme {
    background-color: #f8f9fa;
}

#sidebar {
    border-right: 3px solid green ;

}


.nav-link {
    color: #343a40;
}

.nav-link:hover {
    color: green ;
    background-color: #c3e6cb;
}

.sidebar-sticky {
    padding-top: 20px;
}

.sidebar-sticky img {
    max-width: 110%;
}

h1 {
    color: green ;
    font-family: "Roboto", sans-serif;
}

</style>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-white sidebar">
            <div class="sidebar-sticky">
                <!-- Logo -->
                <div class="d-flex align-items-center justify-content-center">
        <a href="{{route('home')}}" class="navbar-brand ms-lg-5 custom-logo">
            <h1 class="m-0 display-4 text-primary">
                 <img src="img/logo.png" alt="Logo HA Santé" style="width: 500px; height: auto;">
            </h1><br><br>
        </a>
    </div>

                <!-- Dashboard Link -->
                <ul class="nav flex-column">
                    <li class="nav-item">
                    <span class="nav-link text-muted small">Administration</span>

                        <a class="nav-link " href="{{route('dashboard')}}">
                            <i class="fas fa-tachometer-alt"></i> Tableau de bord 
                        </a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category')}}">
                            <i class="fas fa-list"></i> Catégories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('allProduct')}}">
                            <i class="fas fa-box"></i> Produits
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client')}}">
                            <i class="fas fa-users"></i> Clients
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('commande')}}">
                            <i class="fas fa-shopping-cart"></i> Commandes
                        </a>
                    </li>
                    
                    <br>
                    <span class="nav-link text-muted small">Authentification</span>


                  

            <!-- Connexion avec son icône -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/profileAdmin') }}">
                <i class="fas fa-user"></i> Profil
                </a>
            </li>
         

            <!-- Registre avec son icône -->
            <li class="nav-item">
    <a class="nav-link" href="{{route('logout')}}" >
        <i class="fas fa-sign-out-alt"></i> Déconnexion
    </a>
</li><br><br><br><br>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Liste des commandes</h1>

            </div>

            <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }

    .green-button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
    }

    .red-button {
        background-color: #f44336; /* Red */
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Total des commandes</th>
        </tr>
    </thead>
    <tbody>
    @foreach($commandes as $commande)
    <tr>
        <td>{{ $commande->id }}</td>
        <td>{{ $commande->client->name }}</td> <!-- Accès au nom du client associé à la commande -->
        <td>{{ $commande->client->email }}</td> <!-- Accès à l'email du client associé à la commande -->
        @php
            $montantTotal = 0; // Initialisation du montant total pour cette commande  // @php permet d'intégrer du code PHP directement dans les fichiers de vue Blade de Laravel, 
        @endphp
        @foreach ($commande->ligneCommandes as $c)
            @php
                $montantTotal += $c->product->price * $c->qte; // Calcul du montant total pour chaque produit dans la commande
            @endphp
        @endforeach
        <td>{{ $montantTotal }} DT</td> <!-- Affichage du montant total -->
    </tr>
    @endforeach
</tbody>


</table>






           





<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
