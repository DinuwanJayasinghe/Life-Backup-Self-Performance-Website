<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

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
/*# sourceMappingURL=style.css.map */

</style>

</head>
<body>

    <div class="site-wrap d-md-flex align-items-stretch">
        <div class="bg-img" style="background-image: url('images/img-bg-2.jpg')"></div>
        <div class="form-wrap">
            <div class="form-inner">
                <h1 class="title">Sign up</h1>
                <p class="caption mb-4">Create your account in seconds.</p>

                <form action="#" class="pt-3">

                    <div class="form-floating">
                        <input type="text" class="form-control" id="agentCode" placeholder="Full Name">
                        <label for="name">Agent Code</label>
                    </div>

                    <div class="form-floating">
                        <span class="password-show-toggle js-password-show-toggle"><span class="uil"></span></span>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <div class="form-floating">
                        <span class="password-show-toggle js-con-password-show-toggle"><span class="uil"></span></span>
                        <input type="password" class="form-control" id="Con_password" placeholder="Confirm Password">
                        <label for="password">Confirm Password</label>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label for="remember" class="form-check-label">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                        </div>
                    </div>

                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary">Create an account</button>
                    </div>

                    <div class="mb-2">Already a member? <a href="Login_Page.php">Log in</a></div>

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
    
    
    <script type="text/javascript">

        (function () {

                'use strict';

                var elToggle = document.querySelector('.js-password-show-toggle'),
                    passwordInput = document.getElementById('password');
                    //passwordInput = document.getElementById('Con_password');

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
            //Confirm Password

            var elToggle1 = document.querySelector('.js-con-password-show-toggle'),
                //passwordInput = document.getElementById('password');
                ConpasswordInput = document.getElementById('Con_password');

            elToggle1.addEventListener('click', (e) => {
                e.preventDefault();

                if (elToggle1.classList.contains('active')) {
                    ConpasswordInput.setAttribute('type', 'password');
                    elToggle1.classList.remove('active');
                } else {
                    ConpasswordInput.setAttribute('type', 'text');
                    elToggle1.classList.add('active');
                }
            })
        })()

    </script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    </body>
</html>
