<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="assets/public/indexStyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css"
      integrity="sha512-B46MVOJpI6RBsdcU307elYeStF2JKT87SsHZfRSkjVi4/iZ3912zXi45X5/CBr/GbCyLx6M1GQtTKYRd52Jxgw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <script
      src="https://kit.fontawesome.com/5aff4a9523.js"
      crossorigin="anonymous"
    ></script>

         <!-- Bootstrap CSS -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

         <script src="https://kit.fontawesome.com/5aff4a9523.js" crossorigin="anonymous"></script>
       <!-- jQuery -->
       <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
         
         {{-- =======Toastr CDN ======== --}}
     <link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     
     <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
     {{-- =======Toastr CDN ======== --}}
     
    <script>
      const isAuthenticated = @json(Auth::check());
  </script>
    <title>Policy</title>
  </head>
  <body class="relative">
    <!-- Navbar -->
    <script src="assets/public/JS/navbar.js"></script>
    <!-- =============================== -->
    <!-- Modal (Login) -->
    <!-- =============================== -->
    <x-public-login/>
    <!-- Policy Header Banner -->
    <div class="w-full h-[30vh] overflow-hidden relative mb-5">
      <div
        class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-30"
      ></div>
      <img
        src="assets/public/images/mountaincliff.jpg"
        class="w-full h-[30vh] object-cover scale-150"
        alt=""
      />
    </div>
    <!-- Policy Details -->
    <div class="w-full flex justify-center items-center">
      <div
        class="w-[80%] flex flex-col justify-center items-start gap-y-5 text-gray-500 my-14"
      >
        <div
          class="text-[1.5rem] font-semibold text-gray-600 text-center w-full mb-6"
        >
          World Guide Policy
        </div>
        <div>
          1.1 By downloading, browsing, accessing or using this our site
          www.world-guide.org, you agree to be bound by these Terms and
          Conditions of Use. We reserve the right to amend these terms and
          conditions at any time. If you disagree with any of these Terms and
          Conditions of Use, you must immediately discontinue your access to the
          website and your use of the services offered on the Mobile
          Application. Continued use of the website will constitute acceptance
          of these Terms and Conditions of Use, as may be amended from time to
          time.
        </div>
        <div class="">
          1.2 DEFINITIONS In these Terms and Conditions of Use, the following
          capitalised terms shall have the following meanings, except where the
          context otherwise requires:
        </div>

        <div class="">
          “Account” means an account created by a User on the Website as part of
          Registration.
        </div>
        <div class="">
          “Merchant” refers to any entity whose products or Samples can be
          purchased and/or redeemed (as the case may be) via the World Mall Shop
        </div>
        <div class="">
          1.3 REDEMPTIONS Need for registration: You must Register to make a
          Redemption from the website.
        </div>

        <div class="">
          1.4 website of these Terms and Conditions of Use: By making any
          Redemption, you acknowledge that the Redemption is subject to these
          Terms and Conditions of Use.
        </div>

        <div class="">
          1.5 World Guide Holding group Not Liable: For the avoidance of doubt,
          World Guide Holding shall not be liable for any losses or damages
          suffered by you resulting from a failure by the relevant Merchant to
          fulfil any Redemptions in accordance with Clause 4.4 or for a failure
          by us to deliver any products or Samples to you due to the
          unavailability of such products or Samples pursuant to Clause 4.5(c).
        </div>

        <div class="">
          1.6 Lost/stolen Samples: Neither we nor any Merchant shall be
          responsible for lost or stolen Samples or products that have been
          Redeemed.
        </div>

        <div class="">
          1.7 LOCATION ALERTS AND NOTIFICATIONS You agree to receive
          pre-programmed notifications (“Location Alerts”) on the website or
          Mobile Application from Merchants if you have turned on locational
          services on your mobile telephone or other handheld devices (as the
          case may be).
        </div>

        <div class="">
          1.8 YOUR OBLIGATIONS Merchant terms: You agree to (and shall) abide by
          the terms and conditions of the relevant Merchant for which your
          Redemption relates to, as may be amended from time to time.
        </div>
        <div class="">
          1.9 Accurate information: You warrant that all information provided on
          Registration and contained as part of your Account is true, complete
          and accurate and that you will promptly inform us of any changes to
          such information by updating the information in your Account.
        </div>

        <div class="">
          2 Content on the website and Service: It is your responsibility to
          ensure that any products, Samples or information available through the
          website or the Services meet your specific requirements.
        </div>
        <div class="">
          2.1 disclaimer www.World-Guide.org stating that we don’t own any of
          the photos and that all rights belong to the original creator
        </div>

        <div class="">
          2.2 many of contacts information on this site are from the Business
          owners directly,on other side there some of it from our users has been
          sent to us contacts information as a type of commendation for this
          kind of businesses and advised other users to test it
        </div>

        <div class="text-[red]">
          any one would like to delete any info will be welcome always
        </div>
      </div>
    </div>

    <!-- Footer -->
    <!-- Footer -->
    <div
      class="flex items-center justify-center w-full bg-[#363f48] py-12 flex gap-x-5 text-white mt-8"
      id="footer-navs"
    ></div>
    <script src="assets/public/JS/footer_bottom.js"></script>

    <script src="assets/public/JS/main.js"></script>
    <script src="assets/public/JS/LoginBtn.js"></script>


      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
