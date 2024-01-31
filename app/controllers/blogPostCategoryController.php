<?php

require_once '../app/persistances/blogPostData.php';

$_GET['name'] = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

try {
    if (isset($_GET['name'])) {
        $res = blogPostsByCategory($db, $_GET['name']);
    }
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}

require_once '../ressources/views/category.tpl.php';