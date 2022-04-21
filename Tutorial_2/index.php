<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php  
$star = 6;
for($i = 1; $i <= $star; $i++){  
    for($k = $star; $k > $i; $k--){  
        echo "&nbsp;&nbsp;";  
    }  
    for($j = 0; $j < $i * 2 - 1; $j++){  
        echo "*";  
    }  
    echo "<br>";  
}  
for($i = 1;$i <= $star - 1; $i++){  
    for($k = 0; $k < $i;$k++){  
      echo "&nbsp;&nbsp;";  
    }  
    for($j = ($star - $i) * 2 -1; $j > 0;$j--){  
      echo "*";  
    }  
    echo "<br>";  
}  
?>  
</body>
</html>
 