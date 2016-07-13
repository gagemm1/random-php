<?php
$day = $month = $name = $favMovie = $favFood = $favSeason = $comment = $method = $genie = $web = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $day = test_input($_POST["day"]);
   $month = test_input($_POST["month"]);
   $name = test_input($_POST["name"]);
   $favMovie = test_input($_POST["favMovie"]);
   $favFood = test_input($_POST["favFood"]);
   $favSeason = test_input($_POST["favSeason"]);
   $comment = test_input($_POST["comment"]);
   $method = test_input($_POST["method"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;

if(isset($_POST['submit'])){
    $day = $_POST['day'];
    $month = $_POST['month'];
    $name = $_POST['name'];
    $favMovie = $_POST['favMovie'];
    $favFood = $_POST['favFood'];
    $favSeason = $_POST['favSeason'];
    $comment = $_POST['comment'];
    $method = $_POST['method'];
}

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>self processor</title>
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
             <h3>Day and Month:</h3><br>
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
             <br>
             <h3>Favorites</h3><br>
             <input type="text" name="name">Name<br>
             <input type="text" name="favMovie">Favorite Movie<br>
             <input type="text" name="favFood">Favorite Food<br>
             <input type="radio" name="favSeason" value="summer" checked="checked">Summer<br>
             <input type="radio" name="favSeason" value="fall">Fall<br>
             <input type="radio" name="favSeason" value="winter">Winter<br>
             <input type="radio" name="favSeason" value="spring">Spring<br>
             Comments:<br>
             <textarea name="comment" rows="5" cols="40"></textarea><br>
             <h3>How do you get to work?</h3><br> 
             <input type="radio" name="method" value="car" checked="checked">Car<br>
             <input type="radio" name="method" value="other">Something else<br>
             <input type="radio" name="method" value="robot">Does not compute, I am a robot<br>
        <input type="submit" name="submit" value="Submit"><br>
        </form>
        I know a return link isn't necessary, but just if you want it:<br> 
        <a href="program-07.php">Back to index</a>
    </body>
</html>

<?php
echo "<h2>Your Input:</h2>";
echo $day;
echo "<br>"; 
echo $month;
echo "<br>";
echo $name;
echo "<br>";
echo $favMovie;
echo "<br>";
echo $favFood;
echo "<br>";
echo $favSeason;
echo "<br>";
echo $comment;
echo "<br>";
echo $method;
?>
