<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $commentData = $_POST["commentData"];
    file_put_contents("comments.csv", $commentData, FILE_APPEND);
}
?>