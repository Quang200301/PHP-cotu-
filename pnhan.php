<!DOCTYPE html>
<html lang="en">
<head>
    <title>BẢNG CỬU CHƯƠNG</title>
</head>
<body>
    <?phP
        $b=4;
        for($i=1;$i<=$b;$i++){
            echo"BẢNG CỬU CHƯƠNG $i";
            echo "<br>";
            for($j=1;$j<=9;$j++){
                echo"$i*$j=".$i*$j;

                echo "<br>";
            }
            echo "<br>";
        }

    ?>
</body>
</html>