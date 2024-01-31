<?php
function lastBlogPosts($db) {
    $query = "SELECT articles.id, title, publication_date
    FROM articles
    INNER JOIN authors
    ON authors.id = articles.authors_id
    ORDER BY publication_date DESC
    LIMIT 10";
    
    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function blogPostById($db, $id)
{
    $query = "SELECT articles.id, pseudo, title, content, publication_date
    FROM articles
    INNER JOIN authors
    ON authors.id = articles.authors_id
    WHERE articles.id = '$id'";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function commentsByBlogPost($db, $id)
{
    $query = "SELECT pseudo, comment, comment_date
    FROM comments
    INNER JOIN authors
    ON authors.id = comments.authors_id
    INNER JOIN articles
    ON articles.id = comments.articles_id
    WHERE articles.id = '$id'";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function blogPostCreate($db, $title, $post, $rating)
{
    $query = "INSERT INTO articles (title, content, publication_date, start_date_publication, end_date_publication, rating, authors_id)
    VALUES ('$title', '$post', NOW(), '2024-01-01', '2024-07-31', '$rating', '4')";

    $db->exec($query);

    header('Location: index.php?action=home');
}

function blogPostUpdate($db, $id, $article)
{
    $query = "UPDATE articles
    SET content = '$article', publication_date = NOW()
    WHERE id = '$id'";

    $db->exec($query);

    header('Location: index.php?action=blogPost&id=' . $id);
}

function blogPostDelete($db, $id)
{
    $query = "DELETE FROM articles
    WHERE id = '$id'";

    $db->exec($query);

    header('Location: index.php?action=home');
}

function postsCategorySelect($db)
{
    $query = "SELECT category_name
    FROM categories";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function blogPostsByCategory($db, $category)
{
    $query = "SELECT a.publication_date, au.pseudo, a.title, a.content
    FROM authors AS au, articles AS a
    INNER JOIN articles_categories AS ac
    ON ac.articles_id = a.id
    INNER JOIN categories AS c
    ON ac.categories_id = c.id
    WHERE au.id = a.authors_id AND c.category_name = '$category'";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}