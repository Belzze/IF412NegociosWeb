<?php
function addNumber($a,$b)
{
  return $a + $b;
}

function factorial($n){
  return (n==0)?1:$n*factorial($n-1);
}

function primarios($start, $elements){
  $primarios = Array();
  $i=0;
  $tmpInt = $start;
  while (count($primarios)<=$elements) {
    $fonunt=true;
    for($j=0; $j < $tmpInt; $j++)
    {
      if($tmpInt%$j == 0){
        $fonunt=true;
        $primarios[]=$tmpInt;
        break;
      }
    }
  }
}
 ?>
