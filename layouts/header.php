<?php 
    $site_url = 'http://localhost/truckjunction/';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bike Junction - <?php echo $title; ?></title>
    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./assets/css/csslib.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>

    <header class="headerMain newmain-header">
        <div class="header-main-new headerMain-top">
            <div class="container-mid">
            <nav class="navbar navbar-expand-lg" >
                    <a class="navbar-brand" href="http://localhost/bike-junction">
                        <img src="assets/images/bikeklogo-n.svg" alt="bike Junction" />
                    </a>
                    
                    <div class="mobileMenubarIcons">
                        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <img src="assets/images/icons/ham-icon.png" alt="hamberger" />
                        </button>
                    </div>
                       <div class="search-input-wrp search-new d-none d-sm-none d-md-none d-lg-block">
                            <div class="serach-btn-wrp">
                                <div class="serach-int serach-inpf">Try Splendor, Passion etc</div>
                                <div class="serach-img"><img src="assets/images/icons/search-n.png" alt="search" /></div>
                                <!-- New Start Mobile search -->
                                <div class="popup-fixed-main search-module" id="search-main-block1">
                                    <div class="search-module-inner sectionShadow">
                                        <div class="serch-header-list">
                                            <p>Recent Searches</p>
                                            <ul>
                                                <li><a href="#">Honda</a></li>
                                                <li><a href="#"> TVS</a></li>
                                                <li><a href="#"> Bajaj</a></li>
                                            </ul>
                                            <p class="pt-0">Popular Searches</p>
                                            <ul>
                                                <li><a href="#"> Suzuki</a></li>
                                                <li><a href="#"> Yamaha</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                    <!-- End New Mobile search -->
                            </div>
                        </div>

                        <ul class="navbar-nav ml-auto mobileBlockMenuSecondNav new-lang-wrp">
                           <li class="d-block d-sm-block d-md-block d-lg-none">
                            <div class="serach-img-tophead"><img src="assets/images/icons/search-h.png" alt="search" /></div>  
                            </li>
                            <li class="nav-item dropdown dropdown-nav webLangOption">
                                <a class="nav-links " href="#" id="navbarDropdown2" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                        class="webLangOptionSpan "><span><img src="assets/images/icons/lang-n.png" alt="search" /></span>English</span></a>
                                <div class="dropdown-menu dropdown-nav-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="#">English</a>
                                    <a class="dropdown-item" href="#">हिन्दी</a>
                                </div>
                            </li>
                            
                            <li class="nav-item loginBtn webLangOption">
                                <a class="nav-links" href="#">
                                    <span class="">
                                    <span><img src="assets/images/icons/user-n.png" alt="search" /></span>
                                    Sign In
                                    </span>
                                </a>
                            </li>
                            
                        </ul>
                </nav>
            </div>
        </div>
        <div class="search-input-wrp search-new newSearch_blockBtn" id="newmobilesearch">
            <div class="serach-btn-wrp ml-0">
                <div class="serach-int serach-inpf">Try Splendor, Passion etc</div>
                <div class="serach-img"><img src="assets/images/icons/search-n.png" alt="search" /></div>
                    <!-- New Start Mobile search -->
                    <div class="popup-fixed-main search-module" id="search-main-block1">
                        <div class="search-module-inner sectionShadow">
                            <div class="serch-header-list">
                                <p>Recent Searches</p>
                                <ul>
                                    <li><a href="#">Honda</a></li>
                                    <li><a href="#"> TVS</a></li>
                                    <li><a href="#"> Bajaj</a></li>
                                </ul>
                                <p class="pt-0">Popular Searches</p>
                                <ul>
                                    <li><a href="#"> Suzuki</a></li>
                                    <li><a href="#"> Yamaha</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End New Mobile search -->
            </div>
        </div>
        <div class="headerMain-top">
            <div class="container-mid">
                <nav class="navbar navbar-expand-lg" id="main_navbar">

                    <div class="nav-slider navbar-collapse ">
                        <div class="mobileBlockMenu-top d-block d-sm-block d-md-block d-lg-none">
                            <div class="row">
                                <div class="col-3">
                                    <img src="assets/images/icons/profile.png" class="img-fluid" alt="" />
                                </div>
                                <div class="col-6">
                                    <p class="new-user mb-0 mt-0">New User</p>
                                    <p class="reg-login mb-0 mt-1">Login/Register</p>
                                </div>
                            </div>
                        </div>
                        <div class="main-menu-wrp">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="bike-icon"><img src="assets/images/icons/bike-icon.png" class="img-fluid" alt="" /></span>Bikes
                                </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <div class="mobileBlockMenu-top d-block d-sm-block d-md-block d-lg-none">
                                            <div class="row justify-content-start align-items-center">
                                                <div class="back-arrow">
                                                    <img src="./assets/images/icons/Left-arrow-1.png">
                                                    <b>Bikes</b>
                                                </div>
                                            </div>
                                        </div>
                                        <li><a class="dropdown-item" href="http://localhost/bike-junction/new-truck-listing.php">Popular bikes</a></li>
                                        <li><a class="dropdown-item" href="#">New bikes</a></li>
                                        <li><a class="dropdown-item" href="#">Upcomming bikes</a></li>
                                        <li><a class="dropdown-item" href="#">Best Mileage</a></li>
                                        <li><a class="dropdown-item" href="#">Compare bikes</a></li>
                                        <li><a class="dropdown-item" href="http://localhost/bike-junction/brands.php">Bike Brands</a></li>
                                        <li><a class="dropdown-item" href="#">Showroom</a></li>
                                        <li><a class="dropdown-item" href="#">Service Center</a></li>
                                        <li><a class="dropdown-item" href="#">Accessories</a></li>
                                        <div
                                            class="mobileBlockMenu-socialIcon text-center d-block d-sm-block d-md-block d-lg-none">
                                            <p class="boldfont mt-3">Follow us on Social Media</p>
                                            <ul class="socialMedia mt-2">
                                                <li><img src="assets/images/icons/facebook.svg" alt="facebook"></li>
                                                <li><img src="assets/images/icons/twitter.svg" alt="twitter"></li>
                                                <li><img src="assets/images/icons/instagram.svg" alt="instagram"></li>
                                                <li><img src="assets/images/icons/youtube.svg" alt="youtube"></li>
                                                <li><img src="assets/images/icons/linkedin.svg" alt="linkedin"></li>
                                            </ul>
                                        </div>

                                    </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="bike-icon"><img src="assets/images/icons/scooter-m.png" class="img-fluid" alt="" /></span>Scooters
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <div class="mobileBlockMenu-top d-block d-sm-block d-md-block d-lg-none">
                                            <div class="row justify-content-start align-items-center">
                                                <div class="back-arrow">
                                                    <img src="./assets/images/icons/Left-arrow-1.png">
                                                    <b>Scooters</b>
                                                </div>
                                            </div>
                                        </div>
                                        <li><a class="dropdown-item" href="#">Popular bikes</a></li>
                                        <li><a class="dropdown-item" href="#">New bikes</a></li>
                                        <li><a class="dropdown-item" href="#">Upcomming bikes</a></li>
                                        <li><a class="dropdown-item" href="#">Best Mileage</a></li>
                                        <li><a class="dropdown-item" href="#">Compare bikes</a></li>
                                        <li><a class="dropdown-item" href="#">Bike Brands</a></li>
                                        <li><a class="dropdown-item" href="#">Showroom</a></li>
                                        <li><a class="dropdown-item" href="#">Service Center</a></li>
                                        <li><a class="dropdown-item" href="#">Accessories</a></li>
                                        <div
                                            class="mobileBlockMenu-socialIcon text-center d-block d-sm-block d-md-block d-lg-none">
                                            <p class="boldfont mt-3">Follow us on Social Media</p>
                                            <ul class="socialMedia mt-2">
                                                <li><img src="assets/images/icons/facebook.svg" alt="facebook"></li>
                                                <li><img src="assets/images/icons/twitter.svg" alt="twitter"></li>
                                                <li><img src="assets/images/icons/instagram.svg" alt="instagram"></li>
                                                <li><img src="assets/images/icons/youtube.svg" alt="youtube"></li>
                                                <li><img src="assets/images/icons/linkedin.svg" alt="linkedin"></li>
                                            </ul>
                                        </div>

                                    </ul>
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="bike-icon"><img src="assets/images/icons/electric-m.png" class="img-fluid" alt="" /></span>
                                Electric Bikes</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                        <div class="mobileBlockMenu-top d-block d-sm-block d-md-block d-lg-none">
                                            <div class="row justify-content-start align-items-center">
                                                <div class="back-arrow">
                                                    <img src="./assets/images/icons/Left-arrow-1.png">
                                                    <b>Electric Bikes</b>
                                                </div>
                                            </div>
                                        </div>
                                        <li><a class="dropdown-item" href="#">New bikes</a></li>
                                        <li><a class="dropdown-item" href="#">Old bikes</a></li>
                                        <div
                                            class="mobileBlockMenu-socialIcon text-center d-block d-sm-block d-md-block d-lg-none">
                                            <p class="boldfont mt-3">Follow us on Social Media</p>
                                            <ul class="socialMedia mt-2">
                                                <li><img src="assets/images/icons/facebook.svg" alt="facebook"></li>
                                                <li><img src="assets/images/icons/twitter.svg" alt="twitter"></li>
                                                <li><img src="assets/images/icons/instagram.svg" alt="instagram"></li>
                                                <li><img src="assets/images/icons/youtube.svg" alt="youtube"></li>
                                                <li><img src="assets/images/icons/linkedin.svg" alt="linkedin"></li>
                                            </ul>
                                        </div>

                                    </ul> 
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://localhost/bike-junction/rs.php">
                                    <span class="bike-icon"><img src="assets/images/icons/bike-icon.png" class="img-fluid" alt="" /></span>Bike Loan
                                </a>
                                
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://localhost/bike-junction/dealers.php"><span class="bike-icon"><img src="assets/images/icons/dealer-m.png" class="img-fluid" alt="" /></span>Dealers</a>
                                                 
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link" href="http://localhost/bike-junction/compare2.php" >
                                <span class="bike-icon"><img src="assets/images/icons/campare-m.png" class="img-fluid" alt="" /></span>
                                Compare Bikes</a>
                                
                            </li>
                            <li class="nav-item dropdown"><a class="nav-link " href="http://localhost/bike-junction/emi-calculator.php">
                                <span class="bike-icon"><img src="assets/images/icons/emi-m.png" class="img-fluid" alt="" /></span>
                                EMI Calculator</a>
                            </li>
                            <li class="nav-item dropdown  d-sm-block d-md-none d-lg-none"><a class="nav-link " href="http://localhost/bike-junction/emi-calculator.php">
                                <span class="bike-icon"><img src="assets/images/icons/on-road-m.png" class="img-fluid" alt="" /></span>
                                Get On-Road Price</a>
                                
                            </li>
                        </ul>
                    </div>

                        
                        <div class="mobileBlockMenu-socialIcon text-center d-block d-sm-block d-md-block d-lg-none">
                            <p class="boldfont mt-3">Follow us on Social Media</p>
                            <ul class="socialMedia mt-2">
                                <li><img src="assets/images/icons/facebook.svg" alt="facebook" /></li>
                                <li><img src="assets/images/icons/twitter.svg" alt="twitter" /></li>
                                <li><img src="assets/images/icons/instagram.svg" alt="instagram" /></li>
                                <li><img src="assets/images/icons/youtube.svg" alt="youtube" /></li>
                                <li><img src="assets/images/icons/linkedin.svg" alt="linkedin" /></li>
                            </ul>
                        </div>
                    </div>
                    <div class="nav-mask"></div>
                </nav>
            </div>
        </div>

        
        
    </header>
