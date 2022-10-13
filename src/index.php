<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- program to insert new element into an array -->
    <h4>Write a PHP script that inserts a new item in an array in any position</h4>
    <?php
    $cars = array("1","2","3","4","5");

    foreach($cars as $n)
    {
       
        echo  $n;
    }
    echo "<br>";
    $new = "$";
    $pos = 3;
   array_splice($cars , $pos ,0 ,$new);
   foreach($cars as $m)
   {
    echo $m  ;
   } 
    ?>
    <!-- program to filter elements -->
    <h4>Write a PHP program to filter out some elements with certain key-names.</h4>
    <?php
    $colors1 = array('c1'=>'Red','c2'=>'Green','c3'=>'white','c4'=>'Black');
    $colors2 = array('c2','c4');
    $result = array_diff_key($colors1,array_flip($colors2));
    print_r($result);

    ?>
    <h4>Write a PHP script to delete a specific value from an array using array_filter() function.</h4>
    <?php 
    echo "old array";
    echo "<br>";
  $colors2 = array('key1' => 'Red', 'key2' => 'Green', 'key3' => 'Black');
  print_r($colors2);
  echo "<br>";
  echo "filtered array";
  echo "<br>";
  $y='Black';
  $x = array_filter($colors2 , function($ele)use($y){return($ele != $y);});
  print_r($x);
    ?>
    <h4>Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.</h4>
 
    <?php
    $temperature = array("78", "60", "62", "68", "71", "68", "73", "85", "66", "64", "76", "63", "75", "76", "73", "68", "62", "73", "72", "65", "74", "62", "62", "65", "64", "68", "73", "75", "79", "73");
    print_r($temperature);
    echo "<br>";
  
    $temp = count($temperature);
    $x =  array_sum($temperature);
    
    $avg = $x/$temp;

    echo $avg;
    echo "<br>";
    echo "lowest temperature";
    echo "<br>";
   $x2 = asort($temperature);
  $l= array_splice($temperature , 0,7);
  foreach($l as $x2)
  {
echo $x2;
  }
  $x3 = rsort($temperature);
  echo "<br>";
  echo "highest temperature";
  echo "<br>";
  $m = array_splice($temperature,0,7);
  foreach($m as $x3)
  {
    echo $x3;
  }
   ?>


</body>
</html>