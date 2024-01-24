<?php 
echo 'Hello World';

require_once '../app/persistances/blogPostData.php';

$res = lastBlogPosts($db);

// var_dump(count($res));
// var_dump($res[0]['pseudo']);

require_once '../ressources/views/home.tpl.php';