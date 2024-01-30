<?php

require_once '../ressources/views/blogPostUpdate.tpl.php';

require_once '../app/persistances/blogPostData.php';

blogPostUpdate($db, $_POST['title'], $_POST['rating'], $_POST['post']);