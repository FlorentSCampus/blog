<?php require_once '../config/database.php' ?>
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

    $uri = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $paths = array(
        'home' => '../app/controllers/homeController.php',
        'blogPost' => '../app/controllers/blogPostController.php',
        'blogPostCreate' => '../app/controllers/blogPostCreateController.php',
        'blogPostModify' => '../app/controllers/blogPostModifyController.php',
    );

    ob_start();
    foreach ($paths as $key => $value) {
        if ($uri === $key) {
            require_once $value;
        }
    }
    
    $render = ob_get_clean();
    echo $render;
    ?>
</body>