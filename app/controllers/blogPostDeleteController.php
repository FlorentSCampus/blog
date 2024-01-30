<?php

require_once '../ressources/views/blogPost.tpl.php';

require_once '../app/persistances/blogPostData.php';

try {
    blogPostDelete($db, $_GET['id']);
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}