<html>
    <body>
        <form action="" method="post">
            <lable>ngày</lable>
            <input type="text" name="ngay">
            <lable>tháng</lable>
            <input type="text" name="thang">
            <lable>năm</lable>
            <input type="text" name="nam">
            <input type="submit" value="submit">
        </form>
    <?php
    if(isset($_POST['ngay']) && isset($_POST['thang']) && isset($_POST['nam'])){
        $ngayy=$_POST['ngay'];
        $thangg=$_POST['thang'];
        $namm=$_POST['nam'];

        switch($thangg){
            case 1;
            case 4;
            case 6;
            case 8;
            case 9 ;
            case 11;
            $n=31; break;
            case 3;
            case 5;
            case 7;
            case 10;
            case 12;
            $n=30; break;
           // case 2;
    
        }
        if($thangg==2){
            if($namm%4==0){
                $n=29;
            }
            else{
                $n=28;    
    
            }
        }
        
        if($thangg==$thangg && $ngayy<=$n){
            echo"thang $thangg  ngay $ngayy  là ngày hợp lệ";
        }
        else{
            echo"ngày $ngayy không hợp lệ cho thang $thangg";
        }
       
    }

   
    ?>


</body>
</html>

