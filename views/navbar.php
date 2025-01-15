<nav>
    <img class="brand" src="/images/logo-anistream.svg" alt="logo-anistream">
    <img class="logo" src="/images/logo.png" alt="logo-anistream">
    <div class="search">
        <input type="text" placeholder="Recherche...">
        <button> <i class="fas fa-search"></i> </button>
    </div>
    <?php
    
    if(Account::isAuthentified()){

    ?>
    <div class="user">
        <img src="https://cdn.discordapp.com/avatars/355711895858053123/f623f62acb93b6c43a64cbfe281e36cf?size=1024"
            alt="user">
    </div>
    <?php
    
    }
    
    ?>
</nav>