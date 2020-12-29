<?php
include('default/header.php');
?>
<section id="cart_1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <h1>CHECKOUT</h1>
            </div>
        </div>
    </div>
</section>


<section id="checkout_1">
<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="row">
                <div class="stepwizard-step col-md-2"> 
                    <a href="#step-1" type="button" class="btn btn-success btn-circle">1</a>
                    <p><small>Billing Address</small></p>
                </div>
                <div class="stepwizard-step col-md-2"> 
                    <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                    <p><small>Shipping Address</small></p>
                </div>
                <div class="stepwizard-step col-md-2"> 
                    <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                    <p><small>Shipping Method</small></p>
                </div>
                <div class="stepwizard-step col-md-2"> 
                    <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                    <p><small>Pyment Method</small></p>
                </div>
                <div class="stepwizard-step col-md-2"> 
                    <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                    <p><small>Pyment Information</small></p>
                </div>
                <div class="stepwizard-step col-md-2"> 
                    <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>
                    <p><small>Confirm Order</small></p>
                </div>
            </div>
        </div>
    </div>
    
    <form role="form">
        <div class="panel panel-primary setup-content" id="step-1">
            <div class="panel-heading">
                 <h3 class="panel-title">Billing Address</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <input type="checkbox"> <span>Ship to the same address</span>
               </div>
                <div class="form-group">
                    <label class="control-label">First name: </label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label">last name:</label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label">Email:</label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label">COMPANY:</label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label">COUNTRY:</label>
                    <select name="" id="" class="form-control">
                        <option value="">Afganisthan</option>
                        <option value="">Afganisthan</option>
                        <option value="">Afganisthan</option>
                        <option value="">Afganisthan</option>
                        <option value="">Afganisthan</option>
                        <option value="">Afganisthan</option>
                        <option value="">Afganisthan</option>
                        <option value="">Afganisthan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="control-label">STATE / PROVINCE:</label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label">CITY:</label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label">ADDRESS 1:</label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label">ADDRESS 2:</label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label">ZIP / POSTAL CODE:</label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <div class="form-group">
                    <label class="control-label">PHONE NUMBER:</label>
                    <input maxlength="100" type="text" required="required" class="form-control" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-2">
            <div class="panel-heading">
                 <h3 class="panel-title">Shipping Address</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Company Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Company Address</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-3">
            <div class="panel-heading">
                 <h3 class="panel-title">Shipping Method</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Company Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Company Address</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        
        <div class="panel panel-primary setup-content" id="step-4">
            <div class="panel-heading">
                 <h3 class="panel-title">Pyment Method</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Company Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Company Address</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-primary setup-content" id="step-5">
            <div class="panel-heading">
                 <h3 class="panel-title">Pyment Information</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Company Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Company Address</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />
                </div>
                <button class="btn btn-primary nextBtn pull-right" type="button">Next</button>
            </div>
        </div>
        <div class="panel panel-primary setup-content" id="step-6">
            <div class="panel-heading">
                 <h3 class="panel-title">Confirm Order</h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="control-label">Company Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Name" />
                </div>
                <div class="form-group">
                    <label class="control-label">Company Address</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Enter Company Address" />
                </div>
                <button class="btn btn-success pull-right" type="submit">Confirm Order</button>
            </div>
        </div>
    </form>
</div>
</section>

<?php
include('default/men_footer.php');
include('default/footer.php');
?>