<?php
session_start();
?>
<html>
    <body>
        <form action="" method="post">
        <label for=""> your name</label>
        <input type="text" name="name">
        <br>
        <label for="">  password</label>
        <input type="text" name="pass">
        <input type="submit" name="sm" value=" login">
        </form>
        <?php
         
         if(isset($_POST["sm"])){
            $names=$_POST["name"];
            $passwords=$_POST["pass"];
            $kq=0;
            $user=array(
                "alis"=>"123",
                "adam"=>"111",
                "maxim"=>"222");
            foreach($user as $k=>$v){
                if($names==$k || $passwords==$v){
                    $kq=1;
                }
                if($names!=$k)
                if( $passwords!=$v){
                    $kq=1;
                }

            } 
            if($kq==1){
                echo"thanh công";
             }
             elseif($kq==2){
                echo" đăng nhập thành công";
             }
             else{
                if($kq==0)
                echo" tai khoản không tồn tại";
             }
         }
        
    
        ?>
      
    </body>
</html>