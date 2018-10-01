<?php
$randomNumber = rand (1, 100);
$title = "Fizz Buzz";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>
        <?php
            for ($i=0; $i<100; $i++)
            {
              echo $i . "<br />";
              if($i %2 == 0 && $i %3==0){
                  echo "Fizz Buzz<br />";
              }else if($i %2 == 0){
                  echo "Fizz<br />";
              } else if($i %3 == 0){
                  echo "Buzz<br />";
              }
            }
        ?>
    </body>
</html>