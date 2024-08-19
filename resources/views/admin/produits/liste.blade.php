<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parapharmacie produits </title>
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
                        <a class="nav-link active" href="{{route('allProduct')}}">
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
</li><br><br><br><br>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Liste des produits</h1>
                <!-- modal d'ajout -->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">ajouter un produit</button>


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
            <th>Description</th>
            <th>prix</th>
            <th>quantité </th>
           
            <th>image</th>
            <th>action</th>



        </tr>
    </thead>
    <tbody>
    @if (count($produits) > 0)
           @foreach ($produits as $produit)
        <tr>
            <th>{{$produit->id}}</th>
            <th>{{$produit->name}}</th>
            <th>{{$produit->description}}</th>
            <th>{{$produit->price}}</th>
            <th>{{$produit->qte}}</th>
            <th><img src="{{ asset('uploads') }}/{{$produit ->image}} " alt="" width="80"></th>
            <th>
               <a data-toggle="modal" data-target="#editModal{{$produit->id}}" class="fas fa-pencil-alt green-icon fa-lg" title="Modifier le produit"></a>
               <span class="icon-space"></span>
               <a href = "/deleteprod/{{$produit->id}}" class="fas fa-trash-alt red-icon fa-lg" title="Supprimer le produit"></a>
            </th>

        
            @endforeach
        @else 
        <tr><th>no data</th></tr>
        @endif




<style>
.green-icon {
  color: green;
}

.red-icon {
  color: red;
}
.icon-space {
  margin-right: 10px;}
</style>

        </tr>


        
    </tbody>
</table>

 <!-- modal d'ajout -->
<form action ="{{route('addProduct')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white"> 
        <h5 class="modal-title" id="exampleModalLabel">Nouveau produit</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label for="categoryName" class="font-weight-bold">Nom :</label> 
          <input type="text" class="form-control" id="productName" placeholder="Entrez le nom du produit"name="name">
        </div>
        <div class="form-group">
          <label for="categoryDescription" class="font-weight-bold">Description :</label>
          <textarea class="form-control" id="productDescription" placeholder="Entrez la description du produit" name="description"></textarea>
        </div>
        <div class="form-group">
          <label for="categoryName" class="font-weight-bold">quantité :</label> 
          <input type="number" class="form-control" id="productcategoryName" placeholder="Entrez la quantité disponible" name="qte">
        </div>
        <div class="form-group">
          <label for="categoryName" class="font-weight-bold">prix :</label> 
          <input type="number" class="form-control" id="productPrice" placeholder="Entrez le prix du produit" name="price">
        </div>
        <div class="form-group">
          <label for="categoryName" class="font-weight-bold">image :</label> 
          <input type="file" class="form-control" id="productPrice" placeholder="Entrez l'image de produit" name="image">
          </div>

          <label for="category" class="col-form-label" >Category : </label>
          <select class="form-control" name="category_id" id="category">
            @foreach($categories as $category) 
                   <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
          </select>
        

      </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-success">Ajouter</button>
      </div>
    </div>
  </div>
</div>
</form>





 <!-- modal de modification -->
<form action="/produitEdit" method="post">   
        @csrf 
@foreach ($produits as $produit)
<div class="modal fade" id="editModal{{ $produit->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white"> 
        <h5 class="modal-title" id="exampleModalLabel">Modifier le produit</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"> 
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <div class="form-group">
          <label for="productName" class="font-weight-bold">Nom :</label> 
          <input type="text" class="form-control" id="productName" name ="name" value="{{ $produit ->name}}">
        </div>
        <div class="form-group">
          <label for="productDescription" class="font-weight-bold">Description :</label>
          <textarea class="form-control" id="productDescription" name="description">{{ $produit ->description}}</textarea>
        </div>
        <div class="form-group">
          <label for="productName" class="font-weight-bold">prix :</label> 
          <input type="number" class="form-control" id="productName" name ="price" value="{{ $produit ->price}}">
        </div>
        <div class="form-group">
          <label for="productName" class="font-weight-bold">quantité :</label> 
          <input type="number" class="form-control" id="productName" name ="qte" value="{{ $produit ->qte}}">

          <input type="hidden" value="{{$produit ->id}}" name="id">    <!-- hidden bech matwarrich l id fel url -->
        </div>
        

       
        
        
      </div>

      <div class="modal-footer">
        <button type="delete" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="submit" class="btn btn-success">Modifier</button>
      </div>
    </div>
  </div>
</div>
@endforeach
</form>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
