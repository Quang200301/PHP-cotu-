 <html>
    <body>
         <!-- nhập hai số a,b in các số chia hết cho 3 -->
        <form action="" method="post">
        <tr><label for=""> nhập số thứ nhất:</label>
        <input type="number" name="s1"><br></tr>
        <br>
        <tr><label for="">nhập số thứ hai:</label>
        <input type="number" name="s2"></tr>
        <input type="submit" name="btn" value="submit">
        </form>
        <?php
        if(isset($_POST['s1'])&& isset($_POST['s2'])){
            $so1=$_POST['s1'];
            $so2=$_POST['s2'];
            for($i=$so1;$i<=$so2;$i++){
                if($i%3==0){
                    $c=$i;
                    echo"$c";  
                }
            }
        }
       
        ?> 
    </body>
</html>
 

