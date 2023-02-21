
<?php 
session_start();
?>
<html>
    <body>
    <?php
if(isset($_SESSION['m'])){
    $nguoi=$_SESSION['m'];
    echo "chao $nguoi";
}
?>
    </body>
</html>
