<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Beauty Queen</title>
   <link rel="stylesheet" href="css/bootstrap.4.1.1.css">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <script src="js/bootstrap.4.1.1.js"></script>
   <script src="js/jquery.3.2.1.js"></script>
  
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<section id="header">
   <div class="container-fluid mobile_navbar">
      <div class="row">
         <div class="col-5 col-xs-5 col-sm-5 col-md-5 logo">
            <img src="images/logo.png" alt="">
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
              <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
            </ul>
         </div> 
      </div>
      <div class="row">
         <div class="col-12 mobile_mini">
            <ul>
               <li><li class="nav-item"><a class="nav-link" href="#"><i id="sidebar_show" class="fa fa-bars" aria-hidden="true"></i></a></li></li>
               <li> <a href="#">Men</a> </li>
               <li> <a href="#">Women</a> </li>
               <li> <a href="#">Lifestyle</a> </li>
               <li> <a href="#">Offers</a> </li>
            </ul>
         </div>
      </div>
      <div class="row sidebar">
         <div class="col-2 col-sm-2 col-md-2">
            <i class="fa fa-home" aria-hidden="true"></i>
         </div>
         <div class="col-8 col-sm-8 col-md-8"> </div>
         <div class="col-2 col-sm-2 col-md-2">
            <i id="sidebar_hide" class="fa fa-times" aria-hidden="true"></i>
         </div>
         <div class="side_nav">
            <ul>

            <li class="nav-item dmenu dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
                </a>
                <div class="dropdown-menu sm-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Software Development</a>
                    <a class="dropdown-item" href="#">Web Designing & Development</a>
                    <a class="dropdown-item" href="#">Mobile Application</a>
                    <a class="dropdown-item" href="#">Business Solutions & Business Process</a>
                    <a class="dropdown-item" href="#">Digital Marketing & SEO Services</a>
                    <a class="dropdown-item" href="#">Web Hosting & Maintenance</a>
                    <a class="dropdown-item" href="#">Cyber Security</a>
                    <a class="dropdown-item" href="#">Block Chain Implementation</a>
                    <a class="dropdown-item" href="#">Big Data</a>
                </div>
            </li>

               <li> <a href="#">Men</a> </li>
               <li> <a href="#">Women</a> </li>
               <li> <a href="#">Lifestyle</a> </li>
               <li> <a href="#">Offers</a> </li>
               <li> <a href="#">Gift Voucher</a> </li>
               <li> <a href="#">Winter</a> </li>
               <li> <a href="#">Sale</a> </li>
               <li> <a href="#">Stor Location</a> </li>
            </ul>
         </div>
      </div>  
   </div> 
   <div class="desktop_navbar">
      <div class="container-fluid header_nav">
         <div class="row">
            <div class="col-md-5">
               <ul>
                  <li class="nav-item"><a class="nav-link" href="#">Men</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Women</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Lifestyle</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Offers</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Gift Voucher</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Winter</a></li>
                  <li class="nav-item"><a class="nav-link" href="#">Sale</a></li>
               </ul>
            </div>
            <div class="col-md-2 logo">
               <img src="images/logo.png" alt="">
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
                  <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
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
      <nav class="navbar navbar-expand-lg navbar-light">
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

<section id="section_1">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-6 show_on_home_1 home_prent">
            <div class="home_child">
               <h3>Men</h3>
            </div>
         </div>
         <div class="col-md-6 show_on_home_2 home_prent">
            <div class="home_child">
               <h3>Women</h3>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 show_on_home_3 home_prent">
            <div class="home_child">
               <h3>Lifestyle</h3>
            </div>
         </div>
         <div class="col-md-6 show_on_home_4 home_prent">
            <div class="home_child">
               <h3>Offers</h3>
            </div>
         </div>
      </div>

   </div>
</section>

<section id="footer">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <p>Hotline: +8801958237701 </p>
            <p>Copyright © 2020 Ecstasy, All rights reserved. Developed by Team Zoetrope.</p>
         </div>
      </div>
   </div>
</section>

 <script src="js/custom.js"></script>
</body>
</html>