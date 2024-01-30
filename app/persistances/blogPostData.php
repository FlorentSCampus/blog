<?php
function lastBlogPosts($db) {
    $query = "SELECT articles.id, title, publication_date FROM articles JOIN authors ON authors.id = articles.authors_id ORDER BY publication_date DESC limit 10";
    
    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function blogPostById($db, $id)
{
    $query = "SELECT articles.id, pseudo, title, content, publication_date FROM articles JOIN authors ON authors.id = articles.authors_id WHERE articles.id = $id";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function commentsByBlogPost($db, $id)
{
    $query = "SELECT pseudo, comment, comment_date FROM comments JOIN authors ON authors.id = comments.authors_id JOIN articles ON articles.id = comments.articles_id WHERE articles.id = $id";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function blogPostCreate($db, $title, $rating, $post)
{
    $query = "INSERT INTO articles (title, content, publication_date, start_date_publication, end_date_publication, rating, authors_id) VALUES ('$title', '$post', NOW(), '2024-01-01 00:00:00', '2024-07-31 00:00:00', '$rating', '4')";

    $db->exec($query);
}

function blogPostUpdate($db, $id, $article)
{
    $query = "UPDATE articles SET content = '$article', publication_date = NOW() WHERE id = '$id'";

    $db->exec($query);
}

function blogPostDelete($db, $id)
{
    $query = "DELETE articles WHERE id = '$id'";

    $db->exec($query);
}