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
    <script src="https://cdn.jsdelivr.net/npm/appwrite@10.2.0"></script>
    <title>sign in</title>
</head>
<body>
    <!-- ------------------- php data base connection and entry --------------------------    -->

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "website";


    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn) {
        die("Sorry we failed to connect: " . mysqli_connect_error());
    } else {
        echo "Connection was successful<br>";
        $sql = "SELECT * FROM usersdata WHERE email='$email' AND password='$pass';";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        echo $num;
        echo "<br>";
        if ($num > 0) {
            echo "the email found successfully!! <br>";
            header("Location:index.php");
            exit();
        } else {
            echo '<div class="alert alert_error" style="background-color:red;"> <strong> ERROR ! email not found :( </strong> <button aria-hidden="true" data-dismiss="alert" class="close" type="button" style="margin-left: 86%;text-decoration:none; color: black;"><a href="login.php" style="text-decoration:none; color: black; background-color:transparent; border:white; margin: 10px;">&times;</a></button></div><br>';
        }
    }
}
?>
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
                <div>
                    <div>
                        <img src="https://preview.colorlib.com/theme/bootstrap/login-form-07/images/undraw_remotely_2j6y.svg" alt="image" style="width: 100%;">
                    </div>
                </div>
            </div>
            <!-- ---------------  sign in form----------------------------- -->
            
            <form action=""  method="post"> 
                <div class="form-card">
                    <div class="card">
                        <div class="card-head bg-white">
                            <p class="m-0 text-center fs-08">Sign in with </p>
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
                                <span class="far fa-envelope text-muted"></span>
                                <input name="email" id="email" type="email" placeholder="Email" class="form-control" required>
                            </div>
                            <div class="d-flex align-items-center input-field">
                                <span class="fas fa-key text-muted"></span>
                                <input name="password" id="password" type="password" placeholder="Password" class="form-control" required>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox" name="remember" id="remember">
                                <label class="text-muted ms-2" for="remember">Remember me</label>
                            </div>
                            <div class="d-flex justify-content-center">
                            <button type="submit" style="border: none; padding-left:7%; "><div class="btn btn-primary mt-3">sign in</div></button>
                            <button type="button" style="border: none; background-color: #eeeeee; padding-left:10%; padding-top: 5.5%;"><div class="btn btn-primary me-4"><a href="signup.php" style="border: none; color: white; background-color: transparent; text-decoration: none;">sign up</a></div></button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
</body>
</html>