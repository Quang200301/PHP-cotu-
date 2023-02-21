<html>
    <body>
        <form action="" method="post">
            <label > từ cần tra:</label>
            <br>
            <input type="text" name="tx" value="<?php if(isset($_POST['tx'])) echo $_POST['tx'] ?>"><br>
            <input type="submit" name="sbm" value="tra từ"><br>
            kết quả:

            <?php
            $m=$_POST['tx'];
        if(isset($_POST['sbm'])){
            $result="";
            $translate=array("dog"=>"Chó","cat"=>"Mèo","fish"=>"Cá","bird"=>"Chim");
            foreach($translate as $english => $vietnam){
                if($english==$m){
                    $result=$vietnam;
                }
                elseif($english===strtolower($m)){
                    $result=$vietnam;
                }
            }
            if($result==""){
                echo "không tìm thấy kết quả.";
            }
            else{
                echo $result;
            }
        }
        ?>
        </form>
    </body>
</html>