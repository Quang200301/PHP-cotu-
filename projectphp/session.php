<html>
    <style>
        img{
            height:70px;
            width: 70px;
        }
    </style>
    <body>
    <?php
$traicay=array();
$traicay['0']['ten']='tao';
$traicay['0']['gia']='25';
$traicay['0']['mota']='ac';
$traicay['0']['hinhanh']='data:image/jpeg;base64,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 ';
$traicay['1']['ten']='chanh';
$traicay['1']['gia']='15';
$traicay['1']['mota']='achua';
$traicay['1']['hinhanh']='data:image/jpeg;base64,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';
$traicay['2']['ten']='nho';
$traicay['2']['gia']='55';
$traicay['2']['mota']='ngon';
$traicay['2']['hinhanh']='data:image/jpeg;base64,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';


?>
<form action="" method="post">
thông tin sản phẩm

    <table border="1px solid black"> 
        <tr>
            <td>tên</td>
            <td>giá</td>
            <td>mô tả</td>
            <td>hình ảnh</td>
        </tr>
        <?php
    $n=count($traicay);
    for($i=0;$i<$n;$i++)
{
    ?>
    <tr>
        <td><?php echo $traicay[$i]['ten'];?></td>
        <td><?php echo $traicay[$i]['gia'];?></td>
        <td><?php echo $traicay[$i]['mota'];?></td>
        <td><img   src="<?php echo $traicay[$i]['hinhanh']?>"></td>
    </tr>
    <?php
}
    ?>
    
    </table>
    

</form>
    
    

        
    </body>
</html>

