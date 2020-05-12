<?php
  // Connecting to the databse.
  $link = mysqli_connect("localhost", "nrd8504", "cottontall", "nrd8504");
  if(!$link){
    echo ("Error: Could not connect to the database.");
    exit;
  }

  $name = $_POST['name'];
  $comment = $_POST['comment'];

  // Inserting data into the database.
  $query = 'INSERT INTO comments VALUES (NULL, "' .$name .'", "' .$comment .'")';

  $result = mysqli_query($link, $query);

  // Sending feedback message and redirecting the page to the index page after the user's comment has been submitted.
  header('Location: index.php?message="Your feedback has been received!"');

  mysqli_close($link);
?>