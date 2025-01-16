<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 ps bg-grey"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0 d-flex" href="/home">
            <img src="<?= GetConfig::GetConfigVar("brand_logo")['content'] ?>" class="navbar-brand-img mx-auto"
                alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="/user_cp/dashboard">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Tableau de bord</span>
                </a>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#myServices" class="nav-link" aria-controls="myServices"
                    role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Mes services</span>
                </a>
                <div class="collapse " id="myServices">
                    <ul class="nav ms-2">
                        <li class="nav-item ">
                            <a class="nav-link " href="/user_cp/my-services">
                                <span class="sidenav-normal"> Mes services </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " href="/user_cp/add-service">
                                <span class="sidenav-normal"> Ajouter un service </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/billing.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-file-invoice text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Mes factures</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="../pages/virtual-reality.html">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-headset text-white text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Support</span>
                </a>
            </li>
            
            <!--<li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
            </li>-->

        </ul>
    </div>
    <!--<div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-50 mx-auto" src="/public/assets/img/illustrations/icon-documentation.svg"
                alt="sidebar_illustration">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <h6 class="mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
                </div>
            </div>
        </div>
    </div>-->
</aside>