<?php
  $title = "New Truck List";
  include('layouts/header.php');
  ?>
<section class="pageInfo-breadcrumbs">
  <div class="container-mid">
    <ul class="mb-0">
      <li><a href="#">Home</a></li>
      <li><span>New Truck</span></li>
    </ul>
  </div>
</section>
<section class="sectionpadding25">
  <div class="container-mid">
    <div class="row new-bike-listing-row">
      <div class="col-lg-3 bike-listing-left">
        <div class="bikestiky">
          <div class="truckFilterBlock-btns d-none d-sm-none d-md-none d-lg-block">
            <div class="row no-margin">
              <div class="col-6 p-0">
                <a href="#" class="filter-btn boldfont text-capitalize text-center">Filters</a>
              </div>
              <div class="col-6 p-0 text-right">
                <a href="#" id="cancle-filter"
                  class="clear-filter-btn text-capitalize "><span><img src="assets/images/icons/closed-btn.png" alt=""></span> Clear Filter</a>
              </div>
            </div>
          </div>
          <div class="truckFilterBlock sectionShadow">
            <div class="accordionBlock accordion" id="filterBlock">
              <div class="accordionBlock-inner truckFilterBlock-inner">
                <div class="accordionBlock-header" id="filter-headingOne">
                  <h3 data-toggle="collapse" data-target="#filter-collapseOne" aria-expanded="true"
                    aria-controls="filter-collapseOne">
                    Select Brand
                  </h3>
                </div>
                <div id="filter-collapseOne" class="collapse show" aria-labelledby="filter-headingOne">
                  <div class="accordionBlock-body">
                    <div class="brands-search-wrp">
                      <div class="search-input">
                        <div class="search-icon"><img src="assets/images/icons/search-n.png" alt="search" /></div>
                        <input type="text" placeholder="Try Hero,  Honda etc">
                      </div>
                    </div>
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
                              <img src="./assets/images/brands/Honda.png" class="img-fluid"
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
                              <img src="./assets/images/brands/Honda.png" class="img-fluid"
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
                              <img src="./assets/images/brands/Honda.png" class="img-fluid"
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
                              <img src="./assets/images/brands/TVS.png" class="img-fluid"
                                alt="">
                              <p>Hero</p>
                            </span>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="viewall mt-3">
                      <a href="#" >View All <img src="assets/images/icons/linkarrow.svg"
                        alt="" /></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordionBlock-inner truckFilterBlock-inner">
                <div class="accordionBlock-header" id="filter-headingTwo">
                  <h3 data-toggle="collapse" data-target="#filter-collapseTwo" aria-expanded="true"
                    aria-controls="filter-collapseTwo">
                    Budget 
                  </h3>
                </div>
                <div id="filter-collapseTwo" class="collapse show" aria-labelledby="filter-headingTwo">
                  <div class="accordionBlock-body">
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
              <div class="accordionBlock-inner truckFilterBlock-inner">
                <div class="accordionBlock-header" id="filter-headingThree">
                  <h3 data-toggle="collapse" data-target="#filter-collapseThree" aria-expanded="true"
                    aria-controls="filter-collapseThree">
                    Select Model
                  </h3>
                </div>
                <div id="filter-collapseThree" class="collapse show" aria-labelledby="filter-headingThree">
                  <div class="accordionBlock-body">
                    <div class="brands-search-wrp">
                      <div class="search-input">
                        <div class="search-icon"><img src="assets/images/icons/search-n.png" alt="search" /></div>
                        <input type="text" placeholder="Try Hero,  Honda etc">
                      </div>
                    </div>
                    <label class="checkbox-custom">TATA (20)
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Ashok Layland (20)
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Mahindra (20)
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Isuzu (20)
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Maruti Suzuki (20)
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Force (20)
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="accordionBlock-inner truckFilterBlock-inner">
                <div class="accordionBlock-header" id="filter-headingFour">
                  <h3 data-toggle="collapse" data-target="#filter-collapseFour" aria-expanded="true"
                    aria-controls="filter-collapseFour">
                    Fuel Type
                  </h3>
                </div>
                <div id="filter-collapseFour" class="collapse show" aria-labelledby="filter-headingFour">
                  <div class="accordionBlock-body">
                    <label class="checkbox-custom">Diesel (20)
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Petrol (20)
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="accordionBlock-inner truckFilterBlock-inner">
                <div class="accordionBlock-header" id="filter-headingFive">
                  <h3 data-toggle="collapse" data-target="#filter-collapseFive" aria-expanded="true"
                    aria-controls="filter-collapseFive">
                    Mileage
                  </h3>
                </div>
                <div id="filter-collapseFive" class="collapse show" aria-labelledby="filter-headingFive">
                  <div class="accordionBlock-body">
                    <label class="checkbox-custom">Top mileage bikes
                    <input type="checkbox" checked="checked">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">30-50 kmpl
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">50-70 kmpl
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">70-80 kmpl
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Below 30 kmpl
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="accordionBlock-inner truckFilterBlock-inner">
                <div class="accordionBlock-header" id="filter-headingOne">
                  <h3 data-toggle="collapse" data-target="#filter-collapseOne" aria-expanded="true"
                    aria-controls="filter-collapseOne">
                    Body Type
                  </h3>
                </div>
                <div id="filter-collapseOne" class="collapse show" aria-labelledby="filter-headingOne">
                  <div class="accordionBlock-body">
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
                              <img src="./assets/images/brands/Honda.png" class="img-fluid"
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
                              <img src="./assets/images/brands/Honda.png" class="img-fluid"
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
                              <img src="./assets/images/brands/Honda.png" class="img-fluid"
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
                              <img src="./assets/images/brands/TVS.png" class="img-fluid"
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
          </div>
        </div>
      </div>
      <div class="col-lg-9 bike-listing-right">
      <section class="start-compare-bike pb-0">
          <div class="compare-bike-Content">  
              <div class="sectionHeading">
                  <h2>Bikes by need</h2>
              </div>
              <p>If you're wondering, what are the best mileage Bikes in India, Bikedekho is the right place for you. We have a list of 
                  4 Bikes with top speed with their expected price, specs, reviews and latest news. Some of the most popular models with
                  best mileage are TVS XL100,<span id="dots"></span><span id="more">TVS Radeon,Yamaha RayZR 125. The top brands that manufacture bikes with best mileage are TVS,
                  Yamaha.</span> <a onclick="myFunction()" id="myBtn">Read More</a>
              </p>
          </div>
      </section> 
        <div class="listingpage-info">
          <div class="row">
            <div class="col-lg-9">
              <div class="sectionHeading">
                <h2>Best Mileage</h2>
              </div>
            </div>
            <div class="col-lg-3 d-none d-sm-none d-md-none d-lg-block">
              <div class="form-group mb-0 Select-icons-wrp">
                <div class="sort-icon-wrp"><img src="assets/images/icons/sort-icon.png" class="img-fluid" alt="" /></div>
                <select class="form-control" id="exampleFormControlSelect2">
                  <option>Sort By</option>
                  <option>Price Low to High</option>
                  <option>Price High to Low</option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
              <a href="http://localhost/bike-junction/new-truck-single.php">
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
                <a href="http://localhost/bike-junction/new-truck-single.php">
                  <p class="newTruckBlock-title mb-3">Hero Splendor Plus</p>
                </a>
                <p class="newTruckBlock-price">₹70,258 - 74,528*</p>
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="http://localhost/bike-junction/on-road-price.php" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-12">
            <div class="filterBlock  sectionpadding25">
              <div class="container-mid p-0 w-100">
                <div class="cta-image">
                  <img src="assets/images/icons/lower-banner.jpg" alt="cta-image">
                </div>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-md-6 col-lg-12">
            <div class="filterBlock  sectionpadding25">
              <div class="container-mid p-0 w-100">
                <div class="cta-image">
                  <img src="assets/images/icons/inner-banner.jpg" alt="cta-image">
                </div>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
          <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
            <div class="newTruckBlock-inner m-t-16">
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
                <div class="special-feature mb-0">
                  <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                  <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                </div>
                <div class="newTruckBlock-variants">
                  <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                </div>
                <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
              </div>
            </div>
          </div>
        </div>
        <div class="container-mid">
          <div class="sectionHeading mt-4">
            <h2>Popular Comparison</h2>
          </div>
          <div class="compareBlock compareBlock-new tj-row">
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
        <div class="container-mid">
          <div class="sectionHeading mt-4 mb-3">
            <h2>Similar Bikes</h2>
          </div>
          <div class="row mobile-scrollcls">
            <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
              <div class="newTruckBlock-inner m-t-16">
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
                  <div class="special-feature mb-0">
                    <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                    <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                  </div>
                  <div class="newTruckBlock-variants">
                    <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                  </div>
                  <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                </div>
              </div>
            </div>
            <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
              <div class="newTruckBlock-inner m-t-16">
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
                  <div class="special-feature mb-0">
                    <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                    <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                  </div>
                  <div class="newTruckBlock-variants">
                    <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                  </div>
                  <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                </div>
              </div>
            </div>
            <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
              <div class="newTruckBlock-inner m-t-16">
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
                  <div class="special-feature mb-0">
                    <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                    <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                  </div>
                  <div class="newTruckBlock-variants">
                    <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                  </div>
                  <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-mid">
          <div class="sectionHeading mt-4 mb-3">
            <h2>Upcoming Bikes</h2>
          </div>
          <div class="row mobile-scrollcls">
            <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
              <div class="newTruckBlock-inner m-t-16">
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
                  <div class="special-feature mb-0">
                    <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                    <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                  </div>
                  <div class="newTruckBlock-variants">
                    <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                  </div>
                  <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                </div>
              </div>
            </div>
            <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
              <div class="newTruckBlock-inner m-t-16">
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
                  <div class="special-feature mb-0">
                    <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                    <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                  </div>
                  <div class="newTruckBlock-variants">
                    <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                  </div>
                  <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                </div>
              </div>
            </div>
            <div class="newTruckBlock-main col-12 col-sm-6 col-md-6 col-lg-4">
              <div class="newTruckBlock-inner m-t-16">
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
                  <div class="special-feature mb-0">
                    <span><img src="assets/images/icons/petrol.png" alt="">60 kmpl</span>
                    <span><img src="assets/images/icons/dot-n.png" alt="">100 cc</span>
                  </div>
                  <div class="newTruckBlock-variants">
                    <p class="mb-0"><span>4</span>Variants available <img src="./assets/images/icons/add-n.png" alt=""></p>
                  </div>
                  <a href="#" class="borderBtn newTruckBlock-btn text-center">Get On Road Price</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-mid">
          <div class="sectionHeading mt-4 mb-4">
            <h2>Popular Clips</h2>
          </div>
          <div class="video-cliprow row">
            <div class="video-clipr-main col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="video-clip">
                <span>July 17 , 2022</span>
                <iframe width="100%" height="340" src="https://www.youtube.com/embed/iocjkeyyUeo" title="bike video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="video-title d-block d-sm-block d-md-block d-lg-none">Suzuki V-Strom SX Review | Is It Worth Buying Over Royal Enfield Himalayan?</div>
              </div>
            </div>
            <div class="video-clipr-main col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="video-clip">
                <span>July 17 , 2022</span>
                <iframe width="100%" height="340" src="https://www.youtube.com/embed/iocjkeyyUeo" title="bike video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="video-title d-block d-sm-block d-md-block d-lg-none">Suzuki V-Strom SX Review | Is It Worth Buying Over Royal Enfield Himalayan?</div>
              </div>
            </div>
          </div>
        </div>
        <div class="container-mid">
          <div class="sectionHeading mt-4 mb-4">
            <h2>Frequently asked questions</h2>
          </div>
          <div class="accordionBlock accordion accordionFaq-sec" id="faqblock">
            <div class="accordionBlock-inner sectionShadow">
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
            <div class="accordionBlock-inner sectionShadow">
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
      </div>
    </div>
    <div class="filterBtns-mobile sectionShadow d-block d-sm-block d-md-block d-lg-none">
      <a href="javascript:void(0)" class="boldfont text-center text-uppercase" id="filterBtns-mobFilter">
      <img src="./assets/images/icons/filter.png" alt="" /> Filter</a>
      <a href="javascript:void(0)" class="boldfont text-center text-uppercase" id="filterBtns-mobileSort">
      <img src="./assets/images/icons/sort-down.png" alt="" /> Sort</a>
    </div>
  </div>
</section>
<!-- sort options -->
<div class="langMobileBlock" id="sortMobileBlock">
  <div class="langMobileBlockInner">
    <div class="bikeFilterBlock-inner">
      <div class="filderbrands-row">
          <div class="filter-title-wrp">
              <div class="filter-title-img"><img src="./assets/images/icons/sort-down.png" alt="" />Sort By</div>
              <div class="filter-closed"><div class="langMobileBlockClose" id="sortMobileBlockClose"><img src="./assets/images/icons/filter-closed.png" alt="" /></div></div>
          </div>
           <div class="filter-mil">
                <label class="checkbox-custom">High Price to Low Price
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
                </label>
                <label class="checkbox-custom">Low Price to High Price
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="checkbox-custom">Popularity
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="checkbox-custom">Mileage
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
                <label class="checkbox-custom">Latest
                <input type="checkbox">
                <span class="checkmark"></span>
                </label>
           </div>
        </div>
    </div>
  </div>
</div>
<!-- Filter options -->
<div class="langMobileBlock" id="filterMobileBlock">
  <div class="langMobileBlockInner">
    <div class="filderbrands-row">
        <div class="filter-title-wrp">
            <div class="filter-title-img"><img src="./assets/images/icons/filter.png" alt="" />Filter By</div>
            <div class="filter-closed"><div class="langMobileBlockClose" id="sortMobileBlockClose1"><img src="./assets/images/icons/filter-closed.png" alt="" /></div></div>
        </div>
      <div class="filterbrands-nav">
        <header class="tabs-nav">
          <ul>
            <li class="active"><a href="#tab1">Brand</a></li>
            <li><a href="#tab2">Model</a></li>
            <li><a href="#tab3">Budget</a></li>
            <li><a href="#tab4">Fuel Type</a></li>
            <li><a href="#tab5">Mileage</a></li>
            <li><a href="#tab6">Displacement</a></li>
            <li><a href="#tab7">Purpose</a></li>
            <li><a href="#tab8">Body Type</a></li>
            <li><a href="#tab9">Charging Time</a></li>
            <li><a href="#tab10">Range</a></li>
            <li><a href="#tab11">Others</a></li>
          </ul>
        </header>
        <section class="tabs-content">
          <div class="b-tabcls" id="tab1">
            <div class="brands-search-wrp1">
              <div class="row">
                <div class="col-6">
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
                <div class="col-6">
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
                <div class="col-6">
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
                <div class="col-6">
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
                <div class="col-6">
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
                <div class="col-6">
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
                <div class="col-6">
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
                <div class="col-6">
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
                <div class="col-6">
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
                <div class="col-6">
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
          <div class="b-tabcls" id="tab2">
            <div class="filter-variation-wrap">
              <div class="filter-mil">
                  <label class="checkbox-custom">Raider 125
                  <input type="checkbox">
                  <span class="checkmark"></span>
                  </label>
                  <label class="checkbox-custom">Apache RTR 160
                  <input type="checkbox">
                  <span class="checkmark"></span>
                  </label>
                  <label class="checkbox-custom">Ronin
                  <input type="checkbox">
                  <span class="checkmark"></span>
                  </label>
                  <label class="checkbox-custom">Activa 6G
                  <input type="checkbox">
                  <span class="checkmark"></span>
                  </label>
               </div>
            </div>
          </div>
          <div class="b-tabcls" id="tab3">
            <div class="filter-variation-wrap">
              <div class="filter-mil">
                    <label class="checkbox-custom">Less than ₹40,000
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">₹40,000 to ₹60,000
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">₹60,000 to ₹80,000
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">₹80,000 to ₹1,00,000
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                </div>
              </div>
          </div>
          <div class="b-tabcls" id="tab4">
          <div class="filter-variation-wrap">
             <div class="filter-mil">
                  <label class="checkbox-custom">Petrol
                  <input type="checkbox">
                  <span class="checkmark"></span>
                  </label>
                  <label class="checkbox-custom">Electric
                  <input type="checkbox">
                  <span class="checkmark"></span>
                  </label>
               </div>
            </div>
          </div>
          <div class="b-tabcls" id="tab5">
            <div class="filter-variation-wrap">
              <div class="filter-mil">
                    <label class="checkbox-custom">30-50 kmpl
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">50-60 kmpl
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">60-70 kmpl
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">70-80 kmpl
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                </div>
              </div>
          </div>
          <div class="b-tabcls" id="tab6">
            <div class="filter-variation-wrap">
              <div class="filter-mil">
                    <label class="checkbox-custom">Upto 100cc
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">100cc - 110cc
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">110cc - 125cc
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">125cc - 150cc
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                </div>
              </div>
          </div>
          <div class="b-tabcls" id="tab7">
            <div class="filter-variation-wrap">
              <div class="filter-mil">
                    <label class="checkbox-custom">Purpose 1
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Purpose 2
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Purpose 3
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Purpose 4
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                </div>
              </div>
          </div>
          <div class="b-tabcls" id="tab8">
            <div class="filter-variation-wrap">
              <div class="filter-mil">
                    <label class="checkbox-custom">Sports Bike
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Scooter
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Cruiser
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Commuter
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Street Bike
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Super Bike
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Cafe Racer
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">Scrambler
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                </div>
              </div>
          </div>
          <div class="b-tabcls" id="tab9">
            <div class="filter-variation-wrap">
              <div class="filter-mil">
                    <label class="checkbox-custom">8 hours
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">6 hours
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">7 hours
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">9 hours
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                </div>
              </div>
          </div>
          <div class="b-tabcls" id="tab10">
            <div class="filter-variation-wrap">
              <div class="filter-mil">
                    <label class="checkbox-custom">100 Km
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">90 Km
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">80 Km
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">120 Km
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                </div>
              </div>
          </div>
          <div class="b-tabcls" id="tab11">
            <div class="filter-variation-wrap">
              <div class="filter-mil">
                    <label class="checkbox-custom">others 1
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">others 2
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">others 3
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                    <label class="checkbox-custom">others 4
                    <input type="checkbox">
                    <span class="checkmark"></span>
                    </label>
                </div>
              </div>
          </div>
        </section>
      </div>
      <div class="confirm-btn"><a href="#">Confirm</a></div>
    </div>
  </div>
</div>
<div class="filter-overly1"></div>
<div class="filter-overly2"></div>
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
<?php include('layouts/footer.php') ?>