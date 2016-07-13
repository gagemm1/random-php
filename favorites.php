<?php
    
error_reporting(0);

$name = $favMovie = $favFood = $favSeason = "";
$nameErr = $favMovieErr = $favFoodErr = $favSeasonErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
   }
   
   if (empty($_POST["favMovie"])) {
     $favMovieErr = "Favorite Movie is required";
   } else {
     $favMovie = test_input($_POST["email"]);
   }

   if (empty($_POST["favFood"])) {
     $favFoodErr = "Favorite food is required";
   } else {
     $favFood = test_input($_POST["gender"]);
   }

   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>form processor</title>
    </head>
    <body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="name">Name* <?php echo $nameErr;?><br>
        <input type="text" name="favMovie">Favorite Movie* <?php echo $favMovieErr;?><br>
        <input type="text" name="favFood">Favorite Food* <?php echo $favFoodErr;?><br>
        <input type="radio" name="favSeason" value="summer" checked="checked">Summer<br>
        <input type="radio" name="favSeason" value="fall">Fall<br>
        <input type="radio" name="favSeason" value="winter">Winter<br>
        <input type="radio" name="favSeason" value="spring">Spring<br>
        Comments:<br>
        <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>  
        
        
        <h1>Welcome to the favorites page!</h1>
        Your name is <?php echo $_POST["name"]; ?><br>
        Your favorite movie is <?php echo $_POST["favMovie"]; ?><br>
        Your favorite food is <?php echo $_POST["favFood"]; ?><br>
        Your favorite season is <?php echo $_POST["favSeason"]; ?><br>
        If you had any comments, they were: <?php echo $_POST["comment"]; ?><br>
        <a href="program-07.php">Back to index</a>

    </body>
</html>
