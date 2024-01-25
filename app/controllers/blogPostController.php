<?php 
echo 'BPC';

require_once '../app/persistances/blogPostData.php';

$article = blogPostById($db, $_GET['id']);
$comment = commentsByBlogPost($db, $article[0]['id']);

// var_dump($article);
// var_dump($comment);

require_once '../ressources/views/blogPost.tpl.php';