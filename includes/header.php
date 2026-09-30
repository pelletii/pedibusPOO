<?php if (!isset($pageTitle)) { $pageTitle = 'Pédibus'; } ?>
<?php if (!isset($basePath)) { $basePath = ''; } ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS personnalisé -->
    <link href="<?php echo $basePath; ?>css/style.css" rel="stylesheet">

</head>
<body>