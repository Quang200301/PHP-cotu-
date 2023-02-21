  <?php
$a=12;$b=30;
if($a>$b){
        for($i=1;$i<=$b;$i++){
                if($a%$i==0 && $b%$i==0){
                        $c=$i;
                }
        }
        if($a*$b%$c==0){
           $d=$a*$b/$c;
        }
}
else if($a<$b){
             for($i=1;$i<=$a;$i++){
                if($a%$i==0 && $b%$i==0){
            
                        $c=$i;
                }
            }       
            if($a*$b%$c==0){
               $d=$a*$b/$c;
            }
};
echo"ước chung lớn nhất của $a và $b là $c <br> bội chung nhỏ nhất của $a và $b là $d";
 ?>





