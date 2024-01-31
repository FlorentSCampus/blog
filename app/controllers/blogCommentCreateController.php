<?php

require_once '../ressources/views/blogCommentCreate.tpl.php';

require_once '../app/persistances/commentData.php';

$_POST['comment'] = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_ADD_SLASHES);

try {
    if (isset($_POST['pseudo']) && isset($_POST['post'])) {
        blogCommentCreate($db, $_POST['pseudo'], $_POST['post']);
    }
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}