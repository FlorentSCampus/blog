<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=blog', 'florent_sartout', 'CloudStrife01042003');
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}
