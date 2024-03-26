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

    <div class="d-flex justify-content-start bg-light">
        <div>
            <img src="../assets/images/jeu/battle-talent.jpg" style="width: 500px" class="m-3">
        </div>
        <div class="d-flex flex-column mb-3 mx-5">

            <div> <h1 class="m-3 text-center">Battle Talent</h1></div>

            <div class="text-center m-3">Battle Talent est un jeu de combat à l'épée roguelite stimulant basé sur la physique.
                Fatigué de combattre des ennemis ennuyeux ? Battle Talent a créé pour vous un méga donjon procédural fluide avec
                plus de 80 variantes d'ennemis, 100 armes, 60 avantages et plusieurs paysages qui changent à chaque fois.</div>

            <a class="btn btn-outline-primary my-auto mb-4 mt-3 h-100 fs-4">Acheter maintenant</a>

            <div class="mt-auto p-2">
                <div class="d-flex justify-content-evenly">

                    <div> évaluation : <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-half"></i> </div>
                    <div> date de sortie : 01/09/2023 </div>

                </div>
            </div>
        </div>
    </div>

</section>

    <section id="avis" class="bg-light">
        <div class="container">

            <h3 class="text-center fw-semibold"><i class="bi bi-stars"></i> Avis</h3>

            <p class="text-center">Ce que les utilisateurs pensent de la formation...</p>

            <ul class="list-group">
                <li class="list-group-item">
                    <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                        class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>

                    <h5> La VR c'est super :)</h5>

                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus blanditiis consectetur distinctio
                        dolorem dolorum ducimus eaque illo, labore laboriosam maiores numquam officiis omnis pariatur quaerat
                        quos rerum ut veniam vitae. </p>

                    <div class="text-secondary">Avis de Ethan le 01/09/2023</div>
                </li>

                <li class="list-group-item">
                    <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                        class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>

                    <h5> La VR c'est super :)</h5>

                    <p>Rien de plus à rajouter, la VR c'est génial :)</p>

                    <div class="text-secondary">Avis de Ethan le 01/09/2023</div>
                </li>

                <li class="list-group-item">
                    <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i
                        class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i>

                    <h5> La VR c'est super :)</h5>

                    <p>Rien de plus à rajouter, la VR c'est génial :)</p>

                    <div class="text-secondary">Avis de Ethan le 01/09/2023</div>
                </li>
            </ul>
        </div>
    </section>

</main>

<?php include_once '../menu/footer.php' ?>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>
</html>