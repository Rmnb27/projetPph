<!DOCTYPE html>
<html lang="en">


@include('template.header')



<!-- Carousel Start -->
<div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                 
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                    <div class="text-start p-5" style="max-width: 900px; text-align: left;">
                        
                    </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                            
                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                        <div class="text-start p-5" style="max-width: 900px;">
                           
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.jpg" alt="Image">
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
    <div class="col-md-3">
        <a href="health-products.html" class="category-link">
            <div class="category-card custom-card bg-success text-white p-7">
                <img src="img/santé.jpg" alt="Santé">
                <h3 class="mb-5">Santé</h3>
                <p>Énergie vitale, bien-être authentique ; une symphonie de vitalité et de sérénité pour chaque jour</p>
                <div class="category-name">Santé</div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="beauty-products.html" class="category-link">
            <div class="category-card custom-card bg-success text-white p-9">
                <img src="img/beaute.jpg" alt="Beauté">
                <h3 class="mb-3">Beauté</h3>
                <p>Découvrez une symphonie de bienfaits où chaque produit révèle le secret d'une beauté naturelle, réconfortante et inspirante pour votre routine de soins.</p>
                <div class="category-name">Beauté</div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="nutrition-products.html" class="category-link">
            <div class="category-card custom-card bg-success text-white p-7">
                <img src="img/nutrition.jpg" alt="Nutrition">
                <h3 class="mb-3">Nutrition</h3>
                <p>Dans le jardin des bienfaits, chaque produit s'épanouit comme une invitation à une vitalité naturelle, créant une expérience sensorielle harmonieuse au cœur de notre parapharmacie</p>
                <div class="category-name">Nutrition</div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="hygiene-products.html" class="category-link">
            <div class="category-card custom-card bg-success text-white p-7">
                <img src="img/hygiene.jpg" alt="Hygiène">
                <h3 class="mb-3">Hygiène</h3>
                <p>L'essence du bien-être au quotidien, des produits dédiés à votre hygiène personnelle pour une expérience de soins complète.</p>
                <div class="category-name">Hygiène</div>
            </div>
        </a>
    </div>
</div>

<style>
    .category-link {
        text-decoration: none;
        color: inherit;
    }

    .custom-card {
        width: 300px;
        height: 500px;
        border-radius: 8px; /* Ajustez selon vos préférences */
        overflow: hidden;
        transition: transform 0.3s;
  
    }

    .custom-card:hover {
        transform: scale(1.10);
    }

    .custom-card img {
    width: 400px; /* Largeur souhaitée */
    height: 500px; /* Hauteur souhaitée */
}
.category-name {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        color: #fff;
        font-weight: bold;
        font-size: 30px;
        opacity: 0; 
        transition: opacity 0.3s;
    }

    .custom-card:hover .category-name {
        opacity: 1; /* Rendre visible au survol */
    }

    
    
</style>








    </div>
</div>

    


    <!-- Products Start -->
    <div class="container-fluid py-5"><a name="products"></a>
        <div class="container">
            <div class="mx-auto text-center mb-5" style="max-width: 500px;">
                <h2 class="text-primary text-uppercase">Boutique</h2>
                <h6 class="display-5">Découvrez notre sélection!</h6>
            </div>
            @foreach ($produits as $produit)
            <div class="owl-carousel product-carousel px-5">
                <div class="pb-5">
                    <div class="product-item position-relative bg-white d-flex flex-column text-center">
                        <img class="img-fluid mb-4" src="img/product-1.png" alt="">
                        <h6 class="mb-3">{{ $produit ->name}}</h6>
                        <h5 class="text-primary mb-0">{{ $produit ->price}}</h5>
                        <div class="btn-action d-flex justify-content-center">
                            <a class="btn bg-primary py-2 px-3" href=""><i class="bi bi-cart text-white"></i></a>
                            <a class="btn bg-secondary py-2 px-3" href=""><i class="bi bi-eye text-white"></i></a>
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    @include('template.footer')
</body>

</html>