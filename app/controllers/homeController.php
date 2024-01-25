<?php 
echo 'Hello World';

require_once '../app/persistances/blogPostData.php';

$res = lastBlogPosts($db);

require_once '../ressources/views/home.tpl.php';