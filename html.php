<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>form processor</title>
    </head>
    <body>
        <h1>Welcome to the work page!</h1>
        How did you say you get to work? <?php echo $_POST["method"]; ?> Ah, that's right.<br>
        The first wish was: <?php echo $_POST["genie"]; ?><br>
        A web team could <?php echo $_POST["web"]; ?><br>
        <a href="program-07.php">Back to index</a>

    </body>
</html>

