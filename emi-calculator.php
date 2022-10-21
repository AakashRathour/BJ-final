<?php
  $title = "Compare";
  include('layouts/header.php'); 
  ?>
<section class="pageInfo-breadcrumbs d-none d-sm-none d-md-block d-lg-block">
  <div class="container-mid">
    <ul class="mb-0">
      <li><a href="#">Home</a></li>
      <li><span>Compare Bike</span></li>
    </ul>
  </div>
</section>
<div class="container-mid">
  <div class="sectionHeading d-block d-sm-block d-md-none d-lg-none mobHeading mt-3 mb-3">
    <h2>EMI Calculator</h2>
  </div>
</div>

<section class="acc-container emi-pad">
<div class="container-mid">
  <div class="compare-bike-pormotion">

  </div>
</div>
</section>

<section class=" d-block d-sm-block d-md-none d-lg-none mob-banner mt-3 mb-4">
  <div class="container-mid">
    <img src="assets/images/emi-calculate.png" class="img-fluid">
  </div>
</section>


<section class="emi-calculator">
  <div class="container-mid">
    <div class="compare-bike-Content">
      <div class="sectionHeading d-none d-sm-none d-md-block d-lg-block">
        <h2>EMI Calculator</h2>
      </div>
      <p>If you're wondering, what are the best mileage Bikes in India, Bikedekho is the right place for you. We have a list of 
        4 Bikes with top speed with their expected price, specs, reviews and latest news. Some of the most popular models with best 
        mileage are TVS XL100,TVS Radeon,Yamaha RayZR 125. <span id="dots"></span><span id="more">The top brands that manufacture bikes with best mileage are TVS, 
        Yamaha.</span> <a onclick="myFunction()" id="myBtn">Read More</a>
      </p>
    </div>
  </div>
</section>

<section class="calculate-emi">
  <div class="container-mid">
    <div class="calculate-emi-Content">
      <div class="sectionHeading">
        <h2>Calculate EMI</h2>
      </div>
      <form>
        <div class="calculate-row no-margin">
            <div class="calculate-emi-select">
                <div class="form-group mb-0">
                    <select class="form-control" id="exampleFormControlSelect2">
                        <option>Select Brand</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="calculate-emi-select">
                <div class="form-group mb-0">
                    <select class="form-control" id="exampleFormControlSelect2">
                        <option>Select Model</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
            <div class="calculate-emi-select">
                <div class="form-group mb-0">
                    <select class="form-control" id="exampleFormControlSelect2">
                        <option>Select Variant</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
            </div>
        </div>
            
        <div class="calculate-row no-margin">
          <div class="calculate-emi-price">
            <div class="calculate-emi-label">
              <h6>On-Road Price</h6> 
              <p>₹ 0</p>
            </div>
            <div class="calculate-emi-label">
              <h6>Total Loan Amount</h6> 
              <p>₹ 0</p>
            </div>
          </div>
          <div class="calculate-emi-price">
            <div class="calculate-emi-label">
              <h6>Payable Amount</h6> 
              <p>₹ 0</p>
            </div>
            <div class="calculate-emi-label">
              <h6>You’ll pay extra</h6> 
              <p>₹ 0</p>
            </div>
          </div>
        </div>

        <div class="down-payment-rate">
          <div class="range-slider-n">
            <h5>Down Payment</h5>
            <p>₹ <span id="demo"></span></p>
            <input type="range" min="0" max="100" value="0" class="slider" id="myRange">
          </div>
        </div>

        <div class="down-payment-rate">
          <div class="range-slider-n">
            <h5>Bank Interest Rate</h5>
            <p><span id="demo1"></span>%</p>
            <input type="range" min="0" max="100" value="0" class="slider1" id="myRange1">  
          </div>
        </div>

        <div class="down-payment-rate newscrool-rate d-block d-sm-block d-md-none d-lg-none">
            <h5>Loan Period (Months)</h5>
            <div class="loan-period d-flex flex-row align-items-center">
              <div class="loan-period-steps active  d-flex align-items-center justify-content-center">
                  <span>12</span>
              </div>
              <div class="loan-period-steps  d-flex align-items-center justify-content-center">
                  <span>24</span>
              </div>
              <div class="loan-period-steps  d-flex align-items-center justify-content-center">
                  <span>30</span>
              </div>
              <div class="loan-period-steps  d-flex align-items-center justify-content-center">
                  <span>36</span>
              </div>
              <div class="loan-period-steps  d-flex align-items-center justify-content-center">
                  <span>42</span>
              </div>
              <div class="loan-period-steps  d-flex align-items-center justify-content-center">
                  <span>50</span>
              </div>
              <div class="loan-period-steps  d-flex align-items-center justify-content-center">
                  <span>36</span>
              </div>
              <div class="loan-period-steps  d-flex align-items-center justify-content-center">
                  <span>42</span>
              </div>
              <div class="loan-period-steps  d-flex align-items-center justify-content-center">
                  <span>50</span>
              </div>
            </div>
          
        </div>

        <div class="road-price">
          <div class="emi-road-price">
            <h3>EMI</h3>
            <p>Per Month</p>
          </div>
          <div class="on-road-price">
            <h3>₹ 0</h3>
            <p>on On-Road Price</p>
          </div>
        </div>


        


        <div class="loanOffer-btn-row">
            
                <button type="submit" class="w-100 fillBtn">View Loan Offers</button>
            
        </div>
      </form>
    </div>
  </div>
</section>

<?php include('layouts/footer.php'); ?>
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

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
var slider1 = document.getElementById("myRange1");
var output1 = document.getElementById("demo1");
output.innerHTML = slider.value;
output1.innerHTML = slider1.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}

slider1.oninput = function() {
  output1.innerHTML = this.value;
}
</script>