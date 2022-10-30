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
    $count = 0;
    function cout(string $text ) {
        $round =  $GLOBALS['count']++;
        echo "<br>[$round] Output \t: $text <br><hr>";
    }
    ?>
    <?php
    print_r(getdate());

    foreach (getdate() as $dt)
        cout($dt);

/*
    $flt1 = 32.25;
    $num = 22300400.052;

    $res1 = ceil($flt1);
    cout($res1);
    $res2 = floor($flt1);
    cout($res2);
    $res3 = round($flt1);
    cout($res3);
    $res4 = number_format($num);
    cout($res4);

   // date_default_timezone_set("Asia/Bangkok");
    cout(date("r"));
    cout(date("d/m/Y"));
    cout(date("d/m/Y",time()+(60*60*24*3)));
*/

/*
    $str1 = 'NEWSIX IS ME';
    $str2 = "NEWSIX IS ME";
    //$str2 = "NEWSIX ";
    $word = "HOHOHOOH";

    //$res = str_replace($str2,$word,$str1);
    //$res = strrev($str1);
    //$res = str_repeat($str2,9999);
    $res1 = md5($str1);
    cout($res1);
    $res2 = sha1($str1);
    cout($res2);
    $res3 = crypt($str1,$res2);
    cout($res3);

    $res4 = base64_encode($str1);
    cout($res4);
    
    $res5 = base64_decode($res4);
    cout($res5);
*/
    //cout($res);
   
/*
   $arr = array("Hello","world",2321);
   $ArrToString1 = implode(" ",$arr);
   cout($ArrToString1);

   $ArrToString2 = join(" ",$arr);
   cout($ArrToString2);

   $String = "NEWSIX,2nd,1999,Thailand,Bangkok,09123XXX999";
   $StringToArr = str_split($String,3);
   //cout($StringToArr)
   foreach ($StringToArr as $index)cout($index);
   */

    ?>

</body>
</html>