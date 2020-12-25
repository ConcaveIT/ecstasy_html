<?php
include('default/header.php');
?>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109054116-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109054116-1');
</script>
<script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.bundle.js"></script>

<section id="man_section_1">
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/men/slider1.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/men/slider2.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/men/slider3.jpeg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/men/slider4.jpeg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <ol class="carousel-indicators">
            <li data-target="#carousel-thumb" data-slide-to="0" class="active"> <img class="d-block w-100" src="images/men/slider1.jpeg" class="img-fluid"></li>
            <li data-target="#carousel-thumb" data-slide-to="1"><img class="d-block w-100" src="images/men/slider2.jpeg" class="img-fluid"></li>
            <li data-target="#carousel-thumb" data-slide-to="2"><img class="d-block w-100" src="images/men/slider3.jpeg" class="img-fluid"></li>
            <li data-target="#carousel-thumb" data-slide-to="3"><img class="d-block w-100" src="images/men/slider4.jpeg" class="img-fluid"></li>
        </ol>
    </div>
</section>
<section id="man_section_2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="/ecstasy_html/men_single.php">
                <div class="man_parent">
                    <img src="images/men/1.png" alt="">
                    <div class="man_child">
                        <h3>Hoodies</h3>
                        <p>shop now</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4 pl_o_pr_o">
                <div class="man_parent">
                    <img src="images/men/2.png" alt="">
                    <div class="man_child">
                        <h3>Winter 20/21</h3>
                        <p>shop now</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="man_parent">
                    <img src="images/men/7.png" alt="">
                    <div class="man_child">
                        <h3>Sweatshirts</h3>
                        <p>shop now</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="man_parent">
                    <img src="images/men/4.png" alt="">
                    <div class="man_child">
                        <h3>Tanjim Jeans</h3>
                        <p>shop now</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 pl_o_pr_o">
                <div class="man_parent">
                    <img src="images/men/5.png" alt="">
                    <div class="man_child">
                        <h3>Blazers</h3>
                        <p>shop now</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="man_parent">
                    <img src="images/men/6.png" alt="">
                    <div class="man_child">
                        <h3>Joggers</h3>
                        <p>shop now</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="man_section_3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="man_parent full_width_img">
                    <img src="images/men/8.png" alt="">
                    <div class="man_child">
                        <h3>Accessories</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <div class="man_parent full_width_img">
                    <img src="images/men/9.png" alt="">
                    <div class="man_child">
                        <h3>Casual Shirts</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<button onclick="topFunction()" id="myBtn" title="Go to top">
<img src="images/scroll_top.png" alt="">
</button>
<?php
include('default/men_footer.php');
include('default/footer.php');
?>