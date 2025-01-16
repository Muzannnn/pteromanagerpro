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
    <title><?= GetConfig::GetConfigVar("project_name")['content'] ?> - Ajouter un service</title>
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
                    <h6 class="font-weight-bolder text-white mb-0">Ajouter un service</h6>
                </nav>
                <?php include("php_views/components/navbar_user.php") ?>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4 h-100 p-3">

            <div class="row mt-lg-4 mt-2">


                <div class="col-lg-2 nav flex-column " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <button class="nav-link btn-dark btn text-white active" id="v-pills-minecraft-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-minecraft" type="button" role="tab" aria-controls="v-pills-minecraft"
                        aria-selected="true">Minecraft</button>
                    <button class="nav-link btn-dark btn text-white" id="v-pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile"
                        aria-selected="false">Profile</button>
                    <button class="nav-link btn-dark btn text-white" id="v-pills-messages-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages"
                        aria-selected="false">Messages</button>
                    <button class="nav-link btn-dark btn text-white" id="v-pills-settings-tab" data-bs-toggle="pill"
                        data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings"
                        aria-selected="false">Settings</button>
                </div>
                <div class="col-lg-10 tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-minecraft" role="tabpanel"
                        aria-labelledby="v-pills-minecraft-tab" tabindex="0">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 mb-lg-4 mb-4">
                                <div class="card">
                                    <div class="card-header text-center pt-4 pb-2">
                                        <img class="mb-3" src="https://cdn2.steamgriddb.com/icon/374d37146f8e631a2adb03fd6818b497.png" width="90em" alt="mc"><br>
                                        <span class="text-uppercase font-weight-bold text-gray">Basic</span>
                                        <h1 class="font-weight-bold mt-2">
                                            5<small>€</small>/Mois
                                        </h1>
                                    </div>
                                    <div class="card-body text-lg-start text-center pt-0">
                                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                            <div
                                                class="text-center">
                                                <i class="fas fa-users opacity-10"></i>
                                            </div>
                                            <div>
                                                <span class="ps-3">50 slots</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                            <div
                                                class="text-center">
                                                <i class="fas fa-microchip opacity-10"></i>
                                            </div>
                                            <div>
                                                <span class="ps-3">1 vCPU / Intel Xeon 8Ghz</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                            <div
                                                class="text-center">
                                                <i class="fas fa-memory opacity-10"></i>
                                            </div>
                                            <div>
                                                <span class="ps-3">500mb de RAM</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-lg-start justify-content-center p-2">
                                            <div
                                                class="text-center">
                                                <i class="fas fa-hard-drive opacity-10"></i>
                                            </div>
                                            <div>
                                                <span class="ps-3">15Go d'espace disque</span>
                                            </div>
                                        </div>
                                        <a href="javascript:;" class="btn btn-icon btn-dark d-lg-block mt-3 mb-0">
                                            Commander
                                            <i class="fas fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                        aria-labelledby="v-pills-profile-tab" tabindex="0">
                    </div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                        aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
                </div>


                <?php include("php_views/components/footer.php") ?>

            </div>
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