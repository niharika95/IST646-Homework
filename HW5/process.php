<?php
 //fill these in with your name. Notice how PHP variables start with a $.
 error_reporting(E_ERROR | E_PARSE);

 try{
  $studentFirstName = "Niharika";
  $studentLastName = "Dalal";
 
  $visitor  = $_POST['name'];
  $groupNum = $_POST['number'];
  $vdate    = $_POST['date'];
  $place    = $_POST['place'];
  $rating   = $_POST['slider'];
  $destination_email = "646class@jptweb.com"; //Note: when handing in change to 646class@jptweb.com
  
  //    When your code is DONE  send your form's data to   646class@jptweb.com
 
  if(empty($visitor) || empty($groupNum) || empty($vdate) || empty($place) || empty($rating)){
    echo "One of the fields is broken, please try again.";
  }
  else{
   //Plug in the variables from above into the subject $studentFirstName
   $email_subject = "Plymouth, MI  - student $studentLastName $studentFirstName";
   $email_body   = "Visitor name:  $visitor\n";
   $email_body   .= "Group Size: $groupNum\n";
   $email_body   .= "Date Visited Town: $vdate\n";
   $email_body   .= "Favorite Place: $place\n";
   $email_body   .= "Rating: $rating\n";
   mail($destination_email, $email_subject, $email_body);
   echo "<h1>Thank you for your feedback, $visitor!</h1>";
  }
 }
 catch(Exception $e){
   echo "One of the fields is broken, please try again.";
 }
 
?>

<!-- create a Thank you page in HTML below -->
<html>
  <head></head>
  <body>
    <script>
    alert('Thank you for your feedback!')
    </script>
  </body>
</html>