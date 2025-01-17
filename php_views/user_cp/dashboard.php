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
    <title><?= GetConfig::GetConfigVar("project_name")['content'] ?> - Tableau de bord</title>
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
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white"
                                href="/home">Accueil</a></li>
                        <li class="breadcrumb-item text-sm text-white active" aria-current="page">Espace client</li>
                    </ol>
                    <h6 class="font-weight-bolder text-white mb-0">Tableau de bord</h6>
                </nav>
                <?php include("php_views/components/navbar_user.php") ?>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4 h-100">
            <div class="row">
                <div class="col-xl-4 col-sm-12 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Vos services</p>
                                        <h5 class="font-weight-bolder">
                                            4
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                        <i class="ni ni-app text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-12 mb-xl-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Factures impayées</p>
                                        <h5 class="font-weight-bolder">
                                            0
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                        <i class="fa-solid fa-file-invoice text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-12">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-8">
                                    <div class="numbers">
                                        <p class="text-sm mb-0 text-uppercase font-weight-bold">Tickets de support</p>
                                        <h5 class="font-weight-bolder">
                                            0
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-4 text-end">
                                    <div
                                        class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                        <i class="fas fa-headset text-lg opacity-10" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-3 mb-lg-0 mb-4">
                    <div class="card z-index-2 h-100">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Username</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-user "></i>
                                Vos informations vous concernant
                            </p>
                        </div>
                        <div class="card-body">
                            <h6 class="text-sm mb-0">Ilhann Musitelli</h6>
                            <h6 class="text-sm mb-0 mt-2">Route de Lamgoing 25 <br>2517 Diesse <br>Suisse</h6>
                            <a href="/user_cp/profile" class="btn btn-primary btn-sm mt-4">Mettre à jour</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card h-100 p-0">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Tickets</h6>
                            <p class="text-sm mb-0">
                                <i class="fa fa-headset "></i>
                                Vos derniers tickets sont représentés ici.
                            </p>
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                            <div class="m-auto h-100">
                                <h1 class="text-white text-center"><i class="fas fa-ticket"></i></h1>
                                <p class="text-white text-center">Aucun ticket d'ouvert</p>
                                <a href="/user_cp/support" class="btn btn-primary btn-sm mt-2">Ouvrir un maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="card h-100 p-0">
                        <div class="card-header pb-0 pt-3 bg-transparent">
                            <h6 class="text-capitalize">Vos services</h6>
                            <p class="text-sm mb-0">
                                <i class="ni ni-app"></i>
                                Les services que vous avez chez nous.
                            </p>
                        </div>
                        <div class="card-body d-flex flex-column h-100">
                            <div class="m-auto h-100 w-100">
                                <h1 class="text-white text-center"><i class="ni ni-app"></i></h1>
                                <p class="text-white text-center">Vous n'avez aucun services chez nous</p>
                                <div class="button w-100 d-flex">
                                    <a href="/user_cp/add-service" class="btn btn-primary btn-sm mt-2 mx-auto">Ajouter un service</a>
                                </div>
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
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>

</html>