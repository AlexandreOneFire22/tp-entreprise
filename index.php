<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
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

    <?php include_once 'menu/menu.php' ?>

</header>
<main>

    <!--    Présentation-->

    <section id="presentation" class="container mt-3">

                <div class="row justify-content-between align-middle">
                    <div class="col col-12 col-md-6 align-self-center">
                        <div class="card border-0 mx-auto text-center">
                            <h3 class="card-title fs-1">Réalité virtuelle</h3>
                            <h5 class="card-title fs-4 text-secondary">Un nouveau monde à crée</h5>
                            <p class="card-text fs-5">Le monde virtuel est un monde différent du réel, car celui-ci est régi par des règles différentes des nôtres.
                                Évidemment, il y a tout de même majoritairement des points communs, pourtant ce sont ses différences qui le rendent si attirant.
                                <br> Découvrez les par vous même.</p>
                            <a href="pages/materiel.php" class="btn btn-primary">Équipez vous maintenant</a>
                        </div>
                    </div>
                    <div class="d-md-block d-none col align-items-center">
                        <img src="./assets/images/VR.jpg" height="400"
                             class="card-img-top "
                             alt="...">
                    </div>
                </div>
    </section>


    <!--    Contact-->
    <section id="contact" class="container">
            <h3 class="text-center fw-semibold">Contactez-nous !</h3>

            <p class="text-center text-body-secondary">Vous avez une question ? Remplissez le formulaire...</p>

            <div class="mb-4">
                <p>Votre email :</p>
                <div class="input-group">
                <span class="input-group-text" id="basic-addon1">
                  <i class="bi bi-envelope-fill"></i>
                </span>
                    <input type="text" class="form-control" placeholder="ex: ethan@gmail.fr" aria-label="Input group example" aria-describedby="basic-addon1">
                </div>
            </div>

            <div class="mb-4"><p>Votre nom :</p>
                <div class="input-group">
                <span class="input-group-text" id="basic-addon2">
                  <i class="bi bi-person-fill"></i>
                </span>
                    <input type="text" class="form-control" placeholder="ex: Ethan" aria-label="Input group example" aria-describedby="basic-addon2">
                </div>
            </div>

            <div class="mb-5">
                <p>Quelle est le thème de votre question ?</p>
                <div class="input-group">
                <span class="input-group-text" id="basic-addon3">
                  <i class="bi bi-chat-right-dots-fill"></i>
                </span>
                    <select class="form-select form-select-sm" aria-label="Small select example">
                        <option value="1">équipement</option>
                        <option value="2">jeu/application</option>
                        <option value="3">livraison</option>
                    </select>
                </div>
            </div>

            <div class="mb-4 mt-5">
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                  placeholder="Votre question"></textarea>
            </div>

            <p class="text-center"><a class="btn btn-secondary">Envoyer</a></p>
    </section>
</main>

<?php include_once "menu/footer.php" ?>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>