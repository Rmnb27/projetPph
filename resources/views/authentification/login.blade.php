<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>

<body>

@include('template.header')


<div class="row justify-content-center mt-5">
    <div class="col-lg-8">
        <div class="card" style="max-height: 600px;"> 
            <div class="card-header">
                <center><h2 class="card-title" style="color: black;">Adhérer à notre Club de Bien-Être</h2></center>
            </div>
            <div class="card-body">
                @if (Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('error')}}
                    </div>
                @endif

                <div class="row">
                    <div class="col-lg-6" style="border-right: 2px solid #ccc;">
                        <center><img src="img/login.jpg" alt="Image" class="img-fluid" style="max-height: 450px; width: auto;">
                    </div>
                    <div class="col-lg-6"><br><br><br>
                        <div class="form-container">
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Identifiant Email :</label>
                                    <input type="email" name="email" class="form-control" id="email" placeholder="VotreNom@example.com" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Code secret :</label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Entrez votre mot secret" required>
                                </div><br>
                                <div class="mb-3">
                                    <div class="d-grid">
                                        <button class="btn btn-primary">Rejoignez-nous</button>
                                    </div><br>

                                    <div class="mb-3 text-center">
                                        <p>Nouveau ici ? <a href="{{route('register')}}">Créez un compte rapidement.</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>





    @include('template.footer')

</body>

</html>