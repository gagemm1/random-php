<html>
<head>
    <title>h1 tags</title>
    <script type="text/javascript" src="program-05.js"></script>
    <link href="css/program-05.css" rel="stylesheet" type="text/css" />
</head>
<body>

<h1>Requirement #1</h1>
    <h1><?php echo "Welcome to PHP!"; ?></h1>
    <h2><?php $name="Gage Morris"; echo $name; ?></h2>
    <h3><?php echo pi()*(33**2); ?></h3>

<hr>

<h1>Requirement #2</h1>
    
    <?php 
        

        header('Content-Type: text/html; charset=ISO-8859-1');

        echo "<h3>Global Variables</h3>", "<br>";        

        $b = 5;
        $y = 6;
        $z = "First string global variable";
        $a = "Second string global variable";
        echo "$b <p></p> ", "$y <p></p> " , " $z <p></p> " , $a; //global variables
        
        echo "<h3>Local Variables</h3>", "<br>"; 

        function local(){
            $x = 7;
            $y = 8;
            $z = "First string local variable";
            $a = "Second string local variable";
            echo "$x <p></p> ", "$y <p></p> " , "$z <p></p> " , $a; //local variables
        }
        local();

        echo "<h3>Static Variables</h3>", "<br>"; 

        function statics(){
            static $x = 9;
            static $y = 10;
            static $z = "First string local variable";
            static $a = "Second string local variable";
            echo "$x <p></p> ", "$y <p></p> " , " $z <p></p> " , $a; //static variables
        }
        statics();

echo "<hr>";

echo "<h1>Requirement #3</h1>";


        class DaysofWeek {
            function weekDays(){
                global $day;
                $day = array('Sunday','Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
                echo "The days of the week are: " . "<br>" . $day[0] . "<br>" . $day[1] . "<br>" . $day[2] . "<br>" . $day[3] . "<br>" . $day[4] . "<br>" . $day[5] . "<br>" . $day[6] ;
            }
        }

        $bar = new DaysofWeek;
        $br = $bar->weekDays();


echo "<hr>";

echo "<h1>Requirement #4</h1>";


        echo "The alphabet: a, b, c, d, e, f, g, h, i, j, k, l, m, n, o, p, q, r, s, t, u, v, w, x, y, and z";
        echo "<br><br>";
        $x = "JavaScript and PHP are so much fun!";
        echo $x;
        echo "<br><br>";
        echo "There are " .  strlen($x) . " letters in the last iterated sentence";
        echo "<br><br>";
        echo "There are " . str_word_count($x) . " words in the JavaScript and PHP sentence";
        echo "<br><br>";
        echo "The word 'PHP' is at index position " . strpos($x, "PHP");
        echo "<br><br>";
        echo str_replace("so much fun", "wonderful", $x);

echo "<hr>";

echo "<h1>Requirement #5</h1>";


        echo "Now into an array";
        echo "<br><br>";
        print_r (explode(" ",$x));

echo "<hr>";

echo "<h1>Requirement #6</h1>";
        
       echo implode(" , ", $day);

echo "<hr>";

echo "<h1>Requirement #7</h1>";
        
        echo bin2hex($b); echo ": bin2hex";
        echo "<br><br>";
        printf("%u\n",$b); echo ": cr32";


echo "<hr>";

echo "<h1>Requirement #8</h1>";
        echo "<h3><strong>a)</strong></h3>";
        echo "<br>";
        echo count_chars($x,3);
        echo "<br><br>";
        echo "<h3><strong>b)</strong></h3>";
        echo "<br>";
        echo count_chars($x,4);
        echo "<br><br>";
        echo "<h3><strong>c)</strong></h3>";
        echo "<br>";
        print_r(count_chars($x,0));
        echo "<h3><strong>d)</strong></h3>";
        echo "<br>";
        

echo "<hr>";

echo "<h1>Requirement #9</h1>";


        $c = "<&¢£¥€©>";
        echo $c;

echo "<hr>";

echo "<h1>Requirement #10</h1>";

        echo str_shuffle($x);

echo "<hr>";

echo "<h1>Requirement #11</h1>";

        echo strtoupper($x);

echo "<hr>";

echo "<h1>Requirement #12</h1>";

        echo wordwrap($x,2,"<br>\n",FALSE);
        
    ?>



















</body>
</html>