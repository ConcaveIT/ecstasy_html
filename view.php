<?php
include('default/header.php');
?>


<section id="view_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12 pl_o">
        <ul>
          <li> <a href="#">Home</a>/ </li>
          <li> <a href="#">Men</a>/ </li>
          <li> <a href="#">Winter</a>/ </li>
          <li> <a href="#">Hoodies</a>/ </li>
          <li> <a href="#">Hodies with double pocket</a> </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section id="view_2">
  <div class="container">
    <div class="row">
      <div class="col-md-6 pl_o">
        <div id='el'></div>  
      </div>
      <div class="col-md-6">
        <p class="category"> < Hoodies</p>  
        <h1>HOODIE WITH FLAP POCKET</h1>
        <h3>৳ <strong>6213.00</strong></h3>
        <div class="star_rating">
          <ul>
            <li> <a href="#"> <i class="fa fa-star" aria-hidden="true"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-star" aria-hidden="true"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-star" aria-hidden="true"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-star" aria-hidden="true"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-star" aria-hidden="true"></i> </a> </li>
          </ul>
        </div>
        <div class="sku">
          <p>SKU: 10001761-1</p>
        </div>
        <div class="liniking_option">
          <ul>
            <li> <a href="#"> <i class="fa fa-heart" aria-hidden="true"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-random" aria-hidden="true"></i> </a> </li>
            <li> <a href="#"> <i class="fa fa-envelope" aria-hidden="true"></i> </a> </li>
          </ul>
        </div>
        <div class="row pt-4">
          <div class="col-md-2">
            <strong>Size <span style="color:red;">*</span> </strong>
          </div>
          <div class="col-md-7"></div>
          <div class="col-md-3 size_img">
            <a href="#"> <img src="images/shirt.png" alt="shirt.png"> <span>Find size</span></a>
          </div>

          <div class="col-md-12 size_selected">
            <select name="" id="">
              <option value="">XL</option>
              <option value="">2XL</option>
              <option value="">3XL</option>
            </select>
          </div>

          <div class="col-md-12">
            <div class="row cart_count view_page">
                <div class="col-2 col-sm-2 col-md-1"><span>-</span></div>
                <div class="col-2 col-sm-2 col-md-1"><input type="text" min='1' max='20' value="1"></div>
                <div class="col-2 col-sm-2 col-md-1"> <span>+</span> </div>
                <div class="col-6 col-sm-6 col-md-4"> <span class="add_to_cart">ADD TO CART</span> </div>
            </div>
          </div>

        </div>
      <div>
    </div>
  </div>
</section>

<section id="view_3">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-4 leftbar">
          <ul>
            <li> <span class="overview">Overview</span> </li>
            <li> <span class="review">Review</span> </li>
            <li> <span class="contact_part">Contact Us</span> </li>
          </ul>
      </div>
      <div class="col-12 col-sm-12 col-md-6">
          <div id="overview">
            <p>Slim fit adjustable hooded collar and long sleeves. Front pouch pocket. Ribbed trim. Slim fit adjustable hooded collar and long sleeves. Front pouch pocket. Ribbed trim.</p>
          </div>
          <div id="review">
            <p style="color:red">Only registered users can write reviews</p>
            <form action="#">
              <div class="form-group">
                <label for="email">REVIEW TITLE<span style="color:red">*</span> :</label>
                <input type="text" class="form-control"> 
              </div>
              <div class="form-group">
                <label for="pwd">REVIEW TEXT<span style="color:red">*</span>:</label>
                <textarea name="" id="" cols="30"></textarea>
              </div>
              <div class="form-group">
                <label for="pwd">RATING:</label>
                <input type="radio">
                <input type="radio">
                <input type="radio">
                <input type="radio">
                <input type="radio">
              </div>
              <button type="submit" class="btn btn-default">SUBMIT REVIEW</button>
            </form>
          </div>
          <div id="contact_part">
            <form action="#">
              <div class="form-group">
                <label for="email">YOUR NAME<span style="color:red">*</span> :</label>
                <input type="text" class="form-control" placeholder="Enter your name"> 
              </div>
              <div class="form-group">
                <label for="email">YOUR EMAIL<span style="color:red">*</span> :</label>
                <input type="text" class="form-control" placeholder="Enter your email address"> 
              </div>
              <div class="form-group">
                <label for="pwd">ENQUIRY<span style="color:red">*</span>:</label>
                <textarea name="" id="" cols="30" placeholder="Enter your enquiry"></textarea>
              </div>
              <button type="submit" class="btn btn-default">SUBMIT</button>
            </form>
          </div>
      </div>
      <div class="col-12 col-sm-12 col-md-2">
      </div> 
    </div>
  </div>
</section>


<script>
var urls = [
    'images/men/hodies1.jpg',
    'images/men/hodies2.jpg',
    'images/men/hodies3.jpg'
];
var options = {
    //thumbLeft:true,
    //thumbRight:true,
    //thumbHide:true,
    //width:300,
    //height:500,
};
$('#el').zoomy(urls,options);
</script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36251023-1']);
_gaq.push(['_setDomainName', 'jqueryscript.net']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<button onclick="topFunction()" id="myBtn" title="Go to top"> <img src="images/scroll_top.png" alt=""> </button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
    (function() {

    function addSeparator(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + '.' + '$2');
        }
        return x1 + x2;
    }

    function rangeInputChangeEventHandler(e){
        var rangeGroup = $(this).attr('name'),
            minBtn = $(this).parent().children('.min'),
            maxBtn = $(this).parent().children('.max'),
            range_min = $(this).parent().children('.range_min'),
            range_max = $(this).parent().children('.range_max'),
            minVal = parseInt($(minBtn).val()),
            maxVal = parseInt($(maxBtn).val()),
            origin = $(this).context.className;

        if(origin === 'min' && minVal > maxVal-5){
            $(minBtn).val(maxVal-5);
        }
        var minVal = parseInt($(minBtn).val());
        $(range_min).html(addSeparator(minVal*1000) + ' TK');


        if(origin === 'max' && maxVal-5 < minVal){
            $(maxBtn).val(5+ minVal);
        }
        var maxVal = parseInt($(maxBtn).val());
        $(range_max).html(addSeparator(maxVal*1000) + ' TK');
    }

    $('input[type="range"]').on( 'input', rangeInputChangeEventHandler);
    })();
</script>
<?php
include('default/men_footer.php');
include('default/footer.php');
?>
