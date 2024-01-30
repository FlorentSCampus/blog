<?php

require_once '../ressources/views/blogPost.tpl.php';

require_once '../app/persistances/blogPostData.php';

blogPostDelete($db, $_GET['id']);