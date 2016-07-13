<html>
<head>
    <title>Program-06</title>
    <script type="text/javascript" src="program-06.js"></script>
    <link href="css/program-06.css" rel="stylesheet" type="text/css" />
</head>
<body>
    
    <?php 
        
        echo "<h1>Requirement #1</h1>";
        
            
            define("planetOne", "Mercury");
            define("planetTwo", "Venus");
            define("planetThree", "Earth");
            define("planetFour", "Mars");
            define("planetFive", "Jupiter");
            define("planetSix", "Saturn");
            define("planetSeven", "Uranus");
            define("planetEight", "Neptune");
            $planets = array(planetOne, planetTwo, planetThree, planetFour, planetFive, planetSix, planetSeven, planetEight);

            function definitions(){
                global $planets;
                echo implode(" , ", $planets);
            }
            definitions();

            echo "<br><br>";
            echo "Hopefully this is what you meant by horizontally across the top of the page";

        echo "<hr>";
        
        echo "<h1>Requirement #2</h1>";

            echo "Today's date is " . date("m/d/Y") . "<br>";
            
            $month = date("M");
            
            if ($month>="1" && $month<="2" || $month == "12"){
                echo "Thar be a chilly winter";
            }
            elseif ($month>="3" && $month<="5"){
                echo "It be a beautiful spring";
            }
            elseif ($month>="6" && $month<="8"){
                echo "The heat of summer";
            }
            else {
                echo "Fabulous Fall";
            }

        echo "<hr>";
        
        echo "<h1>Requirement #3</h1>";
            
            echo "The ten cities are: Juneau, Augusta, Sacramenta, Denver, Hartford, Tallahassee, Honolulu, Lansing, Trenton, and Bismarck <br>";
            echo "Input the capital city name in the textbox, and press the button. The state it's in will show below it. <br>";

            $name = "";
            $name = ($_POST["name"]);


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
   Name: <input type="text" name="name">
   <br><br>

   <input type="submit" name="submit" value="Submit"> 
</form>

<?php

    echo "<h2>Your Input:</h2>";
    echo "You typed in the city name " . $name . "<br>";
    switch ($name){
        case "Juneau":
            echo "Your state is Alaska";
            break;
        case "Augusta":
            echo "Your state is Maine";
            break;
        case "Sacramento":
            echo "Your state is California";
            break;
        case "Denver":
            echo "Your state is Colorado";
            break;
        case "Hartford":
            echo "Your state is Connecticut";
            break;
        case "Tallahassee":
            echo "Your state is Florida";
            break;
        case "Honolulu":
            echo "Your state is Hawaii";
            break;
        case "Lansing":
            echo "Your state is Michigan";
            break;
        case "Trenton":
            echo "Your state is New Jersey";
            break;
        case "Bismarck":
            echo "Your state is North Dakota";
            break;
        default:
            echo "You live in 'Murica, wherever that state may be that you reside in";

    }
        echo "<br>";

    
    echo "<hr>";
        
    echo "<h1>Requirement #4</h1>";

        $days = date("d");
        echo "The number day of todays date is " . $days;
        echo "<br><br>";
        $x = 1;
        while ($x <=$days){
            echo "Hello <br>";
            $x++;
        }
    
    echo "<hr>";

    echo "<h1>Requirement #5</h1>";
        $x=1;
        do {
            echo "Hello <br>";
            $x++;
        }    
        while ($x<=$days);

    echo "<hr>";

    echo "<h1>Requirement #6</h1>";

        $y = 1;
        while ($y<26){
            echo $y**2 . "<br>";
            $y++;
        }

    echo "<hr>";

    echo "<h1>Requirement #7</h1>";

        $months = array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
        foreach ($months as $value){
            echo "$value <br>";
        }

    echo "<hr>";

    echo "<h1>Requirement #8</h1>";

        
        $z = 0;
        function writeAll(){            
            $quarterbacks = array("Carson Palmer", "Matt Ryan", "Joe Flacco", "Tyrod Tyler", "Cam Newton");
            $teams = array("Arizona Cardinals", "Atlanta Falcons", "Baltimore Ravens", "Buffalo Bills", "Carolina Panthers");
            global $z;
            echo $quarterbacks[$z] . " is the starting QB for the " . $teams[$z] . "<br>";
            $z++;
        }
        writeAll();
        writeAll();
        writeAll();
        writeAll();
        writeAll();
    
    echo "<hr>";

    echo "<h1>Requirement #9</h1>";

        $numa = 5;
        $numb = 10;
        function divide(){          
            if ($numb =0){
                trigger_error("Denominator cannot be 0");
            }
            global $numa, $numb;
            echo $numa/$numb;
        }
        divide();

    echo "<hr>";

    echo "<h1>Requirement #10</h1>";

        $carsArray = array("Ford"=>"Model T", "Volkswagen"=>"Beetle", "Toyota"=>"Corolla", "Alfa Romeo"=>"Alfasud", "Alpine"=>"A310", "AMC"=>"Hornet", "Aston Martin"=>"DB7");
        foreach($carsArray as $x =>$x_value){
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    echo "<hr>";

    echo "<h1>Requirement #11</h1>";

        ksort($carsArray);
        foreach($carsArray as $x =>$x_value){
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }

    echo "<hr>";

    echo "<h1>Requirement #12</h1>";

        asort($carsArray);
        foreach($carsArray as $x =>$x_value){
            echo "Key=" . $x . ", Value=" . $x_value;
            echo "<br>";
        }
    echo "<hr>";

    echo "<h1>Requirement #13</h1>";

        function showInfo(){
            $indicesServer = array( 'PHP_SELF','SERVER_ADDR','REQUEST_METHOD','REMOTE_ADDR') ; 
            foreach ($indicesServer as $arg) { 
                echo $arg .':<br>' . $_SERVER[$arg] . '<br><br>' ; 
            } 
        }
        showInfo();

    echo "<hr>";

    echo "<h1>Requirement #14</h1>";

        $carsArray2 = array("Ford"=>"F Series", "Volkswagen"=>"Beetle", "Subaru"=>"Impreza", "Alfa Romeo"=>"Alfasud", "Alpina"=>"A310", "AMC"=>"Hornet", "Aston Martin"=>"DB9");
        $differences = array_diff_assoc($carsArray,$carsArray2);
        print_r($differences);

    echo "<hr>";

    echo "<h1>Requirement #15</h1>";

        $similarities = array_intersect_assoc($carsArray,$carsArray2);
        print_r($similarities);

    echo "<hr>";

    echo "<h1>Requirement #16</h1>";

        echo "If the key exists, echo true, if it doesn't, false. This sentence is here only to help me make sense of the requirement";
        echo "<br><br>";
        function existence(){
            global $carsArray;
            if (array_key_exists("Aston Martin",$carsArray)){
                echo "True, the key Aston Martin exists.";
            }
            else {
                echo "False, the key Aston Martin doesn't exist.";
            }   
        }
        existence();

    echo "<hr>";

    echo "<h1>Requirement #17</h1>";
       
        
        function valuables(){
            global $carsArray;
            if (in_array("Tiguan",$carsArray)){
                echo "True, the value exists.";
            }
            else {
                echo "False, the value doesn't exist.";
            }   
        }
        valuables();

        
        
?>



















</body>
</html>
