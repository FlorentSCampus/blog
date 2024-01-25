<?php 
require_once '../app/persistances/blogPostData.php';

$article = blogPostById($db, $_GET['id']);
$comment = commentsByBlogPost($db, $article[0]['id']);

require_once '../ressources/views/blogPost.tpl.php';