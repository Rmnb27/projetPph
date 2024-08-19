<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parapharmacie Admin Dashboard</title>
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
        <a href="{{('home')}}" class="navbar-brand ms-lg-5 custom-logo">
            <h1 class="m-0 display-4 text-primary">
                 <img src="../img/logo.png" alt="Logo " style="width: 500px; height: auto;">
            </h1><br><br>
        </a>
    </div>

                <!-- Dashboard Link -->
                <ul class="nav flex-column" >
                    <li class="nav-item">
                    <span class="nav-link text-muted small">Administration</span>

                        <a class="nav-link active" href="{{route('dashboard')}}" >
                            <i class="fas fa-tachometer-alt"></i> Tableau de bord 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('category')}}">     
                            <i class="fas fa-list"></i> Catégories
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-box"></i> Produits
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('client')}}">
                            <i class="fas fa-users"></i> Clients
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('commande')}}">
                            <i class="fas fa-shopping-cart"></i> Commandes
                        </a>
                    </li>
                    
                    <br>
                    <span class="nav-link text-muted small">Authentification</span>


                    <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user"></i> Profil
                </a>
            </li>

            <!-- Connexion avec son icône -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">
                    <i class="fas fa-sign-in-alt"></i> Connexion
                </a>
            </li>

            <!-- Registre avec son icône -->
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">
                    <i class="fas fa-user-plus"></i> Inscription
                </a>
            </li><br><br><br><br>
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Tableau de bord</h1>
            </div>



           
            <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .dashboard {
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-wrap: wrap;
            width: 80%;
        }

        .card {
            border-radius: 8px;
            overflow: hidden;
            margin: 10px;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer;
        }

        .card-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding: 20px;
            text-align: left;
            color: #ffffff; 
        }

        

    </style>
</head>
<body>



 
 

    <div class="container">
        <form action="/edit/{{$category->id}}" method="POST">
            @csrf
            <h2 class="text-center">Modifier la catégorie</h2>
            <hr/>
            <div class="form-group">
                <label for="">Nom de la categorie</label>
                <input type="text" name="name" class="form-control" value="{{$category->name}}">   
            </div>

            <div class="form-group">
                <label for="">Description de la categorie</label>
                <textarea name="description" class="form-control" >{{$category->description}}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
        @if(session('success'))
    <div class="alert alert-success mt-3">catégorie modifiée avec succès  </div>
        @endif

    </div>

   



<!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
