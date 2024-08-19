
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
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

.container-fluid {  
        display: flex;
        justify-content: space-between;
    }

    .col-md-9 {
        flex: 0 0 90%; /* Réglage de la largeur de la colonne du tableau de bord */
    }

    /* Ajout de styles pour aligner les deux graphiques horizontalement */
    canvas {
        margin: 0 auto;
        display: block;
    }
</style>

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
                 <img src="img/logo.png" alt="Logo HA Santé" style="width: 500px; height: auto;">
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
                        <a class="nav-link" href="{{route('commande')}}">
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
           

            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">
                <i class="fas fa-sign-out-alt"></i> Déconnexion
                </a>
            </li>
                </ul>
            </div>
        </nav>

        <!-- Content -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Tableau de bord</h1>
                <div> <i class="fas fa-user-circle"></i> Bienvenue {{ Auth::user()->name }}
            </div>

            </div>

            <style>
        /* Style de base pour les cartes */
        .card {
            width: 250px;
            height: 180px;
            border: 1px solid #ccc;
            margin: 10px;
            display: inline-block;
            vertical-align: top;
            box-sizing: border-box;
            position: relative;
        }

        /* Style pour le texte dans le footer */
        .card-footer {
            position: absolute;
            bottom: 5px;
            left: 0;
            right: 0;
            text-align: center;
            padding: 10px; /* Ajustement de la taille du padding */
            color: #fff; /* Couleur du texte */
        }

        /* Style pour le nombre dans le header */
        .card-header {
            position: absolute;
            top: 5px;
            left: 5px;
            font-size: 40px; /* Ajustement de la taille du nombre */
            color: inherit; /* Utilise la couleur du texte du footer */
        }

        /* Style pour l'icône à droite */
        .card-icon {
            position: absolute;
            top: 30%; /* Ajustement pour positionner l'icône un peu plus haut */
            right: 10px;
            transform: translateY(-50%);
            font-size: 50px; 
            color: inherit; 
        }

        /* Couleurs de thème parapharmacie pour les footers */
        .card-footer.products { background-color: #7ED321; }
        .card-footer.orders { background-color: #4A90E2; }
        .card-footer.categories { background-color: #F5A623; }
        .card-footer.clients { background-color: #9B9B9B; }
    </style>
   

   
    <div class="card">
        <div class="card-header" style="color: #7ED321;">{{$nb}}</div>
        
        <div  class="card-footer products">Nombre d'Articles</div>
        <i class="fas fa-cube card-icon" style="color: #7ED321;"></i>
    </div>

    <div class="card">
        
            <div class="card-header" style="color: #4A90E2;">{{$nbcomm}}</div>
            
            <div class="card-footer orders">Nombre de Commandes </div>
            <i class="fas fa-shopping-cart card-icon"style="color: #4A90E2;"></i>
       
    </div>

    <div class="card">
            <div class="card-header" style="color: #F5A623;">{{$nbc}}</div>
            <div class="card-footer categories">Nombre de Catégories</div>
            <i class="fas fa-list-alt card-icon" style="color: #F5A623;"></i>
    </div>

    <div class="card">
        
            <div class="card-header" style="color: #9B9B9B;">{{$nbcl}}</div>
            <div class="card-footer clients">Nombre de Clients </div>
            <i class="fas fa-users card-icon" style="color: #9B9B9B;"></i> 
    </div>
    <br><br><br>
    
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!--charge la bibliothèque Chart.js depuis un CDN, permettant d'utiliser ses fonctionnalités pour créer des graphiques. -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
 
    }

    canvas {
      display: block;
      margin: 40px 50px 50px 0px;
    }
    chart-container {
      width: 70%;
      margin: 0px 0px 0px auto;
    }
  </style>
  
      <!-- graphique des ventes journalieres -->
      <div class="row">
        <div class="col-md-8">
        <canvas id="monthlySalesChart" width="500" height="300" ></canvas>
      </div>    
      <script>
  var salesData = {
    labels: ["Jour 1", "Jour 2", "Jour 3", "Jour 4", "Jour 5", "Jour 6", "Jour 7", "Jour 8", "Jour 9", "Jour 10"],
    datasets: [{
      label: 'Montant des Ventes',
      backgroundColor: '#2196F3',
      data: [20, 30, 50, 60, 30, 100, 120, 150, 150, 100]
    }]
  };

  var ctx = document.getElementById('monthlySalesChart').getContext('2d');

  var myChart = new Chart(ctx, {
    type: 'bar',
    data: salesData,
    options: {
      plugins: {
        title: {
          display: true,
          text: 'Graphique des ventes journalières',
          font: {
            size: 20
          }
        }
      },
      scales: {
        x: {
          type: 'category',
          position: 'bottom',
          title: {
            display: true,
            text: 'Jours'
          }
        },
        y: {
          title: {
            display: true,
            text: 'Montant des Ventes'
          }
        }
      }
    }
  });


</script>


<!-- diagramme circulaire -->
<div class="col-md-4">
    <canvas id="categoryPieChart" width="400" height="400"></canvas>
 </div>
</div>
<script>
var categoryData = {
  labels: ["Santé", "Nutrition", "Beauté", "Hygiène"],
  datasets: [{
    data: [25, 30, 20, 25],
    backgroundColor: ["#2196F3", "#4CAF50", "#E91E63", "#FFC107"]
  }]
};

var ctxCategory = document.getElementById('categoryPieChart').getContext('2d');

var myPieChart = new Chart(ctxCategory, {
  type: 'pie',
  data: categoryData,
  options: {
    responsive: false, 
    plugins: {
      title: {
        display: true,
        text: 'Diagramme circulaire des catégories',
        font: {
          size: 20 
        }
      }
    }
  }
});
</script><br><br>




        </main>
        
    </div>
</div>

<!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
