<?php
function lastBlogPosts($db) {
    $query =  file_get_contents('../database/lastBlogPosts.sql');
    
    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}