<?php

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link href="style.css" type="text/css" rel="stylesheet">
        <title>Henry Guo. SE266</title>
    </head>
    <body>
        <h1>Henry Guo SE 266</h1>
        <!--            Work Table Below        -->
        <table border="1" >
            <tr>
                <th>Week 1</th>
                <th><a href="http://ict.neit.edu/001410243/se266/Week1/helloWorld.php">Hello World</a></th>
                <th><a href="http://ict.neit.edu/001410243/se266/Week1/fizzBuzz.php">Fizz Buzz</a></th>
            </tr>
            <tr>
                <th>Week 2</th>
            </tr>
            <tr>
                <th>Week 3</th>
            </tr>
            <tr>
                <th>Week 4</th>
            </tr>
            <tr>
                <th>Week 5</th>
            </tr>
            <tr>
                <th>Week 6</th>
            </tr>
            <tr>
                <th>Week 7</th>
            </tr>
            <tr>
                <th>Week 8</th>
            </tr>
            <tr>
                <th>Week 9</th>
            </tr>
            <tr>
                <th>Week 10</th>
            </tr>
        </table>
        
        <!--        github and info         -->
        <br />
        <table id="INFO">
            <tr>
                <th>
                <a href="https://github.com/hguo16/PHPSQL" >GITHUB</a>
                </th>
            </tr>
        </table>
        
        <!--        Date Modification       -->
        <br />
        <div id="DATE">
        <?php
        $file = "hguoPHP.php";
        $mod_date=date("F d Y h:i:s A", filemtime($file));

        echo "Last modified: $mod_date";
        ?>
        </div>
    </body>
</html>