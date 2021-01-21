<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Splendor</title>
   <link rel="stylesheet" href="css/bootstrap.4.1.1.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <script src="js/bootstrap.4.1.1.js"></script>
   <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
   <script src="js/jquery.3.2.1.js"></script>
   <script src="js/dist/zoomy.js"></script>
   <link type="text/css" rel="stylesheet" href="js/dist/zoomy.css">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
</head>
<body class="body">
<section id="header">
   <div class="container-fluid mobile_navbar">
      <div class="row">
         <div class="col-5 col-xs-5 col-sm-5 col-md-5 logo mobile_logo">
            <a href="/ecstasy_html/home.php"><img src="images/logo2.png" alt=""></a>
         </div> 
         <div class="col-7 col-xs-7 col-sm-7 col-md-7">
            <ul class="user_panel">
               <li class="nav-item login_register_parent">
                  <a class="nav-link" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                  <div class="login_register">
                      <p><a href="#">Login</a> </p>
                      <p><a href="#">Register</a> </p>
                  </div>
               </li>
               <li class="nav-item" id="cart_parent">
                  <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                  <div class="cart_div cart_div_mobile">
                     <div class="cart_title">
                        <h5>YOUR SHOPPING BAG</h5>
                     </div>
                     <table class="table">
                        <tbody>
                              <tr>
                                 <td> <img src="images/shirt.png" alt="prduct.png" height="" width="80px"> </td>
                                 <td> 
                                    <b>BLACK LEATHER CHELSEA BOOTS</b> 
                                    <p class="cart_size">SIZE: <strong>38</strong></p>
                                    <div class="cart_qty cart_header">
                                          <input type="text" min="1" value="1">
                                    </div>
                                    <div class="price">৳ 7749.00</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td> <img src="images/shirt.png" alt="prduct.png" height="" width="80px"> </td>
                                 <td> 
                                    <b>BLACK LEATHER CHELSEA BOOTS</b> 
                                    <p class="cart_size">SIZE: <strong>38</strong></p>
                                    <div class="cart_qty cart_header">
                                          <input type="text" min="1" value="1">
                                    </div>
                                    <div class="price">৳ 7749.00</div>
                                 </td>
                              </tr>
                              <tr>
                                 <td> <img src="images/shirt.png" alt="prduct.png" height="" width="80px"> </td>
                                 <td> 
                                    <b>BLACK LEATHER CHELSEA BOOTS</b> 
                                    <p class="cart_size">SIZE: <strong>38</strong></p>
                                    <div class="cart_qty cart_header">
                                          <input type="text" min="1" value="1">
                                    </div>
                                    <div class="price">৳ 7749.00</div>
                                 </td>
                              </tr>  
                              <tr class="sub_total">
                                 <td><b>Sub Tatal:</b></td>
                                 <td class="text-right"><b>৳ 7749.00</b></td>
                              </tr>                        
                        </tbody>
                     </table>
                     <div class="cart_btn">
                        <span>Go To Cart</span>
                     </div>
                  </div>
               </li>
            </ul>
         </div> 
      </div>
      <div class="row">
         <div class="col-12 mobile_mini">
            <ul>
               <li><li class="nav-item"><a class="nav-link" href="#"><i id="sidebar_show" class="fa fa-bars" aria-hidden="true"></i></a></li></li>
               <li> <a href="/ecstasy_html/man.php">Men</a> </li>
               <li> <a href="#">Women</a> </li>
               <li> <a href="#">Lifestyle</a> </li>
               <li> <a href="#">Offers</a> </li>
            </ul>
         </div>
      </div>
      <div class="row sidebar">
         <div class="col-2 col-sm-2 col-md-2">
            <a href="http://localhost/ecstasy_html/"><i class="fa fa-home" aria-hidden="true"></i></a>
         </div>
         <div class="col-8 col-sm-8 col-md-8"> </div>
         <div class="col-2 col-sm-2 col-md-2">
            <i id="sidebar_hide" class="fa fa-times" aria-hidden="true"></i>
         </div>
         <div class="side_nav">
            <ul>
               <li class="nav-item dmenu dropdown">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  New In
                  </a>
                  <div class="sm-menu" aria-labelledby="navbarDropdown" id="custom_submenu">
                     <a class="dropdown-item" href="#"> Casual Shirt</a>
                     <a class="dropdown-item" href="#">Panjabi/Kurta</a>
                     <a class="dropdown-item" href="#">Perfume</a>
                     <a class="dropdown-item" href="#">Socks</a>
                     <a class="dropdown-item" href="#">Polo</a>
                     <a class="dropdown-item" href="#">Chinos</a>
                     <a class="dropdown-item" href="#">Shorts</a>
                     <a class="dropdown-item" href="#">T Shirts</a>
                  </div>
               </li>
               <li> <a href="#">TANJIM SQUAD</a> </li>
               <li class="nav-item dmenu dropdown">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Winter
                  </a>
                  <div class="sm-menu" aria-labelledby="navbarDropdown" id="custom_submenu">
                     <a class="dropdown-item" href="#">Casual Shirt</a>
                     <a class="dropdown-item" href="#">Panjabi/Kurta</a>
                     <a class="dropdown-item" href="#">Perfume</a>
                     <a class="dropdown-item" href="#">Socks</a>
                     <a class="dropdown-item" href="#">Polo</a>
                     <a class="dropdown-item" href="#">Chinos</a>
                     <a class="dropdown-item" href="#">Shorts</a>
                     <a class="dropdown-item" href="#">T Shirts</a>
                  </div>
               </li>
               <li class="nav-item dmenu dropdown">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Shirts & Tees
                  </a>
                  <div class="sm-menu" aria-labelledby="navbarDropdown" id="custom_submenu">
                     <a class="dropdown-item" href="#">Casual Shirt</a>
                     <a class="dropdown-item" href="#">Panjabi/Kurta</a>
                     <a class="dropdown-item" href="#">Perfume</a>
                     <a class="dropdown-item" href="#">Socks</a>
                     <a class="dropdown-item" href="#">Polo</a>
                     <a class="dropdown-item" href="#">Chinos</a>
                     <a class="dropdown-item" href="#">Shorts</a>
                     <a class="dropdown-item" href="#">T Shirts</a>
                  </div>
               </li>

               <li class="nav-item dmenu dropdown">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Ethnic & Festive Wear
                  </a>
                  <div class="sm-menu" aria-labelledby="navbarDropdown" id="custom_submenu">
                     <a class="dropdown-item" href="#">Casual Shirt</a>
                     <a class="dropdown-item" href="#">Panjabi/Kurta</a>
                     <a class="dropdown-item" href="#">Perfume</a>
                     <a class="dropdown-item" href="#">Socks</a>
                     <a class="dropdown-item" href="#">Polo</a>
                     <a class="dropdown-item" href="#">Chinos</a>
                     <a class="dropdown-item" href="#">Shorts</a>
                     <a class="dropdown-item" href="#">T Shirts</a>
                  </div>
               </li>
               <li class="nav-item dmenu dropdown">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pants
                  </a>
                  <div class="sm-menu" aria-labelledby="navbarDropdown" id="custom_submenu">
                     <a class="dropdown-item" href="#">Casual Shirt</a>
                     <a class="dropdown-item" href="#">Panjabi/Kurta</a>
                     <a class="dropdown-item" href="#">Perfume</a>
                     <a class="dropdown-item" href="#">Socks</a>
                     <a class="dropdown-item" href="#">Polo</a>
                     <a class="dropdown-item" href="#">Chinos</a>
                     <a class="dropdown-item" href="#">Shorts</a>
                     <a class="dropdown-item" href="#">T Shirts</a>
                  </div>
               </li>
               <li class="nav-item dmenu dropdown">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Footwear
                  </a>
                  <div class="sm-menu" aria-labelledby="navbarDropdown" id="custom_submenu">
                     <a class="dropdown-item" href="#">Casual Shirt</a>
                     <a class="dropdown-item" href="#">Panjabi/Kurta</a>
                     <a class="dropdown-item" href="#">Perfume</a>
                     <a class="dropdown-item" href="#">Socks</a>
                     <a class="dropdown-item" href="#">Polo</a>
                     <a class="dropdown-item" href="#">Chinos</a>
                     <a class="dropdown-item" href="#">Shorts</a>
                     <a class="dropdown-item" href="#">T Shirts</a>
                  </div>
               </li>
               <li class="nav-item dmenu dropdown">
                  <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Accessories
                  </a>
                  <div class="sm-menu" aria-labelledby="navbarDropdown" id="custom_submenu">
                     <a class="dropdown-item" href="#">Casual Shirt</a>
                     <a class="dropdown-item" href="#">Panjabi/Kurta</a>
                     <a class="dropdown-item" href="#">Perfume</a>
                     <a class="dropdown-item" href="#">Socks</a>
                     <a class="dropdown-item" href="#">Polo</a>
                     <a class="dropdown-item" href="#">Chinos</a>
                     <a class="dropdown-item" href="#">Shorts</a>
                     <a class="dropdown-item" href="#">T Shirts</a>
                  </div>
               </li>

            </ul>
         </div>
      </div>  
   </div> 
   <div class="desktop_navbar">
      <div class="container-fluid header_nav">
         <div class="row">
            <div class="col-md-5">
               <ul>
                  <li class="nav-item"><a class="nav-link" href="/ecstasy_html/man.php">Men</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Women</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Lifestyle</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Offers</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Gift Voucher</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Winter</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Sale</a></li>
               </ul>
            </div>
            <div class="col-md-2 logo">
            <a href="/ecstasy_html/home.php"><img src="images/logo2.png" alt=""></a>
            </div>
            <div class="col-md-5">
               <ul class="user_panel">
                  <li class="nav-item login_register_parent">
                     <a class="nav-link" href="#"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                     <div class="login_register">
                         <p><a href="#">Login</a> </p>
                         <p><a href="#">Register</a> </p>
                     </div>
                  </li>
                  <li class="nav-item" id="cart_parent">
                     <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                     <div class="cart_div">
                        <div class="cart_title">
                           <h5>YOUR SHOPPING BAG</h5>
                        </div>
                        <table class="table">
                           <tbody>
                                 <tr>
                                    <td> <img src="images/shirt.png" alt="prduct.png" height="" width="80px"> </td>
                                    <td> 
                                       <b>BLACK LEATHER CHELSEA BOOTS</b> 
                                       <p class="cart_size">SIZE: <strong>38</strong></p>
                                       <div class="cart_qty cart_header">
                                             <input type="text" min="1" value="1">
                                       </div>
                                       <div class="price">৳ 7749.00</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td> <img src="images/shirt.png" alt="prduct.png" height="" width="80px"> </td>
                                    <td> 
                                       <b>BLACK LEATHER CHELSEA BOOTS</b> 
                                       <p class="cart_size">SIZE: <strong>38</strong></p>
                                       <div class="cart_qty cart_header">
                                             <input type="text" min="1" value="1">
                                       </div>
                                       <div class="price">৳ 7749.00</div>
                                    </td>
                                 </tr>
                                 <tr>
                                    <td> <img src="images/shirt.png" alt="prduct.png" height="" width="80px"> </td>
                                    <td> 
                                       <b>BLACK LEATHER CHELSEA BOOTS</b> 
                                       <p class="cart_size">SIZE: <strong>38</strong></p>
                                       <div class="cart_qty cart_header">
                                             <input type="text" min="1" value="1">
                                       </div>
                                       <div class="price">৳ 7749.00</div>
                                    </td>
                                 </tr>  
                                 <tr class="sub_total">
                                    <td><b>Sub Tatal:</b></td>
                                    <td class="text-right"><b>৳ 7749.00</b></td>
                                 </tr>                        
                           </tbody>
                        </table>
                        <div class="cart_btn">
                           <span>Go To Cart</span>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item">
                     <form action="#" class="header_search">
                        <i class="fa fa-search" aria-hidden="true"></i>
                        <input type="text" name="searh" placeholder="Seach Store..">
                     </form>
                  </li>
               </ul>
            </div> 
         </div>        
      </div>
      <nav class="navbar navbar-expand-lg navbar-light uniq_nab_header">
         <div class="container-fluid">
            <div class="collapse navbar-collapse">
               <ul class="navbar-nav navbar-light">
                  <li class="nav-item dropdown megamenu-li dmenu">
                     <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">New In</a>
                     <div class="dropdown-menu megamenu sm-menu border-top men_dropdown" aria-labelledby="dropdown01">
                        <div class="row">
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                              <a class="dropdown-item" href="#"> Polo</a>
                              <a class="dropdown-item" href="#">T-Shirts</a>
                              <a class="dropdown-item" href="#">Dress Shirt</a>
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                              <a class="dropdown-item" href="#">T-Shirts</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                           </div>
                           <div class="col-sm-6 col-lg-4 mb-4 mega_img">
                              <img src="images/1.png" alt="">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown megamenu-li dmenu">
                     <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Winter</a>
                     <div class="dropdown-menu megamenu sm-menu border-top men_dropdown" aria-labelledby="dropdown01">
                        <div class="row">
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Jackets</a>
                              <a class="dropdown-item" href="#">Sweater</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                           </div>
                           <div class="col-sm-6 col-lg-4 mb-4 mega_img">
                              <img src="images/2.png" alt="">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item"><a class="nav-link" href="#">TANJIM SQUAD</a></li>
                  <li class="nav-item dropdown megamenu-li dmenu">
                     <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shirts & Tees</a>
                     <div class="dropdown-menu megamenu sm-menu border-top men_dropdown" aria-labelledby="dropdown01">
                        <div class="row">
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Jackets</a>
                              <a class="dropdown-item" href="#">Sweater</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                           </div>
                           <div class="col-sm-6 col-lg-4 mb-4 mega_img">
                              <img src="images/3.png" alt="">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown megamenu-li dmenu">
                     <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ethnic & Festive Wear</a>
                     <div class="dropdown-menu megamenu sm-menu border-top men_dropdown" aria-labelledby="dropdown01">
                        <div class="row">
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Jackets</a>
                              <a class="dropdown-item" href="#">Sweater</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                              <a class="dropdown-item" href="#"> Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                           </div>
                           <div class="col-sm-6 col-lg-4 mb-4 mega_img">
                              <img src="images/4.png" alt="">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown megamenu-li dmenu">
                     <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pents</a>
                     <div class="dropdown-menu megamenu sm-menu border-top men_dropdown" aria-labelledby="dropdown01">
                        <div class="row">
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Jackets</a>
                              <a class="dropdown-item" href="#">Sweater</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                              <a class="dropdown-item" href="#"> Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                           </div>
                           <div class="col-sm-6 col-lg-4 mb-4 mega_img">
                              <img src="images/5.png" alt="">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown megamenu-li dmenu">
                     <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Footwear</a>
                     <div class="dropdown-menu megamenu sm-menu border-top men_dropdown" aria-labelledby="dropdown01">
                        <div class="row">
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Jackets</a>
                              <a class="dropdown-item" href="#">Sweater</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                              <a class="dropdown-item" href="#"> Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                           </div>
                           <div class="col-sm-6 col-lg-4 mb-4 mega_img">
                              <img src="images/6.png" alt="">
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown megamenu-li dmenu">
                     <a class="nav-link dropdown-toggle" href="" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accessories</a>
                     <div class="dropdown-menu megamenu sm-menu border-top men_dropdown" aria-labelledby="dropdown01">
                        <div class="row">
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#">Jackets</a>
                              <a class="dropdown-item" href="#">Sweater</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                              <a class="dropdown-item" href="#">Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                              <a class="dropdown-item" href="#"> Polo</a>
                           </div>
                           <div class="col-sm-6 col-lg-2 mb-4">
                              <a class="dropdown-item" href="#"> Casual Shirt</a>
                           </div>
                           <div class="col-sm-6 col-lg-4 mb-4 mega_img">
                              <img src="images/7.png" alt="">
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </div>
</section>  
