<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSIX PAGE</title>
</head>
<body>
    <?php
   
    $p = array(
        array("ID"=>"k1","NO"=>"1","NAME"=>"ui"),
        array("ID"=>"k2","NO"=>"20","NAME"=>"ssik"),
        array("ID"=>"k3","NO"=>"33","NAME"=>"oik")
    );
    foreach($p as $person){
        // print($person["ID"]."<br>");
        // print($person["NO"]."<br>");
        // print($person["NAME"]."<br>");
        echo "<hr>";
    };


    echo "<br><hr><br>";
    $input1 = range(5,1);
    $input2 = range("a","e");

//array_splice($input1, 1, 2);

$_print = array_combine($input1,$input2);
print_r($_print);

 
  //  print_r(array_combine($input1,$input2));
echo "<br><br>_<br><br>_<br><br>";
echo "<br><br>_<br><br>_<br><br>";
echo "<br><br>_<br><br>_<br><br>";


    ?>

</body>
</html>