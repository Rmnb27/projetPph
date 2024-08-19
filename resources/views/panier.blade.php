<!DOCTYPE html>
<html>
<head>
    <title>Panier</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>
<body>
@include('template.header') <br><br>   


<center>
 <h1>Votre historique d'achats 🛒</h1>  <br> 
<table class="commande-table">
    <thead>
        <tr>
            <th>Produits</th>
            <th>Prix unitaire</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($commande->ligneCommandes as $c)
        <tr>
            <td>{{$c->product->name}}</td>
            <td>{{$c->product->price}} DT</td>
            <td>{{$c->qte}}</td>
            <td>{{$c->product->price * $c->qte }} DT</td>
        </tr>
        @endforeach
    </tbody>
</table>
<style>
   .commande-table {
    width: 70%;
    border-collapse: collapse;
}

.commande-table th, .commande-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.commande-table th {
    background-color: #f2f2f2; /* Couleur de fond pour les en-têtes de colonne */
    font-weight: bold;
    color: #333; /* Couleur du texte pour les en-têtes de colonne */
}

.commande-table tr:nth-child(even) {
    background-color: #f9f9f9; /* Couleur de fond pour les lignes paires */
}

.commande-table tr:hover {
    background-color: #a1f0a5; /* Couleur de fond pour les lignes au survol */
}

.commande-table td {
    color: #666; /* Couleur du texte pour les cellules */
}


</style>

@include('template.footer');
</body>
</html>
