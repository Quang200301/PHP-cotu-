<html>
    <body>
        <form action="" method="post">
            <tr><label > nhập số thứ 1:</label>
            <input type="number" name="st1"></tr>
            <br>
            <br>
            <tr> <label > nhập số thứ 2:</label>
            <input type="number" name="st2">
            <input type="submit" name="btn" value="tính tổng"></tr>
        </form>
        <?php
        if( isset($_POST['btn'])){
            $number1=$_POST['st1'];
            $number2=$_POST['st2'];
            $c=$number1+$number2 ;
            echo "tổng hai số là:$c " ;
        }
       
        ?>
    </body>
</html>