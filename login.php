
<?php
require_once "app/database/connection.php";
require_once "path.php";
session_start();


if(isset($_POST['login'])){
    // $idno  = rand(1000000, 9999999); // figure how to not allow duplicates
    $user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
    $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
    $role = $_POST['role'];
    $loggedin = $_POST['loggedin'];
    
    $select = " SELECT * FROM users WHERE username = '$username' && password = '$password' ";
    
    $result = mysqli_query($conn, $select);
    
    if(mysqli_num_rows($result) > 0){
    
       $row = mysqli_fetch_array($result);
       $sql = "UPDATE users SET loggedin='1' WHERE username='$username'";
       if (mysqli_query($conn, $sql)) {
          echo "Record updated successfully";
        } else {
          echo "Error updating record: " . mysqli_error($conn);
        }
        $_SESSION['firstname']        = $row['firstname'];
        $_SESSION['user_id']          = $row['user_id'];
        $_SESSION['loggedin']         = $row['loggedin'];
        $_SESSION['user_idno']        = $row['idno'];
        $_SESSION['lastname']         = $row['lastname'];
        $_SESSION['username']         = $row['username'];
        $_SESSION['email']            = $row['email'];
        $_SESSION['pass']             = $row['password'];
        $_SESSION['cpass']            = $row['cpassword'];
        $_SESSION['role']             = $row['role'];
        header('location:' . BASE_URL . '/settings.php');
      
    }else{
       $error = '
       <div class="pt-3"></div>
       <div class="login_error">
       <strong>Error:</strong> 
       The username <strong>'. $_POST['username'] .'</strong> or password entered is not registered on this site. Please try again.
       </div>
       ';
    }
    
};



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable = no">

    <link rel="manifest" href="manifest.json">

    

    <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>   
    <!-- end bootstrap -->

    <!-- custom css styles -->
        <link rel="stylesheet" href="assets/styles.css?v=1.28">
    <!-- end custom css styles -->

    <title>Recipe Pro</title>
</head>
<body>
    <div class="pt-3"></div>
    <h1 class="ps-2">
        Login
    </h1>


    <div class="ps-2 content" style="width: 98%;">

    <?php echo $error; ?>
        <form class="form" action="" method="POST">
            <div class="username">
                <label for="user_login">Username</label>
                <input type="text" id="user_login" name="username" class="form-control" autocapitalize="off">
            </div>
            <br>
            <div class="password">
                <label for="user_pass">Password</label>
                <input type="password" id="user_pass" name="password" class="form-control" autocapitalize="off">
            </div>
            <br>
            <div class="button text-end">
                <input type="submit" name="login" class="btn btn-primary" value="Log In">
            </div>
        </form>

    </div>



    <!-- navigation -->
        <nav class="mobile-bottom-nav">
            <div class="pt-1"></div>
            <ul class="list d-flex justify-content-between">
                <li><a class="d-flex flex-column text-white align-items-center" style="text-decoration: none; font-size: 20px;" href="/"><i class="bi bi-house-door-fill" style="margin-bottom: -5px;"></i><span style="font-size: 12px; ">Home</span></a></li>
                <li><a class="d-flex flex-column text-white align-items-center" style="text-decoration: none; font-size: 20px;" href="shopping.php"><i class="bi bi-list-check" style="margin-bottom: -5px;"></i><span style="font-size: 12px;">Shopping</span></a></li>
                <li><a class="d-flex flex-column text-white align-items-center" style="text-decoration: none; font-size: 20px;" href="planner.php"><i class="bi bi-calendar-week" style="margin-bottom: -5px;"></i><span style="font-size: 12px;">Planner</span></a></li>
                <li><a class="d-flex flex-column text-white align-items-center" style="text-decoration: none; font-size: 20px;" href="cookbook.php"><i class="bi bi-book-fill" style="margin-bottom: -5px;"></i><span style="font-size: 12px;">Cookbooks</span></a></li>
                <li><a class="d-flex flex-column text-white align-items-center" style="text-decoration: none; font-size: 20px;" href="settings.php"><i class="bi bi-gear-fill" style="margin-bottom: -5px;"></i><span style="font-size: 12px;">Settings</span></a></li>
            </ul>
        </nav>
    <!-- end navigation -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>