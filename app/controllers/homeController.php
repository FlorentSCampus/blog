<?php require_once '../app/persistances/blogPostData.php' ?>
<?= 'Hello World' ?>

<?php
$res = lastBlogPosts('e');
var_dump($res);