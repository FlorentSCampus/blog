<?php

require_once '../ressources/views/blogPost.tpl.php';

require_once '../app/persistances/commentData.php';

try {
    commentDelete($db, $_GET['authors_id'], $_GET['articles_id']);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
