<?php
    $title = "Profile";
    include('layouts/header.php'); 
?>

<section class="sectionpadding25 formBlock-bg profileBlock">
    <div class="container-mid">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <div class="profileBlock-left whitebg text-center">
                    <img src="./assets/images/icons/profile.svg" alt="" />
                    <p class="text-uppercase boldfont mb-3">Welcome Gulshan !</p>
                    <a href="javascript:void(0)" class="fillBtn">Logout</a>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <div class="tabsBlock profileBlock-right whitebg">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-link active" id="nav-personal-info" data-toggle="tab" href="#personal-info"
                                role="tab" aria-controls="personal-info" aria-selected="true">Personal Info</a>
                            <a class="nav-link" id="nav-favourite" data-toggle="tab" href="#favourite" role="tab"
                                aria-controls="favourite" aria-selected="false">Favourite</a>
                            <a class="nav-link" id="nav-total-leads" data-toggle="tab" href="#total-leads" role="tab"
                                aria-controls="total-leads" aria-selected="false">Total Leads</a>
                            <a class="nav-link" id="nav-recent-activity" data-toggle="tab" href="#recent-activity"
                                role="tab" aria-controls="recent-activity" aria-selected="false">Recent Activity</a>
                            <a class="nav-link" id="nav-purchase-req" data-toggle="tab" href="#purchase-req" role="tab"
                                aria-controls="purchase-req" aria-selected="false">Purchase Request</a>
                            <a class="nav-link" id="nav-my-list" data-toggle="tab" href="#my-list" role="tab"
                                aria-controls="my-list" aria-selected="false">My List</a>
                            <a class="nav-link" id="nav-interested-buyers" data-toggle="tab" href="#interested-buyers"
                                role="tab" aria-controls="interested-buyers" aria-selected="false">Interested Buyers</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">

                        <div class="tab-pane fade show active" id="personal-info" role="tabpanel"
                            aria-labelledby="nav-personal-info">
                            <h4>Personal Info</h4>
                            <form class="formBlock p-0">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input type="text" class="form-control" required>
                                        <label class="mb-0 form-control-placeholder">Enter Name</label>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <input type="text" class="form-control" required>
                                        <label class="mb-0 form-control-placeholder">Enter Number</label>
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
                                    <div class="col-sm-12 form-group">
                                        <select class="form-control" id="exampleFormControlSelect2">
                                            <option>Select Amount</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        <label class="mb-0 form-control-placeholder">Loan Amount</label>
                                    </div>
                                </div>
                                <a data-toggle="modal" data-target="#aadharconfirm" href="javascript:void(0);"
                                    class="text-center fillBtn w-100">Save Info</a>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="favourite" role="tabpanel" aria-labelledby="nav-favourite">
                            <h4>Favourite Product</h4>
                            <div class="tableParent">
                                <table class="table tableBlock mb-0">
                                    <thead>
                                        <tr>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Mahindra</td>
                                            <td>Jeeto Mini Truck</td>
                                            <td><span class="product-type">New</span></td>
                                        </tr>
                                        <tr>
                                            <td>Tata</td>
                                            <td>Ace HT Plus Mini Truck</td>
                                            <td><span class="product-type">Used</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="total-leads" role="tabpanel" aria-labelledby="nav-total-leads">
                            <h4>Total Leads</h4>
                            <div class="tableParent">
                                <table class="table tableBlock mb-0">
                                    <thead>
                                        <tr>
                                            <th>UID</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TJN37065</td>
                                            <td>ACE</td>
                                            <td>DI-550+</td>
                                            <td>2019</td>
                                            <td>Pending</td>
                                            <td>None</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="recent-activity" role="tabpanel"
                            aria-labelledby="nav-recent-activity">
                            <h4>Recent Activity</h4>
                            <div class="tableParent">
                                <table class="table tableBlock mb-0">
                                    <thead>
                                        <tr>
                                            <th>UID</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TJN37065</td>
                                            <td>ACE</td>
                                            <td>DI-550+</td>
                                            <td>2019</td>
                                            <td>Pending</td>
                                            <td>None</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="purchase-req" role="tabpanel" aria-labelledby="nav-purchase-req">
                            <h4>Purchase Request</h4>
                            <div class="tableParent">
                                <table class="table tableBlock mb-0">
                                    <thead>
                                        <tr>
                                            <th>UID</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TJN37065</td>
                                            <td>ACE</td>
                                            <td>DI-550+</td>
                                            <td>2019</td>
                                            <td>Pending</td>
                                            <td>None</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="my-list" role="tabpanel" aria-labelledby="nav-my-list">
                            <h4>My List</h4>
                            <div class="tableParent">
                                <table class="table tableBlock mb-0">
                                    <thead>
                                        <tr>
                                            <th>UID</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TJN37065</td>
                                            <td>ACE</td>
                                            <td>DI-550+</td>
                                            <td>2019</td>
                                            <td>Pending</td>
                                            <td>None</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="interested-buyers" role="tabpanel"
                            aria-labelledby="nav-interested-buyers">
                            <h4>Interested Buyers</h4>
                            <div class="tableParent">
                                <table class="table tableBlock mb-0">
                                    <thead>
                                        <tr>
                                            <th>UID</th>
                                            <th>Brand</th>
                                            <th>Model</th>
                                            <th>Year</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>TJN37065</td>
                                            <td>ACE</td>
                                            <td>DI-550+</td>
                                            <td>2019</td>
                                            <td>Pending</td>
                                            <td>None</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('layouts/footer.php'); ?>