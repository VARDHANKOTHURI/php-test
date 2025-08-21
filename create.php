<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?, ?)");
    $stmt->bind_param("ss", $title, $content);
    $stmt->execute();
    header("Location: read.php");
}
?>
<form method="POST">
  <input type="text" name="title" placeholder="Post Title" required><br>
  <textarea name="content" placeholder="Post Content" required></textarea><br>
  <button type="submit">Add Post</button>
</form>
