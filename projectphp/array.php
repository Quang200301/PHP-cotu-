<?php
$a=[2,3,1,4,5,2,5];
$b= $a[0];
$c= $a[0];
$position=0;
$n=0;
for($i=1;$i<count($a);$i++){
    if($a[$i] > $b){
        $b = $a[$i];
        $position=$i;
    }
    elseif($a[$i] < $c){
        $c = $a[$i];
        $n=$i;
    };
 
   
}
echo "số lớn nhất là $b, vị trí $position";
echo "số min là $c, vị trí $n";

?>