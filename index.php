<?php
    $title = "Home";
    include('layouts/header.php'); 
?>

<section class="sliderBlock">
    <div id="homeSlider" class="carousel slide d-none d-sm-none d-md-none d-lg-block" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#homeSlider" data-slide-to="0" class="active"></li>
        <li data-target="#homeSlider" data-slide-to="1"></li>
        <li data-target="#homeSlider" data-slide-to="2"></li>
    </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/sliderdummy.png" data-src="./assets/images/homepage.jpg" class="img-fluid"
                    alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/images/sliderdummy.png" data-src="./assets/images/homepage.jpg" class="img-fluid"
                    alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/images/sliderdummy.png" data-src="./assets/images/homepage.jpg" class="img-fluid"
                    alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div id="homeSlider" class="carousel slide d-block d-sm-block d-md-block d-lg-none" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/sliderdummy-mobile.png" data-src="./assets/images/banners/slide1-mob.jpg"
                    class="img-fluid" alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/images/sliderdummy-mobile.png" data-src="./assets/images/banners/slide2-mob.jpg"
                    class="img-fluid" alt="">
            </div>
        </div>
        <a class="carousel-control-prev" href="#homeSlider" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#homeSlider" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="container-mid container-mid-mobileFull">
        <div class="sliderBlock-filterHome">
            <div class="filterHome-inner">
                <h1>Get your Perfect Bike</h1>
                <nav>
                    <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-filter-new-truck" data-toggle="tab" href="#filter-new-truck"
                            role="tab" aria-controls="filter-new-truck" aria-selected="true">By Budget</a>
                        <a class="nav-link" id="nav-filter-used-truck" data-toggle="tab" href="#filter-used-truck"
                            role="tab" aria-controls="filter-used-truck" aria-selected="false">By Mileage</a>
                    </div>
                </nav>
                <div class="tab-content mt-4" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="filter-new-truck" role="tabpanel"
                        aria-labelledby="nav-filter-new-truck">
                        <form>
                            <div class="form-group">
                                <div class="mob-select-inpt-wrp" id="bannerbrands-popfields">
                                    <span class="mob-select-inpt">Select Brand</span>
                                    <span class="mob-select-inpt-arrow"></span>
                                </div>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option>Select Brand</option>
                                    <option>TVS</option>
                                    <option>Hero</option>
                                    <option>Honda</option>
                                    <option>Bajaj</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <div class="mob-select-inpt-wrp" id="bannerbudget-popfields">
                                    <span class="mob-select-inpt">Select Budget</span>
                                    <span class="mob-select-inpt-arrow"></span>
                                </div>
                               <select class="form-control" id="exampleFormControlSelect2">
                                    <option>Select Budget</option>
                                    <option>50,000 - 60,000</option>
                                    <option>60,000 - 70,000</option>
                                    <option>70,000 - 80,000</option>
                                    <option>80,000 - 90,000</option>
                                </select>
                            </div>
                            <button type="submit" class="w-100 fillBtn mt-3">Get On-Road Price</button>
                        </form>

                    </div>
                    <div class="tab-pane fade" id="filter-used-truck" role="tabpanel"
                        aria-labelledby="nav-filter-used-truck">
                        <form>
                            <div class="form-group">
                                <div class="mob-select-inpt-wrp" id="bannerbrands-popfields1">
                                    <span class="mob-select-inpt">Select Brand</span>
                                    <span class="mob-select-inpt-arrow"></span>
                                </div>
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option>Select Brand</option>
                                    <option>TVS</option>
                                    <option>Hero</option>
                                    <option>Honda</option>
                                    <option>Bajaj</option>
                                </select>
                            </div>
                            <div class="form-group">
                               <div class="mob-select-inpt-wrp" id="mileage-popfields">
                                    <span class="mob-select-inpt">Select Mileage</span>
                                    <span class="mob-select-inpt-arrow"></span>
                                </div>
                               <select class="form-control" id="exampleFormControlSelect2">
                                    <option>Select Mileage</option>
                                    <option>30Kmpl - 40Kmpl</option>
                                    <option>40Kmpl - 50Kmpl</option>
                                    <option>50Kmpl - 60Kmpl</option>
                                    <option>60Kmpl - 70Kmpl</option>
                                </select>
                            </div>
                            <button type="submit" class="w-100 fillBtn mt-3">Get On-Road Price</button>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Find your Perfect Bike</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-truck-popular" data-toggle="tab" href="#truck-popular" role="tab"
                        aria-controls="truck-popular" aria-selected="true">Popular</a>
                    <a class="nav-link" id="nav-truck-latest" data-toggle="tab" href="#truck-latest" role="tab"
                        aria-controls="truck-latest" aria-selected="false">Latest</a>
                    <a class="nav-link" id="nav-truck-upcoming" data-toggle="tab" href="#truck-upcoming" role="tab"
                        aria-controls="truck-upcoming" aria-selected="false">Upcoming</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="truck-popular" role="tabpanel"
                    aria-labelledby="nav-truck-popular">
                    <div class="newbike-slide newbike-slider brandsBlock1 tj-row owl-carousel">
                        <div class="newTruckBlock-main tj-col ">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="http://localhost/bike-junction/new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/new-webp.webp"
                                            class="img-fluid" alt="" />
                                        <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="http://localhost/bike-junction/on-road-price.php" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                        <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                        <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>    
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                        <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>

                        

                       
                        <div class="newTruckBlock-main tj-col tj-view-all">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <div class="viewall-btn-box">
                                    <a href="#" class="arw-btn">
                                        <div class="arwround"><span></span></div>        
                                        <div class="viewall-btn-title">View All</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-4">
                        <a href="#" >View All<img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="truck-latest" role="tabpanel" aria-labelledby="nav-truck-latest">
                    <div class="newbike-slide newbike-slider brandsBlock1 tj-row owl-carousel">
                    <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                       <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-4">
                        <a href="#" >View All<img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="truck-upcoming" role="tabpanel" aria-labelledby="nav-truck-upcoming">
                    <div class="newbike-slide newbike-slider brandsBlock1 tj-row owl-carousel">
                       <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                            <div class="color-option">
                                          <div>4</div>
                                          <div>color</div>
                                        </div>
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-4">
                        <a href="#" >View All <img src="assets/images/icons/linkarrow.svg" alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="sectionpadding25 d-none d-sm-none d-md-block d-lg-block">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Brands</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-new-bike" data-toggle="tab" href="#new-bike" role="tab"
                        aria-controls="new-bike" aria-selected="true">Bike</a>
                    <a class="nav-link" id="nav-scooters" data-toggle="tab" href="#scooters" role="tab"
                        aria-controls="scooters" aria-selected="false">Scooters</a>
                    <a class="nav-link" id="nav-electric-bike" data-toggle="tab" href="#electric-bike" role="tab"
                        aria-controls="electric-bike" aria-selected="false">Electric Bike</a>     
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="new-bike" role="tabpanel" aria-labelledby="nav-new-bike">
                    <div class="brands-slider brandsBlock1 text-center tj-row owl-carousel" >
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Bharat Benz</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Eicher</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Mahindra</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Piaggio</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>TATA</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All Brands <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="scooters" role="tabpanel" aria-labelledby="nav-scooters">

                <div class="brands-slider brandsBlock1 text-center tj-row owl-carousel" >
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Bharat Benz</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Eicher</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Mahindra</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Piaggio</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>TATA</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All Brands <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>
                <div class="tab-pane fade" id="electric-bike" role="tabpanel" aria-labelledby="nav-electric-bike">

                <div class="brands-slider brandsBlock1 text-center tj-row owl-carousel" >
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Bharat Benz</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Eicher</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Mahindra</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Piaggio</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>TATA</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All Brands <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sectionpadding25 d-block d-sm-block d-md-none d-lg-none">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Brands</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-new-bike1" data-toggle="tab" href="#new-bike1" role="tab"
                        aria-controls="new-bike1" aria-selected="true">Bike</a>
                    <a class="nav-link" id="nav-scooters1" data-toggle="tab" href="#scooters1" role="tab"
                        aria-controls="scooters1" aria-selected="false">Scooters</a>
                    <a class="nav-link" id="nav-electric-bike1" data-toggle="tab" href="#electric-bike1" role="tab"
                        aria-controls="electric-bike1" aria-selected="false">Electric Bike</a>     
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="new-bike1" role="tabpanel" aria-labelledby="nav-new-bike1">
                    <div class="brandsBlock text-center tj-row " >
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Bharat Benz</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Eicher</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Mahindra</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Piaggio</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>TATA</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All Brands <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="scooters1" role="tabpanel" aria-labelledby="nav-scooters1">

                <div class="brandsBlock text-center tj-row " >
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland1</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Bharat Benz</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Eicher</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Mahindra</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Piaggio</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>TATA</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All Brands <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>
                <div class="tab-pane fade" id="electric-bike1" role="tabpanel" aria-labelledby="nav-electric-bike1">

                <div class="brandsBlock text-center tj-row " >
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland2</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Bharat Benz</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Eicher</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Mahindra</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Piaggio</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>TATA</p>
                                </div>
                            </a>
                        </div>
                        <div class="brandsBlock-main tj-col">
                            <a href="#">
                                <div class="brandsBlock-inner m-t-16 sectionShadow1">
                                    <img src="assets/images/brands/Hero_MotoCorp.png" class="img-fluid" alt="" />
                                    <p>Ashok Leyland</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All Brands <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Bikes by need</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-bike-mileage" data-toggle="tab" href="#bike-mileage" role="tab"
                        aria-controls="bike-mileage" aria-selected="true">Best Mileage</a>
                    <a class="nav-link" id="nav-budget-friendly" data-toggle="tab" href="#budget-friendly" role="tab"
                        aria-controls="budget-friendly" aria-selected="false">Budget Friendly</a>
                    <a class="nav-link" id="nav-bike-scooters" data-toggle="tab" href="#bike-scooters" role="tab"
                        aria-controls="bike-scooters" aria-selected="false">Scooters</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="bike-mileage" role="tabpanel"
                    aria-labelledby="nav-bike-mileager">
                    <div class="newbike-slide2 newbike-slider brandsBlock1 tj-row owl-carousel">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>

                        

                       
                        <div class="newTruckBlock-main tj-col tj-view-all">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <div class="viewall-btn-box">
                                    <a href="#" class="arw-btn">
                                        <div class="arwround"><span></span></div>        
                                        <div class="viewall-btn-title">View All</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-4">
                        <a href="#" >View All<img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="budget-friendly" role="tabpanel" aria-labelledby="nav-budget-friendly">
                    <div class="newbike-slide2 newbike-slider brandsBlock1 tj-row owl-carousel">
                       <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-4">
                        <a href="#" >View All<img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="bike-scooters" role="tabpanel" aria-labelledby="nav-bike-scooters">
                    <div class="newbike-slide2 newbike-slider  brandsBlock1 tj-row owl-carousel">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-4">
                        <a href="#" >View All <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="sectionpadding25 ">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Comparison</h2>
        </div>
        <div class="compareBlock1 compare-slide newbike-slider owl-carousel tj-row">
            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <img src="assets/images/1.jpg" class="comparisonImg img-fluid" alt="" />
                                <div class="comp-title-brand">
                                    <div class="compare-brand mb-2">Hero</div>
                                    <div class="compare-title">Splendor Plus</div>
                                </div>
                                <p>₹70,258 - 74,528*</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right ">
                                <img src="assets/images/2.jpg" class="comparisonImg img-fluid" alt="" />
                                <div class="comp-title-brand">
                                    <div class="compare-brand mb-2">Hero</div>
                                    <div class="compare-title">Splendor Plus</div>
                                </div>
                                <p>₹70,258 - 74,528*</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Compare</a>
                    </div>
                </div>
            </div>
            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <img src="assets/images/1.jpg" class="comparisonImg img-fluid" alt="" />
                                <div class="comp-title-brand">
                                    <div class="compare-brand mb-2">Hero</div>
                                    <div class="compare-title">Splendor Plus</div>
                                </div>
                                <p>₹70,258 - 74,528*</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right ">
                                <img src="assets/images/2.jpg" class="comparisonImg img-fluid" alt="" />
                                <div class="comp-title-brand">
                                    <div class="compare-brand mb-2">Hero</div>
                                    <div class="compare-title">Splendor Plus</div>
                                </div>
                                <p>₹70,258 - 74,528*</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Compare</a>
                    </div>
                </div>
            </div>
            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <img src="assets/images/1.jpg" class="comparisonImg img-fluid" alt="" />
                                <div class="comp-title-brand">
                                    <div class="compare-brand mb-2">Hero</div>
                                    <div class="compare-title">Splendor Plus</div>
                                </div>
                                <p>₹70,258 - 74,528*</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right ">
                                <img src="assets/images/2.jpg" class="comparisonImg img-fluid" alt="" />
                                <div class="comp-title-brand">
                                    <div class="compare-brand mb-2">Hero</div>
                                    <div class="compare-title">Splendor Plus</div>
                                </div>
                                <p>₹70,258 - 74,528*</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Compare</a>
                    </div>
                </div>
            </div>
            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <img src="assets/images/1.jpg" class="comparisonImg img-fluid" alt="" />
                                <div class="comp-title-brand">
                                    <div class="compare-brand mb-2">Hero</div>
                                    <div class="compare-title">Splendor Plus</div>
                                </div>
                                <p>₹70,258 - 74,528*</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right ">
                                <img src="assets/images/2.jpg" class="comparisonImg img-fluid" alt="" />
                                <div class="comp-title-brand">
                                    <div class="compare-brand mb-2">Hero</div>
                                    <div class="compare-title">Splendor Plus</div>
                                </div>
                                <p>₹70,258 - 74,528*</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Compare</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="viewall mt-3">
            <a href="#">View All <img src="assets/images/icons/linkarrow.svg"
                    alt="" /></a>
        </div>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Dealers Available</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-cate-truck" data-toggle="tab" href="#cate-truck" role="tab"
                        aria-controls="cate-truck" aria-selected="true">Hero</a>
                    <a class="nav-link" id="nav-cate-minitruck" data-toggle="tab" href="#cate-minitruck" role="tab"
                        aria-controls="cate-minitruck" aria-selected="false">Honda</a>
                    <a class="nav-link" id="nav-cate-tipper" data-toggle="tab" href="#cate-tipper" role="tab"
                        aria-controls="cate-tipper" aria-selected="false">Bajaj</a>
                    <a class="nav-link" id="nav-cate-tractor" data-toggle="tab" href="#cate-tractor" role="tab"
                        aria-controls="cate-tractor" aria-selected="false">TVS</a>
                    <a class="nav-link" id="nav-cate-twheeler" data-toggle="tab" href="#cate-twheeler" role="tab"
                        aria-controls="cate-twheeler" aria-selected="false">Royal Enfield</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="cate-truck" role="tabpanel" aria-labelledby="nav-cate-truck">
                    <div class="newbikekBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                   <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="cate-minitruck" role="tabpanel" aria-labelledby="nav-cate-minitruck">
                <div class="newbikekBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                   <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="cate-tipper" role="tabpanel" aria-labelledby="nav-cate-tipper">
                <div class="newbikekBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                   <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="cate-tractor" role="tabpanel" aria-labelledby="nav-cate-tractor">
                <div class="newbikekBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                   <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#">View All <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="cate-twheeler" role="tabpanel" aria-labelledby="nav-cate-twheeler">
                    <div class="newbikekBlock tj-row">
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                   <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow1 m-t-16">
                                <div class="newTruckBlock-content">
                                    <a href="#"><p class="newTruckBlock-price">Aditi Hero Centre</p></a>
                                    <p class="newbikeBlock-title">C2 Sector-3, Noida, Uttar Pradesh 211019</p>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Contact Dealer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-3">
                        <a href="#" >View All  <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="filterBlock sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Bikes as per your Preference</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-budget" data-toggle="tab" href="#budget" role="tab"
                        aria-controls="budget" aria-selected="true">Budget</a>
                    <a class="nav-link" id="nav-bodytype" data-toggle="tab" href="#bodytype" role="tab"
                        aria-controls="bodytype" aria-selected="false">Mileage</a>
                    <a class="nav-link" id="nav-fueltype" data-toggle="tab" href="#fueltype" role="tab"
                        aria-controls="fueltype" aria-selected="false">Model</a>
                </div>
            </nav>
            <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="budget" role="tabpanel" aria-labelledby="nav-budget">
                    <div class="row bikeRange-row">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips  text-center" href="#">Less than ₹40,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips  text-center" href="#">₹40,000 to ₹60,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹60,000 to ₹80,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹80,000 to ₹1,00,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹1,00,000 to ₹1,20,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹1,20,000 to ₹1,50,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹1,20,000 to ₹1,50,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹1,20,000 to ₹1,50,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹1,20,000 to ₹1,50,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹1,20,000 to ₹1,50,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹1,20,000 to ₹1,50,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">₹1,20,000 to ₹1,50,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips  text-center" href="#">₹1,20,000 to ₹1,50,000</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips  text-center" href="#">₹1,20,000 to ₹1,50,000</a>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="bodytype" role="tabpanel" aria-labelledby="nav-bodytype">
                    <div class="row bikeRange-row">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">Trucks</a>
                        </div>
                       
                    </div>
                </div>

                <div class="tab-pane fade" id="fueltype" role="tabpanel" aria-labelledby="nav-fueltype">
                    <div class="row bikeRange-row">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">Trucks</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">Trucks</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">Trucks</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">Trucks</a>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 bikeRange-column">
                            <a class="filterBlock-chips   text-center" href="#">Trucks</a>
                        </div>
                       
                    </div>
                </div>
            </div>

        </div>
        <div class="viewall mt-3">
            <a href="#" >View All Trucks <img src="assets/images/icons/linkarrow.svg" alt="" /></a>
        </div>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Latest Model by Category</h2>
        </div>
        <div class="tabsBlock">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-bike-mileage2" data-toggle="tab" href="#bike-mileage2" role="tab"
                        aria-controls="bike-mileage2" aria-selected="true">Best Mileage</a>
                    <a class="nav-link" id="nav-budget-friendly2" data-toggle="tab" href="#budget-friendly2" role="tab"
                        aria-controls="budget-friendly2" aria-selected="false">Budget Friendly</a>
                    <a class="nav-link" id="nav-bike-scooters2" data-toggle="tab" href="#bike-scooters2" role="tab"
                        aria-controls="bike-scooters2" aria-selected="false">Scooters</a>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="bike-mileage2" role="tabpanel"
                    aria-labelledby="nav-bike-mileager2">
                    <div class="newbike-slide3 newbike-slider brandsBlock1 tj-row owl-carousel">
                    <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col tj-view-all">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <div class="viewall-btn-box">
                                    <a href="#" class="arw-btn">
                                        <div class="arwround"><span></span></div>        
                                        <div class="viewall-btn-title">View All</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-4">
                        <a href="#" >View All<img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="budget-friendly2" role="tabpanel" aria-labelledby="nav-budget-friendly2">
                    <div class="newbike-slide3 newbike-slider brandsBlock1 tj-row owl-carousel">
                    <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-4">
                        <a href="#" >View All<img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

                <div class="tab-pane fade" id="bike-scooters2" role="tabpanel" aria-labelledby="nav-bike-scooters2">
                    <div class="newbike-slide3 newbike-slider brandsBlock1 tj-row owl-carousel">
                       <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                        <div class="newTruckBlock-main tj-col">
                            <div class="newTruckBlock-inner sectionShadow m-t-16">
                                <a href="<?php echo $site_url; ?>new-truck-single.php">
                                    <div class="newTruckBlock-img">
                                        <img src="assets/images/truck-compare.png" data-src="assets/images/Apache1.jpg"
                                            class="img-fluid" alt="" />
                                    </div>
                                </a>
                                <div class="newTruckBlock-content">
                                    <a href="#">
                                        <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                                    </a>
                                    <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                                    <div class="special-feature mb-3">
                                        <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                                        <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                                    </div>
                                    <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="viewall mt-4">
                        <a href="#" >View All <img src="assets/images/icons/linkarrow.svg"
                                alt="" /></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- <section class="sectionpadding25 city-find-sec">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Get bikes nearby</h2>
        </div>
        <div class="city-search-wrp">
            <div class="search-input">
                <div class="search-icon"><img src="assets/images/icons/search-n.png" alt="search" /></div>
                <input type="text" placeholder="Ajmer, Baroda, Prayagraj etc...">
            </div>
            <div class="citi-title mt-4 mb-1">Popular Cities</div>
        </div>
        <div class="brandsBlock text-center tj-row" >
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner  sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner  sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner  sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow">
                        <img src="assets/images/brands/delhi.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section> -->

<section class="sectionpadding25 city-find-sec">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Tools for your Help</h2>
        </div>
        <div class="brandsBlock text-center tj-row" >
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow1">
                        <img src="assets/images/brands/about-n.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow1">
                        <img src="assets/images/brands/contact-n.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow1">
                        <img src="assets/images/brands/campare-n.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow1">
                        <img src="assets/images/brands/loan.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow1">
                        <img src="assets/images/brands/find-services.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>
            <div class="bikecityBlock-main tj-col">
                <a href="#">
                    <div class="bikecityBlock-inner sectionShadow1">
                        <img src="assets/images/brands/find-dealer.png" class="img-fluid" alt="" />
                        <p>Delhi NCR</p>
                    </div>
                </a>
            </div>       
        </div>
    </div>
</section>

<section class="sectionpadding10 mb-4">
       <div class="container-mid">
          <div class="sectionHeading mt-4 mb-4">
            <h2>Frequently asked questions</h2>
          </div>
          <div class="accordionBlock accordion accordionFaq-sec" id="faqblock">
            <div class="accordionBlock-inner sectionShadow1">
              <div class="accordionBlock-header" id="heading1">
                <h3 data-toggle="collapse" data-target="#collapse1" aria-expanded="false"
                  aria-controls="collapse1">
                  Which is the most affordable Suzuki bike available in India?
                </h3>
              </div>
              <div id="collapse1" class="collapse" aria-labelledby="heading1" data-parent="#faqblock">
                <div class="accordionBlock-body">
                  <h4>Most economical Suzuki bike available in India is Access 125 which is priced at ₹77,186.</h4>
                </div>
              </div>
            </div>
            <div class="accordionBlock-inner sectionShadow1">
              <div class="accordionBlock-header" id="heading2">
                <h3 data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                  aria-controls="collapse2">
                  Which is the most affordable Suzuki bike available in India?
                </h3>
              </div>
              <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#faqblock">
                <div class="accordionBlock-body">
                <h4>Most economical Suzuki bike available in India is Access 125 which is priced at ₹77,186.</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
</section>

<!-- brands banner pop up options -->
<div class="langMobileBlock" id="brandsMobileBlock">
  <div class="langMobileBlockInner">
    <div class="filderbrands-row">
        <div class="filter-title-wrp">
            <div class="filter-title-img">Select Brand</div>
            <div class="filter-closed"><div class="langMobileBlockClose" id="sortMobileBlockClose2"><img src="./assets/images/icons/filter-closed.png" alt="" /></div></div>
        </div>
         <div class="brands-popup-wrp">
              <div class="row">
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
              </div>  
            </div>
    </div>
  </div>
</div>


<!-- brands banner pop up options -->
<div class="langMobileBlock" id="budgetBannerMobileBlock">
  <div class="langMobileBlockInner">
    <div class="budgetBanner-popup-row">
        <div class="filter-title-wrp">
            <div class="filter-closed"><div class="langMobileBlockClose" id="sortMobileBlockClose3"><img src="./assets/images/icons/filter-closed.png" alt="" /></div></div>
        </div>
            <div class="range-slider">
                <span class="rangeValues"></span>
                <input value="1000" min="1000" max="50000" step="500" type="range">
                <input value="50000" min="1000" max="50000" step="500" type="range">
            </div>
            <div class="price-tab-wrp">
                <div class="budget-tab row">
                <div class="col-6"> <a  href="#" class="pricetab">Less than ₹40,000</a></div>
                <div class="col-6"> <a  href="#" class="pricetab">₹40,000 to 60,000</a></div>
                <div class="col-6"> <a  href="#" class="pricetab">₹60,000 to 80,000</a></div>
                <div class="col-6"> <a  href="#" class="pricetab">₹80,000 to 1,00,000</a></div>
                <div class="col-6"> <a  href="#" class="pricetab">More than ₹1,00,000</a></div>
                </div>
            </div>
        </div>
   </div>
</div>

<!-- brands 2 banner pop up options  -->
<div class="langMobileBlock" id="brandsMobileBlock1">
  <div class="langMobileBlockInner">
    <div class="filderbrands-row">
        <div class="filter-title-wrp">
            <div class="filter-title-img">Select Brand</div>
            <div class="filter-closed"><div class="langMobileBlockClose" id="sortMobileBlockClose4"><img src="./assets/images/icons/filter-closed.png" alt="" /></div></div>
        </div>
         <div class="brands-popup-wrp">
              <div class="row">
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="bodyFilter mb-1 border-radius-10 sectionShadow">
                      <label class="checkbox-custom checkbox-customImg">
                        <input type="checkbox" >
                        <span class="checkmark border-radius-10">
                          <img src="./assets/images/brands/Hero_MotoCorp.png" class="img-fluid"
                            alt="">
                          <p>Hero</p>
                        </span>
                      </label>
                    </div>
                </div>
              </div>  
            </div>
    </div>
  </div>
</div>


<!-- milage banner pop up options -->
<div class="langMobileBlock" id="milageBannerMobileBlock">
  <div class="langMobileBlockInner">
    <div class="budgetBanner-popup-row">
        <div class="filderbrands-row">
                <div class="filter-title-wrp  ml-0 mr-0 pb-3">
                    <div class="filter-title-img"><img src="./assets/images/icons/filter.png" alt="" />Mileage</div>
                    <div class="filter-closed"><div class="langMobileBlockClose" id="sortMobileBlockClose5"><img src="./assets/images/icons/filter-closed.png" alt="" /></div></div>
                </div>
            </div>
            <div class="price-tab-wrp">
                <div class="budget-tab row">
                <div class="col-6"> <a  href="#" class="pricetab">30Kmpl - 40Kmpl</a></div>
                <div class="col-6"> <a  href="#" class="pricetab">40Kmpl - 50Kmpl</a></div>
                <div class="col-6"> <a  href="#" class="pricetab">50Kmpl - 60Kmpl</a></div>
                <div class="col-6"> <a  href="#" class="pricetab">60Kmpl - 70Kmpl</a></div>
                <div class="col-6"> <a  href="#" class="pricetab">70Kmpl - 80Kmpl</a></div>
                </div>
            </div>
        </div>
   </div>
</div>

<div class="filter-overly3"></div>
<div class="filter-overly4"></div>
<div class="filter-overly5"></div>
<div class="filter-overly6"></div>

<!-- newsletter -->
<!-- <div class="modal fade customModal" id="newsletter" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="javascript:void(0)" class="close sectionShadow text-center" data-dismiss="modal"
                aria-label="Close">
                <img src="./assets/images/icons/close.svg" alt="" />
            </a>
            <div class="customModal-header">
                <p class="modalHeading mb-1 text-uppercase boldfont">For any assistance related to the Truck</p>
                <p>Provide your contact details to get quick detail from Truck Junction</p>
            </div>
            <div class="customModal-body mt-2">
                <form>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" placeholder="Enter Number" required>
                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Select State</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Select City</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                    <button class="fillBtn w-100">Submit</button>
                    <p class="text-center mt-3 mb-0">By clicking on Submit, you agree to our <a class="linkclr" href="#"
                            target="_blank" title="Terms and Conditions">Terms and Conditions</a></p>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- success popup -->
<!-- <div class="modal fade customModal successpopup" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <a href="javascript:void(0)" class="close sectionShadow text-center" data-dismiss="modal"
                aria-label="Close">
                <img src="./assets/images/icons/close.svg" alt="" />
            </a>
            <div class="customModal-body">
                <svg class="checkmarkAnimation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                    <circle class="checkmarkAnimation-circle" cx="26" cy="26" r="25" fill="none" />
                    <path class="checkmarkAnimation-check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                </svg>
            </div>
            <div class="customModal-header text-center mt-3">
                <p class="modalHeading modalHeading-success text-uppercase boldfont">Thank you !</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever.</p>
                    <p class="mt-4 text-uppercase boldfont">Follow Truck Junction</p>
                <ul class="socialMedia customModal-socialMedia mt-2">
                    <li><img src="assets/images/icons/facebook.svg" alt="facebook"></li>
                    <li><img src="assets/images/icons/twitter.svg" alt="twitter"></li>
                    <li><img src="assets/images/icons/instagram.svg" alt="instagram"></li>
                    <li><img src="assets/images/icons/youtube.svg" alt="youtube"></li>
                    <li><img src="assets/images/icons/linkedin.svg" alt="linkedin"></li>
                </ul>
            </div>
        </div>
    </div>
</div> -->



<?php include('layouts/footer.php'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
$(window).on('load', function() {
    $('#newsletter').modal('show');
});
$(window).on('load', function() {
    setTimeout(function() {
        $('.successpopup').modal('show');
    }, 100);
});

</script>