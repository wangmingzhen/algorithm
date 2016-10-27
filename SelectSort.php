<?php
//快速排序法
$a  = array(8,7,6,5,4,3,2,1);
$n  = count($a);

for( $i=0;$i<$n;$i++ ){
  
  $minIndex = $i;
  
  for( $j=$i+1;$j<$n;$j++ ){
    if( $a[$minIndex]>$a[$j] )
      $minIndex = $j;
  }
  
  $tmp          = $a[$i];
  $a[$i]        = $a[$minIndex];
  $a[$minIndex] = $tmp;
}

//Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => 6
    [6] => 7
    [7] => 8
)
?>
