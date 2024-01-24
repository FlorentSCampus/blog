<?php
function lastBlogPosts($db) {
    return $db->query('SELECT * FROM articles ORDER BY publication_date DESC limit 10');
}