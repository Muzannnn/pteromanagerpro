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
        <div class="container-fluid py-4 h-100">
            <div class="row mt-lg-4 mt-2">
                <ul class="nav nav-pills nav-fill p-1" role="tablist">
                    
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center active" id="home-tab"
                            data-bs-toggle="tab" data-bs-target="#home-tab-pane" href="#" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            <i class="ni ni-app"></i>
                            <span class="ms-2">App</span>
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link mb-0 px-0 py-1 d-flex align-items-center justify-content-center" id="profile-tab"
                            data-bs-toggle="tab" data-bs-target="#profile-tab-pane" href="#" role="tab" aria-controls="profile-tab-pane" aria-selected="true">
                            <i class="ni ni-app"></i>
                            <span class="ms-2">App</span>
                        </a>
                    </li>

                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
                        tabindex="0">...</div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                        tabindex="0">...</div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab"
                        tabindex="0">...</div>
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