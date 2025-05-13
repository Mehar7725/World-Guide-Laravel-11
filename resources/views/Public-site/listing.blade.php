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
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.4.2.js"></script>

     <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
{{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>World Guide | Listing</title>
  </head>

  <style>
    .table i.fa-circle-xmark{
      color: #8fc6e7;
    }
  </style>
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
     <div class="container listing-sec mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2>Welcome everyone
                  At World Guide Holding Group, we support all types of business
                  So we put free ads to support everyone
                  But something happened that we didn’t expect which is
                  Many of advertisers became continue to repeated own Ad until became at the first of the list or first of the page
                  that’s made the Ads be duplicate, and made them not looks like great. <br><br>
                  So we decided that we created kind of levels to help your business to grow up as you like :- <br><br>
                  1-Prime level:-all participants ads will be at the top of the page<br>
                  2-Free ads will be at the bottom of the pages<br>
                  3-Static Ads will be appear on our Site <a href="#">Press Here</a><br>
                  4-App Ads will be professional and Static <a href="#">Press Here</a></h2>
                  <h3>We will prevent the publication of duplicate ads to avoid harassing visitors or our clients</h3>
            </div>
        </div>
        <!-- ============================== -->
         <div class="row listing-check-sec mt-5">
          {{-- Tab ===== 1 --}}
          <div class="col-md-7">
            <div class="form-check mb-2">
              <input class="form-check-input" name="pkg" type="radio" id="flexCheckDefault1"
              value="Static 90 Days Ads Site" data-pricing="$30" data-time="90 Day" onclick="Show_Div(Div_1)">
              <label class="form-check-label" for="flexCheckDefault1">
                Static 90 Days Ads Site
              </label>
              <p>$30 / Per Listing</p> 
            </div>
         

            {{-- Tab ===== 2 --}}
      
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="pkg"  id="flexCheckDefault2"
              value="App & Site Ads 1 Year- Static" data-pricing="$100" data-time="365 Day"  onclick="Show_Div(Div_2)">
              <label class="form-check-label" for="flexCheckDefault2">
                App & Site Ads 1 Year- Static
              </label>
              <p>$100 / Per Listing</p> 
            </div>  

            {{-- Tab ===== 3 --}}
          
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="pkg"  id="flexCheckDefault3"
              value="App & Site Ads 6 Year- Static" data-pricing="$70" data-time="2190 Day"  onclick="Show_Div(Div_3)">
              <label class="form-check-label" for="flexCheckDefault3">
                App & Site Ads 6 Year- Static
              </label>
              <p>$70 / Per Listing</p> 
            </div>
         

            {{-- Tab ===== 4 --}}
         
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="pkg"   id="flexCheckDefault4"
              value="App & Site Ads 3 Year- Static" data-pricing="$50" data-time="1095 Day"  onclick="Show_Div(Div_4)">
              <label class="form-check-label" for="flexCheckDefault4">
                App & Site Ads 3 Year- Static
              </label>
              <p>$50 / Per Listing</p> 
            </div>
     

            {{-- Tab ===== 5 --}}
      
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="pkg"   id="flexCheckDefault5" 
              value="Prime level" data-pricing="$20" data-time="60 Day"  onclick="Show_Div(Div_5)">
              <label class="form-check-label" for="flexCheckDefault5">
                Prime level
              </label>
              <p>$20 / Per Listing</p> 
            </div>
        

            {{-- Tab ===== 6 --}}
      
            <div class="form-check mb-2">
              <input class="form-check-input" type="radio" name="pkg"  id="flexCheckDefault6"
              value="Free Ads" data-pricing="Free" data-time="30 Day"  onclick="Show_Div(Div_6)">
              <label class="form-check-label" for="flexCheckDefault6">
                Free Ads
              </label>
              <p>Free / Per Listing</p> 
            </div>
          </div>


          {{-- Div Data 1 ============= --}}
          <div class="col-md-5"> 
          <div class=" ascunde table-responsive div_data_main" id="Div_1">
            <table class="table">
             
              <tbody>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Duration</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Contact Display</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Vedio</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Location</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Social Links</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Price Range</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Resurva</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Menu</td>
                </tr>
                 <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Deals-Offers-Discounts</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Events</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Lead Form</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Will be List of</td>
                </tr>


                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Image Gallery</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Tagline</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Website</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; FAQ</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Hours</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Timekit</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Announcement</td>
                </tr>
                 <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Competitors Ads</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Bookings</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Google Ads</td>
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Will be List of</td> --}}
                </tr>
              </tbody>
            </table>
             
      
            </div>
          


          {{-- Div Data 2 ============= --}}
          <div class="  ascunde table-responsive div_data_main" id="Div_2">
            <table class="table">
      
              <tbody>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Duration : 365 days</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Contact Display</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Vedio</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Location</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Social Links</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Price Range</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Resurva</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Menu</td>
                </tr>
                 <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Deals-Offers-Discounts</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Events</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Lead Form</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td>
                </tr>


                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Image Gallery</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Tagline</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Website</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; FAQ</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Hours</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Timekit</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Announcement</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Competitors Ads</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Bookings</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Google Ads</td>
                </tr>
                <tr>
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td> --}}
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Will be List of</td> --}}
                </tr>
              </tbody>
            </table>
             
        
          </div>


          {{-- Div Data 3 ============= --}}
          <div class="  ascunde table-responsive div_data_main" id="Div_3">
            <table class="table">
              <thead class="">
          
              </thead>
              <tbody>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Duration : 183 days</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Contact Display</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Vedio</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Location</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Social Links</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Price Range</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Resurva</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Menu</td>
                </tr>
                 <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Deals-Offers-Discounts</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Events</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Lead Form</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td>
                </tr>


                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Image Gallery</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Tagline</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Website</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; FAQ</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Hours</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Timekit</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Announcement</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Competitors Ads</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Bookings</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Google Ads</td>
                </tr>
                <tr>
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td> --}}
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Will be List of</td> --}}
                </tr>
              </tbody>
            </table>
             
          
          </div>


          {{-- Div Data 4 ============= --}}
          <div class="  ascunde table-responsive div_data_main" id="Div_4">
            <table class="table">
             
              <tbody>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Duration : 90 days</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Contact Display</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Vedio</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Location</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Social Links</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Price Range</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Resurva</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Menu</td>
                </tr>
                 <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Deals-Offers-Discounts</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Events</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Lead Form</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td>
                </tr>


                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Image Gallery</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Tagline</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Website</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; FAQ</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Hours</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Timekit</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Announcement</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Competitors Ads</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Bookings</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Google Ads</td>
                </tr>
                <tr>
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td> --}}
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Will be List of</td> --}}
                </tr>
              </tbody>
            </table>
          
          </div>


          {{-- Div Data 5 ============= --}}
          <div class="  ascunde table-responsive div_data_main" id="Div_5">
            <table class="table">
            
              <tbody>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Duration : 90 days</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Contact Display</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Vedio</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Location</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Social Links</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Price Range</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Resurva</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Menu</td>
                </tr>
                 <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Deals-Offers-Discounts</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Events</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Lead Form</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td>
                </tr>


                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Image Gallery</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Tagline</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Website</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; FAQ</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Hours</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Timekit</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Announcement</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Competitors Ads</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Bookings</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Google Ads</td>
                </tr>
                <tr>
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td> --}}
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Will be List of</td> --}}
                </tr>
              </tbody>
            </table>
             
            
          </div>


          {{-- Div Data 6 ============= --}}
          <div class="  ascunde table-responsive div_data_main" id="Div_6">
            <table class="table">
           
              <tbody>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Duration :</td>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Contact Display</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Vedio</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Location</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Social Links</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Price Range</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Resurva</td>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Menu</td>
                </tr>
                 <tr>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Deals-Offers-Discounts</td>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Events</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Lead Form</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td>
                </tr>


                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Image Gallery</td>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Business Tagline</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Website</td>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; FAQ</td>
                </tr>
                <tr>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Business Hours</td>
                  <td><i class="fa-solid fa-circle-xmark"></i>&nbsp; Timekit</td>
                </tr>
                <tr>
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Announcement</td> --}}
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Competitors Ads</td>
                </tr>
                <tr>
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Bookings</td>
                  <td><i class="fa-solid fa-circle-check"></i>&nbsp; Hide Google Ads</td> --}}
                </tr>
                <tr>
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Map Display</td> --}}
                  {{-- <td><i class="fa-solid fa-circle-check"></i>&nbsp; Will be List of</td> --}}
                </tr>
              </tbody>
            </table>
             
          
          </div>


          <div class="text-center mt-4 choose_btn_main  " style="display: none;" >
            <a  >
              <button class="btn btn-outline-primary btn-lg" id="btn-choose-plan">Choose Plan</button>
            </a>
          </div>


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
<script>
  function Show_Div(Div_id) {
    $('.div_data_main').hide();
  if (false == $(Div_id).is(':visible')) {
    $(Div_id).show(250);
    $('.choose_btn_main').show(250);
  }
  else {
    $('.choose_btn_main').hide(250);
    $(Div_id).hide(250);
  }
}


// Plan Selection and Submit Plan script =========

// Function to get the selected radio button's data attributes
function getSelectedPackageDetails() {
  const radioButtons = document.getElementsByName('pkg');
  for (const radio of radioButtons) {
    if (radio.checked) {
      // Return an object containing the pricing and time data attributes
      return {
        pricing: radio.getAttribute('data-pricing'),
        time: radio.getAttribute('data-time')
      };
    }
  }
  // Return null if no radio button is selected
  return null;
}




// Add event listener to the "Choose Plan" button
document.getElementById('btn-choose-plan').addEventListener('click', function () {
  const selectedPackage = getSelectedPackageDetails();
  if (selectedPackage) {
    // Extract pricing and time from the selected package
    const { pricing, time } = selectedPackage;

    // Encode the parameters to ensure they are URL-safe
    const encodedPricing = encodeURIComponent(pricing);
    const encodedTime = encodeURIComponent(time);

    // Construct the URL with query parameters
    const targetUrl = `/submit-listing?pricing=${encodedPricing}&time=${encodedTime}`;

    // Navigate to the constructed URL
    window.location.href = targetUrl;
  } else {
    // Alert the user to select a package if none is selected
    alert('Please select a package before proceeding.');
  }
});

</script>