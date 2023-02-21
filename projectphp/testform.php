<html>
    <style>
    background: url('../images/bg.jpeg');
    background-size: cover;
    background-position-y: -80px;
    font-size: 16px;
}
#wrapper{
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
#form-login{
    max-width: 400px;
    background: rgba(0, 0, 0 , 0.8);
    flex-grow: 1;
    padding: 30px 30px 40px;
    box-shadow: 0px 0px 17px 2px rgba(255, 255, 255, 0.8);
}
.form-heading{
    font-size: 25px;
    color: #f5f5f5;
    text-align: center;
    margin-bottom: 30px;
}
.form-group{
    border-bottom: 1px solid #fff;
    margin-top: 15px;
    margin-bottom: 20px;
    display: flex;
}
.form-group i{
    color: #fff;
    font-size: 14px;
    padding-top: 5px;
    padding-right: 10px;
}
.form-input{
    background: transparent;
    border: 0;
    outline: 0;
    color: #f5f5f5;
    flex-grow: 1;
}
.form-input::placeholder{
    color: #f5f5f5;
}
#eye i{
    padding-right: 0;
    cursor: pointer;
}
.form-submit{
    background: transparent;
    border: 1px solid #f5f5f5;
    color: #fff;
    width: 100%;
    text-transform: uppercase;
    padding: 6px 10px;
    transition: 0.25s ease-in-out;
    margin-top: 30px;
}
.form-submit:hover{
border: 4px solid #54a0ff;
}
#wrapper{
    display: flex;
    text-align: center;
    justify-content: center;

}
    </style>
    <body>
    <div id="wrapper">
        <form action="" id="form-login" method="post">
            <h1 class="form-heading">Form đăng nhập</h1>
            <div class="form-group">
                <!-- <i class="far fa-user"></i> -->
                <input type="text" class="form-input" placeholder="user" name="dn">
            </div>
            <div class="form-group">
                <i class="fas fa-key"></i>
                <input type="password" class="form-input" placeholder="password" name="pw">
                <div id="eye">
                    <!-- <i class="far fa-eye"></i> -->
                </div>
            </div>
            <input type="submit" name="sm"value="Đăng nhập" class="form-submit">
        </form>
        <?php
        if (isset($_POST['sm'])){
            $pasword="tu111";
            $user="tu";
            $user1=$_POST['dn'];
            $pasword1=$_POST['pw'];
            if($user1==""){
                echo "<script> alert('name không được để trống !') </script>";
            }
            if($user1!=$user){
                echo "<script> alert('ten khong ton tai !') </script>";
            }
            if($pasword1!=$pasword){
                echo "<script> alert('pw khong ton tai !') </script>";
            }
            if($user1==$user && $pasword1==$pasword){
                echo "<script> alert('đăng nhập thành công !') </script>";
                header("Location: https://www.youtube.com/") ;
            }
            else{
                echo "<script> alert ('đăng nhập thất bại!')</script> ";
            }

        }
        ?>
    </div>
    
</body>
    </body>
</html>