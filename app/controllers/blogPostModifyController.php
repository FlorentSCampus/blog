<?php

require_once '../ressources/views/blogPostUpdate.tpl.php';

require_once '../app/persistances/blogPostData.php';

$_POST['content'] = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_ADD_SLASHES);

try {
    if (isset($_POST['content'])) {
        blogPostUpdate($db, $_GET['id'], $_POST['content']);
    }
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}