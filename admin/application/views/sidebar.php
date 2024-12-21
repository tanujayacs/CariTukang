<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <!-- style css -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

        /* ::after,
        ::before {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        } */

        a {
            text-decoration: none;
        }

        li {
            list-style: none;
        }

        h1 {
            font-weight: 600;
            font-size: 1.5rem;
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* display: flex; */
        }

        .wrapper {
            display: flex;
           
        }

        .main {
            min-height: 100vh;
            width: 100%;
            overflow: hidden;
            transition: all 0.35s ease-in-out;
            background-color: #fafbfe;
            
        }

        #sidebar {
            width: 300px;
            min-width: 70px;
            z-index: 1000;
            transition: all .25s ease-in-out;
            background-color: #393944;
            display: flex;
            flex-direction: column;
        }

        /* #sidebar.expand {
            width: 260px;
            min-width: 260px;
        } */

        .toggle-btn {
            background-color: transparent;
            cursor: pointer;
            border: 0;
            padding: 1rem 1.5rem;
        }

        .toggle-btn i {
            font-size: 1.5rem;
            color: #FFF;
        }

        .sidebar-logo {
            margin: auto 0;
        }

        .sidebar-logo a {
            color: #FFF;
            font-size: 1.15rem;
            font-weight: 600;
        }

        /* #sidebar:not(.expand) .sidebar-logo,
        #sidebar:not(.expand) a.sidebar-link span {
            display: none;
        } */

        .sidebar-nav {
            padding: 2rem 0;
            flex: 1 1 auto;
        }

        a.sidebar-link {
            padding: .625rem 1.625rem;
            color: #FFF;
            display: block;
            font-size: 0.9rem;
            white-space: nowrap;
            border-left: 3px solid transparent;
        }

        .sidebar-link i {
            font-size: 1.1rem;
            margin-right: .75rem;
        }

        a.sidebar-link:hover {
            background-color: rgba(255, 255, 255, .075);
            border-left: 3px solid #ffffff;
        }

        .sidebar-item {
            position: relative;
        }

        /* 
        #sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
            position: absolute;
            top: 0;
            left: 70px;
            background-color: #0e2238;
            padding: 0;
            min-width: 15rem;
            display: none;
        }*/

        #sidebar .sidebar-link[data-bs-toggle="collapse"]::after {
            border: solid;
            border-width: 0 .075rem .075rem 0;
            content: "";
            display: inline-block;
            padding: 2px;
            position: absolute;
            right: 1.5rem;
            top: 1.4rem;
            transform: rotate(45deg);
            transition: all .2s ease-out;
        }

        

        #sidebar .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
            transform: rotate(135deg);
            transition: all .2s ease-out;
        } 

        .side-footer {
            background-color: #EBEBEB;
            color: #202020;
            padding: 10px 0px 1px 20px;
            /* padding: 1rem; */
            position:relative;        
            bottom: 0;
            width: 100%;
        }

        .nav{
            background-color: #024CAA;
            padding: 0.5rem;
            /* position: fixed; */
            top: 0;
            width: 100%;
            z-index: 999;
        }

        .link-btn {
            background-color: #024CAA;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex ">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-user-1"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">CariTukang</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <!-- <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                        data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="lni lni-protection"></i>
                        <span>Auth</span>
                    </a>
                    <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Login</a>
                        </li>
                        <li class="sidebar-item">
                            <a href="#" class="sidebar-link">Register</a>
                        </li>
                    </ul>
                </li> -->
                

                <li class="sidebar-item">
                    <a href="<?php echo base_url('dashboard'); ?>" class="sidebar-link">
                    <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('customer'); ?>" class="sidebar-link">
                    <i class="bi bi-people-fill"></i>
                        <span>Customer</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('mitra'); ?>" class="sidebar-link">
                    <i class="bi bi-person-vcard-fill"></i>
                        <span>Mitra</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('booking'); ?>" class="sidebar-link">
                    <i class="bi bi-journal-plus"></i>
                        <span>Booking</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('artikel'); ?>" class="sidebar-link">
                    <i class="bi bi-book"></i>
                        <span>Artikel</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('ulasan'); ?>" class="sidebar-link">
                    <i class="bi bi-chat-square-text"></i>
                        <span>Testimoni</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('keahlian'); ?>" class="sidebar-link">
                    <i class="bi bi-inboxes"></i>
                        <span>Keahlian</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="<?php echo base_url('peran'); ?>" class="sidebar-link">
                    <i class="bi bi-inboxes"></i>
                        <span>Peran</span>
                    </a>
                </li>
            </ul>
            <!-- <div class="sidebar-footer">
                <a href="#" class="sidebar-link">
                    <i class="lni lni-exit"></i>
                    <span>Logout</span>
                </a>
            </div> -->
        </aside>

        <!-- home page -->
        <!-- <div class="main p-3">
            <div class="text-center">
                <h1>
                    Sidebar Bootstrap 5
                </h1>
            </div>
        </div> -->

        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script> -->
       
            