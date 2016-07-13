<?php
$day = $month = "";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   $day = test_input($_GET["day"]);
   $month = test_input($_GET["month"]);
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
        <h1>Welcome to the day month page!</h1>
        The day you selected was <?php echo $_GET["day"]; ?><br>
        The month you selected was <?php echo $_GET["month"]; ?><br>
        <a href="program-07.php">Back to index</a>

    </body>
</html>
