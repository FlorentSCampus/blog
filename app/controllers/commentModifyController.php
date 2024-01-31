<?php

require_once '../ressources/views/commentUpdate.tpl.php';

require_once '../app/persistances/commentData.php';

$_POST['comment'] = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_ADD_SLASHES);

try {
    if (isset($_POST['comment'])) {
        commentUpdate($db, $_POST['comment'], $_GET['authors_id'], $_GET['articles_id']);
    }
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
