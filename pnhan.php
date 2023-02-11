<!DOCTYPE html>
<html lang="en">
<head>
    <title>BẢNG CỬU CHƯƠNG</title>
</head>
<body>
    <form action="" method="post">
        <label >nhập số:</label>
        <input type="number" name="so">
        <input type="submit" value="submit">
    </form>
    <?phP
    if(isset($_POST['so'])){
        $soo=($_POST['so']);
        for($i=1;$i<=$soo;$i++){
            echo"BẢNG CỬU CHƯƠNG $i";
            echo "<br>";
            for($j=1;$j<=9;$j++){
                echo"$i*$j=".$i*$j;

                echo "<br>";
            }
            echo "<br>";
        }
    }

    ?>
</body>
</html>