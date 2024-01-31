<?php
function getAuthors($db) {
    $query = "SELECT id, pseudo FROM authors";

    $arr = array();

    foreach ($db->query($query) as $data) {
        array_push($arr, $data);
    }

    return $arr;
}

function commentCreate($db, $comment, $authors_id, $articles_id) {
    $query = "INSERT INTO comments (comment, comment_date, authors_id, articles_id)
    VALUES ('$comment', NOW(), '$authors_id', '$articles_id')";

    $db->exec($query);

    header('Location: index.php?action=blogPost&id=' . $articles_id);
}

function commentUpdate($db, $comment, $authors_id, $articles_id)
{
    $query = "UPDATE comments
    SET comment = '$comment', comment_date = NOW()
    WHERE authors_id = '$authors_id' AND articles_id = '$articles_id'";

    $db->exec($query);

    header('Location: index.php?action=blogPost&id=' . $articles_id);
}

function commentDelete($db, $authors_id, $articles_id)
{
    $query = "DELETE FROM comments
    WHERE authors_id = '$authors_id' AND articles_id = '$articles_id'";

    $db->exec($query);

    header('Location: index.php?action=blogPost&id=' . $articles_id);
}