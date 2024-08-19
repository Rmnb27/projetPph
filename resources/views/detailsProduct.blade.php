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



<br>



<!-- content -->
<form method="post" action="/commande">
    @csrf
    <input type="hidden" value = "{{ $produit->id }}" name = "idProduct">
    <section class="py-5">
    <div class="container">
        <div class="row gx-5">
            <aside class="col-lg-6">
                <div class="border rounded-4 mb-3 d-flex justify-content-center">
                <a data-fslightbox="mygallery" class="rounded-4" target="_blank" data-type="image" >
                    <img style="width: 100%; max-height: 100vh; margin: auto; " class="rounded-4 fit" src="{{ asset('uploads') }}/{{$produit ->image}} " alt="Product Image" />
                </a>

                </div>
            </aside>
            <main class="col-lg-6">
                <div class="ps-lg-3">
                    <h4 class="title text-dark">
                    {{ $produit->name }} <br />
                    </h4>
                    <div class="d-flex flex-row my-3">
                        <div class="text-warning mb-1 me-2">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="ms-1">4.5</span>
                        </div>
                        <span class="text-success ms-2">Disponible ({{ $produit->qte }} en stock) </span>
                    </div>

                    <div class="mb-3">
                        <span class="h5"></span>
                    </div>

                    <p>{{ $produit->description }}</p>

                    <hr />
                    <div class="product-price">
                    <h3><span class="price-label">Prix :</span> <span class="price-value">{{ $produit->price }} DT</span></h3>
</div>
<br><br>

                    <div class="row mb-4">
                        <div class="col-md-4 col-6">
                        </div>
                        <div class="mb-2">
                            <label class="mb-2 d-block">Quantité</label>
                            <div class="input-group mb-3" style="width: 170px;">
                                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <input type="text" name = "qte" class="form-control text-center border border-secondary" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                                <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                       <button type="submit" class="btn btn-primary shadow-0"><i class="me-1 fa fa-shopping-basket"></i> Ajouter au panier </button>
                   

                </div>
            </main>
        </div>
    </div>
</section>
</form>

<style>
    .icon-hover:hover {
        border-color: #3b71ca !important;
        background-color: white !important;
        color: #3b71ca !important;
    }

    .icon-hover:hover i {
        color: #3b71ca !important;
    }
    .product-price {
    font-family: 'Arial', sans-serif;
    font-size: 16px;
    color: #333;
    padding: 5px;
    border-radius: 5px;
    background-color: #f4f4f4;
}

.price-label {
    font-weight: bold;
    margin-right: 5px;
}

.price-value {
    color: #ff6600;
    font-weight: bold;
}

</style>


 


    


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