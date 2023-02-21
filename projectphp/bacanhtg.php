<html>
    <body>
        <form action="" method="post">
            <label for=""> cạnh thứ nhất:</label>
            <input type="number" name="c1">
            <label for=""> cạnh thứ nhất:</label>
            <input type="number" name="c2">
            <label for=""> cạnh thứ nhất:</label>
            <input type="number" name="c3">
            <input type="submit" name="btn"value="submit">
        </form>
<?php
// bài 4.
if(isset($_POST['c1']) || isset($_POST['c2']) || isset($_POST['c3'])){
    $c11=$_POST['c1'];
    $c22=$_POST['c2'];
    $c33=$_POST['c3'];
}

if(($c11+$c22>$c33)|| ($c22+$c33>$c11)|| ($c11+$c33>$c22)){
    echo"dây là tam giác "; 
}if(($c11+$c22==$c33)||($c22+$c33==$c11)){
    echo"đây là tam giác  cân";
}elseif(($c11+$c22>$c33)||($c22+$c33>$c11)){
    echo"đây là tam giác đều";
}else{
    echo"đây là tam giác bình thường";
}
?>
    </body>
</html>