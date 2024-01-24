<?php require_once '../app/persistances/blogPostData.php' ?>
<?= 'Hello World' ?>

<?php
$res = lastBlogPosts($db);
var_dump($res);