<html>
    <body>
        <form action="" method=post>
            <label for="">input number:</label>
            <input type="number" name="nb">
            <input type="submit" name="ok" value="check">
        </form>
        <?php
        if (isset($_POST['ok'])){
            $nb1=$_POST['nb'];
            $sum=0;
            while($nb1>0){
                $sum=$sum+($nb1%10);
                $nb1=$nb1/10;
            }
            echo "sum is:$sum";
        }
        ?>
    </body>
</html>