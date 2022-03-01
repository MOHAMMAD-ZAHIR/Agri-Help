<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/frame.min.css">


    <meta name="theme-color" content="rgb(0, 255, 255)">

    <style>
        /* ============ desktop view ============ */
        @media all and (min-width: 992px) {
            .dropdown-menu li {
                position: relative;
            }

            .nav-item .submenu {
                display: none;
                position: absolute;
                left: 100%;
                top: -7px;
            }

            .nav-item .submenu-left {
                right: 100%;
                left: auto;
            }

            .dropdown-menu>li:hover {
                background-color: rgb(0, 255, 255)
            }

            .dropdown-menu>li:hover>.submenu {
                display: block;
            }
        }

        /* ============ desktop view .end// ============ */

        /* ============ small devices ============ */
        @media (max-width: 991px) {
            .dropdown-menu .dropdown-menu {
                margin-left: 0.7rem;
                margin-right: 0.7rem;
                margin-bottom: .5rem;
            }
        }

        /* ============ small devices .end// ============ */
    </style>
</head>

<body>
    <!-- <header>
        <div class="container">
            <h1>Agri Help<em>.</em></h1>
            <nav>
                <a href="#" id="home">HOME</a>
                <a href="services.html">SERVICES</a>
                <a href="blog.html">BLOG</a>
                <a href="contact.html">CONTACT US</a>
            </nav>
        </div>
    </header> -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand font-weight-bold" href="index.php"
                style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Agri Help<em>.</em></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <!-- <ul class="navbar-nav ml-auto text-uppercase mainnav"
                    style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICES
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Rice</a></li>
                                <ul class="dropdown-submenu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Rice</a></li>
                                    <li><a class="dropdown-item" href="#">Wheat</a></li>
                                    <li><a class="dropdown-item" href="#">Tomato</a></li>
                                    <li><a class="dropdown-item" href="#">Sesame</a></li>
                                    <li><a class="dropdown-item" href="#">Potato</a></li>
                                    <li><a class="dropdown-item" href="#">Onion</a></li>
                                    <li><a class="dropdown-item" href="#">Mustard</a></li>
                                    <li><a class="dropdown-item" href="#">Maize</a></li>
                                    <li><a class="dropdown-item" href="#">Lentil</a></li>
                                    
                                </ul>
                            <li><a class="dropdown-item" href="#">Wheat</a></li>
                            <li><a class="dropdown-item" href="#">Tomato</a></li>
                            <li><a class="dropdown-item" href="#">Sesame</a></li>
                            <li><a class="dropdown-item" href="#">Potato</a></li>
                            <li><a class="dropdown-item" href="#">Onion</a></li>
                            <li><a class="dropdown-item" href="#">Mustard</a></li>
                            <li><a class="dropdown-item" href="#">Maize</a></li>
                            <li><a class="dropdown-item" href="#">Lentil</a></li>
                            
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="help.php">Need help?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT US</a>
                    </li>
                </ul> -->

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item px-1 active"> <a class="nav-link" href="index.php">Home </a> </li>
                    <li class="nav-item px-1 dropdown" id="myDropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Services </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Rice &raquo; </a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="rice-varieties.php">Variety</a></li>
                                    <li><a class="dropdown-item" href="rice-production-technology.php">Production
                                            Technology</a></li>
                                    <li><a class="dropdown-item" href="rice-intercultural-operation.php">Intercultural
                                            Operation</a></li>
                                    <li><a class="dropdown-item"
                                            href="rice-harvesting-and-seed-preservation.php">Harvesting &
                                            preservation</a></li>

                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Wheat</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="wheat-varieties.php">Variety</a></li>
                                    <li><a class="dropdown-item" href="wheat-production-technology.php">Production
                                            Technology</a></li>
                                    <li><a class="dropdown-item" href="wheat-intercultural-operation.php">Intercultural
                                            Operation</a></li>
                                    <li><a class="dropdown-item"
                                            href="wheat-harvesting-and-seed-preservation.php">Harvesting &
                                            preservation</a></li>

                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Tomato</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="tomato-varieties.php">Variety</a></li>
                                    <li><a class="dropdown-item" href="tomato-production-technology.php">Production
                                            Technology</a></li>
                                    <li><a class="dropdown-item" href="tomato-intercultural-operation.php">Intercultural
                                            Operation</a></li>
                                    <li><a class="dropdown-item"
                                            href="tomato-harvesting-and-seed-preservation.php">Harvesting &
                                            preservation</a></li>

                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Sesame</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="sesame-varieties.php">Variety</a></li>
                                    <li><a class="dropdown-item" href="sesame-production-technology.php">Production
                                            Technology</a></li>
                                    <li><a class="dropdown-item" href="sesame-intercultural-operation.php">Intercultural
                                            Operation</a></li>
                                    <li><a class="dropdown-item"
                                            href="sesame-harvesting-and-seed-preservation.php">Harvesting &
                                            preservation</a></li>

                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Potato</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="potato-varieties.php">Variety</a></li>
                                    <li><a class="dropdown-item" href="potato-production-technology.php">Production
                                            Technology</a></li>
                                    <li><a class="dropdown-item"
                                            href="potato-intercultural-operations.php">Intercultural Operation</a></li>
                                    <li><a class="dropdown-item"
                                            href="potato-harvesting-and-seed-preservation.php">Harvesting &
                                            preservation</a></li>

                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Onion</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="onion-varieties.php">Variety</a></li>
                                    <li><a class="dropdown-item" href="onion-production-technology.php">Production
                                            Technology</a></li>
                                    <li><a class="dropdown-item" href="onion-intercultural-operation.php">Intercultural
                                            Operation</a></li>
                                    <li><a class="dropdown-item"
                                            href="onion-harvesting-and-seed-preservation.php">Harvesting &
                                            preservation</a></li>

                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Mustard</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="mustard-varieties.php">Variety</a></li>
                                    <li><a class="dropdown-item" href="mustard-production-technology.php">Production
                                            Technology</a></li>
                                    <li><a class="dropdown-item"
                                            href="mustard-intercultural-operation.php">Intercultural Operation</a></li>
                                    <li><a class="dropdown-item"
                                            href="mustard-harvesting-and-seed-preservation.php">Harvesting &
                                            preservation</a></li>

                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Maize</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="maize-varieties.php">Variety</a></li>
                                    <li><a class="dropdown-item" href="maize-production-technology.php">Production
                                            Technology</a></li>
                                    <li><a class="dropdown-item" href="maize-intercultural-operation.php">Intercultural
                                            Operation</a></li>
                                    <li><a class="dropdown-item"
                                            href="maize-harvesting-and-seed-preservation.php">Harvesting &
                                            preservation</a></li>

                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="#">Lentil</a>
                                <ul class="submenu dropdown-menu">
                                    <li><a class="dropdown-item" href="lentil-varieties.php">Variety</a></li>
                                    <li><a class="dropdown-item" href="lentil-production-technology.php">Production
                                            Technology</a></li>
                                    <li><a class="dropdown-item" href="lentil-intercultural-operation.php">Intercultural
                                            Operation</a></li>
                                    <li><a class="dropdown-item"
                                            href="lentil-harvesting-and-seed-preservation.php">Harvesting &
                                            preservation</a></li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="help.php">Need help?</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="blog.php">BLOG</a>
                    </li>
                    <li class="nav-item px-1">
                        <a class="nav-link" href="contact.php">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>