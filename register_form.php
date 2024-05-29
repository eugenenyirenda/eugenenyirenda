<?php
@include 'config.php';


if (isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $pass = md5($_POST['password']);
  $cpass = md5($_POST['cpassword']);
  $user_type = $_POST['user_type'];

  $select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
  $result = mysqli_query($conn, $select);
   
  if(mysqli_num_rows($result)> 0){
  $error[] = 'user already exist!';

  }
  else{
    if ($pass != $cpass){
      $error[] = 'password not matched';
    }else{
      $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name', '$email', '$pass', '$user_type')";
      mysqli_query($conn, $insert);
      header('location: cars.php');
    }
    
  }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Eugest's register form for car rentals</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
      <form action="" method="post">
        <h3>register now</h3>
        <?php
        if(isset($error)){
          foreach($error as $error){
            echo '<span class = "error-msg">'.$error . '</span>';
          };
        };
        
        ?>
        <input type="text" name ="name" required placeholder="enter your name">
        <input type="text" name ="email" required placeholder="enter email">
        <input type="text" name ="password" required placeholder="enter password">
        <input type="text" name ="cpassword" required placeholder="confirm password">
        <select name="user_type">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>

        <input type="submit" name="submit" value="register now" class="form-btn">
        <p>already have an account? <a href="login_form.php">Login now</a></p>
      </form>

    </div>
</body>
</html>