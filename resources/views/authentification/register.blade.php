<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>

@include('template.header')

<div class="row justify-content-center mt-4">
    <div class="col-sm-6">
        <div class="card ml-8"><br>
            <h2 class="card-title" ><center>  Enchantés de vous avoir ici !</h2>
            
            <div class="card-body row" >
            <div class="col-md-6">
                    <!-- Partie pour la photo -->
                    <img src="img/register.png" alt="Votre photo" class="img-fluid" style="height: 420px; width: 450px;">
                </div>
                <div class="col-md-6"><br><br>
                    <!-- Partie pour les inputs -->
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show custom-alert" role="alert">
                            <i class="fas fa-check-circle"></i>
                            {{Session::get('success')}}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <form action="{{ route ('register') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom : </label>
                            <input type="text" name="nom" class="form-control" id="name" placeholder="Saisir votre nom ici" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Adresse électronique :</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="VotreNom@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe :</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot de passe" required>
                        </div><br>

                        <div class="mb-3">
                            <div class="d-grid">
                                <center><button class="btn btn-primary">Configurer votre compte!  </button>
                            </div><br>
                        </div>
                    </form>
                </div>
              
            </div>
        </div>
    </div>
</div>





    @include('template.footer')

</body>

</html>