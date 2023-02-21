
<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img{
            height: 90px;
            width: 90px;
        }
    </style>
</head>
<body>
<form action="" method="post">
            <table border="1px solid black">
                <tr>
                    <td> tên</td>
                    <td>giá</td>
                    <td>đánh giá</td>
                    <td> ảnh</td>
                </tr>
                <?php
                if(isset($_SESSION['tc'])){
                    $n=count($_SESSION['tc']);
                    for($i=0;$i<$n;$i++){
                ?>
                <tr>
                <td> <?php echo $_SESSION['tc'][$i]['name'];?></td>
                <td> <?php echo $_SESSION['tc'][$i]['price'];?></td>
                <td> <?php echo $_SESSION['tc'][$i]['dg'];?></td>
                <td> <img src="<?php echo $_SESSION['tc'][$i]['anh'];?>"></td>
                </tr>
                <?php
                echo "<br>";
                
                  }
                }
                ?>

            </table>
        </form>
</body>
</html>

     
   