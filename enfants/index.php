<?php
$pageTitle = 'Gestion des Enfants';
$basePath = '../';
require '../includes/header.php';
require '../includes/nav.php';
?>
<div class="container">
    <h1 class="mb-4">Gestion des enfants</h1>

    <div class="row g-4">
        <!-- Bloc 1 : accès au CRUD des Enfants -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Gestion des enfants (CRUD)</h5>
                    <p class="card-text">
                        Consulter, ajouter, modifier ou supprimer les enfants inscrits
                        au pédibus.
                    </p>
                    <a href="listeEnfant.php" class="btn btn-primary">Accéder à la liste des enfants</a>
                </div>
            </div>
        </div>

        <!-- Bloc 2 : accès à la liste des enfants  par ligne -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Enfants par ligne de pédibus</h5>
                    <p class="card-text">
                        Visualiser les enfants regroupés par ligne de pédibus
                        (via les parents inscrits).
                    </p>
                    <a href="" class="btn btn-outline-primary">Voir les enfants par ligne</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require '../includes/footer.php'; ?>
