<nav class="sidebar">
    <a href="/" class="active"> <i class="fas fa-home"></i> <span class="text">Accueil</span> </a>
    <a href="#!"> <i class="fas fa-fire-flame-curved"></i> <span class="text">Tendances</span> </a>
    <a href="/last-outings"> <i class="fas fa-calendar-plus"></i> <span class="text">Dernières sorties</span> </a>
    <a href="#!"> <i class="fas fa-table-list"></i> <span class="text">Catégories</span> </a>
    <?php
    
    if(!Account::isAuthentified()){

    ?>
    <nav-spacer /></nav-spacer>
    <a href="/login"> <i class="fas fa-right-to-bracket"></i> <span class="text">Se connecter</span> </a>
    <a href="/register"> <i class="fas fa-user-plus"></i> <span class="text">S'inscrire</span> </a>
    <?php
    
    }else{
    
    ?>
    <nav-spacer /></nav-spacer>
    <a href="#!"> <i class="fas fa-clock-rotate-left"></i> <span class="text">Historique</span> </a>
    <a href="/watchlist"> <i class="fas fa-eye"></i> <span class="text">Watchlist</span> </a>
    <nav-spacer /></nav-spacer>
    <a href="#!"> <i class="fas fa-gear"></i> <span class="text">Paramètres</span> </a>
    <a href="#!"> <i class="fas fa-user"></i> <span class="text">Mon compte</span> </a>
    <?php
    
    if(Account::IsAdmin()){

    ?>
    <a href="#!"> <i class="fas fa-toolbox"></i> <span class="text">Admin</span> </a>
    <?php
    
    }
    
    ?>
    <a href="#!" class="bottom danger"> <i class="fa-solid fa-right-from-bracket"></i> <span class="text">Se déconnecter</span> </a>
    <?php
    
    }
    
    ?>
    <footer class="bottom"><span class="text">2021 - 2024 AniSteam Inc.</span></footer>
</nav>