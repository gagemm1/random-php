<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Program-11</title>
        <link href="css/program-11.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="scripts/program-11.js"></script>
    </head>
    <body>
        <h1>Requirement #1</h1>
            <div class="one">
                <p>Here is div 1</p>
            </div>
            <div class="two">
                <p>Here is div 2</p>
            </div>
            <div class="three">
                <p>Here is div 3</p>
            </div>
            <div class="four">
                <p>Here is div 4</p>
            </div>
            <div class="five">
                <p>Here is div 5</p>
            </div>
            <div class="six">
                <p>Here is div 6</p>
            </div>
            <div class="seven">
                <p>Here is div 7</p>
            </div>
            <div class="eight">
                <p>Here is div 8</p>
            </div>
            <div class="nine">
                <p>Here is div 9</p>
            </div>
            <div class="ten">
                <p>Here is div 10</p>
            </div>
            <div class="eleven">
                <p>Here is div 11</p>
            </div>
            <div class="twelve">
                <p>Here is div 12</p>
            </div>
            <div class="thirteen">
                <p>Here is div 13</p>
            </div>
            <div class="fourteen">
                <p>Here is div 14</p>
            </div>
            <div class="fifteen">
                <p>Here is div 15</p>
            </div>
            <div class="sixteen">
                <p>Here is div 16</p>
            </div>
            <div class="seventeen">
                <p>Here is div 17</p>
            </div>
            <div class="eighteen">
                <p>Here is div 18</p>
            </div>
            <div class="nineteen">
                <p>Here is div 19</p>
            </div>
            <div class="twenty">
                <p>Here is div 20</p>
            </div>
            <hr>
            <h1>Requirement #2</h1>
                <body onload="website()">
                <p id="url"></p>
                <button onclick="goBack()">Go back</button>
                <button onclick="goForward()">Go forward</button>
            <hr>
            <h1>Requirement #3</h1>
                    <button onclick="changeColor()">Change div colors</button>
            <?php 
            	$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
				echo $xml->to . "<br>";
				echo $xml->from . "<br>";
				echo $xml->heading . "<br>";
				echo $xml->body;
			?>
    </body>
</html>
