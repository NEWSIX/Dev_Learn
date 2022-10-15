<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSIX PAGE</title>
</head>
<body>
    <h1>newsix!</h1><br>NNNN666<br>
    <?php
   /* echo"NEWSIX___<br>";
    print"NEWSIX!"
    ?>
    <input type="button" value="<?php echo"NEWSIX" ?>">
    <label for="">BE</label>
    <input type="text"  value="<?php echo"NEWSIX!!"; ?>">


    <?php
    $name = "SSSS3112";
    ?>

    <?php 
    echo $name;
    echo gettype($name);
    echo settype($name,"int");
    echo "<br>SSS = \t".gettype($name)."<br>";
    echo $name."<br><h2>START</h2><br><hr><br>"
    ?>

    <?php 
    $a = "20.0002s";
    $b = 30;
    $a=(int)$a; 
    echo "a = ".$a."<br>";
    $c = $a+$b;

    echo "B: = ".$c ;
    $c = (int)$c;
    echo "<br>A: = ".$c ;
    echo "<br>".gettype($c);

    echo $name."<br><h2>START</h2><br><hr><br>"

    
    ?>

    <?php 
    define("D2",332);
    $D2 = "3212232";
    echo $D2+D2."\t".D2."<BR>";
    $D3 = D2+32123;
    echo $D3;
    echo $name."<br><h2>START</h2><br><hr><br>"
    ?>

    <?php 
    
    $b0 = null;
    $b1 = "";
    $b2 = 1123;
    $b3 = "NEWSIX";

    echo "<br>b0 : ".is_null($b0)."<br> Type : ".gettype($b0);
    echo "<br>b1 : ".$b1."<br> Type : ".gettype($b1);
    echo "<br>b2 : ".$b2."<br> Type : ".gettype($b2);
    echo "<br>b3 : ".$b3."<br> Type : ".gettype($b3);

    echo "<br>";*/
echo "<hr>";
    //unset($b3);
    //echo "= :".is_null($b0)."<br>";
   // echo "<br>b3 : ".$b3."<br> Type : ".gettype($b3);


   var_dump($b0); echo "<br>";
   var_dump($b1); echo "<br>";
   var_dump($b2); echo "<br>";
   var_dump($b3); echo "<br>";

   echo $name."<br><h2>START</h2><br><hr><br>"

    ?>

    <?php
    
    $c0 = "3";
    $c1 = 4;
    $t = 11;
    var_dump($c0 < $c1);
    if ($t < "10") {
        echo "Have a good morning!";
      } elseif ($t < "20") {
        echo "Have a good day!";
      } else {
        echo "Have a good night!";
      }
    ?>

</body>
</html>