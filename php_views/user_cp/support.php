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
    <title><?= GetConfig::GetConfigVar("project_name")['content'] ?> - Support</title>
    <?php include("php_views/components/head.php") ?>
</head>


<body class="g-sidenav-show dark-version bg-gray-600 h-100">
    <div class="min-height-300 bg-dark position-absolute w-100"></div>
    <?php include("php_views/components/sidebar_user.php") ?>
    <main class="main-content position-relative border-radius-lg h-100">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
            data-scroll="false">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="/home">Accueil</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Espace client</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Support</h6>
                </nav>
                <?php include("php_views/components/navbar_user.php") ?>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4 h-100">
            <div class="row mt-lg-4 mt-2">
                <div class="col-lg-5 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Créer un ticket</h6>
                            <p class="text-sm mb-0">
                                <i class="fas fa-headset"></i>
                                Un problème ? Pas de soucis notre équipe de support est là pour vous.
                            </p>
                        </div>
                        <div class="card-body p-3">
                            <label class="form-label">Adresse EMail</label>
                            <div class="form-group">
                                <input class="form-control disabled" disabled="disabled" type="email"
                                    value="ilhann.musi@gmail.com" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="row mb-2">
                                <div class="col-6">
                                    <label class="form-label">Catégorie</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <?php
                                        
                                        foreach(Support::GetTicketsReasons() as $tr){
                                        
                                        ?>
                                        <option value="<?= $tr['id'] ?>" ><?= $tr['reason'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label">Service lié</label>
                                    <div class="input-group">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Aucun</option>
                                            <option value="1">Serveur #12595</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <label class="form-label">Objet</label>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Raison du ticket"
                                    onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <label class="form-label">Message</label>
                            <div class="form-group">
                                <div id="editor">
                                    <p>Décrivez votre problème.</p>
                                </div>
                            </div>
                            <button class="btn bg-gradient-dark w-100 mb-0">Ouvrir un ticket</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 mb-4">
                    <div class="card">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Tickets ouvert</h6>
                            <p class="text-sm mb-0">
                                <i class="fas fa-ticket"></i>
                                Retrouvez la liste de vos tickets.
                            </p>
                        </div>
                        <div class="card-body p-3">

                            <div class="m-auto h-100">
                                <h1 class="text-white text-center"><i class="fas fa-ticket"></i></h1>
                                <p class="text-white text-center">Aucun ticket d'ouvert</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include("php_views/components/footer.php") ?>
        </div>
    </main>

    <!--   Core JS Files   -->
    <?php include("php_views/components/foot.php") ?>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow' // Specify theme in configuration
        });
    </script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

</html>