<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil user </title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Include custom CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">


</head>


<body>
       
@include('template.header')

       
<br><br>
<div class="container">
  <div class="left">
  <form action="{{ url('/update-profile') }}" method="post">
    @csrf
    <div class="header">
    <h2 class="animation a1" style="color: green;">Salut ! De retour parmi nous</h2>
      <h4 class="animation a2">Votre profil, vos données : personnalisez-les selon vos préférences.</h4>
    </div>
    <div class="form">
    <input type="text" class="form-field animation a2" id="name" name="name" value="{{ $adminData->name }}">
    <input type="email" class="form-field animation a3" id="email" name="email" value="{{ $adminData->email }}">
    <input type="password" class="form-field animation a4" id="password" name="password" placeholder="modifier votre mot de passe"">
    <button type="submit" class="animation a6">
         <i class="far fa-save me-2"></i> Enregistrer
     </button>

    </div>
  </div>
  <div class="right">
  <img src="img/profile.png" alt="image" style="width: 100%; height: 100%; object-fit: cover;">
</form>
</div>
</div>

<style>
    * { box-sizing: border-box; }
@import url('https://fonts.googleapis.com/css?family=Rubik:400,500&display=swap');


body {
  font-family: 'Rubik', sans-serif;
}

.container {
  display: flex;
  height: 90vh;
}

.left {
  overflow: hidden;
  display: flex;
  flex-wrap: wrap;
  flex-direction: column;
  justify-content: center;
  animation: left 1s both 1s;
  width: 100%; 
}





.header > h2 {
  margin: 0;
  color: #4f46a5;
}

.header > h4 {
  margin-top: 10px;
  font-weight: normal;
  font-size: 15px;
  color: rgba(0,0,0,.4);
}

.form {
  max-width: 70%;
  display: flex;
  
  flex-direction: column;
}

.form > p {
  text-align: right;
}

.form > p > a {
  color: #000;
  font-size: 14px;
}

.form-field {
  height: 46px;
  padding: 0 16px;
  border: 2px solid #ddd;
  border-radius: 4px;
  font-family: 'Rubik', sans-serif;
  outline: 0;
  transition: .1s;
  margin-top: 20px;
}

.form-field:focus {
  border-color: #2df10f;
}

.form > button {
  padding: 12px 10px;
  border: 0;
  background: linear-gradient(to right, #21eb38 0%,#00ffd5 100%);  
  border-radius: 3px;
  margin-top: 10px;
  color: #fff;
  letter-spacing: 1px;
  font-family: 'Rubik', sans-serif;
}

.animation {
  animation-name: move;
  animation-duration: .4s;
  animation-fill-mode: both;
  animation-delay: 2s;
}

.a1 {
    
  animation-delay: 2s;
}

.a2 {
  animation-delay: 2.1s;
}

.a3 {
  animation-delay: 2.2s;
}

.a4 {
  animation-delay: 2.3s;
}

.a5 {
  animation-delay: 2.4s;
}

.a6 {
  animation-delay: 2.5s;
}

@keyframes move {
  0% {
    opacity: 0;
    visibility: hidden;
    transform: translateY(-40px);
  }

  100% {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
  }
}

@keyframes left {
  0% {
    opacity: 0;
    width: 0;
  }

  100% {
    opacity: 1;
    padding: 20px 40px;
    width: 640px;
  }
}
</style>




@include('template.footer')


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
