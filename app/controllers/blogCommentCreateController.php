<?php

require_once '../app/persistances/commentData.php';

$authors = getAuthors($db);

require_once '../ressources/views/blogCommentCreate.tpl.php';

$_GET['id'] = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$_POST['comment'] = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_ADD_SLASHES);

try {
    if (isset($_POST['comment']) && isset($_POST['pseudo']) && isset($_GET['id'])) {
        blogCommentCreate($db, $_POST['comment'], $_POST['pseudo'], $_GET['id']);
    }
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}