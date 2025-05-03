<?php
    include 'components/connect.php';

    if(isset($_POST['submit'])){
        $id = unique_id();
        $name = $_POST['name'];
        $name = filter_var($name,FILTER_SANITIZE_STRING);

        
        
        $email = $_POST['email'];
        $email = filter_var($email,FILTER_SANITIZE_STRING);
        
        $pass = $_POST['password'];
        $pass = filter_var($pass,FILTER_SANITIZE_STRING);
        
        $cpass = $_POST['cpass'];
        $cpass = filter_var($cpass,FILTER_SANITIZE_STRING);
        
        

        $select_tutor = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $select_tutor->execute([$email]);
        

        if($select_tutor->rowCount()>0){
            $message[] = 'email already exists';
        }else{
            if($pass != $cpass){
                $message[] = 'confirm password is not matched';
            }else{
                $insert_tutor = $conn->prepare("INSERT INTO users (id,name, email, password) VALUES (?,?,?,?)");
                $insert_success = $insert_tutor->execute([$id, $name, $email, $cpass]);

                

                $message[] = 'new user registerd! you can login now';
            }
        }
    }
?>
<style type="text/css">
    <?php include 'css/admin_style.css'; ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php
    if(isset($message)){
        foreach($message as $message){
            echo '<div class="message">
                    <span>'.$message.'</span>
                    <i class="bx bx-x" onclick="this.parentElement.remove();"></i>
                </div>
    
            ';
        }
    }


    ?>
    <div class="form-container">
    <div class="image-container">
        <img src="../image/fun.jpg" class="form-img", style="left: 5%;">
    </div>
    <form action="" method="post" enctype="multipart/form-data" class="register">
        <h3>register now</h3>
        <div class="flex">
            <div class="col">
                <p>your name <span>*</span></p>
                <input type="text" name="name" placeholder="enter your name" maxlength="50" required class="box">
                
                <p>your email <span>*</span></p>
                <input type="email" name="email" placeholder="enter your email" maxlength="50" required class="box">
            </div>
            <div class="col">
                <p>your password <span>*</span></p>
                <input type="password" name="password" placeholder="enter your password" maxlength="50" required class="box">
                <p>your password <span>*</span></p>
                <input type="password" name="cpass" placeholder="confirm your password" maxlength="50" required class="box">
                
            </div>
        </div>
        <p class="link">already have an account? <a href="login.php">login now</a></p>
            <input type="submit" name="submit" class="btn" value="register now">
    </form>
</div>

</body>
</html>