<?php

include('db.php');

if (isset($_POST['save_comment'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $query = "INSERT INTO comment(title, description) VALUES ('$title', '$description')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Comment Saved Successfully';
  $_SESSION['message_type'] = 'success';
  header('Location: comment.php');

}

?>