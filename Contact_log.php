<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!--Add Icon-->
    <link rel="icon" href="Images/logo (1).ico" type="image/x-icon"/>

    <title>Contact Us</title>

    <style type="text/css" >


        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

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
            --light-red: #ffe6e6;
            --purple:#cc00cc;
            --light-purple: #ffccff;
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
            font-weight: 500;
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
            margin-top : -75px;
            margin-left : -18px;
            position: relative;
            width: calc(100% - 280px);
            left: 150px;
            height: 100%;
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
            margin-top: -100px;
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
            color: var(--light);
            color: var(--dark);
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

        body {
            background: var(--grey);
            overflow-x: hidden;
            min-height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .container {
            max-width: 20000px;
            width: 100%;
            background: #fff;
            border-radius: 20px;
            padding: 20px 60px 30px 40px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.12);
            color: var(--light);
            color: var(--dark);
        }
        .container .content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: -15px;
            width: 100%;
            margin-bottom: 0px;
            margin-left: -5px;
            color: var(--light);
            color: var(--dark);

        }
        .container .content .left-side {
            width: 35%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin-top: 15px;
            position: relative;
        }
        .content .left-side::before {
            content: "";
            position: absolute;
            height: 70%;
            width: 2px;
            right: -15px;
            top: 50%;
            transform: translateY(-50%);
            background: #afafb6;
        }
        .content .left-side .details {
            margin: 14px;
            text-align: center;
        }
        .content .left-side .details i {
            font-size: 30px;
            color: var(--blue);
            margin-bottom: 10px;
        }
        .content .left-side .details .topic {
            font-size: 18px;
            font-weight: 500;
        }
        .content .left-side .details .text-one,
        .content .left-side .details .text-two {
            font-size: 14px;
            color: #afafb6;
        }

        .container .content .right-side {
            width: 75%;
            margin-left: 75px;
        }
        .content .right-side .topic-text {
            font-size: 23px;
            font-weight: 600;
            color: var(--blue);
        }
        .right-side .input-box {
            height: 55px;
            width: 100%;
            margin: 12px 0;
        }
        .right-side .input-box input,
        .right-side .input-box textarea {
            height: 100%;
            width: 100%;
            border: none;
            outline: none;
            font-size: 16px;
            background: #f0f1f8;
            border-radius: 6px;
            padding: 0 15px;
            resize: none;
            color: var(--light);
            color: var(--dark);
        }
        .right-side .message-box {
            min-height: 110px;
        }
        .right-side .input-box textarea {
            padding-top: 6px;
        }
        .right-side .button {
            display: inline-block;
            margin-top: 12px;
        }
        .right-side .button input[type="button"] {
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
        .button input[type="button"]:hover {
            background: var(--light-blue);
        }

        @media (max-width: 950px) {
            .container {
                width: 90%;
                padding: 30px 40px 40px 35px;
            }
            .container .content .right-side {
                width: 85%;
                margin-left: 55px;
                margin-top: 15px;
            }
        }
        @media (max-width: 820px) {
            .container {
                margin: 40px 0;
                height: 100%;
            }
            .container .content {
                flex-direction: column-reverse;
            }
            .container .content .left-side {
                width: 100%;
                flex-direction: row;
                margin-top: 40px;
                justify-content: center;
                flex-wrap: wrap;
            }
            .container .content .left-side::before {
                display: none;
            }
            .container .content .right-side {
                width: 100%;
                margin-left: 0;
            }
        }

        #address{
            color: var(--red);
        }

        #phone{
            color: var(--green);
        }

        #email {

            color: var(--yellow);
        }
        /* /// */
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
            border-radius: 50px;
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
            padding: 24px;

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
        #content main .box-info li:nth-of-type .bx {
            background: var(--light-blue);
            color: var(--blue);
        }
        #content main .box-info li:nth-child .bx {
            background: var(--light-yellow);
            color: var(--yellow);
        }
        #content main .box-info li:nth-child .bx {
            background: var(--light-orange);
            color: var(--orange);
        }
        #content main .box-info li:nth-child .bx {
            background: var(--light-green);
            color: var(--green);
        }
        #content main .box-info li:nth-child .bx {
            background: var(--light-orange);
            color: var(--red);
        }
        #content main .box-info li:nth-child .bx {
            background: var(--light-yellow);
            color: var(--yellow);
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

        #first_icon{
            background: var(--light-blue);
            color: var(--blue);
        }

        #second_icon{
            background: var(--light-red);
            color: var(--red);
        }

        #thrd_icon{
            background: var(--light-orange);
            color: var(--orange);
        }

        #fourth_icon{

            background: var(--light-green);
            color: var(--green);
        }

        #fifth_Icon{
            background: var(--light-yellow);
            color: var(--yellow);
        }


        #sixth_icon{

            background: var(--light-purple);
            color: var(--purple);

        }

    </style>
</head>
<body>


<!-- SIDEBAR -->
<section id="sidebar">
    <a href="Home.php" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">LifeBackup</span>
    </a>
    <ul class="side-menu top">
        <li>
            <a href="Home_Log.php">
                <i class='bx bxs-dashboard' ></i>
                <span class="text">Dashboard</span>
            </a>
        </li>

        <li>
            <a href="Calender_log.php">
                <i class='bx bxs-calendar' ></i>
                <span class="text">Calender</span>
            </a>
        </li>

        <li class="active">
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
        <div class="container">
            <div class="content">
                <div class="left-side">

                    <div class="address details">
                        <i class="fas fa-map-marker-alt" id="address"></i>
                        <div class="topic">Address</div>
                        <div class="text-one">Rathmalana, NP12</div>
                        <div class="text-two">Dankotuwa 06</div>
                    </div>
                    <div class="phone details">
                        <i class="fas fa-phone-alt" id="phone"></i>
                        <div class="topic">Phone</div>
                        <div class="text-one">+0094 766661951</div>
                        <div class="text-two">+0094 714638349</div>
                    </div>
                    <div class="email details">
                        <i class="fas fa-envelope" id="email"></i>
                        <div class="topic">Email</div>
                        <div class="text-one">dinuwan1211@gmail.com</div>
                        <div class="text-two">dinuwanthikshana@outlook.com</div>
                    </div>
                </div>
                <div class="right-side">
                    <div class="topic-text">Send us a message</div>
                    <p>If you have any work from me or any types of queries related to my tutorial,
                        you can send me message from here. It's my pleasure to help you.</p>
                    <form action="#">
                        <div class="input-box">
                            <input type="text" placeholder="Enter your name" />
                        </div>
                        <div class="input-box">
                            <input type="text" placeholder="Enter your email" />
                        </div>
                        <div class="input-box message-box">
                            <textarea placeholder="Enter your message"></textarea>
                        </div>
                        <div class="button">
                            <input type="button" value="Send Now" />
                        </div>
                    </form>
                </div>
            </div>
         </div>
    </main>
</section>
    <!-- MAIN -->
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
</body>
</html>