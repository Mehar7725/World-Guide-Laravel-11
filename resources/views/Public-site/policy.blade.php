<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style CSS Link -->
     <link rel="stylesheet" href="assets/public-site/css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>

     <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
{{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>World Guide | Policy</title>
  </head>
  <body>
    
    @if (Session::has('error'))
    <script>
  
          toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
  
                    
    </script>
    @endif
    @if (Session::has('success'))
    <script>
  
          toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('success') }}");
  
                    
    </script>
    @endif


    <!-- =========== NAVBAR START HERE ========= -->
    <x-public-nav/>
    <!-- =========== NAVBAR END HERE ========= -->
    <!-- =========== HEADER START HERE ========= -->
     <div class="container-fluid header-sec">
            <div class="row">
                <div class="col-md-12 p-0">
                    <img src="assets/public-site/img/about-hero-section.jpg">
                </div>
            </div>
     </div>
    <!-- =========== HEADER END HERE ========= -->
    <!-- =========== POLICY START HERE ========= -->
     <div class="container policy-sec">
        <div class="row">
            <div class="col-md-12">
                <h1>World Guide Policy</h1>
                <p>1.1 By downloading, browsing, accessing or using this our site www.world-guide.org, you agree to be bound by these Terms and Conditions of Use. We reserve the right to amend these terms and conditions at any time. If you disagree with any of these Terms and Conditions of Use, you must immediately discontinue your access to the website and your use of the services offered on the Mobile Application. Continued use of the website will constitute acceptance of these Terms and Conditions of Use, as may be amended from time to time. <br><br>
                    1.2 DEFINITIONS In these Terms and Conditions of Use, the following capitalised terms shall have the following meanings, except where the context otherwise requires:
                    “Account” means an account created by a User on the Website as part of Registration.
                    “Merchant” refers to any entity whose products or Samples can be purchased and/or redeemed (as the case may be) via the World Mall Shop<br><br>
                    1.3 REDEMPTIONS Need for registration: You must Register to make a Redemption from the website.<br><br>
                    1.4 website of these Terms and Conditions of Use: By making any Redemption, you acknowledge that the Redemption is subject to these Terms and Conditions of Use.<br><br>
                    1.5 World Guide Holding group Not Liable: For the avoidance of doubt, World Guide Holding shall not be liable for any losses or damages suffered by you resulting from a failure by the relevant Merchant to fulfil any Redemptions in accordance with Clause 4.4 or for a failure by us to deliver any products or Samples to you due to the unavailability of such products or Samples pursuant to Clause 4.5(c).<br><br>
                    1.6 Lost/stolen Samples: Neither we nor any Merchant shall be responsible for lost or stolen Samples or products that have been Redeemed.<br><br>
                    1.7 LOCATION ALERTS AND NOTIFICATIONS You agree to receive pre-programmed notifications (“Location Alerts”) on the website or Mobile Application from Merchants if you have turned on locational services on your mobile telephone or other handheld devices (as the case may be).<br><br>
                    1.8 YOUR OBLIGATIONS Merchant terms: You agree to (and shall) abide by the terms and conditions of the relevant Merchant for which your Redemption relates to, as may be amended from time to time.<br><br>
                    1.9 Accurate information: You warrant that all information provided on Registration and contained as part of your Account is true, complete and accurate and that you will promptly inform us of any changes to such information by updating the information in your Account.<br><br>
                    2 Content on the website and Service: It is your responsibility to ensure that any products, Samples or information available through the website or the Services meet your specific requirements.<br><br>
                    2.1 disclaimer www.World-Guide.org stating that we don’t own any of the photos and that all rights belong to the original creator<br><br>
                    2.2 many of contacts information on this site are from the Business owners directly,on other side there some of it from our users has been sent to us contacts information as a type of commendation for this kind of businesses and advised other users to test it <br><br>
                    <span>any one would like to delete any info will be welcome always</span></p>
            </div>
        </div>
     </div>
    <!-- =========== POLICY END HERE ========= -->
    <!-- =========== FOOTER START HERE ========= -->
    <x-public-footer/>
    <!-- =========== FOOTER END HERE ========= -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>