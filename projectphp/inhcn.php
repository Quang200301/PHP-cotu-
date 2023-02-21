<html>
<body>
    <form action="" method="post">
     <label for="">nhập chiều dài:</label>
     <input type="number" name="cd">
     <label for="">nhập chiều rộng:</label>
     <input type="number"name="cr">
     <input type="submit" value="oki">
    </form>
    <?php
    $nn=$_POST['cd'];
    $cn=$_POST['cr'];
    for($i=0;$i<$nn;$i++){
        for($p=0;$p<$cn;$p++){
            echo"*";
        
        }
        echo"<br>";
    };
    ?>
</body>
</html>
