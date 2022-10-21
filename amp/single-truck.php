<?php
    $pagetitle = 'Single Truck';
    include('layouts/header.php');
?>

<section class="pageInfo-breadcrumbs">
    <div class="container-mid">
        <ul class="mb-0">
            <li><a href="#">Home</a></li>
            <li><a href="#">BharatBenz</a></li>
            <li><span>1923C</span></li>
        </ul>
    </div>
</section>

<section class="sectionpadding20 newTruckSingle sectionShadow">
    <div class="container-mid">

        <div class="sectionHeading newTruckSingle-top">
            <div class="d-flex position-relative">
                <h1>Ashok Leyland Ecomet 1615 HE</h1>
                <div class="social_share_product">
                    <span class="social_share_product_icon" on="tap:truckSocialShare.show" role="social" tabindex="1">
                        <amp-img width="25" height="25" layout="fixed" class="img-fluid" src="assets/images/icons/share.svg" alt="Share Product" ></amp-img>
                    </span>
                    <div class="social_share_product_inner" hidden="" id="truckSocialShare">
                        <p class="mb-3 boldfont text-uppercase">Social Share 
                            <span class="social_share_product_close" on="tap:truckSocialShare.hide" role="social" tabindex="1">&#10006;</span>
                        </p>
                        <ul>
                            <li>
                                <a href="#" target="_blank" title="Facebook">
                                    <amp-img width="30" height="30" layout="fixed" src="assets/images/icons/facebook.svg" alt="" ></amp-img>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" title="Whatsapp">
                                    <amp-img width="30" height="30" layout="fixed" src="assets/images/icons/whatsapp.svg" alt="" ></amp-img>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" title="Twitter">
                                    <amp-img width="30" height="30" layout="fixed" src="assets/images/icons/twitter.svg" alt="" ></amp-img>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank" title="Linkedin">
                                    <amp-img width="30" height="30" layout="fixed" src="assets/images/icons/linkedin.svg" alt="" ></amp-img>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <span class="star-rating">3.5 <amp-img layout="fixed" width="11" height="11" src="assets/images/icons/star.svg" class="imgFilterInvert" alt=""></amp-img></span>
            <span class="rate-truck"><amp-img layout="fixed" width="11" height="11" src="assets/images/icons/pencil.svg" class="imgFilterInvert" alt=""></amp-img> Rate This Truck</span>
        </div>

        <amp-carousel class="mb-3" id="singlenewtractor" width="600" height="350" layout="responsive" type="slides"
            on="slideChange:singlenewtractorSelector.toggle(index=event.index, value=true)">
            <amp-img width="600" height="350" src="assets/images/truck1.jpg" layout="responsive" alt="Truck 1"></amp-img>
            <amp-img width="600" height="350" src="assets/images/truck2.jpg" layout="responsive" alt="Truck 2"></amp-img>
            <amp-img width="600" height="350" src="assets/images/truck3.jpg" layout="responsive" alt="Truck 3"></amp-img>
            <amp-youtube data-videoid="RRIhUQLpxd0" width="600" height="350" layout="responsive"></amp-youtube>
        </amp-carousel>
        <amp-selector id="singlenewtractorSelector" class="mt-3 carousel-preview text-center"
            on="select:singlenewtractor.goToSlide(index=event.targetOption)" layout="container">
            <amp-img option="0" selected src="assets/images/truck1.jpg" width="69" height="40"
                alt="Truck 1"></amp-img>
            <amp-img option="1" src="assets/images/truck2.jpg" width="69" height="40"
                alt="Truck 2"></amp-img>
            <amp-img option="2" src="assets/images/truck3.jpg" width="69" height="40"
                alt="Truck 3"></amp-img>
            <amp-img option="3" src="assets/images/truck4.jpg" width="69" height="40"
                alt="Truck 4"></amp-img>
        </amp-selector>

        <div class="newTruckSingle-right">
            <div class="newTruckSingle-featuresMain">
                <span class="sectionShadow">Brand - <a href="https://trucks.tractorjunction.com/en/ashok-leyland"
                        title="Ashok Leyland" class="linkclr">Ashok Leyland</a></span>
                <span class="sectionShadow">Power - 197 HP </span>

                <span class="sectionShadow">Fuel - <a href="https://trucks.tractorjunction.com/en/diesel" title="Diesel"
                        class="linkclr">Diesel</a> </span>
                <span class="sectionShadow">Engine - N/A</span>
            </div>
            <p class="newTruckSingle-price boldfont">₹ 30.13 - 30.18 Lakh</p>
            <span class="exshowroom">* Ex-showroom Price</span>
            <div class="newTruckSingle-anchor floatingBtn tj-row">
                <div class="tj-col newTruckSingle-anchor-inner">
                    <a href="#" class="fillBtn text-center GetOnRoadPriceEvent" title="Get On Road Price">Get On Road
                        Price</a>
                </div>
                <div class="tj-col newTruckSingle-anchor-inner">
                    <a href="https://trucks.tractorjunction.com/en/loan"
                        class="borderBtn text-center text-uppercase boldfont" title="Apply for Loan">Apply for
                        Loan</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="sectionpadding25 newTruckSingle-keyfeatures">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Ashok Leyland 1920 Specification</h2>
        </div>
        <div class="toolsBlock text-center tj-row">
            <div class="toolsBlock-main tj-col">
                <div class="toolsBlock-inner sectionShadow" title="Power - 197 HP">
                    <amp-img width="55" height="45" layout="fixed"
                        src="https://trkcdn.tractorjunction.com/images/icons/power.png" alt="Power"></amp-img>
                    <p class="boldfont">Power</p>
                    <p>197 HP</p>
                </div>
            </div>
            <div class="toolsBlock-main tj-col">
                <div class="toolsBlock-inner sectionShadow" title="GVW - 18500 KG">
                    <amp-img width="55" height="45" layout="fixed"
                        src="https://trkcdn.tractorjunction.com/images/icons/gvw.png" alt="GVW"></amp-img>
                    <p class="boldfont">GVW</p>
                    <p>18500 KG </p>
                </div>
            </div>
            <div class="toolsBlock-main tj-col">
                <div class="toolsBlock-inner sectionShadow" title="Wheelbase - N/A">
                    <amp-img width="55" height="45" layout="fixed"
                        src="https://trkcdn.tractorjunction.com/images/icons/wheelbase.png" alt="Wheelbase"></amp-img>
                    <p class="boldfont">Wheelbase</p>
                    <p>N/A </p>
                </div>
            </div>
            <div class="toolsBlock-main tj-col">
                <div class="toolsBlock-inner sectionShadow" title="Engine - H series CRS with iGen6 Technology  ">
                    <amp-img width="55" height="45" layout="fixed"
                        src="https://trkcdn.tractorjunction.com/images/icons/engine.png" alt="Engine"></amp-img>
                    <p class="boldfont">Engine</p>
                    <p>H series CRS with iGen6 Technology </p>
                </div>
            </div>
            <div class="toolsBlock-main tj-col">
                <div class="toolsBlock-inner sectionShadow" title="Fuel Tank - 220 Ltr.">
                    <amp-img width="55" height="45" layout="fixed"
                        src="https://trkcdn.tractorjunction.com/images/icons/fueltank.png" alt="Fuel Tank"></amp-img>
                    <p class="boldfont">Fuel Tank</p>
                    <p>220 Ltr.</p>
                </div>
            </div>
            <div class="toolsBlock-main tj-col" title="Payload - N/A">
                <div class="toolsBlock-inner sectionShadow">
                    <amp-img width="55" height="45" layout="fixed"
                        src="https://trkcdn.tractorjunction.com/images/icons/playload.png" alt="Payload"></amp-img>
                    <p class="boldfont">Payload</p>
                    <p>N/A</p>
                </div>
            </div>
            <div class="toolsBlock-main tj-col">
                <div class="toolsBlock-inner sectionShadow" title="No. of Tyre - 6  ">
                    <amp-img width="55" height="45" layout="fixed"
                        src="https://trkcdn.tractorjunction.com/images/icons/tyre.png" alt="No. of Tyre"></amp-img>
                    <p class="boldfont">No. of Tyre</p>
                    <p>6 </p>
                </div>
            </div>
            <div class="toolsBlock-main tj-col">
                <div class="toolsBlock-inner sectionShadow" title="Transmission - Manual  ">
                    <amp-img width="55" height="45" layout="fixed"
                        src="https://trkcdn.tractorjunction.com/images/icons/transmission.png" alt="Transmission">
                    </amp-img>
                    <p class="boldfont">Transmission</p>
                    <p>Manual </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="sectionpadding25 greybg">
    <div class="container-mid">
    
        <div class="sectionHeading">
            <h3>BharatBenz 1923C Summary</h3>
        </div>
        <div class="ckeditorBlock">
            <p>Bharat Benz 1923C Tipper manufactured with advanced technological solutions that provides high
                performance. The model comes from Bharat Benz's house, who is famous for its exceptional quality
                commercial vehicles. You can get Bharat Benz 1923C price, features, mileage, reviews, image and other
                details. Just be with us.</p>
            <p><strong>Bharat Benz 1923C Tipper Engine Capacity</strong></p>
            <p>You can get BharatBenz tipper in 241 hp power with the OM926 engine in this 1923C tipper model. The
                Bharat Benz 1923C generates 850 Nm of torque which is adequate for many applications.</p>
            <p><strong>Bharat Benz 1923C Tipper Other Features</strong></p>
            <p>Bharat Benz 1923C manufactured with 3600 mm wheelbase and is its maximum gradeability, and 6750 meters is
                turning radius. Along with this, it has 215 Ltr. of fuel tank capacity and 6 no. of tyres. The Tipper
                has 18500 KG of GVW and provides 60 Kmph maximum speed.</p>
            <p>Bharatbenz 1923c comes with excellent high productivity, which works efficiently. 1923 tipper model which
                is a very powerful OM926 engine that provides an amazing work experience to the customers. Bharat Benz
                1923C Tipper price is too pocket friendly that every customer can easily buy according to their
                requirements.&nbsp;</p>
            <p>Bharat Benz 1923C comes with Pneumatic foot operated dual line brakes brakes with parking brakes. Its
                steering type is Yes steering and Manual Transmission.</p>
            <p><strong>Bharat Benz 1923C Price in India</strong></p>
            <p>Bharat Benz 1923C price is Rs. 30.87 Lakh* which is fixed appropriately according to the customers. You
                can easily buy 1923C with the help of Truck Junction.</p>
        </div>
      
      
             <div class="sectionHeading">
                <h2>Related Brands</h2>
              </div>
              <div class="brandsBlock text-center tj-row">
                <div class="brandsBlock-single tj-col">
                    <a href="#">
                        <div class="brandsBlock-inner m-b-16 sectionShadow">
                            <amp-img width="175" height="85" src="assets/images/brands/ashok-leyland.png"  alt="" ></amp-img>
                            <p>Ashok Leyland</p>
                        </div>
                    </a>
                </div>
                <div class="brandsBlock-single tj-col">
                    <a href="#">
                        <div class="brandsBlock-inner m-b-16 sectionShadow">
                            <amp-img width="175" height="85" src="assets/images/brands/bharat-benz.png"  alt="" ></amp-img>
                            <p>Bharat Benz</p>
                        </div>
                    </a>
                </div>
                <div class="brandsBlock-single tj-col">
                    <a href="#">
                        <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <amp-img width="175" height="85" src="assets/images/brands/bharat-benz.png"  alt="" ></amp-img>
                            <p>Bharat Benz</p>
                        </div>
                    </a>
                </div>
                <div class="brandsBlock-single tj-col">
                    <a href="#">
                        <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <amp-img width="175" height="85" src="assets/images/brands/ashok-leyland.png"  alt="" ></amp-img>
                            <p>Ashok Leyland</p>
                        </div>
                    </a>
                </div>
             </div>
           
   
</section>

<section class="sectionpadding25 sectionShadow">
    <div class="container-mid">

        <div class="sectionHeading">
            <h2>BharatBenz 1923C Specs &amp; Features</h2>
        </div>
        <div class="tab-block">
            <amp-selector class="tabs-with-selector" role="tablist"
                on="select:specstabs.toggle(index=event.targetOption, value=true)" keyboard-select-mode="focus">
                <div id="specstabs-performance" role="tab" aria-controls="specstabs-performancecontent" option="0"
                    selected>
                    Performance</div>
                <div id="specstabs-dimension" role="tab" aria-controls="specstabs-dimensioncontent" option="1">
                    Dimensions
                </div>
            </amp-selector>
            <amp-selector id="specstabs" class="tabpanels mt-3 mb-3">

                <div id="specstabs-performancecontent" role="tabpanel" aria-labelledby="specstabs-performance" option
                    selected>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Engine</td>
                                <td>OM926</td>
                            </tr>
                            <tr>
                                <td>Engine Norm</td>
                                <td>BS-VI</td>
                            </tr>
                            <tr>
                                <td>Power</td>
                                <td>241 HP</td>
                            </tr>
                            <tr>
                                <td>Engine Cylinders</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td>Max Torque</td>
                                <td>850 NM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="specstabs-dimensioncontent" role="tabpanel" aria-labelledby="specstabs-dimension" option>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td>Length</td>
                                <td>6185 MM</td>
                            </tr>
                            <tr>
                                <td>Width</td>
                                <td>2490 MM</td>
                            </tr>
                            <tr>
                                <td>Height</td>
                                <td>2960 MM</td>
                            </tr>
                            <tr>
                                <td>Wheelbase</td>
                                <td>3600 MM</td>
                            </tr>
                            <tr>
                                <td>Ground Clearance</td>
                                <td>265 MM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </amp-selector>
        </div>

        <div class="download-brochure d-flex align-items-center sectionShadow mt-4">
            <amp-img width="70" height="70" layout="fixed" src="assets/images/brochure.png" class="download-brochure-icon img-fluid"></amp-img>
            <div class="download-brochure-inner">
                <h3>Ashok Leyland Ecomet 1615 HE</h3>
                <p class="mb-0">Download the Ashok Leyland Ecomet 1615 HE brochure for free. So, click fast to get features and specifications of Ecomet 1615 HE. </p>
            </div>
            <a href="#" class="text-center download-brochure-btn d-inline-block text-white boldfont oneline">Download Brochure</a>
        </div>

        <div class="sectionHeading mt-4">
            <h2>BharatBenz 1923C Variants</h2>
        </div>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td><strong>Variants</strong></td>
                    <td><strong>GVW</strong></td>
                    <td><strong>Price</strong></td>
                </tr>
                <tr>
                    <td>
                        <a href="https://trucks.tractorjunction.com/en/bharat-benz-truck/1923c-3600b"
                            title="BharatBenz 1923C 3600/CBC" class="linkclr">BharatBenz 1923C 3600/CBC</a>
                    </td>
                    <td>18500</td>
                    <td>₹ 30.87 - 30.88 Lakh</td>
                </tr>
            </tbody>
        </table>

        <div class="sectionHeading mt-4">
            <h2>Ashok Leyland 1920 Reviews</h2>
        </div>
        <div class="reviewBlock-main tj-row">

            <div class="reviewBlockMain tj-col">
                <div class="reviewBlock-inner">
                    <div class="reviewBlock-top d-flex flex-row align-items-center mb-3">
                        <div class="reviewBlock-topLeft mr-3">
                            <amp-img layout="fixed" width="55" height="55" src="assets/images/icons/profile.svg"
                                alt="user"></amp-img>
                        </div>
                        <div class="reviewBlock-topRight">
                            <div class="reviewBlock-rating">
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                            </div>
                            <p class="boldfont review-title">Maddu sagar babu</p>
                        </div>
                    </div>
                    <p class="review-content">Poor mileage and maintenance cost high. Safety is good. Comfort is also
                        good. Love the design and entertainment system.</p>
                    <p class="review-date mt-2 boldfont">Review on: 05 Jun 2020</p>
                </div>
            </div>

            <div class="reviewBlockMain tj-col">
                <div class="reviewBlock-inner">
                    <div class="reviewBlock-top d-flex flex-row align-items-center mb-3">
                        <div class="reviewBlock-topLeft mr-3">
                            <amp-img layout="fixed" width="55" height="55" src="assets/images/icons/profile.svg"
                                alt="user"></amp-img>
                        </div>
                        <div class="reviewBlock-topRight">
                            <div class="reviewBlock-rating">
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                            </div>
                            <p class="boldfont review-title">Maddu sagar babu</p>
                        </div>
                    </div>
                    <p class="review-content">Poor mileage and maintenance cost high. Safety is good. Comfort is also
                        good. Love the design and entertainment system.</p>
                    <p class="review-date mt-2 boldfont">Review on: 05 Jun 2020</p>
                </div>
            </div>

            <div class="reviewBlockMain tj-col">
                <div class="reviewBlock-inner">
                    <div class="reviewBlock-top d-flex flex-row align-items-center mb-3">
                        <div class="reviewBlock-topLeft mr-3">
                            <amp-img layout="fixed" width="55" height="55" src="assets/images/icons/profile.svg"
                                alt="user"></amp-img>
                        </div>
                        <div class="reviewBlock-topRight">
                            <div class="reviewBlock-rating">
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                            </div>
                            <p class="boldfont review-title">Maddu sagar babu</p>
                        </div>
                    </div>
                    <p class="review-content">Poor mileage and maintenance cost high. Safety is good. Comfort is also
                        good. Love the design and entertainment system.</p>
                    <p class="review-date mt-2 boldfont">Review on: 05 Jun 2020</p>
                </div>
            </div>

            <div class="reviewBlockMain tj-col">
                <div class="reviewBlock-inner">
                    <div class="reviewBlock-top d-flex flex-row align-items-center mb-3">
                        <div class="reviewBlock-topLeft mr-3">
                            <amp-img layout="fixed" width="55" height="55" src="assets/images/icons/profile.svg"
                                alt="user"></amp-img>
                        </div>
                        <div class="reviewBlock-topRight">
                            <div class="reviewBlock-rating">
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                            </div>
                            <p class="boldfont review-title">Maddu sagar babu</p>
                        </div>
                    </div>
                    <p class="review-content">Poor mileage and maintenance cost high. Safety is good. Comfort is also
                        good. Love the design and entertainment system.</p>
                    <p class="review-date mt-2 boldfont">Review on: 05 Jun 2020</p>
                </div>
            </div>

            <div class="reviewBlockMain tj-col">
                <div class="reviewBlock-inner">
                    <div class="reviewBlock-top d-flex flex-row align-items-center mb-3">
                        <div class="reviewBlock-topLeft mr-3">
                            <amp-img layout="fixed" width="55" height="55" src="assets/images/icons/profile.svg"
                                alt="user"></amp-img>
                        </div>
                        <div class="reviewBlock-topRight">
                            <div class="reviewBlock-rating">
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                            </div>
                            <p class="boldfont review-title">Maddu sagar babu</p>
                        </div>
                    </div>
                    <p class="review-content">Poor mileage and maintenance cost high. Safety is good. Comfort is also
                        good. Love the design and entertainment system.</p>
                    <p class="review-date mt-2 boldfont">Review on: 05 Jun 2020</p>
                </div>
            </div>

            <div class="reviewBlockMain tj-col">
                <div class="reviewBlock-inner">
                    <div class="reviewBlock-top d-flex flex-row align-items-center mb-3">
                        <div class="reviewBlock-topLeft mr-3">
                            <amp-img layout="fixed" width="55" height="55" src="assets/images/icons/profile.svg"
                                alt="user"></amp-img>
                        </div>
                        <div class="reviewBlock-topRight">
                            <div class="reviewBlock-rating">
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                                <span>&#9733;</span>
                            </div>
                            <p class="boldfont review-title">Maddu sagar babu</p>
                        </div>
                    </div>
                    <p class="review-content">Poor mileage and maintenance cost high. Safety is good. Comfort is also
                        good. Love the design and entertainment system.</p>
                    <p class="review-date mt-2 boldfont">Review on: 05 Jun 2020</p>
                </div>
            </div>

        </div>
        <div class="viewall mt-3">
            <a href="#" class="boldfont" title="">View All Reviews <amp-img layout="fixed" width="12" height="12"
                    src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
        </div>


    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Similar New Trucks</h2>
        </div>
        <div class="newTruckBlock tj-row">
            <div class="newTruckBlock-main tj-col">
                <div class="newTruckBlock-inner sectionShadow m-b-16">
                    <a href="https://trucks.tractorjunction.com/en/volvo-truck/fm-370" title="Volvo FM 370">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck1.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="https://trucks.tractorjunction.com/en/volvo-truck/fm-370" title="Volvo FM 370">
                            <p class="newTruckBlock-title boldfont">Volvo FM 370</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="https://trucks.tractorjunction.com/en/volvo-truck/fm-370"
                            class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                </div>
            </div>
            <div class="newTruckBlock-main tj-col">
                <div class="newTruckBlock-inner sectionShadow m-b-16">
                    <a href="https://trucks.tractorjunction.com/en/man-truck/cla-31300-evo-8x4"
                        title="Man CLA 31.300 EVO 8X4">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck2.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="https://trucks.tractorjunction.com/en/man-truck/cla-31300-evo-8x4"
                            title="Man CLA 31.300 EVO 8X4">
                            <p class="newTruckBlock-title boldfont">Man CLA 31.300 EVO 8X4</p>
                        </a>
                        <p class="newTruckBlock-price">₹ 39 Lakh - ₹ 39.52 Lakh</p>
                        <a href="https://trucks.tractorjunction.com/en/man-truck/cla-31300-evo-8x4"
                            class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                </div>
            </div>
            <div class="newTruckBlock-main tj-col">
                <div class="newTruckBlock-inner sectionShadow m-b-16">
                    <a href="https://trucks.tractorjunction.com/en/tata-truck/signa-2823ktk-6s-std"
                        title="Tata Signa 2823.K/.TK 6S STD">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck3.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="https://trucks.tractorjunction.com/en/tata-truck/signa-2823ktk-6s-std"
                            title="Tata Signa 2823.K/.TK 6S STD">
                            <p class="newTruckBlock-title boldfont">Tata Signa 2823.K/.TK 6S STD</p>
                        </a>
                        <p class="newTruckBlock-price">₹ 42.57 Lakh - ₹ 42.67 Lakh</p>
                        <a href="https://trucks.tractorjunction.com/en/tata-truck/signa-2823ktk-6s-std"
                            class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                </div>
            </div>
            <div class="newTruckBlock-main tj-col">
                <div class="newTruckBlock-inner sectionShadow m-b-16">
                    <a href="https://trucks.tractorjunction.com/en/amw-truck/3118-tp" title="Amw 3118 TP">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck4.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="https://trucks.tractorjunction.com/en/amw-truck/3118-tp" title="Amw 3118 TP">
                            <p class="newTruckBlock-title boldfont">Amw 3118 TP</p>
                        </a>
                        <p class="newTruckBlock-price">Price Not Available</p>
                        <a href="https://trucks.tractorjunction.com/en/amw-truck/3118-tp"
                            class="borderBtn newTruckBlock-btn" title="View Details">View Details</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="viewall mt-3">
            <a href="#" class="boldfont" title="">View All New Trucks <amp-img layout="fixed" width="12" height="12"
                    src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
        </div>
    </div>
</section>

<section class="sectionpadding25 greybg">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Truck Comparison</h2>
        </div>
        <div class="compareBlock tj-row">

            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck1.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right text-right">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck2.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Ashok Leyland Ecomet 1615 HE vs
                            BharatBenz 1617R</a>
                    </div>
                </div>
            </div>

            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck3.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right text-right">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck4.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Ashok Leyland Ecomet 1615 HE vs
                            BharatBenz 1617R</a>
                    </div>
                </div>
            </div>

            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck5.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right text-right">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck6.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Ashok Leyland Ecomet 1615 HE vs
                            BharatBenz 1617R</a>
                    </div>
                </div>
            </div>

            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck1.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right text-right">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck2.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Ashok Leyland Ecomet 1615 HE vs
                            BharatBenz 1617R</a>
                    </div>
                </div>
            </div>

            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck3.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right text-right">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck4.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Ashok Leyland Ecomet 1615 HE vs
                            BharatBenz 1617R</a>
                    </div>
                </div>
            </div>

            <div class="compareBlock-main tj-col">
                <div class="compareBlock-inner sectionShadow">
                    <a href="#">
                        <div class="compareBlock-img">
                            <div class="compareBlock-left">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck5.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                            <div class="compareBlock-middle"></div>
                            <div class="compareBlock-right text-right">
                                <amp-img layout="responsive" width="240" height="140" src="assets/images/truck6.jpg"
                                    class="comparisonImg img-fluid" alt=""></amp-img>
                                <p>₹ 22.93 - ₹ 25.30 Lakh</p>
                            </div>
                        </div>
                    </a>
                    <div class="compareBlock-content">
                        <a class="borderBtn compareBlock-btn text-center" href="#">Ashok Leyland Ecomet 1615 HE vs
                            BharatBenz 1617R</a>
                    </div>
                </div>
            </div>

        </div>
        <div class="viewall mt-3">
            <a href="https://trucks.tractorjunction.com/en/compare" class="boldfont"
                title="View All Truck Comparison">View All Truck Comparison <amp-img layout="fixed" width="12"
                    height="12" src="assets/images/icons/linkarrow.svg" alt="View All Truck Comparison"></amp-img></a>
        </div>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading text-center">
            <h2>Frequently Asked Questions on BharatBenz 1923C Tipper</h2>
        </div>
        <div class="accordion-block mt-3">
            <amp-accordion id="myAccordion">
                <section class="accordion-inner sectionShadow white-bg" id="section2"
                    on="collapse:myAccordion.collapse(section='section1')">
                    <h2 class="white-bg accordion-header">Que. What is the HP range of Mahindra Tractors?</h2>
                    <div class="accordion-content b-t-1">
                        <h4>Ans. Mahindra offers models ranging from 15-75 HP.</h4>
                    </div>
                </section>
                <section class="accordion-inner sectionShadow white-bg">
                    <h2 class="white-bg accordion-header">Que. What is the HP range of Mahindra Tractors?</h2>
                    <div class="accordion-content b-t-1">
                        <h4>Ans. Mahindra offers models ranging from 15-75 HP.</h4>
                    </div>
                </section>
            </amp-accordion>
        </div>
    </div>
</section>

<section class="greybg sectionpadding20">
    <div class="container-mid">
        <div class="sectionHeading">
            <h4>Disclaimer</h4>
        </div>
        <p>The Information about the BharatBenz 1923C Trucks in India is as on the date shared by BharatBenz. For the
            current features and variants, the customers need to visit the nearest BharatBenz dealer. BharatBenz 1923C
            price shown above is Ex. Showroom price. For exact BharatBenz 1923C Truck price kindly send a request our
            assistance team help you out.</p>
    </div>
</section>

<section class="sectionpadding25">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Explore More Options</h2>
        </div>
        <div class="newTruckBlock tj-row">
            <div class="newTruckBlock-main tj-col">
                <div class="newTruckBlock-inner sectionShadow m-b-16">
                    <a href="https://trucks.tractorjunction.com/en/volvo-truck/fm-370" title="HCV Vehicles">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck1.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="https://trucks.tractorjunction.com/en/volvo-truck/fm-370" title="HCV Vehicles">
                            <p class="newTruckBlock-title boldfont">HCV Vehicles</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="newTruckBlock-main tj-col">
                <div class="newTruckBlock-inner sectionShadow m-b-16">
                    <a href="https://trucks.tractorjunction.com/en/man-truck/cla-31300-evo-8x4"
                        title="ICV Vehicles">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck2.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="https://trucks.tractorjunction.com/en/man-truck/cla-31300-evo-8x4"
                            title="ICV Vehicles">
                            <p class="newTruckBlock-title boldfont">ICV Vehicles</p>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="newTruckBlock-main tj-col">
                <div class="newTruckBlock-inner sectionShadow m-b-16">
                    <a href="https://trucks.tractorjunction.com/en/tata-truck/signa-2823ktk-6s-std"
                        title="BS6 Vehicles">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck3.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="https://trucks.tractorjunction.com/en/tata-truck/signa-2823ktk-6s-std"
                            title="BS6 Vehicles">
                            <p class="newTruckBlock-title boldfont">BS6 Vehicles</p>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="newTruckBlock-main tj-col">
                <div class="newTruckBlock-inner sectionShadow m-b-16">
                    <a href="https://trucks.tractorjunction.com/en/amw-truck/3118-tp" title="SCV Vehicles">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck4.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="https://trucks.tractorjunction.com/en/amw-truck/3118-tp" title="SCV Vehicles">
                            <p class="newTruckBlock-title boldfont">SCV Vehicles</p>
                        </a>
                        
                    </div>
                </div>
            </div>
            <div class="newTruckBlock-main tj-col">
                <div class="newTruckBlock-inner sectionShadow m-b-16">
                    <a href="https://trucks.tractorjunction.com/en/volvo-truck/fm-370" title="LCV Vehicles">
                        <div class="newTruckBlock-img">
                            <amp-img width="320" height="187" layout="responsive" src="assets/images/truck1.jpg"
                                class="img-fluid" alt="Amw 3118 TP"></amp-img>
                        </div>
                    </a>
                    <div class="newTruckBlock-content text-center">
                        <a href="https://trucks.tractorjunction.com/en/volvo-truck/fm-370" title="LCV Vehicles">
                            <p class="newTruckBlock-title boldfont">LCV Vehicles</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="viewall mt-3">
            <a href="#" class="boldfont" title="">Explore More Trucks <amp-img layout="fixed" width="12" height="12"
                    src="assets/images/icons/linkarrow.svg" alt=""></amp-img></a>
        </div>
    </div>
</section>

<?php 
    include('layouts/footer.php');
?>