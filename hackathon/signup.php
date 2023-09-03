<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style_signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/appwrite@10.2.0"></script>
    <title>sign up</title>
</head>
<body>
    <!-- ------------------- php data base connection and entry --------------------------    -->
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];
        
      
      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "website";

      // Create a connection
      $conn = mysqli_connect($servername, $username, $password, $database);
      // Die if connection was not successful
      if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{
        // echo "Connection was successful<br>";
        // Submit these to a database
        // Sql query to be executed 
        $sql = "INSERT INTO `usersdata` (`no.`, `name`, `email`, `password`, `date`) VALUES (NULL, '$name', '$email', '$pass', current_timestamp());";
        $result = mysqli_query($conn, $sql);

        if($result){
            //   echo "the table was created successfully!! <br>";
            header("Location:./hackathon/index.php");
            exit();
        }
        else{
            echo '<div class="alert alert_error"> <strong> ERROR ! this email is already taken..try another one.</strong><button aria-hidden="true" data-dismiss="alert" class="close" type="button" style="margin-left: 80%;"><a href="signup.php" style="text-decoration:none; color:""">&times;</a></button></div><br>';
        }
    }
}
?>
<!-- ---------------------alert message css-------------------------- -->

<style>.alert{padding: 15px;margin-bottom: 20px;border-radius: 4px;color: #fff;text-transform: uppercase;font-size: 12px}.alert_info{background-color: #4285f4;border: 2px solid #4285f4}button.close{-webkit-appearance: none;padding: 0;cursor: pointer;background: 0 0;border: 0}.close{font-size: 20px;color: #fff;opacity: 0.9;font-weight: normal}.alert_success{background-color: #09c97f;border: 2px solid #09c97f}.alert_warning{background-color: #f8b15d;border: 2px solid #f8b15d}.alert_error{background-color: #f95668;border: 2px solid #f95668}.fade_info{background-color: #d9e6fb;border: 1px solid #4285f4}.fade_info .close{color: #4285f4}.fade_info strong{color: #4285f4}.fade_success{background-color: #c9ffe5;border: 1px solid #09c97f}.fade_success .close{color: #09c97f}.fade_success strong{color: #09c97f}.fade_warning{background-color: #fff0cc;border: 1px solid #f8b15d}.fade_warning .close{color: #f8b15d}.fade_warning strong{color: #f8b15d}.fade_error{background-color: #ffdbdb;border: 1px solid #f95668}.fade_error .close{color: #f95668}.fade_error strong{color: #f95668}</style>

<!-- ------------------- php data base connection and entry ends here --------------------------    -->

<!-- ------------------- background bubbles  --------------------------    -->

    <div class="bubbles">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-wrap">
                <div class="content">
                    <div class="h4 text-white">A Beautiful Design System</div>
                    <div class="fs-5 text-white text-grey">Completed with examples <br><br></div>
                    <div><img src="https://preview.colorlib.com/theme/bootstrap/login-form-07/images/undraw_remotely_2j6y.svg" alt="image" style="width: 100%;"></div>
                </div>
                <!-- --------------------- sign up form ------------------------- -->

                <form action="index.php" method="post" > 
                    <div class="form-card">
                        <div class="card">
                            <div class="card-head bg-white">
                                <p class="m-0 text-center fs-08">Sign up with </p>
                                <div class="d-flex align-items-center justify-content-center my-2">
                                    <div class="btn btn-default">
                                        <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png" alt="">
                                        <span>GitHUb</span>
                                    </div>
                                    <div class="btn btn-default mx-3">
                                        <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png" alt="">
                                        <span>Google</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-form">
                                <p class="text-center text-muted fs-08 mt-3">Or sign in with credentials</p>
                                <div class="d-flex align-items-center input-field">
                                    <span class="far fa-user text-muted"></span>
                                    <input name="name" type="name" placeholder="Name" class="form-control" required>
                                </div>
                                <div class="d-flex align-items-center input-field">
                                    <span class="far fa-envelope text-muted"></span>
                                    <input name="email" type="email" placeholder="Email" class="form-control" required>
                                </div>
                                <div class="d-flex align-items-center input-field">
                                    <span class="fas fa-key text-muted"></span>
                                    <input name="password"  id="password" type="password" placeholder="Password" class="form-control" required>
                                </div>
                                <div class="d-flex align-items-center input-field">
                                    <span class="fas fa-lock text-muted"></span>
                                    <input name="confirm_password"  id="confirm_password" type="password" placeholder="Confirm Password" class="form-control" required>
                                </div>
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" name="remember" id="remember">
                                    <label class="text-muted ms-2" for="remember">Remember me</label>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button type="submit" style="border: none; background-color:#eeeeee ;"><div class="btn btn-primary mt-3">sign up</div></button>
                                    <button type="button" style="border: none; background-color:#eeeeee ; padding-left: 10%; "><div class="btn btn-primary mt-3"><a href="login.php" style="border: none; color: white; background-color: transparent; text-decoration: none;">sign in</a></div></button>
                                </div>
                            </div>
                </form>
                <!-- --------------------- script for password matching ----------------------->
                <script>
                    var password = document.getElementById("password") , confirm_password = document.getElementById("confirm_password");
                    function validatePassword(){
                        if(password.value != confirm_password.value) {
                            confirm_password.setCustomValidity("Passwords Don't Match");
                        } 
                        else {
                            confirm_password.setCustomValidity('');
                        }
                    }
                    password.onchange = validatePassword;
                    confirm_password.onkeyup = validatePassword;
                </script>
            </div>
            <div class="d-flex align-items-center pt-3 mt-4" style=" padding-left: 40%; font-family: 'Courier New', Courier, monospace;"></div>
        </div>
    </div>
</div>
</div>
</body>
</html>