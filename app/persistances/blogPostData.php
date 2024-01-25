<?php
function lastBlogPosts($db) {
    $query =  'SELECT pseudo, title, content, publication_date FROM articles JOIN authors ON authors.id = articles.authors_id ORDER BY publication_date DESC limit 10';
    
    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}