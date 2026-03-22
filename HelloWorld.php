<?php
$conn = new mysqli("localhost", "root", "", "comments_db");

$name = $_POST['name'];
$text = $_POST['comment'];

$sql = "INSERT INTO comments (name, text) VALUES ('$name', '$text')";
$conn->query($sql);

$conn->close();
?>