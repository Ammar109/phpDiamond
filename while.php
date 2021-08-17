<!-- half diamond -->
<?php
$i = 1;
$b= 1;
$c=1;
while ($i <= 5) {
    
  $x=1;
  while ($x <= $i) {
      echo "* ";
      $x++;
  } 
 
  echo "<br>";
  $i++;
  
}
while ($b <= 5) { 

    $y=5;
    while ($y>$b) {
        echo "*  ";
        $y--;
    }
   
    echo "<br>";
    $b++;
    
  }
?>
<!-- full diamond -->
<?php
$i = 1;
$b= 1;
$c=1;
while ($b <= 5) { 

    $y=5;
    while ($y>$b) {
        echo "&nbsp";
        $y--;
    }
    $x=1;
  while ($x <= $b) {
      echo "*";
      $x++;
  } 
   
    echo "<br>";
    $b++;
    
  }

while ($i <= 5) {
    
  $x=1;
  while ($x <= $i) {
      echo "&nbsp";
      $x++;
  } 
  $y=5;
  while ($y>$i) {
      echo "*";
      $y--;
  }
  echo "<br>";
  $i++;
  
}
?>