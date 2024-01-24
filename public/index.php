<?php require '../config/database.php' ?>
<?= 'Bienvenue sur le blog' ?>

<?php
$metaTitle = 'BLOG';
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?= $metaTitle ?></title>

    <link rel='stylesheet' href='#'>
</head>

<body>
    <?php
    $pageExists = false;

    $paths = array(
        'home' => '../app/controllers/homeController.php',
    );

    ob_start();
    for ($i = 0; $i < count($paths) && !$pageExists; $i++) {
        if ($_GET['action'] === array_keys($paths)[$i]) {
            // require_once 'src/header.php';
            require_once array_values($paths)[$i];
            // require_once 'src/footer.php';

            $pageExists = true;
        }
    }

    if (!$pageExists) {
        // require_once 'src/404.php';
    }
    $render = ob_get_clean();
    echo $render;
    ?>
    
<?php
$query = 'SELECT * FROM authors';
$res = $db->prepare($query);
$res->execute();
$res = $res->fetchAll();

foreach ($res as $data) {
echo $data['pseudo'];
}
?>
</body>