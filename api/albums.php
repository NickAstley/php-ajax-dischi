<?php

require "../db/albums_db.php";

header("Content-Type: application/json");

echo json_encode([
    "success" => true,
    "response" => [
        $albums
    ]
]);

?>