<?php

require_once '../ressources/views/blogPostCreate.tpl.php';

require_once '../app/persistances/blogPostData.php';

blogPostCreate($db, $_POST['title'], $_POST['rating'], $_POST['post']);