<?php 
echo 'BPC';

require_once '../app/persistances/blogPostData.php';

$article = blogPostById($db, $_GET['id']);
$comments = commentsByBlogPost($db, $article[0]['id']);

var_dump($article);
var_dump($comments);

// require_once '../ressources/views/blogPost.tpl.php';