<?php
include('default/header.php');
?>
<style>
.uniq_nab_header{
    display:none;
}
</style>
<section id="sign_1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <h1>WELCOME, PLEASE SIGN IN!</h1>
            </div>
        </div>
    </div>
</section>

<section id="sign_2">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-2"></div>
            <div class="col-12 col-sm-12 col-md-8 fb_google">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-2"></div>
                    <div class="col-md-4 pl_o">
                        <div class="facebook">
                            <i class="fab fa-facebook" aria-hidden="true"></i> <span>Login With Facebook</span>
                        </div>
                    </div>
                    <div class="col-md-4 pr_o">
                        <div class="google">
                            <i class="fab fa-google" aria-hidden="true"></i> <span>Login With Google</span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-2"></div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-2"></div>
        </div>
    </div>
</section>



<section id="sign_3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-2"></div>
            <div class="col-12 col-sm-12 col-md-8 fb_google email_address">
                <h4>LOGIN WITH EMAIL ADDRESS</h4>
                <form action="">
                    <div class="form-group">
                        <label for="email">EMAIL:</label>
                        <input type="email" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <label for="email">PASSWORD:</label>
                        <input type="password" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <input type="checkbox">  <span> <strong>Remember Me</strong> </span>
                        <span style="float:right"> <a href="">Forgot password ?</a> </span>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="LOGIN" class="btn btn-info">
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-2"></div>
        </div>
    </div>
</section>


<section id="sign_3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-2"></div>
            <div class="col-12 col-sm-12 col-md-8 fb_google email_address">
                <h4>LOGIN WITH MOBILE NUMBER</h4>
                <form action="">
                    <div class="form-group">
                        <label for="email">COUNTRY CODE:</label>
                        <input type="email" class="form-control" value='+880'> 
                    </div>
                    <div class="form-group">
                        <label for="email">MOBILE NUMBER:</label>
                        <input type="email" class="form-control"> 
                    </div>
                    <div class="form-group">
                        <input type="submit" value="SIGNUP/LOGIN" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="col-12 col-sm-12 col-md-2"></div>
        </div>
    </div>
</section>


<?php
include('default/men_footer.php');
include('default/footer.php');
?>