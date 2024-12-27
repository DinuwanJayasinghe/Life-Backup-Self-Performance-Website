<?php

global $con;
require 'Connection.php';

    if (isset($_POST['agent_code']) && isset($_POST['password'])) {

        function validate($data)
        {

            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $agent_code = validate($_POST['agent_code']);
        $password = validate($_POST['password']);

        if (empty($agent_code)) {

            header("Location: Login_Page.php?error=Agent Code is required");
            exit();

        }else if(empty($password)){
            header("Location: Login_Page.php?error=Password is required");
            exit();

        }else{

            $sql = "SELECT * FROM users WHERE agent_code='$agent_code' AND password='$password'";

            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) === 1) {

                $row = mysqli_fetch_assoc($result); // Database eke data associative array ekata store kara gani.
               // $raw = mysql_fetch_array($result);

                if ($row['agent_code'] === $agent_code && $row['password'] === $password) {

                    $_SESSION['agent_code'] = $row['agent_code'];
                    $_SESSION['position'] = $row['position'];
                    $_SESSION['user_id'] = $row['user_id'];


                    if ($row ["position"] == "Supervisor"){ // Check the possition

                        header("Location: Supervior.php"); //Rredect each position

                    }else if ($row ["position"] == "Manager"){

                        header("Location: Manger.php");

                    }else if ($row ["position"] == "Life Insurance Agent") {

                        header("Location: L.I.A.php");

                    }else if ($row ["position"] == "Team Leader") {

                        header("Location: Team Leader.php");

                    }else if ($row ["position"] == "Seals Agent") {

                        header("Location: Seals Agents.php");

                    }else if ($row ["position"] == "Cashier") {

                        header("Location: Cashier.php");

                    }else {

                        header("Location: Login_Page.php?error=Login Unsuccessfuly...");
                        exit();
                    }


                }else{

                    header("Location: Login_Page.php?error=Incorect Agent Code or Password");
                    exit();
                }
            }else{
                header("Location: Login_Page.php?error=Incorect Agent Code or Password");
                exit();
            }


        }
    }
    /*
    if ($_SERVER ['REQUEST_METHOD'] == 'POST'){

        $agent_code = $_POST['agent_code'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE agent_code='".$agent_code."' AND password='".$password."'";

        $result = mysql_query($con, $sql);

        $raw_data = mysql_fetch_array($result);

            if ($row_data ["position"] == "Supervisor"){

                header("Location: Supervisor.php");
            }

    }
        */

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title>

    <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

    <!--Add Icon-->
    <link rel="icon" href="Images/logo (1).ico" type="image/x-icon"/>


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<style type="text/css"> 

    @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");
body {
  font-family: "Roboto", sans-serif;
  color: #818181;
  font-size: 15px;
}

a {
  -webkit-transition: .3s all ease;
  transition: .3s all ease;
  color: #7754F6;
  font-weight: 500;
  text-decoration: none;
}

a:hover {
  color: #643cf5;
}

.bg-img,
.form-wrap {
  height: 100vh;
  min-height: 500px;
}

.bg-img {
  left: 0;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  width: 100%;
  position: relative;
  height: 200px;
  min-height: 200px;
  z-index: 2;
}

@media (min-width: 768px) {
  .bg-img {
    position: fixed;
    width: 50%;
    height: 100vh;
  }
}

@media (min-width: 992px) {
  .bg-img {
    position: fixed;
    width: 50%;
    height: 100vh;
  }
}

@media (min-width: 1200px) {
  .bg-img {
    position: fixed;
    width: 60%;
    height: 100vh;
  }
}

.form-wrap {
  right: 0;
  position: relative;
  z-index: 1;
  padding: 5%;
  width: 100%;
  background: #fff;
  height: 100%;
}

@media (min-width: 768px) {
  .form-wrap {
    position: absolute;
    width: 50%;
  }
}

@media (min-width: 992px) {
  .form-wrap {
    position: absolute;
    width: 50%;
  }
}

@media (min-width: 1200px) {
  .form-wrap {
    position: absolute;
    width: 40%;
  }
}

.form-wrap .title {
  font-size: 50px;
  color: #000;
}

.form-wrap .form-floating {
  position: relative;
  margin-bottom: 15px;
}

.form-wrap .form-floating .form-control {
  height: 60px !important;
  border-radius: 10px !important;
}

.form-wrap .form-floating .form-control:active, .form-wrap .form-floating .form-control:focus {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
  border-color: #7754F6;
}

.form-wrap .password-show-toggle {
  cursor: pointer;
  position: absolute;
  right: 20px;
  top: 15px;
  z-index: 9;
}

.form-wrap .password-show-toggle span {
  font-size: 20px;
}

.form-wrap .password-show-toggle span:before {
  font-family: 'unicons-line';
  content: "\ebf8";
}

.form-wrap .password-show-toggle.active span:before {
  content: "\ebaf";
}

.form-wrap .form-check {
  margin-bottom: 30px;
}

.form-wrap .form-check .form-check-input {
  border-color: #d1d1d1 !important;
}

.form-wrap .form-check .form-check-input:checked {
  background-color: #7754F6;
  border-color: #7754F6 !important;
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.form-wrap .form-check .form-check-input:focus, .form-wrap .form-check .form-check-input:active {
  outline: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}

.form-wrap .btn-primary {
  border-radius: 10px;
  background-color: #7754F6;
  border-color: #7754F6;
  height: 60px;
  font-weight: 500;
  -webkit-box-shadow: 0 15px 30px -7px rgba(119, 84, 246, 0.5);
          box-shadow: 0 15px 30px -7px rgba(119, 84, 246, 0.5);
  -webkit-transition: .3s all ease;
  transition: .3s all ease;
  font-size: 18px;
}

.form-wrap .btn-primary:hover {
  background-color: #643cf5;
  border-color: #643cf5;
}

.form-wrap .social-account-wrap {
  padding-top: 30px;
  padding-bottom: 50px;
}

.form-wrap .social-account-wrap h4 {
  text-align: center;
  font-size: 14px;
  font-weight: normal;
  position: relative;
}

.form-wrap .social-account-wrap h4 span {
  z-index: 1;
  display: inline-block;
  padding-left: 20px;
  padding-right: 20px;
  background: #fff;
}

.form-wrap .social-account-wrap h4:before {
  content: "";
  position: absolute;
  top: 50%;
  left: 0;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  width: 100%;
  height: 1px;
  background-color: #d1d1d1;
  z-index: -1;
}

.form-wrap .social-account-wrap .social-account li {
  width: calc(25% - 0);
}

.form-wrap .social-account-wrap .social-account li a {
  display: inline-block;
  border: 1px solid #d1d1d1;
  padding: 10px;
  border-radius: 10%;
}

.form-wrap .social-account-wrap .social-account li a:hover {
  border-color: #bdbdbd;
}

    .error {
        background: #F2DEDE;
        color: #A94442;
        padding: 10px;
        width: 95%;
        border-radius: 5px;
        margin: 20px auto;
    }

/*# sourceMappingURL=style.css.map */
  </style>  

</head>
<body>

    <div class="site-wrap d-md-flex align-items-stretch">
        <div class="bg-img" style="background-image: url('images/img-bg-1.jpg')"></div>
        <div class="form-wrap">
            <div class="form-inner">
                <h1 class="title">Login</h1>
                <p class="caption mb-4">Please enter your login details to sign in.</p>

                <!--error message -->

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <form action="#" class="pt-3" method="POST">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="email" name="agent_code" placeholder="info@example.com" required>
                        <label for="email">Agent Code</label>
                    </div>

                    <div class="form-floating">
                        <span class="password-show-toggle js-password-show-toggle"><span class="uil"></span></span>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label for="remember" class="form-check-label">Keep me logged in</label>
                        </div>
                        <div><a href="Forgot_Password.php">Forgot password?</a></div>
                    </div>
                    
                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary" name="login">Log in</button>
                    </div>

        <!--                   <div class="mb-2">Don’t have an account? <a href="signup.php">Sign up</a></div>-->

                    <div class="social-account-wrap">
                        <h4 class="mb-4"><span>or continue with</span></h4>
                        <ul class="list-unstyled social-account d-flex justify-content-between">
                            <li><a href="#"><img src="Images/icon-google.svg" alt="Google logo"></a></li>
                            <li><a href="#"><img src="Images/icon-facebook.svg" alt="Facebook logo"></a></li>
                            <li><a href="#"><img src="Images/icon-apple.svg" alt="Apple logo"></a></li>
                            <li><a href="#"><img src="Images/icon-twitter.svg" alt="Twitter logo"></a></li>
                        </ul>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
   <script type = "text/javascript">

    (function () {

        'use strict';

        var elToggle = document.querySelector('.js-password-show-toggle'),
            passwordInput = document.getElementById('password');

        elToggle.addEventListener('click', (e) => {
            e.preventDefault();

            if (elToggle.classList.contains('active')) {
                passwordInput.setAttribute('type', 'password');
                elToggle.classList.remove('active');
            } else {
                passwordInput.setAttribute('type', 'text');
                elToggle.classList.add('active');
            }
        })

    })()

   </script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    </body>
</html>
