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
    <title><?= GetConfig::GetConfigVar("project_name")['content'] ?> - Mes services</title>
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
                    <h6 class="font-weight-bolder text-white mb-0">Mes services</h6>
                </nav>
                <?php include("php_views/components/navbar_user.php") ?>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4 h-100">
            <div class="row mt-lg-4 mt-2">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="d-flex">
                                <div class="avatar avatar-xl bg-gradient-dark border-radius-md p-2">
                                    <img src="https://cdn2.steamgriddb.com/icon/374d37146f8e631a2adb03fd6818b497.png" alt="slack_logo">
                                </div>
                                <div class="ms-3 my-auto">
                                    <h6>Serveur #89413</h6>
                                    <div class="avatar-group">
                                    </div>
                                </div>
                                <!--<div class="ms-auto">
                                    <div class="dropdown">
                                        <button class="btn btn-link text-secondary ps-0 pe-2"
                                            id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-lg"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3"
                                            aria-labelledby="navbarDropdownMenuLink">
                                            <a class="dropdown-item text-white" href="javascript:;">Action</a>
                                            <a class="dropdown-item text-white" href="javascript:;">Another action</a>
                                            <a class="dropdown-item text-white" href="javascript:;">Something else here</a>
                                        </div>
                                    </div>
                                </div>-->
                            </div>
                            <hr class="horizontal bg-white">
                            <div class="row">
                                <div class="col-4">
                                    <h6 class="text-sm mb-0">Type d'offre</h6>
                                    <p class="text-secondary text-sm font-weight-bold mb-0">Premium</p>
                                </div>
                                <div class="col-4 text-center">
                                    <h6 class="text-sm mb-0">État</h6>
                                    <p class="text-success text-sm font-weight-bold mb-0"><i class="fa-solid fa-circle" style="color: #2dce89;"></i>&nbsp;Actif</p>
                                </div>
                                <div class="col-4 text-end">
                                    <h6 class="text-sm mb-0">Échéance</h6>
                                    <p class="text-secondary text-sm font-weight-bold mb-0">16.05.2025</p>
                                </div>
                                <div class="btn-group mt-3" role="group" aria-label="Basic example">
                                  <a href="" type="button" target="_blank" class="btn btn-primary mb-0"><i class="fas fa-arrow-up-right-from-square"></i>&nbsp;Panel</a>
                                  <a href="" type="button" class="btn btn-primary mb-0"><i class="fas fa-cog"></i>&nbsp;Gérer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body d-flex flex-column justify-content-center text-center">
                            <a href="/user_cp/add-service">
                                <h1><i class="ni ni-app text-secondary mb-3"></i></h1>
                                <h5 class=" text-secondary"> Ajouter un service </h5>
                            </a>
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
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

</html>