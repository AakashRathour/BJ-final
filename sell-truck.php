<?php
    $title = "Sell Truck";
    include('layouts/header.php'); 
?>

<section class="pageInfo-breadcrumbs">
    <div class="container-mid">
        <ul class="mb-0">
            <li><a href="#">Home</a></li>
            <li><span>Sell Truck</span></li>
        </ul>
    </div>
</section>

<section class="sectionpadding25 formBlock-bg">
    <div class="container-mid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="sectionHeading text-center">
                    <h1>Sell Your Truck at Best Price</h1>
                    <p>Fill information to sell the truck and get more price for your used truck!</p>
                </div>
                <form class="formBlock sectionShadow">
                    <div class="row">
                        <div class="col-6 col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Select Category</label>
                        </div>
                        <div class="col-6 col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Select Brand</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Select Model</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Select Variant</label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Total Km Driven</label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Price</label>
                        </div>
                    </div>

                    <div class="uploadImgBlock mb-3">
                        <p class="boldfont text-uppercase">Upload Truck Images</p>
                        <div class="row no-margin">
                            <div class="col-2 no-padding uploadImg"></div>
                            <div class="col-2 no-padding uploadImg"></div>
                            <div class="col-2 no-padding uploadImg"></div>
                            <div class="col-2 no-padding uploadImg"></div>
                            <div class="col-2 no-padding uploadImg"></div>
                            <div class="col-2 no-padding uploadImg"></div>
                        </div>
                    </div>

                    <button class="fillBtn w-100 listTruckBtn-popup">Sell Your Truck</button>
                    <p class="text-center mt-3 mb-0">By clicking on Submit, you agree to our <a class="linkclr" href="#"
                            target="_blank" title="Terms and Conditions">Terms and Conditions</a></p>
                </form>
            </div>
            <!-- <div class="col-lg-5">
                <img class="img-fluid" src="./assets/images/banners/loan.jpg" alt="">
            </div> -->
        </div>
    </div>
</section>

<section class="sectionpadding25 greybg">
    <div class="container-mid">
        <div class="sectionHeading">
            <h2>Popular Truck Brands</h2>
        </div>
        <div class="row text-center">
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/ashok-leyland.png" class="img-fluid" alt="">
                        <p>Ashok Leyland</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/bharat-benz.png" class="img-fluid" alt="">
                        <p>Bharat Benz</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/eicher.png" class="img-fluid" alt="">
                        <p>Eicher</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/mahindra.png" class="img-fluid" alt="">
                        <p>Mahindra</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/piaggio.png" class="img-fluid" alt="">
                        <p>Piaggio</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/tata.png" class="img-fluid" alt="">
                        <p>TATA</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/ashok-leyland.png" class="img-fluid" alt="">
                        <p>Ashok Leyland</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/bharat-benz.png" class="img-fluid" alt="">
                        <p>Bharat Benz</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/eicher.png" class="img-fluid" alt="">
                        <p>Eicher</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/mahindra.png" class="img-fluid" alt="">
                        <p>Mahindra</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/piaggio.png" class="img-fluid" alt="">
                        <p>Piaggio</p>
                    </div>
                </a>
            </div>
            <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                <a href="#">
                    <div class="brandsBlock-inner m-b-16 sectionShadow">
                        <img src="assets/images/brands/tata.png" class="img-fluid" alt="">
                        <p>TATA</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="viewall mt-1">
            <a href="#" class="boldfont">View All Truck News <img src="assets/images/icons/linkarrow.svg" alt=""></a>
        </div>
    </div>
</section>

<section class="sectionpadding20">
    <div class="container-mid">
        <div class="ckeditorBlock">
            <div class="sectionHeading">
                <h2>Popular Truck Searches</h2>
            </div>
            <h3>What is Lorem Ipsum?</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</section>

<section class="sectionpadding25 b-t-1">
    <div class="container-mid">
        <div class="sectionHeading text-center">
            <h2>Tools For Help</h2>
            <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
        </div>
        <div class="toolsBlock text-center tj-row">
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
            <div class="toolsBlock-main tj-col">
                <a href="">
                    <div class="toolsBlock-inner sectionShadow">
                        <img src="assets/images/icons/service.svg" class="img-fluid" alt="" />
                        <p>Service Centers</p>
                    </div>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- sell truck popup form -->
<section class="sellTruckForm" id="sellTruck">
    <div class="sellTruckForm-inner sectionShadow">

        <div class="sellTruckForm-header">
            <div class="row no-margin">
                <div class="col-1 pr-0">
                    <a href="#"><img src="./assets/images/icons/left-long-arrow.svg"
                            class="sellTruckForm-iconImg img-fluid" alt=""></a>
                </div>
                <div class="col-10">
                    <div class="sellTruckForm-selectedStep">
                        <a href="#" class="sectionShadow">Mini Truck Mini Truck</a>
                        <a href="#" class="sectionShadow">2019</a>
                        <a href="#" class="sectionShadow">1109-LPT</a>
                        <a href="#" class="sectionShadow">1109-LPT</a>
                    </div>
                </div>
                <div class="col-1 pl-0">
                    <a href="javascript:void(0)" class="listTruckBtn-popupClose"><img src="./assets/images/icons/close.svg" class="sellTruckForm-iconImg img-fluid"
                            alt=""></a>
                </div>
            </div>
        </div>

        <div class="sellTruckForm-content">

            <!-- select category -->
            <!-- <div class="sellTruckForm-contentInner">
                <h3>Select Category</h3>
                <a href="#" class="sellTruckForm-options">Trucks</a>
                <a href="#" class="sellTruckForm-options">Tractor</a>
                <a href="#" class="sellTruckForm-options">Mini Truck</a>
                <a href="#" class="sellTruckForm-options">Pickup</a>
                <a href="#" class="sellTruckForm-options">Tippers</a>
                <a href="#" class="sellTruckForm-options">3 Wheeler</a>
                <a href="#" class="sellTruckForm-options">Transit Mixer</a>
            </div> -->

            <!-- select brand -->
            <!-- <div class="sellTruckForm-contentInner">
                <h3>Select Brand</h3>
                <a href="#" class="sellTruckForm-options">Amw</a>
                <a href="#" class="sellTruckForm-options">Ashok Leyland</a>
                <a href="#" class="sellTruckForm-options">Atul</a>
                <a href="#" class="sellTruckForm-options">Bajaj</a>
                <a href="#" class="sellTruckForm-options">Bharat Benz</a>
                <a href="#" class="sellTruckForm-options">Eicher</a>
                <a href="#" class="sellTruckForm-options">Force</a>
                <a href="#" class="sellTruckForm-options">Hino</a>
                <a href="#" class="sellTruckForm-options">Isuzu</a>
                <a href="#" class="sellTruckForm-options">Kamaz</a>
                <a href="#" class="sellTruckForm-options">Kinetic</a>
                <a href="#" class="sellTruckForm-options">Lohia</a>
                <a href="#" class="sellTruckForm-options">Mahindra</a>
                <a href="#" class="sellTruckForm-options">Man</a>
                <a href="#" class="sellTruckForm-options">Maruti Suzuki</a>
                <a href="#" class="sellTruckForm-options">Piaggio</a>
                <a href="#" class="sellTruckForm-options">Scania</a>
                <a href="#" class="sellTruckForm-options">SML Isuzu</a>
                <a href="#" class="sellTruckForm-options">TATA</a>
                <a href="#" class="sellTruckForm-options">TVS</a>
                <a href="#" class="sellTruckForm-options">Volvo</a>
            </div> -->

            <!-- select model -->
            <!-- <div class="sellTruckForm-contentInner">
                <h3>Select Model</h3>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
                <a href="#" class="sellTruckForm-options">Tata 1412 LPT</a>
            </div> -->

            <!-- select year -->
            <!-- <div class="sellTruckForm-contentInner">
                <h3>Year Of Manufacturer</h3>
                <a href="#" class="sellTruckForm-options">2020</a>
                <a href="#" class="sellTruckForm-options">2019</a>
                <a href="#" class="sellTruckForm-options">2018</a>
                <a href="#" class="sellTruckForm-options">2017</a>
                <a href="#" class="sellTruckForm-options">2016</a>
                <a href="#" class="sellTruckForm-options">2015</a>
                <a href="#" class="sellTruckForm-options">2014</a>
                <a href="#" class="sellTruckForm-options">2013</a>
                <a href="#" class="sellTruckForm-options">2012</a>
                <a href="#" class="sellTruckForm-options">2011</a>
            </div> -->

            <!-- select km driven -->
            <!-- <div class="sellTruckForm-contentInner">
                <h3>Kilometer Driven</h3>
                <a href="#" class="sellTruckForm-options">Under 50,000 km</a>
                <a href="#" class="sellTruckForm-options">50,000 - 1 Lakh km</a>
                <a href="#" class="sellTruckForm-options">1 Lakh - 2 Lakh km</a>
                <a href="#" class="sellTruckForm-options">2 Lakh - 3 Lakh km</a>
                <a href="#" class="sellTruckForm-options">3 Lakh - 4 Lakh km</a>
                <a href="#" class="sellTruckForm-options">4 Lakh - 5 Lakh km</a>
                <a href="#" class="sellTruckForm-options">Above 5 Lakh km</a>
            </div> -->

            <!-- upload images -->
            <div class="sellTruckForm-contentInner">
                <h3>Upload Images</h3>
                <div class="uploadImgBlock-popup">
                    <div class="row no-margin">
                        <div class="col-12">
                            <p class="mb-0 mt-2">Note - Upload minimum 2 Images</p>
                        </div>

                        <div class="col-4">
                            <label for="fileField1" class="m-t-16 mb-0 attachment">
                                <div class="attachment-file">
                                    <div class="attachment-preview"></div>
                                    <div class="attachment-actions"></div>
                                </div>
                                <input name="file" type="file" id="fileField1">
                            </label>
                        </div>

                        <div class="col-4">
                            <label for="fileField2" class="m-t-16 mb-0 attachment">
                                <div class="attachment-file">
                                    <div class="attachment-preview"></div>
                                    <div class="attachment-actions"></div>
                                </div>
                                <input name="file" type="file" id="fileField2">
                            </label>
                        </div>

                        <div class="col-4">
                            <label for="fileField3" class="m-t-16 mb-0 attachment">
                                <div class="attachment-file">
                                    <div class="attachment-preview"></div>
                                    <div class="attachment-actions"></div>
                                </div>
                                <input name="file" type="file" id="fileField3">
                            </label>
                        </div>

                        <div class="col-4">
                            <label for="fileField4" class="m-t-16 mb-0 attachment">
                                <div class="attachment-file">
                                    <div class="attachment-preview"></div>
                                    <div class="attachment-actions"></div>
                                </div>
                                <input name="file" type="file" id="fileField4">
                            </label>
                        </div>

                        <div class="col-4">
                            <label for="fileField5" class="m-t-16 mb-0 attachment">
                                <div class="attachment-file">
                                    <div class="attachment-preview"></div>
                                    <div class="attachment-actions"></div>
                                </div>
                                <input name="file" type="file" id="fileField5">
                            </label>
                        </div>

                        <div class="col-4">
                            <label for="fileField6" class="m-t-16 mb-0 attachment">
                                <div class="attachment-file">
                                    <div class="attachment-preview"></div>
                                    <div class="attachment-actions"></div>
                                </div>
                                <input name="file" type="file" id="fileField6">
                            </label>
                        </div>

                    </div>
                </div>

                <div class="sellTruckForm-priceInfo formBlock">
                    <h4>Enter price for Tata 1412 LPT</h4>
                    <p class="text-center mb-3">Note : Please enter the price that you expect in return for selling your used vehicle. Ensure you quote the expected price based on your vehicle's condition and the price you would be willing to pay to buy a similar second-hand model.</p>
                    <div class="form-group">
                        <input type="text" class="form-control" required>
                        <label class="mb-0 form-control-placeholder">Enter Price</label>
                    </div>
                    <a href="#" class="fillBtn w-100 text-center">Next Step</a>
                </div>
            </div>

            <!-- user detail -->
            <!-- <div class="sellTruckForm-contentInner">
                <h3>User Detail</h3>

                <div class="sellTruckForm-priceInfo formBlock">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Enter Name</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Enter Number</label>
                        </div>
                        <div class="col-sm-6 form-group">
                            <input type="text" class="form-control" required>
                            <label class="mb-0 form-control-placeholder">Enter Email</label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Select State</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <label class="mb-0 form-control-placeholder">State</label>
                        </div>
                        <div class="col-sm-12 form-group">
                            <select class="form-control" id="exampleFormControlSelect2">
                                <option>Select City</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <label class="mb-0 form-control-placeholder">City</label>
                        </div>
                    </div>
                    <button class="fillBtn w-100">List My Truck</button>
                    <p class="text-center mt-3 mb-0">By clicking on Submit, you agree to our <a class="linkclr" href="#" target="_blank" title="Terms and Conditions">Terms and Conditions</a></p>
                </div>
            </div> -->

        </div>

    </div>
</section>

<?php include('layouts/footer.php'); ?>