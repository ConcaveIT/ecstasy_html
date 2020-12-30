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
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8 checkout_form">
                <span class="step"> 1 </span>
                <span class="step"> 2 </span> 
                <span class="step"> 3 </span>
                <span class="step"> 4 </span>
                <span class="step"> 5 </span>
                <span class="step last_step"> <i class="fa fa-check" aria-hidden="true"></i> </span> 

                <form action="#">
                    <div class="tab">
                        <h4>BILLING ADDRESS</h4>
                        <p><input type="checkbox" oninput="this.className = ''" name="fname"> Ship to the same address </p>
                        <p><input type="text" placeholder="First name" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="Last name" oninput="this.className = ''" name="fname"></p>
                        <p><input type="text" placeholder="Email" oninput="this.className = ''" name="lname"></p>
                        <p>
                          <select name="" id="">
                            <option value="">--Select Country--</option>
                            <option value="">Afganisthan</option>
                            <option value="">Afganisthan</option>
                            <option value="">Afganisthan</option>
                            <option value="">Afganisthan</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                          </select>  
                        </p>
                        <p><input type="text" placeholder="Country" oninput="this.className = ''" name="fname"></p>
                        <p><input type="text" placeholder="State / Province" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="City" oninput="this.className = ''" name="fname"></p>
                        <p><input type="text" placeholder="Address 1" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="Address 2" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="Zip /Postal Code" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="Phone number" oninput="this.className = ''" name="lname"></p>
                    </div>
                    <div class="tab">
                      <h4>SHIPPING ADDRESS</h4>
                      <p><input type="checkbox" oninput="this.className = ''" name="fname"> Ship to the same address </p>
                        <p><input type="text" placeholder="First name" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="Last name" oninput="this.className = ''" name="fname"></p>
                        <p><input type="text" placeholder="Email" oninput="this.className = ''" name="lname"></p>
                        <p>
                          <select name="" id="">
                            <option value="">--Select Country--</option>
                            <option value="">Afganisthan</option>
                            <option value="">Afganisthan</option>
                            <option value="">Afganisthan</option>
                            <option value="">Afganisthan</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                            <option value="">Bangladesh</option>
                          </select>  
                        </p>
                        <p><input type="text" placeholder="Country" oninput="this.className = ''" name="fname"></p>
                        <p><input type="text" placeholder="State / Province" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="City" oninput="this.className = ''" name="fname"></p>
                        <p><input type="text" placeholder="Address 1" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="Address 2" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="Zip /Postal Code" oninput="this.className = ''" name="lname"></p>
                        <p><input type="text" placeholder="Phone number" oninput="this.className = ''" name="lname"></p>
                    </div>
                    <div class="tab">
                        <h4>SHIPPING METHOD</h4>
                        <div class="shipping_method">
                          <div class="method free_shipping"> 
                            <input type="radio"> <p>FREESHIPPING (৳ 0.00)</p> 
                            <small>You are eligible for free shipping as you bought more than 1000 tk.</small>
                          </div>
                          <div class="method inside_daka"> 
                            <input type="radio"> <p> INSIDE DHAKA (৳ 0.00)</p> 
                            <small>All over Dhaka city</small>
                          </div>
                          <div class="method outside_daka"> 
                            <input type="radio"> <p>OUTSIDE DHAKA (৳ 0.00)</p> 
                            <small>All over Bangladesh</small>
                          </div>
                        </div>
                    </div>
                    <div class="tab">
                      <h4>PAYMENT METHOD</h4>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="devery cash">
                              <img src="images/cashon.png" alt="" width="100%">
                                <input type="radio"> <p>CASH ON DELIVERY (COD)</p> 
                                <small>Pay by "Cash on delivery"</small>
                            </div>
                          </div>
                          <div class="col-md-6">
                          <div class="devery ssl">
                              <img src="images/ssl.png" alt="" width="100%">
                                <input type="radio"> <p>SSLWIRELESS / SSLCOMMERZ</p> 
                                <small>You will be redirected to SSLCommerzpayment website to complete the payment</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    <div class="tab">
                        <h4>PAYMENT INFORMATION</h4>
                        <p>
                          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div class="tab">
                        <h4>CONFIRM ORDER</h4>
                        <div class="row">
                          <div class="col-md-6">
                              <div class="billing_address">
                                <h5>Billing Address</h5>
                                <ul>
                                    <li> Arif Hosain</li>
                                    <li> Email: arifindex22@gmail.com </li>
                                    <li> Phone: 1786-174346 </li>
                                    <li> Company: ICT </li>
                                    <li> Country: Bangladesh </li>
                                    <li> City: Tangail</li>
                                    <li> State / Province: Bazidpur </li>
                                    <li> Address 1: Bazidpur Road </li>
                                    <li> Address 2: Dormitory, Bazidpur Road </li>
                                    <li> Zip/Postal: 1950 </li>
                                </ul>
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="shipping_address">
                                <h5>Billing Address</h5>
                                <ul>
                                    <li> Arif Hosain</li>
                                    <li> Email: arifindex22@gmail.com </li>
                                    <li> Phone: 1786-174346 </li>
                                    <li> Company: ICT </li>
                                    <li> Country: Bangladesh </li>
                                    <li> City: Tangail</li>
                                    <li> State / Province: Bazidpur </li>
                                    <li> Address 1: Bazidpur Road </li>
                                    <li> Address 2: Dormitory, Bazidpur Road </li>
                                    <li> Zip/Postal: 1950 </li>
                                </ul>
                              </div>
                          </div>
                        </div>




                        <div class="row style="overflow-x:auto;">
                          <div class="col-md-12">
                            <table width:100% class="table table-hover cart_table">
                                <thead>
                                    <tr>
                                        <th width:5%>No.</th>
                                        <th width:15%>SKU</th>
                                        <th width:15%>Image</th>
                                        <th width:40%>Product(s)</th>
                                        <th width:10%>Price</th>
                                        <th width:5%>QTY</th>
                                        <th width:10%>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>10001705-6</td>
                                        <td> <img src="images/shirt.png" alt="prduct.png" height="" width="70px"> </td>
                                        <td> 
                                            <strong>BLACK LEATHER CHELSEA BOOTS</strong> 
                                            <p class="cart_size">SIZE: <strong>38</strong></p>
                                        </td>
                                        <td>৳ 7749.00</td>
                                        <td>1 </td>
                                        <td>৳ 7749.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>10001705-6</td>
                                        <td> <img src="images/shirt.png" alt="prduct.png" height="" width="70px"> </td>
                                        <td> 
                                            <strong>BLACK LEATHER CHELSEA BOOTS</strong> 
                                            <p class="cart_size">SIZE: <strong>38</strong></p>
                                        </td>
                                        <td>৳ 7749.00</td>
                                        <td>1 </td>
                                        <td>৳ 7749.00</td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                        </div>


                        <div class="row mt-2">
                          <div class="col-md-12">
                            <div class="calculation">
                                <p>Sub-Total: ৳ 7749.00</p>
                                <p>Shipping: ৳ 0.00</p>
                                <p>Total: <b>৳ 7749.00</b></p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div style="overflow:auto;">
                        <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        </div>
                    </div>
                    <!-- <div class="tab">
                      <h2>Successfully order placed.</h2>
                      <h2>Thanks for stay with ecstasy.</h2>
                    </div> -->
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>

    </div>
</section>
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<?php
include('default/men_footer.php');
include('default/footer.php');
?>