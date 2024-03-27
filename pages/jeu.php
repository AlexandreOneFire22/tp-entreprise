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

    <section class="mt-4 mb-5">
        <div class="container">

            <h1 class="text-center fw-semibold fs-2">Galerie</h1>

            <p class="text-center text-body-secondary mb-4">Choisir les jeux qui vous attire.</p>

            <div class="row mb-4">
                <div class="col col-12 col-md-6 col-xl-3 h-100">
                    <div class="card mb-3 mx-0 border-0 mt-4">

                        <img src="../assets/images/jeu/VRchat.jpg" class="card-img-top img-fluid">

                        <div class="card-body text-center w-75 mx-auto">

                            <h4 class="card-title fw-semibold text-gris4"> VRchat</h4>

                            <h2 class="fs-4 text-primary fw-bold">FREE</h2>

                            <p class="card-text d-lg-block d-none">VRchat est réseau social sous forme d'un jeu...</p>



                            <a class="btn btn-outline-primary" href="../jeu/VRchat.php">Acheter maintenant</a>
                        </div>
                    </div>
                </div>


                <div class="col col-12 col-md-6 col-xl-3 h-100">
                    <div class="card mb-3 mx-0 border-0 mt-4">

                    <img src="../assets/images/jeu/beat-saber.jpeg" class="card-img-top img-fluid">

                    <div class="card-body text-center w-75 mx-auto">
                        <h4 class="card-title fw-semibold text-gris4"> Beat Saber</h4>

                        <h2 class="fs-4 text-primary fw-bold">29.99€</h2>

                        <p class="card-text d-lg-block d-none">Beat Saber est un jeu de rythme en VR...</p>
                        <a class="btn btn-outline-primary" href="../jeu/Beat_saber.php">Acheter maintenant</a>
                    </div>
                </div>
                </div>


                <div class="col col-12 col-md-6 col-xl-3 h-100">
                    <div class="card mb-3 mx-0 border-0 mt-4">

                        <img src="../assets/images/jeu/battle-talent.jpg" class="card-img-top img-fluid">

                        <div class="card-body text-center w-75 mx-auto">

                            <h4 class="card-title fw-semibold text-gris4"> battle talent</h4>

                            <h2 class="fs-4 text-primary fw-bold">39.99€</h2>

                            <p class="card-text d-lg-block d-none"> Battle Talent est un jeu de combat à l'épée... </p>
                            <a class="btn btn-outline-primary" href="../jeu/Battle_talent.php">Acheter maintenant</a>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-md-6 col-xl-3 h-100">
                    <div class="card mb-3 mx-0 border-0 mt-4">

                        <img src="../assets/images/jeu/poker.jpg" class="card-img-top img-fluid" style="height: 180px">

                        <div class="card-body px-1 text-center w-75 mx-auto">

                            <h4 class="card-title fw-semibold text-gris4">Vegas Infinite</h4>

                            <h2 class="fs-4 text-primary fw-bold">FREE</h2>

                            <p class="card-text d-lg-block d-none">Vegas Infinite est un monde de divertissement sans limites...</p>
                            <a class="btn btn-outline-primary" href="../jeu/Vegas_Infinte.php">Acheter maintenant</a>
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