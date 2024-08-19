<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HA santé</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid px-5 d-none d-lg-block">
        <div class="row gx-5 py-3 align-items-center">
            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-start">
                    <i class="bi bi-phone-vibrate fs-1 text-primary me-2"></i>
                    <h2 class="mb-0">+216 25 571 963</h2>
                </div>
            </div>
            <div class="col-lg-6">
    <div class="d-flex align-items-center justify-content-center">
        <a href="{{('home')}}" class="navbar-brand ms-lg-5 custom-logo">
            <h1 class="m-0 display-4 text-primary">
                 <img src="{{ asset('img/logo.png') }}"alt="Logo HA Santé" style="width: 250px; height: auto;">
            </h1>
        </a>
    </div>
</div>

            <div class="col-lg-3">
                <div class="d-flex align-items-center justify-content-end">
                    <a class="btn btn-primary btn-square rounded-circle me-2" href="https://www.facebook.com/profile.php?id=100068143698717"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-primary btn-square rounded-circle" href="https://www.instagram.com/ha_parapharmacie_plus/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

              
        
        </div>
    </div>
    <!-- Topbar End -->


   
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #00A859; /* Couleur verte pour la navbar */
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: white;
        }

        .search-bar {
            display: flex;
            align-items: center;
        }

        .search-bar input {
            padding: 10px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
            width: 700px;
        }

        .search-bar button {
            padding: 10px;
            background-color: #007040; /* Couleur de fond pour le bouton de recherche */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold;
        }

        /* Style de survol des liens */
        .nav-links a:hover {
            text-decoration: underline;
        }
    </style>
    <title>Parapharmacie</title>
</head>
<body>
    
<style>




       body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
}

nav {
    background-color: #06910a; /* Vert primaire */
    padding: 10px;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav li {
    margin: 0 15px;
}

nav a {
    text-decoration: none;
    color: white;
    font-weight: bold;
}

nav a:hover {
    color: #000000; /* Couleur bleue pour le survol */
}

.search-bar {
    display: flex;
    align-items: center;
    height: 50px;
    margin-right: 10px; /* Ajustez cette valeur pour déplacer la barre vers la droite */

}


.search-bar input {
    padding: 21px;
    margin-right: 15px;
    height: 35px;
    width: 350px;
}

.profile-link {
    text-decoration: none;
    color: white;
    font-weight: bold;
    margin-left: 10px;
    position: relative;
}

.profile-options {
    display: none;
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #06910a; /* Vert primaire */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    padding: 8px;
    border-radius: 4px;
    transition: opacity 0.3s ease-in-out;
    opacity: 0;
}



.profile-link:hover .profile-options {
    display: flex;
    flex-direction: row;
    opacity: 1;
}

.profile-options a {
    color: white;
    text-decoration: none;
    padding: 6px 10px;
    transition: background-color 0.3s ease-in-out;
    margin-right: 10px;
}

.custom-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.custom-list li {
    display: inline-block;
    position: relative;
    margin-right: 20px; /* Espace entre les éléments */
}

.custom-list li:not(:last-child):after {
    content: "";
    position: absolute;
    top: 0;
    bottom: 0;
    right: -20px; /* Ajustez cette valeur pour la longueur de la ligne */
    width: 2px; /* Épaisseur de la ligne */
    height: 30px; /* Hauteur de la ligne */
    background-color: #000; /* Couleur de la ligne */
}




    </style>
</head>
<body>

<nav>
<div class="search-bar">
    <form class="form-inline" action="{{ route('filterByName') }}" method="post">
        @csrf
        <input type="text" id="productName" name="name" placeholder="Trouver des produits de qualité...">
        <button class="btn-nav_search-btn" type="submit">Rechercher</button>
    </form>
</div>


    <ul class="custom-list">
        <li><a href="{{route('home')}}"><i class="fas fa-home"></i> Accueil</a></li>
        <li><a href="#categories"><i class="fas fa-list"></i> Catégories</a></li>
        <li><a href="#products"><i class="fas fa-box"></i> Produits</a></li>
    </ul>


    <ul>
        <li>
    <div class="profile-link">
        @if(Auth::check())
            <i class="fas fa-user-circle"></i> Bienvenue {{ Auth::user()->name }}
            <div class="profile-options">
                <a href="{{ url('profileUser') }}"> Profil</a>
                <a href="{{route('logout')}}"> Déconnexion</a>
            </div>

            @else
            <i class="fas fa-user-circle"></i> S'authentifier 
            <div class="profile-options">
                <a href="{{ route('login') }}"> connecter</a>
                <a href="{{route('register')}}"> s'inscrire</a>
            </div>
        @endif
    </div></li>
<li>
    <div>
        <a href="/listePanier">
            <i class="fas fa-shopping-cart"></i> Panier  
        </a>
    </div></li>
</nav>



</body>


</html>



    

    