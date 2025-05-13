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

    <title>World Guide | About Us</title>
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
    <!-- =========== ABOUT US START HERE ========= -->
     <div class="container-fluid mt-5 about-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h1>Who we are</h1>
                    <p>World Guide Holding Group Australia Pty Limited (ABN: 62 497 349 953) As a successful and respected name with regards to global travel and general services, World Guide has a rich heritage and a long history of operation. Built on sound principles of journalism, it is the most important global travel resource. We are dedicated to providing accurate, objective, reliable and informative travel content with history of countries and cities presented in different formats. Our publications include Professional version for the World guide for professionals linked with the travel and general services industry, the consumer version of the World Travel Guide, and many different licensed pieces as part of our solutions for the World Guide Content for our commercial partners. We are a diverse, fast-growing and innovative global business for travels and general services. Feel free to get in touch with us to get to know more.</p>
                    <h2>Contact Us: <a href="#">+61435740798</a></h2>
                    <h2>Email: co*****@wo*********.org</h2>
                </div>
                <div class="col-md-6 mt-5">
                    <h1>What are the people say about us</h1>
                    <p class="mb-5">We have exceeded our goals for makes any service and informations so easy for all users, how many people are going to our website, staying on our website and also calling us… We’ve always viewed our relationship with World Guide as an investment to keep us current in our community and to keep us relevant and our brand out there.</p>
                    <!-- VEDIO SECTION  -->
                    <iframe width="100%" height="380" src="https://www.youtube.com/embed/oQPqfkfjYcc" title="|| Big Problem Solved || A Good Travel Agent - World Guide ||" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
     </div>
    <!-- =========== ABOUT US END HERE ========= -->
    <!-- =========== FOOTER START HERE ========= -->
    <x-public-footer/>
    <!-- =========== FOOTER END HERE ========= -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>