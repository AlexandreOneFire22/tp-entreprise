<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        section {
            padding: 40px 0;
        }
    </style>
    <title>VR Industry</title>
</head>
<body>
<!--    Barre de navigation-->
<header>

    <?php include_once '../menu/menu.php' ?>

</header>
<main>

    <section class="container mt-3">

        <div class="row justify-content-between align-middle">
            <div class="col col-12 col-md-6 align-self-center">
                <div class="card border-0 mx-auto text-center">
                    <h3 class="card-title fs-2">notre entreprise</h3>
                    <p class="card-text fs-5">Notre entreprise à pour objectif principale de vous transmettre la passion que nous mettons dans nos créations.
                        <br>C'est pourquoi nous avons pris la décision de rester en effectif restrein, cela nous permet de nous focaliser
                        sur la qualitée de nos produits, et non la quantitée pour vous offrir la meilleur experience possible.</p>

                </div>
            </div>
            <div class="d-md-block d-none col align-items-center">
                <img src="../assets/images/personnel/organigramme.png" height="400px">
            </div>
        </div>
    </section>


    <section class="container mt-3">

        <div class="d-flex justify-content-evenly">
            <div class="d-flex">
                <img src="../assets/images/personnel/photo2.png" width="100" class="m-2">
                <p class="align-self-center">En tant que PDG mon objectif principal est de vous offrir la meilleur expérience possible, vous êtes notre priorité.</p>
            </div>
            <div class="d-flex">
                <img src="../assets/images/personnel/licorne2.jpg" width="100" class="m-2">
                <p class="align-self-center">En tant que Co-directeur mon rôle est d'apporte un second point de vue.....</p>
            </div>
        </div>

    </section>


    <section class="container mt-3">

        <h2 class="mb-4 text-gris2">Fiche de poste :</h2>

        <div class="row">

            <div class="col p-0 col-4 col-lg-3 mb-5 text-center">
                <a href="../assets/fiche_de_poste/fiche-de-poste-PDG.pdf" class="text-black btn btn-warning fs-5">PDG</a>
            </div>

            <div class="col p-0 col-4 col-lg-3 mb-5 text-center">
                <a href="../assets/fiche_de_poste/fiche-de-poste-co-directeur.pdf" class=" text-black btn btn-warning fs-5">co-directeur</a>
            </div>


            <div class="col p-0 col-4 col-lg-3 mb-5 text-center">
                <a href="../assets/fiche_de_poste/fiche-de-poste-chef-jv.pdf" class=" text-black btn btn-warning fs-5">chef du pôle jeu vidéo</a>
            </div>

            <div class="col p-0 col-4 col-lg-3 mb-5 text-center">
                <a href="../assets/fiche_de_poste/fiche-de-poste-chef-m.pdf" class=" text-black btn btn-warning fs-5">chef du pôle matériel</a>
            </div>

            <div class="col p-0 col-4 col-lg-3 mb-5 text-center">
                <a href="../assets/fiche_de_poste/fiche-de-poste-employe-jv.pdf" class=" text-black btn btn-warning fs-5">Employé du pôle jeu vidéo</a>
            </div>

            <div class="col p-0 col-4 col-lg-3 mb-5 text-center">
                <a href="../assets/fiche_de_poste/fiche-de-poste-employe-m.pdf" class=" text-black btn btn-warning fs-5">Employé du pôle matériel</a>
            </div>
        </div>

    </section>


</main>

<?php include_once '../menu/footer.php' ?>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>