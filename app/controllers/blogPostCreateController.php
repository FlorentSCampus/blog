<?php

require_once '../ressources/views/blogPostCreate.tpl.php';

require_once '../app/persistances/blogPostData.php';

$_POST['post'] = filter_input(INPUT_POST, 'post', FILTER_SANITIZE_ADD_SLASHES);

try {
    if (isset($_POST['title']) && isset($_POST['post']) && isset($_POST['rating'])) {
        blogPostCreate($db, $_POST['title'], $_POST['post'], $_POST['rating']);
    }
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}