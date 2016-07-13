<!DOCTYPE HTML> 
<html>
<head>
</head>
<body> 

<?php



$name = $email = $website = $gender = "";
$nameErr = $emailErr = $websiteErr = "";  

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $webDev = $_POST['webDev'];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
   
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
     
   if (empty($_POST["website"])) {
     $website = "";
   } else {
     $website = test_input($_POST["website"]);
     if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
       $websiteErr = "Invalid URL"; 
     } 
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}


?>

<h2>Validating controls</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name"><?php echo $nameErr; ?>
   <br>
   E-mail: <input type="text" name="email"><?php echo $emailErr; ?>
   <br>
   Website: <input type="text" name="website"><?php echo $websiteErr; ?>
   <br>
   Developer Type:
   <input type="radio" name="webDev" value="frontEnd">Front-End
   <input type="radio" name="webDev" value="serverSide">Server-Side
   <input type="radio" name="webDev" value="fullStack">Full Stack
   <br>
   <input type="submit" name="submit" value="Submit">
   I know a return link isn't necessary, but just if you want it:<br>
   <a href="program-07.php">Back to index</a> 
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $webDev;
?>

</body>
</html>
