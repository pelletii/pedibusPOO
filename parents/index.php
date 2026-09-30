<?php
$pageTitle = 'Gestion des parents';
$basePath = '../';
require '../includes/header.php';
require '../includes/nav.php';
?>
<div class="container">
    <h1 class="mb-4">Gestion des parents</h1>

    <div class="row g-4">
        <!-- Bloc 1 : accès au CRUD des parents -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Gestion des parents (CRUD)</h5>
                    <p class="card-text">
                        Consulter, ajouter, modifier ou supprimer les parents inscrits
                        au pédibus.
                    </p>
                    <a href="listeParent.php" class="btn btn-primary">Accéder à la liste des parents</a>
                </div>
            </div>
        </div>

        <!-- Bloc 2 : accès à la liste des parents bénévoles par ligne -->
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Parents par ligne de pédibus</h5>
                    <p class="card-text">
                        Visualiser les parents regroupés par ligne de pédibus
                        (via les enfants inscrits).
                    </p>
                    <a href="" class="btn btn-outline-primary">Voir les parents par ligne</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require '../includes/footer.php'; ?>
