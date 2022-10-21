<?php
    $title = "User Login";
    include('layouts/header.php'); 
?>

<section class="sectionpadding25 formBlock-bg">
    <div class="container-mid">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="sectionHeading text-center">
                    <h1>Login / Register to Truck Junction</h1>
                    <p>The most comprehensive truck comparison tool in India.</p>
                </div>
                <div class="formBlock sectionShadow">
                    <div class="tabsBlock">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-login" data-toggle="tab" href="#login" role="tab"
                                    aria-controls="login" aria-selected="true">Login</a>
                                <a class="nav-link" id="nav-register" data-toggle="tab" href="#register" role="tab"
                                    aria-controls="register" aria-selected="false">Register</a>
                            </div>
                        </nav>
                        <div class="tab-content mt-4" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="login" role="tabpanel"
                                aria-labelledby="nav-login">
                                <form>
                                    <div class="row">
                                        <div class="col-sm-8 form-group">
                                            <input type="text" class="form-control" required>
                                            <label class="mb-0 form-control-placeholder">Enter Email / Number</label>
                                        </div>
                                        <div class="col-sm-4 form-group">
                                            <button class="fillBtn getOTPBTN w-100">Get OTP</button>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <label class="checkbox-custom">Login With Password ?
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-sm-12 form-group">
                                            <input type="text" class="form-control" required>
                                            <label class="mb-0 form-control-placeholder">Enter OTP</label>
                                        </div>
                                    </div>
                                    <button class="fillBtn w-100">Click Here to Login</button>

                                </form>
                            </div>

                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="nav-register">
                                <form>
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
                                    <button class="fillBtn w-100">Click Here to Register</button>

                                </form>
                            </div>

                        </div>
                    </div>
                    <p class="text-center mt-3 mb-0">By clicking on Submit, you agree to our <a class="linkclr" href="#"
                            target="_blank" title="Terms and Conditions">Terms
                            and Conditions</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>