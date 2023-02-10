<html>
    <body>
        <form action="" method="post">
            <label > Tên:</label>
            <input type="text" name="name">
            <input type="submit" value="CHÀO">
        </form>
        <?php
        if(isset($_POST['name'])){
            $hhhh=$_POST['name'];
            echo"XIN CHÀO $hhhh ";
        }
        ?>
    </body>
</html>