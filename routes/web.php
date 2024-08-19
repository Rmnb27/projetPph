<?php

use App\Http\Controllers\homeController ;
use App\Http\Controllers\registerController ;  
use App\Http\Controllers\loginController ;
use App\Http\Controllers\adminController ;

use App\Http\Controllers\categoryController ;
use App\Http\Controllers\clientController ;
use App\Http\Controllers\commandeController ;
use App\Http\Controllers\ProductController ;

use App\Http\Controllers\dashboardClient ;



use App\Http\Controllers\testController ; 

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth','role:admin'])->group(function() {
    route::get('/dashboard',[adminController::class, 'dashboardPage'])->name('dashboard');


    route::get('/categoryAdmin',[categoryController::class, 'categoryPage'])->name('category');   //afficher la page de liste des categories 

    route::post('/categoryAdmin',[categoryController::class, 'addCategory'])->name('addcategory');  //ajouter categorie 

    route::get('/edit/{id}',[categoryController::class, 'edit'])->name('modifier');   //afficher le formulaire de mise à jour de catégorie
    route::post('/edit/{id}',[categoryController::class, 'update'])->name('modifier');  //pour traiter la mise à jour de catégorie 
    
    route::get('/delete/{id}',[categoryController::class, 'delete'])->name('delete');  //supp categ selon id 
    route::get('/categoryAdmin',[categoryController::class, 'allcategory'])->name('category');  

   
    route::get('/clientsAdmin',[clientController::class, 'listeClients'])->name('client');    //afficher la page de liste des clients 

    route::get('/commandesAdmin',[commandeController::class, 'listeCommandes'])->name('commande');     
 


    route::post('/produitAdmin',[ProductController::class, 'addProduct'])->name('addProduct');  //ajouter produit
    route::get('/produitAdmin',[ProductController::class, 'allProduct'])->name('allProduct');  //show products

    route::post('/produitEdit', [ProductController::class, 'update']);    //modifier produit dans un modal 

    route::get('/deleteprod/{id}',[ProductController::class, 'delete'])->name('deleteprod');  //supp produit selon id 

    //route::get('/profileAdmin',[adminController::class, 'editProfile'])->name('editProfile'); 

    Route::get('/profileAdmin', function () {
        $adminData = Auth::user();
        return view('admin.profile', ['adminData' => $adminData]);
    });

    Route::post('/update-profile', [AdminController::class, 'updateProfile']);

});



Route::middleware(['auth','role:user'])->group(function() {
  
    Route::get('/profileUser', function () {
        $adminData = Auth::user();
        return view('profileUser', ['adminData' => $adminData]);
    });

    Route::post('/update-profile', [AdminController::class, 'updateProfile']);
    Route::post('/commande', [commandeController::class, 'store']);
    
    Route::get('/listePanier', [commandeController::class, 'cartPage']);

    }); 

    
route::get('/home',[homeController::class, 'index'])->name('home');

route::get('/test',[testController::class, 'afficherPage'])->name('test');
    
route::post('/registerclient',[registerController::class, 'registerPost'])->name('register');
route::get('/registerclient',[registerController::class, 'registerPage'])->name('register'); 


route::post('/login',[loginController::class, 'loginPost'])->name('login');
route::get('/login',[loginController::class, 'loginPage'])->name('login'); 

route::get('/logout',[adminController::class, 'logout'])->name('logout'); 



route::get('/products/{categoryId}',[dashboardClient::class, 'index'] )->name('dashboardClient');   //affiche produits selon une categorie 

route::get('/dashboardClient',[dashboardClient::class, 'allProduct'])->name('dashboardClient');  

route::post('/filterByName',[dashboardClient::class, 'filterByName'])->name('filterByName');

route::get('/detailProduct/{id_produit}',[dashboardClient::class, 'detailProduct'])->name('detailProduct');  
