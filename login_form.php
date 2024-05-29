<?php
@include 'config.php';

session_start();

if (isset($_POST['submit'])){
  
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);

  

  $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
  $result = mysqli_query($conn, $select);
   
  if(mysqli_num_rows($result)> 0){
  $error[] = 'user already exist!';
  
  $row = mysqli_fetch_array($result);
  
  if ($row['user_type'] == 'admin'){

    $_SESSION['admin_name'] = $row['name'];
    header('location: admin_page.php');

  } elseif($row['user_type'] == 'user'){

    $_SESSION['user_name'] = $row['name'];
    header('location: user_page.php'); /*add a page for pics of vehicles */
  }
  
  }else{
 $error[] ='incorerct email or password!';
  }
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
      <form action="" method="post">
      <h3>Rental vehicle management system</h3>
      <br>
        <h3>Login now</h3>
        <?php
        if(isset($error)){
          foreach($error as $error){
            echo '<span class = "error-msg">'.$error . '</span>';
          };
        };
        
        ?>
        <input type="text" name ="email" required placeholder="enter email">
        <input type="text" name ="password" required placeholder="enter password">
       <input type="submit" name="submit" value="login now" class="form-btn">
        <p>don't have an account? <a href="register_form.php">register now</a></p>
       <br>
        <h5>© 2024. Eugene Nyirenda. Rights Reserved</h5>
      </form>
      
    </div>
</body>
</html>