<?php
function lastBlogPosts($db) {
    $query =  file_get_contents('../database/lastBlogPosts.sql');
    
    $arr[] = array();

    foreach ($db->query($query) as $row) {
        array_push($arr, $row['pseudo'], $row['title'], $row['content']);
    }

    return $arr;
}