<?php
// $basePath est défini par la page appelante :
// ''    si la page est à la racine du projet
// '../' si la page est dans un sous-dossier (parents/, enfants/...)
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $basePath; ?>index.php">Pédibus</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Famille
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>parents/index.php">Gestion des parents</a></li>
                        <li><a class="dropdown-item" href="<?php echo $basePath; ?>enfants/index.php">Gestion des enfants</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>
</nav>
