<?php include('header.php'); ?>
			<section class="home-section" id="home_wrapper">		    
		<div class="home-section-overlay1"></div>
		<!--begin container -->
		<div class="container">
	        <!--begin row -->
	        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6">
              <div class="col-item calculator-block">
                <div class="form-block form-block_w">
                    <h2>Stop Counting Days Until Your Next Payday</h2>
                    <h2 class="banner-subhead">Borrow up to <span>$5,000<span></h2>
                    <form action="data_insert.php" method="post" data-parsley-validate="" id="first-form">                        
                        <div class="form-block__content">                     
                            <input type="hidden" name="apply_loan">
                            <input type="hidden" name="s1" value="<?=$s1;?>">
                            <input type="hidden" name="s2" value="<?=$s2;?>">
                            <input type="hidden" name="uid" value="<?=$uid;?>">
                            <input class="register-input" required="" name="firstName" placeholder="First Name" type="text" required>   
                            <input class="register-input" required="" name="lastName" placeholder="Last Name" type="text" required>   
                            <input class="register-input" required="" name="email" placeholder="Email Address" type="email" required>                           						
                            <input class="register-input" type="tel" name="amount" placeholder="Loan Amount ($100-$5000)" data-parsley-trigger="change" data-parsley-multiple-of="50" data-parsley-range="[100, 5000]" required="" maxlength="4" autocomplete="off" data-parsley-type="digits">
                             
                            <div class="form-block__btn btn-wrap btn-wrap_row row middle-xs between-xs">
                            <p class="terms" style="font-size:12px;margin-left:4%;margin-top:20px;color:#FFFFFF">
                              By clicking 'Get Started', you agree to our <a data-toggle="modal" data-target="#privacy-policy" href="#">Privacy Policy</a>, <a data-toggle="modal" data-target="#terms-of-service" href="#">Terms</a>, <a data-toggle="modal" data-target="#e-consent" href="#">E-Consent</a>, <a data-toggle="modal" data-target="#rates" href="#">Rate & Fees</a> and receive special offers from us and our marketing partners via email communication.
                            </p>
                            <button type="submit" id="loan_apply" class="submit-btn">Get Started</button>
                            </div>
                            
                        </div>
                    
                    </form>
                </div>
            </div>	  
            <div class="col-md-6 col-sm-12 col-lg-6">
            </div>        
            
            </div>
	            
	            <!--end col-md-5-->
	        </div>
	        <!--end row -->
		</div>
		<!--end container -->
    </section>
    
    <section class="how_it_work">
        
      <div class="container">
        <div class="row">
        <div class=" col-md-12 ">
          <h2 class="how_it_work_heading">How it Works</h2>
          <!-- <h3>Simply 3 steps to get loan</h3> -->
        
        </div>
          </div>
          <div class="row">
              <div class="col-md-4 col-sm-4">
                  <div class="Boxheight">
                  <div class="how_it_work_box1  worksboxes hover-up hover-line stp" data-sr-id="2">
                    <div class="step-head">
                      <img class="img-responsive" src="assets/images/icon-1.svg" alt="pic"> 
                      <h4> Submit your information</h4>
                    </div>
                      
                      <p>Fill out our simple online form which takes just a few minutes. It's a secure, easy, and fast process.</p>
                  </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-4">
                  
                <div class="Boxheight">
                <div class="how_it_work_box2  worksboxes hover-up hover-line stp1" data-sr-id="3">
                    <div class="step-head">
                      <img class="img-responsive" src="assets/images/icon-2.svg" alt="pic"> 
                      <h4>Fast loan decision</h4>
                    </div>
          
                      <p>Lenders are quick to respond and, if approved, will reach out to you as soon as they receive your request.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4">
                 <div class="Boxheight">
                 <div class="how_it_work_box3  worksboxes hover-up hover-line stp2" data-sr-id="5">
                    <div class="step-head">
                      <img class="img-responsive" src="assets/images/icon-3.svg" alt="pic"> 
                      <h4> Check your account</h4>
                    </div>
                      
                      <p>If your request is approved by the lender, the funds may be directly transferred into your bank account in as soon as the next business day.</p>
                  </div>
                 </div>
              </div>
          </div>  
      </div>
  </section>

    <section class="two_col_desc">
      <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <h2>A Loan With Any Credit Score</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <div class="side-icon-block">
                <div class="step-head">
                  <img class="img-responsive" src="assets/images/side-icon-1.svg" alt="pic"> 
                  <h4> Conditional decision<br> in minutes</h4>
                </div>
              </div>
              <div class="side-icon-block">
                <div class="step-head">
                  <img class="img-responsive" src="assets/images/side-icon-2.svg" alt="pic"> 
                  <h4>Less than perfect<br> credit accepted</h4>
                </div>
              </div>
              <div class="side-icon-block">
                <div class="step-head">
                  <img class="img-responsive" src="assets/images/side-icon-3.svg" alt="pic"> 
                  <h4> Safe & Secure<br> Protection</h4>
                </div>
              </div>
            </div>
            <div class="col-sm-8">
              <div class="content-block">
                  
                  <p>Our long list of lenders aren't rigid when it comes to credit history/score. By requesting for a loan via <?=$_SERVER['HTTP_HOST'];?>, you might get an offer depending on discretion of the lender. However, we don't guarantee you an acceptance of bad credit as it is completely at the discretion of the lender.</p>
                  <p>Disclosure: Some of our lenders may run soft credit/background checks via methods of their choice.</p>
                  <a href="#">Get Started</a>
              </div>
            </div>
          </div> 
      </div>
</section>	

    

        <section class="rv_cta">
          <div class="container">
            <section class="rc_cta_content">
            <div class="col-xs-12 col-sm-6 col-md-6">
              <img src="assets/images/footer-banner-img.png" style="width:50%;">
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6">
              <div class="rv_cta_desc">
                <h3>Request the money you need</h3>
                <p>Receive the money in your checking account as soon as next business day, if approved.</p>
              </div>
              
              <a href="#">Get Started</a>
            </div>           
            </div>
          </div>
        </section>

<?php include('footer.php'); ?>