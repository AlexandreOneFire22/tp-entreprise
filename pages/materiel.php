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


    <section class="mt-5 mb-5">
            <div class="container">

                <h3 class="text-center fw-semibold">Tarifs</h3>

                <p class="text-center text-body-secondary mb-4">Choisir le bon plan adapté à vos besoins</p>

                <div class="row">
                    <div class="col col-12 col-lg-3">
                        <div class="card mb-3 mx-0 border-0 mt-4" style="height: 540px">

                            <img src="../assets/images/materiel/casque_VR.webp" class="card-img-top w-75 mx-auto">

                            <div class="card-body text-center w-75 mx-auto">

                                <h4 class="card-title fw-semibold pt-3"> Starter Edition</h4>

                                <h2 class="fs-4 text-primary fw-bold">349.99€</h2>

                                <p class="card-text d-lg-block d-none"> Casque VR </p>
                                <a class="btn btn-outline-primary">Acheter maintenant</a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-lg-3">
                        <div class="card mb-0 mx-0 border-2 border-primary" style="height: 565px">
                            <p class="text-primary bg-light m-0 text-center"> Le plus populaire</p>
                                <img src="../assets/images/materiel/pc.jpg" class="card-img-top">

                                <div class="card-body text-center w-75 mx-auto">
                                    <h4 class="card-title fw-semibold pt-3"> Complete Edition</h4>

                                    <h2 class="fs-4 text-primary fw-bold">1299.99€</h2>

                                    <p class="card-text d-lg-block d-none"> Casque VR / PC </p>
                                    <a class="btn btn-outline-primary">Acheter maintenant</a>
                                </div>
                        </div>
                    </div>


                    <div class="col col-12 col-lg-3">
                        <div class="card mb-3 mx-0 border-0 mt-4" style="height: 540px">

                            <img src="../assets/images/materiel/full.jpg" class="card-img-top">

                            <div class="card-body text-center w-75 mx-auto">

                                <h4 class="card-title fw-semibold pt-3"> Ultimate Edition</h4>

                                <h2 class="fs-4 text-primary fw-bold">1599.99€</h2>

                                <p class="card-text d-lg-block d-none"> Casque VR / PC / Full body tracking </p>
                                <a class="btn btn-outline-primary">Acheter maintenant</a>
                            </div>
                        </div>
                    </div>

                    <div class="col col-12 col-lg-3">
                        <div class="card mb-3 mx-0 border-0 mt-4" style="height: 540px">

                            <img src="../assets/images/materiel/combinaison.jpg" class="card-img-top">

                            <div class="card-body text-center w-75 mx-auto">

                                <h4 class="card-title fw-semibold pt-3"> God Edition</h4>

                                <h2 class="fs-4 text-primary fw-bold">2499.99€</h2>

                                <p class="card-text d-lg-block d-none"> Casque VR / PC / Full body tracking / Combinaison haptique </p>
                                <a class="btn btn-outline-primary">Acheter maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="mt-5 mb-5">
        <div class="container">

            <h3 class="text-center fw-semibold">Au programme...</h3>

            <p class="text-center text-body-secondary">Un rapide aperçu de nos produit </p>

            <div class="row align-self-center align-items-center align-content-center px-3 text-center justify-content-evenly">
                <div class="col p-0 col-12 col-lg-6" style="width: 450px">

                    <img src="../assets/images/VR2.jpg" class="mx-auto card-img-top" style="height: 290px">

                </div>


                <div class="col p-0 col-12 col-lg-6">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button bg-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Casque VR
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show bg-light"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Un casque de réalité virtuelle autonome pour accéder à ce nouvel environnement
                                    pouvant faire tourner les jeux et environnements les plus simples.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    PC
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse bg-light" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    L'ajout de l'ordinateur dans la formule permet de faire tourner une plus grande
                                    variété de jeux, il peut également supporter des jeux plus conséquents. De plus,
                                    il débloquera certaines fonctionnalités dans certains jeux.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Full body tracking
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse bg-light" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Le full body tracking permet une immersion accrue, car celui-ci traque et
                                    retransmet tout le corps dans le jeu.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-light" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Combinaison haptique
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse bg-light" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Une combinaison haptique est une combinaison à même le corps, celle-ci vibre au
                                    endroit où l'avatar (votre corps virtuel) est touché. Cela permet une meilleure immersion et surtout plus de sensation.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include_once '../menu/footer.php' ?>

<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>