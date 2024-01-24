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
        // 'contact' => 'src/contact.php',
        // 'content' => 'src/content.php',
        // 'page1' => 'src/page1.php',
        // 'page2' => 'src/page2.php',
        // 'page3' => 'src/page3.php'
    );

    ob_start();
    for ($i = 0; $i < count($paths) && !$pageExists; $i++) {
        if ($_GET['action'] === array_keys($paths)[$i]) {
            // require_once 'src/processing.php';
            // require_once 'src/error.php';

            // require_once 'src/header.php';
            // require_once array_values($paths)[$i];
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

    <?php require '../config/database.php' ?>
    <?php
    $res = $db->query('SELECT last_name FROM authors');
    print_r($res);

    echo "test";
    ?>
</body>