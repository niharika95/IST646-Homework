<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Comments</title>
  <style>
    h2{
      font-size: 26px;
      font-weight: 600;
      color: #b20000;
      margin-bottom: 30px;
    }
    .submitComment{
      margin-bottom: 30px;
    }
    .commentsContainer{
      width: 700px;
    }
    p{
      margin: 0;
    }
    .name{
      font-size: 18px;
      font-weight: 600;
    }
    .comment, .rating{
      font-size: 18px;
      font-weight: 400;
    }
  </style>
</head>
<body>
  <h2>User Comments</h2>
  <!-- Link to submit feedback -->
  <p class="submitComment"><a href="./submitAComment.html">To submit your own comment, click here!</a></p>
  <div class="commentsContainer">
    <?php    
    // Connecting to the database
      $link = mysqli_connect("localhost", "nrd8504", "cottontall", "nrd8504");
      if(!$link){
        echo "Error: Unable to connect to the database.";
        exit;
      }

      $query = "SELECT * FROM `comments`";
      $result = mysqli_query($link, $query);

      // Iterating through the response to display the name of the user and their comment.
      while($field = mysqli_fetch_array($result, MYSQLI_BOTH)){
        echo ("<p class='name'>" .$field['name'] ."</p>");
        echo ("<p class='comment'>" .$field['comment'] ."</p><br><br>");
      }

      mysqli_close($link);
    ?>
  </div>
</body>
</html>