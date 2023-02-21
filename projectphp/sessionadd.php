
<?php session_start()?>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

        <form action="" method="post">
            <label for="">name</label>
            <input type="text" name="name">
            <label for="">price</label>
            <input type="text" name="price">
            <label for="">danhgia</label>
            <input type="text" name="dg">
            <label for="">anh</label>
            <input type="text" name="anh">
            <input type="submit" name="sbm" value="submit">

        <?php
        if(isset($_POST['sbm'])){
            $n=0;
            if(isset($_SESSION['tc']))
                $n=count($_SESSION['tc']);
                $_SESSION['tc'][$n]['name']=$_POST["name"];
                $_SESSION['tc'][$n]['price']=$_POST["price"];
                $_SESSION['tc'][$n]['dg']=$_POST["dg"];
                $_SESSION['tc'][$n]['anh']=$_POST["anh"];
                header("location:sesionadmin.php");
            
        }
        
        
        ?>
    
        </form>
       
</body>
</html>