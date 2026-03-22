<?php
$conn = new mysqli("localhost", "root", "", "comments_db");

$result = $conn->query("SELECT * FROM comments ORDER BY id DESC");

while($row = $result->fetch_assoc()) {
    echo "<div style='border:1px solid #ccc; padding:10px; margin:10px;'>
            <strong>".$row['name']."</strong><br>
            <p>".$row['text']."</p>
          </div>";
}

$conn->close();
?>