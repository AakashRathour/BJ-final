<?php
$title = "Loan";
include('layouts/header.php');
?>

<section class="pageInfo-breadcrumbs">
    <div class="container-mid">
        <ul class="mb-0">
            <li><a href="#">Home</a></li>
            <li><span>Check For Loan</span></li>
        </ul>
    </div>
</section>

<section class="sectionpadding10 inner-banner-sec">
    <div class="container-mid">
        <div class="innerbanner-wrp">
            <div class="cta-image">
                <img src="assets/images/icons/lower-banner.jpg" alt="cta-image">
            </div>
        </div>
    </div>
</section> 

<section class="start-compare-bike">
    <div class="container-mid">
        <div class="compare-bike-Content pb-3">  
            <div class="sectionHeading">
                <h1>Apply for Loan</h1>
            </div>
            <p>If you're wondering, what are the best mileage Bikes in India, Bikedekho is the right place for you. We have a list of 
                4 Bikes with top speed with their expected price, specs, reviews and latest news. Some of the most popular models with
                best mileage are TVS XL100,<span id="dots"></span><span id="more">TVS Radeon,Yamaha RayZR 125. The top brands that manufacture bikes with best mileage are TVS,
                Yamaha.</span> <a onclick="myFunction()" id="myBtn">Read More</a>
            </p>
        </div>
    </div>
</section>

<section class="find-dealer-sec mb-5">
    <div class="container-mid">
        <div class="pageBanner-content pageBanner-filter">
            <h2>Check For Loan</h2>
            <form class="pageBanner-filterForm">
                <div class="row no-margin find-dealer-main">
                    <div class="row find-dealer-inner col-sm-12 col-md-12 col-lg-12 col-xl-6">
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group mb-4">
                                <input type="text" class="form-control" placeholder="Name" id="exampleInputName">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group mb-4">
                            <input type="number" class="form-control" placeholder="Phone Number" id="exampleInputName">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="form-group mb-4">
                                <select class="form-control" id="exampleFormControlSelect2">
                                    <option>City</option>
                                    <option>City 2</option>
                                    <option>City 3</option>
                                    <option>City 4</option>
                                    <option>City 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="row dealer-btn-sec">
                                <div class="col-12 col-sm-6 col-md-6 mt-3">
                                    <a  href="javascript:void(0);"
                                        class="fillBtn text-center w-100">View Loan Offers</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read More"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read Less"; 
    moreText.style.display = "inline";
  }
}
</script>


<?php include('layouts/footer.php'); ?>