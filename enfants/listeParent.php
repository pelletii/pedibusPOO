<?php
$pageTitle = 'Liste des parents';
$basePath = '../';

require '../class/dataBase.class.php';
require '../class/parentEleve.class.php';
require '../class/parentEleveDAO.class.php';
require '../includes/header.php';
require '../includes/nav.php';

$dao = new ParentEleveDAO();
$parents = $dao->findAll();   // un tableau d'objets ParentEleve
?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Liste des parents</h1>
        <a href="ajouter.php" class="btn btn-success">+ Ajouter un parent</a>
    </div>

    <?php if (isset($_GET['msg'])): ?>
        <div class="alert alert-success"><?php echo htmlspecialchars($_GET['msg']); ?></div>
    <?php endif; ?>
    <?php if (isset($_GET['erreur'])): ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($_GET['erreur']); ?></div>
    <?php endif; ?>

    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark">
            <tr>
                <th>Civilité</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th class="text-start">Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php if (count($parents) === 0): ?>
            <tr><td colspan="6" class="text-center text-muted">Aucun parent enregistré.</td></tr>
        <?php else: ?>
           <?php foreach ($parents as $p) { ?>
            <tr>
                <td><?= htmlspecialchars($p->getCivilite())?></td>
                 <td><?= htmlspecialchars($p->getPrenomParent())?></td>
                 <td><?= htmlspecialchars($p->getNomParent()) ?></td>
                <td><?= htmlspecialchars($p->getAdresseParent()) ?></td>
                <td><?= htmlspecialchars($p->getTelParent()) ?></td>
                <td>
                    <a href="modifParent.php?id=<?= $p->getId() ?>" class="btn btn-sm btn-outline-primary">Modifier</a>
                    <a href="supprParent.php?id=<?= $p->getId() ?>" class="btn btn-sm btn-outline-danger"
                       onclick="return confirm('Supprimer ce parent ?')">Supprimer</a>
                </td>
            </tr>
        <?php } ?>
        <?php endif; ?>
        </tbody>
    </table>
</div>
<?php require  '../includes/footer.php'; ?>
