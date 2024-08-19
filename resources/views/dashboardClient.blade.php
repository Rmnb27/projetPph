<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-B4dPqQhykCPqfQ1uZLbhJZTC+KGrQTXyHjBYKCTsoNIzhXuI6MWiQFnH5H8z3B8M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iK25FOejwoxp72jepuX/8AHRfoD+5uPWHa8fN5YIbO1bPKtstXion1I6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">


    </head>

<body>
@include('template.header')



<!-- Carousel Start -->
<br>
<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                 
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('img/carousel-1.jpg') }}" alt="Image du carousel">

                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                    <div class="text-start p-5" style="max-width: 900px; text-align: left;">
                        
                    </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            
                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-3.jpg') }}" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('img/carousel-4.jpg') }}" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                          
                           
                        </div>
                    </div>
                </div>



            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div> <br><br><br><br><br><br><br>

    

    <div class="container-fluid banner mb-5" ><a name="categories"></a> <!-- quand je tape a categories dans le navbar les catg s'affiche dans la m page  -->
    <div class="container">
    <div class="mx-auto text-center mb-5" style="max-width: 500px;">
    <h2 class="text-primary text-uppercase">Catégories</h2>
    <h6 class="display-5">Explorez un Monde de Bien-être!</h6>
</div>

<div class="row gx-0">
@foreach ($categories as $category)
<div class="col-md-3">
    <a href="/products/{{$category->id}}" class="category-link">
        <div class="category-card custom-card bg-success text-white p-7">
            <img src="{{ asset('img/category.jpg') }}" alt="Santé">
            <div class="category-details">
            <h1 class="mb-5" style="color: green;">{{$category->name}}</h1>
                <p class="category-description" style="font-weight: bold; color: black;">{{$category->description}}</p>
            </div>
        </div>
    </a>
</div>

    @endforeach
  
</div>

<style>
    .category-link {
    text-decoration: none;
    color: inherit;
}

.custom-card {
    width: 300px;
    height: 500px;
    border-radius: 10px; 
    overflow: hidden;
    transition: transform 0.3s;
    position: relative;
}

.custom-card:hover {
    transform: scale(1.10);
}

.custom-card img {
    width: 100%; /* Ajustement de la taille de l'image à la carte */
    height: 100%; /* Ajustement de la taille de l'image à la carte */
}

.category-details {
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate(-50%, -50%);
    opacity: 0;
    transition: opacity 0.3s;
    text-align: center;
}

.category-description {
    font-size: 17px;
    margin-top: 10px;
}

.custom-card:hover .category-details {
    opacity: 1; 
}

</style>








    </div>
</div>


    <!-- Products Start -->
    <style>
    .card {
        position: relative;
        overflow: hidden;
    }

    .card-buttons {
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 50%; /* Ajustez la largeur des boutons selon vos préférences */
        display: flex;
        justify-content: space-between;
        padding: 10px;
        background-color: rgba(255, 255, 255, 0.8);
        visibility: hidden;
        opacity: 0;
        transition: opacity 0.3s;
        border-radius: 10px 10px 10px 10px; /* Coins arrondis en bas */
    }

    .card-buttons a {
        flex: 1;
        text-align: center;
        font-size: 20px; /* Ajustez la taille de l'icône selon vos préférences */
    }

    .card-buttons a:hover {
        opacity: 0.8; /* Légère opacité au survol */
    }

    .card:hover .card-buttons {
        visibility: visible;
        opacity: 1;
    }
</style>
<br><br><br><br>
<div class="container-fluid py-6" id="products">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="text-primary text-uppercase">Boutique</h2>
            <h6 class="display-5">Découvrez notre sélection!</h6>
        </div>

        <div class="row">
            @foreach ($produits as $produit)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('uploads') }}/{{$produit->image}}" alt="imageProd">
                    <div class="card-body">
                        <h6 class="card-title">{{$produit->name}}</h6>
                        <input type="hidden" name="idProduit" value= "{{$produit->id}}">
                        <h4 class="card-text" style="color: green;">{{ $produit->price . ' DT ' }}</h4>
                        <div class="card-buttons">
                            <a href="/detailProduct/{{$produit->id}}" class="btn btn-primary"><i class="fas fa-eye" title="voir les détails"></i></a>
                            <a href="/detailProduct/{{$produit->id}}" class="btn btn-success"><i class="fas fa-shopping-basket" title="ajouter au panier"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

    <!-- Products End -->


   


    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-m9BGSMbDEKdVeC/5F5iWxwAx5G5F7m9b09D5JlTb/1EFQxI2Elv+dFciJqAizoM" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+Wy2OSyTAa7F2IaW8jUZnJS6T5O5tBMWOj" crossorigin="anonymous"></script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    @include('template.footer')
</body>


</html>