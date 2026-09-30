<?php
$pageTitle = 'Ajouter un parent';
$basePath = '../';

require '../class/dataBase.class.php';
require '../class/parentEleve.class.php';
require '../class/parentEleveDAO.class.php';

$erreurs = [];
$message = "";

// ---------------------------------------------------------------
// Traitement du formulaire
// Il doit se faire AVANT l'inclusion de header.php : header() ne
// fonctionne plus dès que du HTML a été envoyé au navigateur.
// ---------------------------------------------------------------




// --- Vérification côté serveur ---
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = trim($_POST['nomParent']);
    $prenom = trim($_POST['prenomParent']);

    // Vérifications de base
    if (empty($nom)) {
        $erreurs[] = "Le nom est obligatoire.";
    } elseif (strlen($nom) < 2) {
        $erreurs[] = "Le nom doit contenir au moins 2 caractères.";
    }

    if (empty($prenom)) {
        $erreurs[] = "Le prénom est obligatoire.";
    }

    // Si aucune erreur : insertion
    if (empty($erreurs)) {
        // Nouveau parent : pas encore d'identifiant, donc null
    $parent = new ParentEleve(
        null,
        $_POST['civilite'],
        trim($_POST['nomParent']),
        trim($_POST['prenomParent']),
        trim($_POST['adresseParent']),
        trim($_POST['telParent'])
    );

    try {
        $dao = new parentEleveDAO();
        $dao->insert($parent);

        $message = 'Le parent ' . $parent->getNomComplet() . ' a bien été ajouté.';
        header('Location: listeParent.php?msg=' . urlencode($message));
    } catch (PDOException $e) {
        header('Location: listeParent.php?erreur=' . urlencode("Erreur lors de l'ajout du parent."));
    }
    exit;
    }
}


require '../includes/header.php';
require '../includes/nav.php';
?>
<div class="container">
    <h1 class="mb-4">Ajouter un parent</h1>
    <?php if (!empty($erreurs)): ?>
    <div class="alert alert-danger">
        <?php foreach ($erreurs as $err): ?>
            <div><?= htmlspecialchars($err) ?></div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

    <form method="post" style="max-width: 600px">

        <!-- Civilité : boutons radio affichés comme des boutons Bootstrap -->
        <div class="mb-3">
            <label class="form-label d-block">Civilité</label>
            <div class="btn-group" role="group">
                <input type="radio" class="btn-check" name="civilite" id="civM" value="M." required>
                <label class="btn btn-outline-primary" for="civM">M.</label>

                <input type="radio" class="btn-check" name="civilite" id="civMme" value="Mme">
                <label class="btn btn-outline-primary" for="civMme">Mme</label>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nomParent" class="form-label">Nom</label>
                <input type="text" class="form-control" name="nomParent" id="nomParent" value="<?= htmlspecialchars($_POST['nomParent'] ?? '') ?>" required>
            </div>
            <div class="col-md-6">
                <label for="prenomParent" class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenomParent" id="prenomParent" value="<?= htmlspecialchars($_POST['prenomParent'] ?? '') ?>"required>
            </div>
        </div>

        <div class="mb-3">
            <label for="adresseParent" class="form-label">Adresse</label>
            <input type="text" class="form-control" name="adresseParent" id="adresseParent" value="<?= htmlspecialchars($_POST['adresseParent'] ?? '') ?>" required>
        </div>

        <div class="mb-3">
            <label for="telParent" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" name="telParent" id="telParent"
                   pattern="0[1-9]( ?[0-9]{2}){4}" placeholder="06 12 34 56 78" value="<?= htmlspecialchars($_POST['telParent'] ?? '') ?>" required>
        </div>

        <button type="submit" class="btn btn-success">Enregistrer</button>
        <a href="liste.php" class="btn btn-secondary">Annuler</a>
    </form>
</div>
<?php require '../includes/footer.php'; ?>
