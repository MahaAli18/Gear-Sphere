<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    
    
    <?php 
    $items=array("cerealcosts"=>"5.00", "coffeebeanscosts"=>"2.50", "Bananascosts"=>"3.50", "Onioncosts"=>"1.00", "Lettucecosts"=>"2.40");
    
    

    foreach($items as $x => $x_value) {
    echo   $x .  ": $ " . $x_value;
    echo "<br>";
     }

    $sum=array_sum($items);
    echo "The total Price of your items is: ". "$". $sum;

    ?>



</body>
</html>