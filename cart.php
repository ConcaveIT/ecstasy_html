<?php
include('default/header.php');
?>
<section id="cart_1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <h1>SHOPPING CART</h1>
            </div>
        </div>
    </div>
</section>
<section id="cart_2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12" style="overflow-x:auto;">
                <table class="table table-hover cart_table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Remove</th>
                            <th>SKU</th>
                            <th>Image</th>
                            <th>Product(s)</th>
                            <th>Price</th>
                            <th>QTY</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td> <div class="remove"> <i class="fa fa-trash" aria-hidden="true"></i> </div> </td>
                            <td>10001705-6</td>
                            <td> <img src="images/shirt.png" alt="prduct.png" height="" width="70px"> </td>
                            <td> 
                                <strong>BLACK LEATHER CHELSEA BOOTS</strong> 
                                <p class="cart_size">SIZE: <strong>38</strong></p>
                                <button class="btn btn-info">EDIT</button>
                            </td>
                            <td>৳ 7749.00</td>
                            <td>
                                <div class="cart_qty">
                                    <input type="text" min="1" value="1">
                                </div>
                            </td>
                            <td>৳ 7749.00</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td> <div class="remove"> <i class="fa fa-trash" aria-hidden="true"></i> </div> </td>
                            <td>10001705-6</td>
                            <td> <img src="images/shirt.png" alt="prduct.png" height="" width="70px"> </td>
                            <td> 
                                <strong>BLACK LEATHER CHELSEA BOOTS</strong> 
                                <p class="cart_size">SIZE: <strong>38</strong></p>
                                <button class="btn btn-info">EDIT</button>
                            </td>
                            <td>৳ 7749.00</td>
                            <td>
                                <div class="cart_qty">
                                    <input type="text" min="1" value="1">
                                </div>
                            </td>
                            <td>৳ 7749.00</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td> <div class="remove"> <i class="fa fa-trash" aria-hidden="true"></i> </div> </td>
                            <td>10001705-6</td>
                            <td> <img src="images/shirt.png" alt="prduct.png" height="" width="70px"> </td>
                            <td> 
                                <strong>BLACK LEATHER CHELSEA BOOTS</strong> 
                                <p class="cart_size">SIZE: <strong>38</strong></p>
                                <button class="btn btn-info">EDIT</button>
                            </td>
                            <td>৳ 7749.00</td>
                            <td>
                                <div class="cart_qty">
                                    <input type="text" min="1" value="1">
                                </div>
                            </td>
                            <td>৳ 7749.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8"></div>
            <div class="col-12 col-sm-12 col-md-2 pr_o text-center">
                <div class="update_cart"> update shopping cart </div>
            </div>
            <div class="col-12 col-sm-12 col-md-2 pl_o text-center">
                <div class="continue_cart"> continue shopping </div>
            </div>
        </div>
        <div class="row mt-3 code_apply">
            <div class="col-12 col-sm-12 col-md-4">
                <strong>DISCOUNT CODE</strong>
                <p>Enter your coupon here</p>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 pr_o">
                        <input type="text" class="coupon_code">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 pl_o">
                        <div class="update_cart text-center"> Apply coupon</div>
                    </div>
                </div>
                <strong>GIFT CARDS</strong>
                <p>Enter gift card code</p>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 pr_o">
                        <input type="text" class="coupon_code">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 pl_o">
                        <div class="update_cart text-center"> Add GIFT cart</div>
                    </div>
                </div>

            </div>
            <div class="col-md-4"></div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="calculation">
                    <p>Sub-Total: ৳ 7749.00</p>
                    <p>Shipping: ৳ 0.00</p>
                    <p>Total: <b>৳ 7749.00</b></p>
                </div>
                <div class="terms">
                    <input type="checkbox"> <span> I agree with the terms of service and I adhere to them unconditionally (read)</span>
                </div>
                <div class="update_cart text-center next"> next</div>
            </div>
        </div>
    </div>
</section>
<?php
include('default/men_footer.php');
include('default/footer.php');
?>