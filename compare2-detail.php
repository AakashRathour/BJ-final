<?php
  $title = "Compare";
  include('layouts/header.php'); 
  ?>
<section class="pageInfo-breadcrumbs">
  <div class="container-mid">
    <ul class="mb-0">
      <li><a href="#">Home</a></li>
      <li><span>Compare Bike</span></li>
    </ul>
  </div>
</section>
<section class="start-compare-bike">
  <div class="container-mid">
    <div class="compare-bike-Content">
      <div class="sectionHeading">
        <h2>Compare Bikes</h2>
        <div class="hide-compare desk">
          <label class="el-switch el-switch-green">
            <input type="checkbox" name="switch">
            <span class="el-switch-style"></span>
          </label>
          <span class="margin-l">Hide Common Features</span>
        </div>

      </div>
      <p>If you're wondering, what are the best mileage Bikes in India, Bikedekho is the right place for you. We have a list of 
        4 Bikes with top speed with their expected price, specs, reviews and latest news. Some of the most popular models with
        best mileage are TVS XL100,<span id="dots"></span><span id="more">TVS Radeon,Yamaha RayZR 125. The top brands that manufacture bikes with best mileage are TVS,
        Yamaha.</span> <a onclick="myFunction()" id="myBtn">Read More</a>
      </p>
    </div>
    <div class="carCompare-row">
      <div class="carCompare-main carCompare-main-plus">

        <div class="carCompare-inner">
          <div class="seprate-compare">
            <div class="close-compare">
              <img src="assets/images/icons/close-compare.png" width="14" height="14" class="img-fluid">
            </div>
            <div class="carCompare-inner-in">   
              <div class="carCompare-image">
                <img src="assets/images/hero-bike1.png" data-src="assets/images/hero-bike1.png" height="174" width="341" class="img-fluid" alt="">
              </div>
              <div class="carCompare-content-detail">
                <p class="compre-brand-name"><a href="javascript:void(0);">Hero</a></p>
                <p class="compre-brand-subtitle">Splendor Plus</p>
                <p class="compre-varient"><a href="javascript:void(0);">Variant One</a></p>
                <p class="compre-price">₹70,258 - 74,528*</p>
              </div>
            </div>
            <a href="javascript:void(0);" class="btn-road-price borderBtn newTruckBlock-btn text-center">Get On-Road Price</a>
          </div>

          <div class="common-compare" style="display:none;">
              <div class="carCompare-inner-in">
              <div class="carCompare-icon">
                <img src="assets/images/select-bike.png" data-src="assets/images/select-bike.png" height="144" width="200" class="img-fluid" alt="">
              </div>
              <div class="carCompare-icon-title">
                <p><a href="javascript:void(0);">Select Bike</a></p>
              </div>
            </div>
              <a href="javascript:void(0);" class="bike-select" data-toggle="modal" data-target="#exampleModalCenter2"
                id="#modalCenter2"></a>
          </div>

        </div>
      
        <div class="carCompare-inner">
          <div class="seprate-compare">
            <div class="close-compare">
              <img src="assets/images/icons/close-compare.png" width="14" height="14" class="img-fluid">
            </div>
            <div class="carCompare-inner-in">   
              <div class="carCompare-image">
                <img src="assets/images/hero-bike1.png" data-src="assets/images/hero-bike1.png" height="174" width="341" class="img-fluid" alt="">
              </div>
              <div class="carCompare-content-detail">
                <p class="compre-brand-name"><a href="javascript:void(0);">Hero</a></p>
                <p class="compre-brand-subtitle">Splendor Plus</p>
                <p class="compre-varient"><a href="javascript:void(0);">Variant One</a></p>
                <p class="compre-price">₹70,258 - 74,528*</p>
              </div>
            </div>
            <a href="javascript:void(0);" class="btn-road-price borderBtn newTruckBlock-btn text-center">Get On-Road Price</a>
          </div>

          <div class="common-compare" style="display:none;">
              <div class="carCompare-inner-in">
              <div class="carCompare-icon">
                <img src="assets/images/select-bike.png" data-src="assets/images/select-bike.png" height="144" width="200" class="img-fluid" alt="">
              </div>
              <div class="carCompare-icon-title">
                <p><a href="javascript:void(0);">Select Bike</a></p>
              </div>
            </div>
              <a href="javascript:void(0);" class="bike-select" data-toggle="modal" data-target="#exampleModalCenter2"
                id="#modalCenter2"></a>
          </div>

        </div>

        <div class="carCompare-inner">
        <div class="carCompare-inner-in">
          <div class="carCompare-icon">
            <img src="assets/images/select-bike.png" data-src="assets/images/select-bike.png" height="144" width="200" class="img-fluid" alt="">
          </div>
          <div class="carCompare-icon-title">
            <p><a href="javascript:void(0);">Select Bike</a></p>
          </div>
        </div>
          <a href="javascript:void(0);" class="bike-select" data-toggle="modal" data-target="#exampleModalCenter1"
            id="#modalCenter1"></a>
        </div>
        <div class="carCompare-inner">
        <div class="carCompare-inner-in">
          <div class="carCompare-icon">
            <img src="assets/images/select-bike.png" data-src="assets/images/select-bike.png" height="144" width="200" class="img-fluid" alt="">
          </div>
          <div class="carCompare-icon-title">
            <p><a href="javascript:void(0);">Select Bike</a></p>
          </div>
        </div>
          <a href="javascript:void(0);" class="bike-select" data-toggle="modal" data-target="#exampleModalCenter2"
            id="#modalCenter2"></a>
        </div>

      </div>
    </div>
  </div>
</section>

<section>
<div class="container-mid">
<div class="hide-compare mob">
  <span class="margin-l">Hide Common Features</span>
  <label class="el-switch el-switch-green">
    <input type="checkbox" name="switch">
    <span class="el-switch-style"></span>
  </label>
</div>
</div>
</section>

<section>
<div class="container-mid">   
  <div class="acc-container">   
                    
  <!-- 1st Accordion -->
    
  <div class="acc pb-4">
      <div class="acc-head">
          <h3>Key 1</h3>
      </div>
      <div class="table-block table-block-features acc-content">
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <a href="#" class="seeMore">Show More</a>  
      </div>  
  </div>
  
  <!-- 2nd Accordion -->

  <div class="acc pb-4">
      <div class="acc-head">
          <h3>Key 2</h3>
      </div>
      <div class="table-block table-block-features acc-content">

        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>

        <a href="#" class="seeMore">Show More</a>
      </div>   
  </div>

  <!-- 3rd Accordion -->
    
  <div class="acc pb-4">
      <div class="acc-head">
          <h3>Key 3</h3>
      </div>
      <div class="table-block table-block-features acc-content">

        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>

        <a href="#" class="seeMore">Show More</a>
      </div>   
  </div>
 
  <!-- 4th Accordion -->
    
  <div class="acc pb-4">
      <div class="acc-head">
          <h3>Key 4</h3>
      </div>
      <div class="table-block table-block-features acc-content">
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <div class="propName-content">
         <p>propName</p>
         <div class="propName-wrap">
            <div class="propName-inner">
                <h6>valOfProd1</h6>
            </div>
            <div class="propName-inner">
                <h6>valOfProd2</h6>
            </div>
         </div>
        </div>
        <a href="#" class="seeMore">Show More</a>
      </div>        
  </div>

  <!-- image add -->

  <div class="compare-bike-pormotion">
    <div class="compare-emi">
      <p>View exciting loan offers !!</p>
      <div class="compare-emi-btn">
        <a href="javascript:void(0);">Calculate your EMI</a>
      </div>
    </div>

  </div>

  </div>

  <div class="acc-container">   
                    
                    <!-- 1st Accordion -->
                      
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 1</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <a href="#" class="seeMore">Show More</a>  
                        </div>  
                    </div>
                    
                    <!-- 2nd Accordion -->
                  
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 2</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                  
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                  
                          <a href="#" class="seeMore">Show More</a>
                        </div>   
                    </div>
                  
                    <!-- 3rd Accordion -->
                      
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 3</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                  
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                  
                          <a href="#" class="seeMore">Show More</a>
                        </div>   
                    </div>
                   
                    <!-- 4th Accordion -->
                      
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 4</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <a href="#" class="seeMore">Show More</a>
                        </div>        
                    </div>
                    
                    <!-- full Image -->
                    <div class="compare-bike-pormotion">
                      
                    </div>
                  
                    </div>

                    <!-- 3rd step -->
                    <div class="acc-container">   
                    
                    <!-- 1st Accordion -->
                      
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 1</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <a href="#" class="seeMore">Show More</a>  
                        </div>  
                    </div>
                    
                    <!-- 2nd Accordion -->
                  
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 2</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                  
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                  
                          <a href="#" class="seeMore">Show More</a>
                        </div>   
                    </div>
                  
                    <!-- 3rd Accordion -->
                      
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 3</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                  
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                  
                          <a href="#" class="seeMore">Show More</a>
                        </div>   
                    </div>
                   
                    <!-- 4th Accordion -->
                      
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 4</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <a href="#" class="seeMore">Show More</a>
                        </div>        
                    </div>
                    
                    <!-- full Image -->
                    <div class="compare-bike-pormotion">
                      
                    </div>
                  
                    </div>

                    <!-- 4th steps -->
                    <div class="acc-container">   
                    
                    <!-- 1st Accordion -->
                      
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 1</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <a href="#" class="seeMore">Show More</a>  
                        </div>  
                    </div>
                    
                    <!-- 2nd Accordion -->
                  
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 2</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                  
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                  
                          <a href="#" class="seeMore">Show More</a>
                        </div>   
                    </div>
                  
                    <!-- 3rd Accordion -->
                      
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 3</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                  
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                  
                          <a href="#" class="seeMore">Show More</a>
                        </div>   
                    </div>
                   
                    <!-- 4th Accordion -->
                      
                    <div class="acc pb-4">
                        <div class="acc-head">
                            <h3>Key 4</h3>
                        </div>
                        <div class="table-block table-block-features acc-content">
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <div class="propName-content">
                           <p>propName</p>
                           <div class="propName-wrap">
                              <div class="propName-inner">
                                  <h6>valOfProd1</h6>
                              </div>
                              <div class="propName-inner">
                                  <h6>valOfProd2</h6>
                              </div>
                           </div>
                          </div>
                          <a href="#" class="seeMore">Show More</a>
                        </div>        
                    </div>
                    
                    <!-- full Image -->
                    <div class="compare-bike-pormotion">
                      
                    </div>
                  
                    </div>

</div>
</section>

<section class="sectionpadding25 ">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Comparison</h2>
        </div>
        <div class="compareBlock tj-row">

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
    </div>
</section>


<!-- Modal Popup Brand Center -->
<div class="modal fade bikemodel" id="exampleModalCenter" tabindex="-1" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="brand-header pb-3">
        <h3>Select Brand</h3>
      </div>
      <div class="accordionBlock-body">
        <label class="checkbox-custom">Splendor Pro
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Active
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Pleasure
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Glamore
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Karizma ZMR
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Pulsar
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">FZ 100
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Xpulse 200
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Maestro Edge
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Destini Pro
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Glamore
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Pulsar
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Xpulse 200
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Maestro Edge
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">FZ 100
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
</div>
<!-- Modal Popup Model Center -->
<div class="modal fade bikemodel" id="exampleModalCenter1" tabindex="-2" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="brand-header pb-3">
        <h3><span><img src="assets/images/icons/Left-arrow-1.png" width="17" height="14" class="img-fluid" alt=""></span>
          Select Model
        </h3>
      </div>
      <div class="accordionBlock-body">
        <label class="checkbox-custom">Splendor Pro
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Active
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Pleasure
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Glamore
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Karizma ZMR
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Pulsar
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">FZ 100
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Xpulse 200
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Maestro Edge
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Destini Pro
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Glamore
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Pulsar
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Xpulse 200
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Maestro Edge
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">FZ 100
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
</div>
<!-- Modal Popup Variant Center -->
<div class="modal fade bikemodel" id="exampleModalCenter2" tabindex="-3" role="dialog"
  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="brand-header pb-3">
        <h3><span><img src="assets/images/icons/Left-arrow-1.png" width="17" height="14" class="img-fluid" alt=""></span> Select Variant</h3>
      </div>
      <div class="accordionBlock-body">
        <label class="checkbox-custom">Splendor Pro
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Active
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Pleasure
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Glamore
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Karizma ZMR
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Pulsar
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">FZ 100
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Xpulse 200
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Maestro Edge
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Destini Pro
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Glamore
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Pulsar
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Xpulse 200
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">Maestro Edge
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
        <label class="checkbox-custom">FZ 100
        <input type="checkbox">
        <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
</div>
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
<!-- <script>
 $(function () {
  $('.acc-container .acc:nth-child(1) .acc-head').addClass('active');
  $('.acc-container .acc:nth-child(1) .acc-content').slideDown();
  $('.acc-head').on('click', function() {
        if($(this).hasClass('active')) {
          $(this).siblings('.acc-content').slideUp();
          $(this).removeClass('active');
        }
        else {
          $('.acc-content').slideUp();
          $('.acc-head').removeClass('active');
          $(this).siblings('.acc-content').slideToggle();
          $(this).toggleClass('active');
        }
    });  
});
</script> -->
<script>
  
$(document).ready(function(){
  $(".seeMore").on("click", function(e){
    e.preventDefault();
    $(this).closest('.acc-content').find(".propName-content:hidden").slice(0, 4).slideDown();
    if($(this).closest('.acc-content').find(".propName-content:hidden").length == 0) {
      $(this).text("No Content").addClass("noContent");
    }
  });
  $('.close-compare').click(function(){
    $(this).closest('.carCompare-inner').find('.seprate-compare').hide();
    $(this).closest('.carCompare-inner').find('.common-compare').show();
  });
})
</script>
