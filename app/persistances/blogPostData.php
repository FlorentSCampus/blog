<?php
function lastBlogPosts($db) {
    $query =  'SELECT pseudo, title, content, publication_date FROM articles JOIN authors ON authors.id = articles.authors_id ORDER BY publication_date DESC limit 10';
    
    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function blogPostById($db, $id)
{
    $query =  "SELECT articles.id, pseudo, title, content, publication_date FROM articles JOIN authors ON authors.id = articles.authors_id WHERE articles.id = $id";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function commentsByBlogPost($db, $id)
{
    $query =  "SELECT pseudo, comment, comment_date FROM comments JOIN authors ON authors.id = comments.authors_id JOIN articles ON articles.id = comments.articles_id WHERE articles.id = $id";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}