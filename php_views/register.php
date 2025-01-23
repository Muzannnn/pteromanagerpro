<!--
=========================================================
* Argon Dashboard 3 - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2024 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include("components/head.php") ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="">
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-100">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                            <div class="card card-plain">
                                <div class="card-header pb-0 text-start">
                                    <h4 class="font-weight-bolder">Créer un compte</h4>
                                    <p class="mb-0">Remplissez les champs ci-dessous.</p>
                                </div>
                                <div class="card-body">
                                    <form id="form-register">
                                        <div class="mb-3">
                                            <input type="text" name="username" class="form-control form-control-lg"
                                                placeholder="Nom d'utilisateur" aria-label="Nom d'utilisateur">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="firstname" class="form-control form-control-lg"
                                                placeholder="Prénom" aria-label="Prénom">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" name="lastname" class="form-control form-control-lg"
                                                placeholder="Nom de famille" aria-label="Nom de famille">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" name="email" class="form-control form-control-lg"
                                                placeholder="Email" aria-label="Email">
                                        </div>
                                        <div class="mb-3">
                                            <input id="password" type="password" name="password"
                                                class="form-control form-control-lg" placeholder="Mot de passe"
                                                aria-label="Mot de passe">
                                            <span id="passstrength"></span>
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" name="confirm-password"
                                                class="form-control form-control-lg"
                                                placeholder="Confirmez le mot de passe"
                                                aria-label="Confirmez le mot de passe">
                                        </div>
                                        <div class="text-center">
                                            <button
                                                class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">S'enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                    <p class="mb-4 text-sm mx-auto">
                                        Vous disposez déjà d'un compte?
                                        <a href="/login" class="text-primary text-gradient font-weight-bold">Connectez
                                            vous</a>
                                    </p>

                                    <p class="mb-4 text-sm mx-auto">
                                        <a href="/home" class="text-primary text-gradient font-weight-bold">Retourner à
                                            l'accueil</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
                            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                                style="background-image: url('<?= GetConfig::GetConfigVar("login_background")['content'] ?>');
          background-size: cover;">
                                <span class="mask bg-gradient-primary opacity-6"></span>
                                <h4 class="mt-5 text-white font-weight-bolder position-relative">
                                    <?= GetConfig::GetConfigVar("project_name")['content'] ?>
                                </h4>
                                <p class="text-white position-relative">
                                    <?= GetConfig::GetConfigVar("slogan")['content'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!--   Core JS Files   -->
    <?php include("components/foot.php") ?>
    <script src="/server/api/js/register.js"></script>
</body>

</html>