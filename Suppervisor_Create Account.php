<?php

global $con;
require 'Connection.php';

if(isset($_POST['create_account'])){

    $agent_code = $_POST['agent_code'];
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $reg_date = $_POST['reg_date'];
    $position = $_POST['position'];
    $branch = $_POST['branch'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "INSERT INTO `users` (`agent_code`, `full_name`, `dob`, `reg_date`, `position`, `branch`, `phone`, `email`, `password` )
        VALUES ('$agent_code', '$full_name', '$dob', '$reg_date', '$position', '$branch', '$phone', '$email', '$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {

        header('location: Suppervisor_Create Account.php'); // Dorection  Pathe.

    } else {

        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!--Add Icon-->
    <link rel="icon" href="Images/logo (1).ico" type="image/x-icon"/>

    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <title>Create Account | Supervisor</title>

    <style type="text/css" >

        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap");
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        .page-content {

            width: 100%;
            display: flex;
            display: -webkit-flex;
            justify-content: center;
            -o-justify-content: center;
            -ms-justify-content: center;
            -moz-justify-content: center;
            -webkit-justify-content: center;
            align-items: center;
            -o-align-items: center;
            -ms-align-items: center;
            -moz-align-items: center;
            -webkit-align-items: center;
            background-image: -moz-linear-gradient( 136deg, rgb(149,153,226) 0%, rgb(139,198,236) 100%);
            background-color: var(--grey);

        }

        .form-v10-content  {

            background: #fff;
            width: 1000px;
            border-radius: 20px;
            -o-border-radius: 20px;
            -ms-border-radius: 20px;
            -moz-border-radius: 20px;
            -webkit-border-radius: 20px;
            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -o-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
            margin: 10px 0;
            position: relative;
            font-family: 'Montserrat', sans-serif;
        }
        .form-v10-content .form-detail {
            position: relative;
            width: 100%;
            display: flex;
            display: -webkit-flex;
        }
        .form-v10-content .form-detail h2 {
            font-weight: 500;
            font-size: 25px;
            margin-bottom: 34px;
            padding: 33px 50px 0px 60px;
        }
        .form-v10-content .form-detail .form-left {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
            width: 100%;
            margin-top:40px;
        }
        .form-v10-content .form-detail .form-left h2 {
            color: #2271dd;
        }
        .form-v10-content .form-detail .form-right {
            width: 100%;
            background: var(--blue  );
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            margin-top: -3px;
            margin-bottom: 0px;
        }
        .form-v10-content .form-detail .form-right h2 {
            color: var(--blue);
        }
        .form-v10-content .form-detail .form-group {
            display: flex;
            display: -webkit-flex;
        }
        .form-v10-content .form-detail .form-row {
            position: relative;
            margin-bottom: 24px;
            padding-left: 60px;
            padding-right: 50px;
        }
        .form-v10-content .form-detail .form-left .form-group .form-row.form-row-1 {
            width: 50%;
            padding: 0 12px 0 60px;
        }
        .form-v10-content .form-detail .form-left .form-group .form-row.form-row-2 {
            width: 50%;
            padding: 0 50px 0 12px;
        }
        .form-v10-content .form-detail .form-left .form-group .form-row.form-row-3 {
            width: 73%;
            padding: 0 12px 0 60px;
        }
        .form-v10-content .form-detail .form-left .form-group .form-row.form-row-4 {
            width: 50%;
            padding: 0 50px 0 12px;
        }
        .form-v10-content .form-detail .form-right .form-group .form-row.form-row-1 {
            width: 50%;
            padding: 0 12px 0 60px;
        }
        .form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 {
            width: 100%;
            padding: 0 50px 0 12px;
        }
        .form-v10-content .form-detail select,
        .form-v10-content .form-detail input {
            width: 100%;
            padding: 11.5px 15px 15px 15px;
            border: 1px solid transparent;
            background: transparent;
            appearance: unset;
            -moz-appearance: unset;
            -webkit-appearance: unset;
            -o-appearance: unset;
            -ms-appearance: unset;
            outline: none;
            -moz-outline: none;
            -webkit-outline: none;
            -o-outline: none;
            -ms-outline: none;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -o-box-sizing: border-box;
            -ms-box-sizing: border-box;
        }
        .form-v10-content .form-detail select {
            background: 0 0;
            position: relative;
            z-index: 9;
            cursor: pointer;
        }
        .form-v10-content .form-detail .form-left select {
            color: #666;
        }
        .form-v10-content .form-detail .form-right select {
            color: #f2f2f2;
        }
        .form-v10-content .form-detail .select-btn {
            z-index: 0;
            position: absolute;
            top: 30%;
            right: 11.5%;
            font-size: 18px;
        }
        .form-v10-content .form-detail .form-left .select-btn {
            color: #666;
        }
        .form-v10-content .form-detail .form-right .select-btn {
            color: #f2f2f2;
        }
        .form-v10-content .form-detail .form-group .form-row.form-row-4 .select-btn {
            top: 20%;
            right: 26%;
        }
        .form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 .select-btn {
            top: 20%;
            right: 19%;
        }
        .form-v10-content .form-detail .form-left input {
            color: #000;
        }
        .form-v10-content .form-detail .form-right input {
            color: #fff;
            background-color: var(--blue);
        }
        .form-v10-content .form-detail .form-left input,
        .form-v10-content .form-detail .form-left select {
            border-bottom: 1px solid #ccc;
        }
        .form-v10-content .form-detail .form-left input:focus,
        .form-v10-content .form-detail .form-left select:focus {
            border-bottom: 1px solid #999;
        }
        .form-v10-content .form-detail .form-right input,
        .form-v10-content .form-detail .form-right select {
            border-bottom: 1px solid;
            border-bottom-color: rgba(255, 255, 255, 0.3);
        }
        .form-v10-content .form-detail .form-right input:focus,
        .form-v10-content .form-detail .form-right select:focus {
            border-bottom: 1px solid #ccc;
        }
        .form-v10-content .form-detail .form-right select option {
            background:#fff;
            color:var(--blue);
        }
        .form-v10-content .form-detail .form-checkbox {
            margin-top: 37px;
            padding: 0 50px 0 60px;
            position: relative;
        }
        .form-v10-content .form-detail .form-checkbox input {
            position: absolute;
            opacity: 0;
        }
        .form-v10-content .form-detail .form-checkbox .checkmark {
            position: absolute;
            top: 1px;
            left: 60px;
            height: 15px;
            width: 15px;
            border: 1px solid #e5e5e5;
            cursor: pointer;
        }
        .form-v10-content .form-detail .form-checkbox .checkmark::after {
            content: "";
            position: absolute;
            left: 5px;
            top: 1px;
            width: 3px;
            height: 8px;
            border: 1px solid #fff;
            border-width: 0 2px 2px 0;
            -webkit-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            transform: rotate(45deg);
            display: none;
        }
        .form-v10-content .form-detail .form-checkbox input:checked ~ .checkmark::after {
            display: block;
        }
        .form-v10-content .form-detail .form-checkbox p {
            margin-left: 34px;
            color: #e5e5e5;
            font-size: 14px;
            font-weight: 400;
        }
        .form-v10-content .form-detail .form-checkbox .text {
            font-weight: 400;
            color: #fff;
            text-decoration: underline;
        }
        .form-v10-content .form-detail .form-right .form-row-last {
            padding-left: 60px;
            margin: 44px 0 10px;
        }
        .form-v10-content .form-detail .form-right .register {
            background: #fff;z
        border-radius: 25px;
            -o-border-radius: 25px;
            -ms-border-radius: 25px;
            -moz-border-radius: 25px;
            -webkit-border-radius: 25px;
            box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
            -o-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
            -ms-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
            -moz-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
            -webkit-box-shadow: 0px 6px 17px 0px rgba(0, 0, 0, 0.15);
            width: 180px;
            border: none;
            margin: 6px 0 50px 0px;
            cursor: pointer;
            color: var(--dark);
            font-weight: 100;
            font-size: 16px;

        }
        .form-v10-content .form-detail .form-right .register:hover {
            background:  var(--grey);
        }
        .form-v10-content .form-detail .form-right .form-row-last input {
            padding: 12.5px;
        }
        .form-v10-content .form-detail .form-left input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: #666;
            font-size: 16px;
        }
        .form-v10-content .form-detail .form-left input::-moz-placeholder { /* Firefox 19+ */
            color: #666;
            font-size: 16px;
        }
        .form-v10-content .form-detail .form-left input:-ms-input-placeholder { /* IE 10+ */
            color: #666;
            font-size: 16px;
        }
        .form-v10-content .form-detail .form-left input:-moz-placeholder { /* Firefox 18- */
            color: #666;
            font-size: 16px;
        }
        .form-v10-content .form-detail .form-right input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: #f2f2f2;
            font-size: 16px;
        }
        .form-v10-content .form-detail .form-right input::-moz-placeholder { /* Firefox 19+ */
            color: #f2f2f2;
            font-size: 16px;
        }
        .form-v10-content .form-detail .form-right input:-ms-input-placeholder { /* IE 10+ */
            color: #f2f2f2;
            font-size: 16px;
        }
        .form-v10-content .form-detail .form-right input:-moz-placeholder { /* Firefox 18- */
            color: #f2f2f2;
            font-size: 16px;
        }

        /* Responsive */
        @media screen and (max-width: 1199px) {
            .form-v10-content {
                margin:  95px 20px;
                box-shadow: 20px -20px 0 var(--grey);
                border-radius: 20px;
            }
        }
        @media screen and (max-width: 991px) and (min-width: 768px) {
            .form-v10-content .form-detail .form-group {
                flex-direction:  column;
                -o-flex-direction:  column;
                -ms-flex-direction:  column;
                -moz-flex-direction:  column;
                -webkit-flex-direction:  column;
            }
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-1,
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-2,
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-3,
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-4,
            .form-v10-content .form-detail .form-right .form-group .form-row.form-row-1,
            .form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 {
                width: auto;
                padding: 0 50px 0 60px;
            }
            .form-v10-content .form-detail .select-btn,
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-4 .select-btn,
            .form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 .select-btn {
                right: 15%;
            }

        }
        @media screen and (max-width: 767px) {
            .form-v10-content .form-detail {
                flex-direction:  column;
                -o-flex-direction:  column;
                -ms-flex-direction:  column;
                -moz-flex-direction:  column;
                -webkit-flex-direction:  column;
            }
            .form-v10-content .form-detail .form-right {
                border-top-right-radius: 0px;
                border-bottom-left-radius: 10px;
            }
            .form-v10-content .form-detail .form-left {
                padding-bottom: 50px;
            }
        }
        @media screen and (max-width: 575px) {
            .form-v10-content .form-detail .form-group {
                flex-direction:  column;
                -o-flex-direction:  column;
                -ms-flex-direction:  column;
                -moz-flex-direction:  column;
                -webkit-flex-direction:  column;
            }
            .form-v10-content .form-detail .form-row,
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-1,
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-2,
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-3,
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-4,
            .form-v10-content .form-detail .form-right .form-group .form-row.form-row-1,
            .form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 {
                width: auto;
                padding: 0 30px;
            }
            .form-v10-content .form-detail .select-btn,
            .form-v10-content .form-detail .form-left .form-group .form-row.form-row-4 .select-btn,
            .form-v10-content .form-detail .form-right .form-group .form-row.form-row-2 .select-btn {
                right: 15%;
            }
            .form-v10-content .form-detail h2 {
                padding: 33px 30px 0px 30px;
            }
            .form-v10-content .form-detail .form-checkbox {
                padding: 0 30px;
            }
            .form-v10-content .form-detail .form-checkbox .checkmark {
                left: 30px;
            }
            .form-v10-content .form-detail .form-right .form-row-last {
                padding-left: 0;
                text-align: center;
                margin: 44px 0 30px;
            }
        }

        #date{

            color: #666;
            font-size: 16px;

        }


        :root {
            --poppins: 'Poppins', sans-serif;
            --lato: 'Lato', sans-serif;

            --light: #F9F9F9;
            --blue: #3C91E6;
            --green: #33cc33;
            --light-blue: #CFE8FF;
            --grey: #eee;
            --dark-grey: #AAAAAA;
            --dark: #342E37;
            --red: #DB504A;
            --yellow: #FFCE26;
            --light-yellow: #FFF2C6;
            --orange: #FD7238;
            --light-orange: #FFE0D3;
            --light-green:#99ffbb;
        }

        html {
            overflow-x: hidden;
        }

        body.dark {
            --light: #0C0C1E;
            --grey: #060714;
            --dark: #FBFBFB;
        }

        body {
            background: var(--grey);
            overflow-x: hidden;
        }

        /* SIDEBAR */
        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100%;
            background: var(--light);
            z-index: 2000;
            font-family: var(--lato);
            transition: .3s ease;
            overflow-x: hidden;
            scrollbar-width: none;
        }
        #sidebar::-webkit-scrollbar {
            display: none;
        }
        #sidebar.hide {
            width: 60px;
        }
        #sidebar .brand {
            font-size: 24px;
            font-weight: 700;
            height: 56px;
            display: flex;
            align-items: center;
            color: var(--blue);
            position: sticky;
            top: 0;
            left: 0;
            background: var(--light);
            z-index: 500;
            padding-bottom: 20px;
            box-sizing: content-box;
        }
        #sidebar .brand .bx {
            min-width: 60px;
            display: flex;
            justify-content: center;
        }
        #sidebar .side-menu {
            width: 100%;
            margin-top: 48px;
        }
        #sidebar .side-menu li {
            height: 48px;
            background: transparent;
            margin-left: 6px;
            border-radius: 48px 0 0 48px;
            padding: 4px;
        }
        #sidebar .side-menu li.active {
            background: var(--grey);
            position: relative;
        }
        #sidebar .side-menu li.active::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            top: -40px;
            right: 0;
            box-shadow: 20px 20px 0 var(--grey);
            z-index: -1;
        }
        #sidebar .side-menu li.active::after {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            bottom: -40px;
            right: 0;
            box-shadow: 20px -20px 0 var(--grey);
            z-index: -1;
        }
        #sidebar .side-menu li a {
            width: 100%;
            height: 100%;
            background: var(--light);
            display: flex;
            align-items: center;
            border-radius: 48px;
            font-size: 16px;
            color: var(--dark);
            white-space: nowrap;
            overflow-x: hidden;
        }
        #sidebar .side-menu.top li.active a {
            color: var(--blue);
        }
        #sidebar.hide .side-menu li a {
            width: calc(48px - (4px * 2));
            transition: width .3s ease;
        }
        #sidebar .side-menu.top li a:hover {
            color: var(--blue);
        }
        #sidebar .side-menu li a .bx {
            min-width: calc(60px  - ((4px + 6px) * 2));
            display: flex;
            justify-content: center;
        }
        /* SIDEBAR */

        /* CONTENT */
        #content {
            position: relative;
            width: calc(100% - 280px);
            left: 280px;
            transition: .3s ease;
        }
        #sidebar.hide ~ #content {
            width: calc(100% - 60px);
            left: 60px;
        }

        /* NAVBAR */
        #content nav {
            height: 56px;
            background: var(--light);
            padding: 0 24px;
            display: flex;
            align-items: center;
            grid-gap: 24px;
            font-family: var(--lato);
            position: sticky;
            top: 0;
            left: 0;
            z-index: 1000;
        }
        #content nav::before {
            content: '';
            position: absolute;
            width: 40px;
            height: 40px;
            bottom: -40px;
            left: 0;
            border-radius: 50%;
            box-shadow: -20px -20px 0 var(--light);
        }
        #content nav a {
            color: var(--dark);
        }
        #content nav .bx.bx-menu {
            cursor: pointer;
            color: var(--dark);
        }
        #content nav .nav-link {
            font-size: 16px;
            transition: .3s ease;
        }
        #content nav .nav-link:hover {
            color: var(--blue);
        }
        #content nav form {
            max-width: 400px;
            width: 100%;
            margin-right: auto;
        }
        #content nav form .form-input {
            display: flex;
            align-items: center;
            height: 36px;
        }
        #content nav form .form-input input {
            flex-grow: 1;
            padding: 0 16px;
            height: 100%;
            border: none;
            background: var(--grey);
            border-radius: 36px 0 0 36px;
            outline: none;
            width: 100%;
            color: var(--dark);
        }
        #content nav form .form-input button {
            width: 36px;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--blue);
            color: var(--light);
            font-size: 18px;
            border: none;
            outline: none;
            border-radius: 0 36px 36px 0;
            cursor: pointer;
        }
        #content nav .notification {
            font-size: 20px;
            position: relative;
        }
        #content nav .notification .num {
            position: absolute;
            top: -6px;
            right: -6px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 2px solid var(--light);
            background: var(--red);
            color: var(--light);
            font-weight: 700;
            font-size: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #content nav .profile img {
            width: 36px;
            height: 36px;
            object-fit: cover;
            border-radius: 50%;
        }
        #content nav .switch-mode {
            display: block;
            min-width: 50px;
            height: 25px;
            border-radius: 25px;
            background: var(--grey);
            cursor: pointer;
            position: relative;
        }
        #content nav .switch-mode::before {
            content: '';
            position: absolute;
            top: 2px;
            left: 2px;
            bottom: 2px;
            width: calc(25px - 4px);
            background: var(--blue);
            border-radius: 50%;
            transition: all .3s ease;
        }
        #content nav #switch-mode:checked + .switch-mode::before {
            left: calc(100% - (25px - 4px) - 2px);
        }
        /* NAVBAR */

        /* MAIN */
        #content main {
            width: 100%;
            padding: 36px 24px;
            font-family: var(--poppins);
            max-height: calc(100vh - 56px);
            overflow-y: auto;
        }
        #content main .head-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
            grid-gap: 16px;
            flex-wrap: wrap;
        }
        #content main .head-title .left h1 {
            font-size: 36px;
            font-weight: 600;
            margin-bottom: 10px;
            color: var(--dark);
        }
        #content main .head-title .left .breadcrumb {
            display: flex;
            align-items: center;
            grid-gap: 16px;
        }
        #content main .head-title .left .breadcrumb li {
            color: var(--dark);
        }
        #content main .head-title .left .breadcrumb li a {
            color: var(--dark-grey);
            pointer-events: none;
        }
        #content main .head-title .left .breadcrumb li a.active {
            color: var(--blue);
            pointer-events: unset;
        }
        .btn-login {
            width: 120px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--blue);
            color: var(--light);
            font-size: 18px;
            font-weight: 500;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: .3s ease;
            outline: none;
        }

        .btn-login:hover {
            background:#80c1ff;
        }

        .ver{
            min-width: calc(60px  - ((4px + 6px) * 2));
            display: inline-flex;
            justify-content: center;
            color: var(--green);
            background: var(--light);
            align-items: center;
            border-radius: 48px;
            font-size: 16px;
            white-space: nowrap;
            overflow-x: hidden;
            position:absolute;
            bottom:10px;
            right: 0;
            box-shadow: 20px -20px 0 var(--grey);
            z-index: -1;
            width: 100%;
            height: 100%;

        }

        #content main .box-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            grid-gap: 24px;
            margin-top: 36px;
        }
        #content main .box-info li {

            background: var(--light);
            display: flex;
            align-items: center;
            grid-gap: 24px;
            border-radius: 20px;
            padding: 20px 60px 30px 40px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
        }
        #content main .box-info li .bx {
            width: 80px;
            height: 80px;
            border-radius: 10px;
            font-size: 36px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #content main .box-info li:nth-child(1) .bx {
            background: var(--light-blue);
            color: var(--blue);
        }
        #content main .box-info li:nth-child(2) .bx {
            background: var(--light-yellow);
            color: var(--yellow);
        }
        #content main .box-info li:nth-child(3) .bx {
            background: var(--light-orange);
            color: var(--orange);
        }
        #content main .box-info li:nth-child(4) .bx {
            background: var(--light-green);
            color: var(--green);
        }
        #content main .box-info li .text h3 {
            font-size: 24px;
            font-weight: 600;
            color: var(--dark);
        }
        #content main .box-info li .text p {
            color: var(--dark);
        }

        #content main .table-data {
            display: flex;
            flex-wrap: wrap;
            grid-gap: 24px;
            margin-top: 24px;
            width: 100%;
            color: var(--dark);
        }
        #content main .table-data > div {
            border-radius: 20px;
            background: var(--light);
            padding: 24px;
            overflow-x: auto;
        }
        #content main .table-data .head {
            display: flex;
            align-items: center;
            grid-gap: 16px;
            margin-bottom: 24px;
        }
        #content main .table-data .head h3 {
            margin-right: auto;
            font-size: 24px;
            font-weight: 600;
        }
        #content main .table-data .head .bx {
            cursor: pointer;
        }

        #content main .table-data .order {
            flex-grow: 1;
            flex-basis: 500px;
        }
        #content main .table-data .order table {
            width: 100%;
            border-collapse: collapse;
        }
        #content main .table-data .order table th {
            padding-bottom: 12px;
            font-size: 13px;
            text-align: left;
            border-bottom: 1px solid var(--grey);
        }
        #content main .table-data .order table td {
            padding: 16px 0;
        }
        #content main .table-data .order table tr td:first-child {
            display: flex;
            align-items: center;
            grid-gap: 12px;
            padding-left: 6px;
        }
        #content main .table-data .order table td img {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
        }
        #content main .table-data .order table tbody tr:hover {
            background: var(--grey);
        }
        #content main .table-data .order table tr td .status {
            font-size: 10px;
            padding: 6px 16px;
            color: var(--light);
            border-radius: 20px;
            font-weight: 700;
        }
        #content main .table-data .order table tr td .status.completed {
            background: var(--blue);
        }
        #content main .table-data .order table tr td .status.process {
            background: var(--yellow);
        }
        #content main .table-data .order table tr td .status.pending {
            background: var(--orange);
        }

        #content main .table-data .todo {
            flex-grow: 1;
            flex-basis: 300px;
        }
        #content main .table-data .todo .todo-list {
            width: 100%;
        }
        #content main .table-data .todo .todo-list li {
            width: 100%;
            margin-bottom: 16px;
            background: var(--grey);
            border-radius: 10px;
            padding: 14px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        #content main .table-data .todo .todo-list li .bx {
            cursor: pointer;
        }
        #content main .table-data .todo .todo-list li.completed {
            border-left: 10px solid var(--blue);
        }
        #content main .table-data .todo .todo-list li.not-completed {
            border-left: 10px solid var(--orange);
        }
        #content main .table-data .todo .todo-list li:last-child {
            margin-bottom: 0;
        }
        /* MAIN */
        /* CONTENT */

        @media screen and (max-width: 768px) {
            #sidebar {
                width: 200px;
            }

            #content {
                width: calc(100% - 60px);
                left: 200px;
            }

            #content nav .nav-link {
                display: none;
            }
        }

        @media screen and (max-width: 576px) {
            #content nav form .form-input input {
                display: none;
            }

            #content nav form .form-input button {
                width: auto;
                height: auto;
                background: transparent;
                border-radius: none;
                color: var(--dark);
            }

            #content nav form.show .form-input input {
                display: block;
                width: 100%;
            }
            #content nav form.show .form-input button {
                width: 36px;
                height: 100%;
                border-radius: 0 36px 36px 0;
                color: var(--light);
                background: var(--red);
            }

            #content nav form.show ~ .notification,
            #content nav form.show ~ .profile {
                display: none;
            }

            #content main .box-info {
                grid-template-columns: 1fr;
            }

            #content main .table-data .head {
                min-width: 420px;
            }
            #content main .table-data .order table {
                min-width: 420px;
            }
            #content main .table-data .todo .todo-list {
                min-width: 420px;
            }
        }
        #agent_code ,#full_Name{

            color: #666;
            font-size: 16px;

        }

        .password-show-toggle span:before {
            font-family: 'unicons-line';
            content: "\ebf8";
        }

        .password-show-toggle {
            cursor: pointer;
            position: absolute;
            right: 20px;
            top: 15px;
            z-index: 9;
            color: #fff;
        }

        .password-show-toggle span {
            font-size: 20px;
        }
    </style>
</head>
<body>


<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">LifeBackup</span>
    </a>
    <ul class="side-menu top">

        <li>
            <a href="Home_Log.php">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Main Dashboard</span>
            </a>
        </li>

        <li>
            <a href="Manger.php">
                <i class='bx bxs-chart'></i>
                <span class="text">My Dashboard</span>
            </a>
        </li>


        <li class="active">
            <a href="Suppervisor_Create Account.php">
                <i class='bx bxs-user-account' ></i>
                <span class="text">Create Account</span>
            </a>
        </li>


        <li>
            <a href="Calender_log.php">
                <i class='bx bxs-calendar' ></i>
                <span class="text">Calender</span>
            </a>
        </li>

        <li>
            <a href="Contact_log.php">
                <i class='bx bxs-contact' ></i>
                <span class="text">Contact Us</span>
            </a>
        </li>

        <li>
            <a href="About_Log.php">
                <i class='bx bxs-info-circle' ></i>
                <span class="text">About Us</span>
            </a>
        </li>

        <li>
            <a href="Login_Page.php">
                <i class='bx bxs-log-out' ></i>
                <span class="text">Logout</span>
            </a>
        </li>

        <li class="ver">
            <p><i class='bx bxs-vial'></i>Version 1.0</p>
        </li>

    </ul>
</section>
<!-- SIDEBAR -->

<!-- CONTENT -->

<section id="content">

    <!-- NAVBAR -->

    <nav>
        <i class='bx bx-menu' ></i>
        <a href="#" class="nav-link">Stakeholders</a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search....">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification" title="Notification">
            <i class='bx bxs-bell' ></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="Images/profile.jpg" alt="profile">
        </a>
    </nav>
    <!-- NAVBAR -->

    <!-- MAIN -->
    <main>

        <div class="page-content">

            <div class="form-v10-content">

                <form class="form-detail" action="#" method="post" id="myform" autocomplete="off">

                    <div class="form-left">
                        <h2>Create Account</h2>
                        <div class="form-row">
                            <input type="text" name="agent_code" id="agent_code" class="input-text" placeholder="Agent Code" required>
                        </div>

                        <div class="form-row">
                            <input type="text" name="full_name" id="full_Name" class="input-text" placeholder="Full Name" required>
                        </div>

                        <div class="form-group">
                            <div class="form-row form-row-1">
                                <input type="text" name="dob" id="date" text="Invoice Date" class="input-text" placeholder="Birthday" onfocus="this.type='date'" onblur="this.type='text'"  title="Invoice Date" required>
                            </div>
                            <div class="form-row form-row-2">

                                <input type="text" name="reg_date" id="date" text="Invoice Date" class="input-text" placeholder="Registered Date" onfocus="this.type='date'" onblur="this.type='text'"  title="Invoice Date" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <select name="position">
                                <option value="position">Select Position</option>
                                <option value="Life Insurance Agent">Life Insurance Agent</option>
                                <option value="Team Leader">Team Leader</option>
                                <option value="Seals Agent">Seals Agent</option>
                                <option value="Cashier">Cashier</option>
                            </select>
                            <span class="select-btn">
						  	<i class="zmdi zmdi-chevron-down"></i>
						</span>
                        </div>

                    </div>
                    <div class="form-right"><!--right-side-->

                        <br><br><br>

                        <div class="form-row form-row">
                            <select name="branch">
                                <optiaceholdeon>Select Branch</optiaceholdeon>
                                <option value="Dehiwala Branch">Dehiwala Branch</option>
                                <option value="Negombo Branch">Negombo Branch</option>
                                <option value="Colombo Branch">Colombo Branch</option>
                                <option value="Matara Branch">Matara Branch</option>
                            </select>
                            <span class="select-btn">
							  	<i class="zmdi zmdi-chevron-down"></i>
							</span>
                        </div>

                        <div class="form-row form">
                            <input type"text" name="phone" class="phone" id="phone" placeholder="Contact Number" required>
                        </div>

                        <div class="form-row form">
                            <input type"email" name="email" class="phone" id="email" placeholder="Email" required>
                        </div>

                        <div class="form-row form-row-2">
                            <span class="password-show-toggle js-password-show-toggle"><span class="uil"></span></span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        </div>

                        <div class="form-row-last">
                            <input type="submit" name="create_account" class="register" value="Create Account">
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </main>
    <!-- MAIN -->
</section>
<!-- CONTENT -->


<script type ="text/javascript">

    const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

    allSideMenu.forEach(item=> {
        const li = item.parentElement;

        item.addEventListener('click', function () {
            allSideMenu.forEach(i=> {
                i.parentElement.classList.remove('active');
            })
            li.classList.add('active');
        })
    });


    // TOGGLE SIDEBAR
    const menuBar = document.querySelector('#content nav .bx.bx-menu');
    const sidebar = document.getElementById('sidebar');

    menuBar.addEventListener('click', function () {
        sidebar.classList.toggle('hide');
    })


    const searchButton = document.querySelector('#content nav form .form-input button');
    const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
    const searchForm = document.querySelector('#content nav form');

    searchButton.addEventListener('click', function (e) {
        if(window.innerWidth < 576) {
            e.preventDefault();
            searchForm.classList.toggle('show');
            if(searchForm.classList.contains('show')) {
                searchButtonIcon.classList.replace('bx-search', 'bx-x');
            } else {
                searchButtonIcon.classList.replace('bx-x', 'bx-search');
            }
        }
    })

    if(window.innerWidth < 768) {
        sidebar.classList.add('hide');

    } else if(window.innerWidth > 576) {
        searchButtonIcon.classList.replace('bx-x', 'bx-search');
        searchForm.classList.remove('show');

    }

    window.addEventListener('resize', function () {
        if(this.innerWidth > 576) {
            searchButtonIcon.classList.replace('bx-x', 'bx-search');
            searchForm.classList.remove('show');
        }
    })

    const switchMode = document.getElementById('switch-mode');

    switchMode.addEventListener('change', function () {
        if(this.checked) {
            document.body.classList.add('dark');
        } else {
            document.body.classList.remove('dark');
        }
    })

</script>

<script type="text/javascript">

    //show-hide  password


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
