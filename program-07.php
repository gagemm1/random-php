<?php
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
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<html>
<head>
    <title>Program-07</title>
    <script type="text/javascript" src="program-06.js"></script>
    <link href="css/program-07.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
<h1>Requirement #1, #2, #3, #8, and #9</h1>

    <form action="daymonth.php" method="get">
        <input list="day" name="day">
        <datalist id="day">
            <option value="Monday">
            <option value="Tuesday">
            <option value="Wednesday">
            <option value="Thursday">
            <option value="Friday">
            <option value="Saturday">
            <option value="Sunday">
        </datalist>
    <br>
        <input list="month" name="month">
        <datalist id="month">
            <option value="January">
            <option value="February">
            <option value="March">
            <option value="April">
            <option value="May">
            <option value="June">
            <option value="July">
            <option value="August">
            <option value="September">
            <option value="October">
            <option value="November">
            <option value="December">
        </datalist>
        <input type="submit">
    </form>

    <a href="selfprocessor.php">Self Processor</a>
    <a href="validatecontrols.php">Validate Controls</a>

<hr>

<h1>Requirement #4 && #5</h1>

Link: <a href="favorites.php">Favorites</a>

<hr>

<h1>Requirement #6 && #7</h1>

    <form action="html.php" method="post">
        How do you get to work?<br> 
        <input type="radio" name="method" value="car" checked="checked">Car<br>
        <input type="radio" name="method" value="other">Something else<br>
        <input type="radio" name="method" value="robot">Does not compute, I am a robot<br>
        If a genie appeared in front of you, what would be your first wish?<input type="text" name="genie" ><br>
        How much could a web dev team dev if a dev team could dev web?<input type="text" name="web"><br>
        <input type="submit" name="submit" value="Submit"><br>
    </form>







</body>
</html>
