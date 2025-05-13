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

    <title>World Guide | Our Company</title>
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
                <h1>WORLD GUIDE HOLDING GROUP AUSTRALIA PTY LIMITED</h1>
                <p>Have you ever thought of owning a house or had troubles importing a car from abroad. Are you a businessperson or an entrepreneur who wants to grow his business and increase profit margin by creating the best website for your business? Well worry not; World Guide Holding Group Australia Pty Limited has got you covered. World Guide has a rich heritage and a long history of operation, after its establishment in 1980 by David William Smith in Sydney,New South Wales Australia on a strong principle of journalism; it is the most important global travel resource. We are dedicated to providing accurate, objective, reliable and informative travel content with history of countries and cities, tourist attractions, travel tips, monuments and major landmarks, accommodation, nearby excursions, city transport, restaurants and shopping, airports etc. We are a diverse, fast-growing and innovative global business for travels and general services. We are here to ease your travel and general consumer comfort ability in acquiring important services just by a touch of a button. <br><br>
                    World Guide Holding Group Pty Limited has lost to offer our clients and the services we provide include:
                </p>
            </div>
        </div>
     </div>
    
    <section class="light">
        <div class="container py-2">
    
            <article class="postcard light blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./img/worldguide-re1.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue">
                        <img src="assets/public-site/img/company1.png" alt="">
                    </h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Have you ever thought of owning your own homestead? Well World guide/real-estate has the best deals for you. We offer our clients a variety of ideal choices from Luxurious villas, rental apartments, cafes, and farm houses etc that have a serene environmental and comfort ability. We have a direct line for our clients to contact our agent for any assistances and also direct contacts to specific property agents. Find your property by a fingertip. You could also visit our site: https://www.worldguide.com.au/real-estate for more information.</div>
                </div>
            </article>
            <article class="postcard light red">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./img/worldcars-g1.jpg" alt="Image Title" />	
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title red">
                        <img src="assets/public-site/img/company2.png" alt="">
                    </h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">World guide holding group pty limited offers clients a platform to own any of their dream cars. From luxury sports cars to family vans all at the tip of your finger. World guide have the best deals for cars and also serves its customers with deliveries of their purchases all around the world to their doorstep. Join us today and have a pick of your dream cars and get transported anywhere around the globe. Visit: https://world-guide.org/Cars for more information.</div>

                </div>
            </article>
            <article class="postcard light blue">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./img/worldguide-re1.jpg" alt="Image Title" />
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title blue">
                        <img src="assets/public-site/img/company1.png" alt="">
                    </h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">Have you ever thought of owning your own homestead? Well World guide/real-estate has the best deals for you. We offer our clients a variety of ideal choices from Luxurious villas, rental apartments, cafes, and farm houses etc that have a serene environmental and comfort ability. We have a direct line for our clients to contact our agent for any assistances and also direct contacts to specific property agents. Find your property by a fingertip. You could also visit our site: <a href="#">https://www.worldguide.com.au/real-estate</a> for more information.</div>
                </div>
            </article>
            <article class="postcard light red">
                <a class="postcard__img_link" href="#">
                    <img class="postcard__img" src="./img/worldcars-g1.jpg" alt="Image Title" />	
                </a>
                <div class="postcard__text t-dark">
                    <h1 class="postcard__title red">
                        <img src="assets/public-site/img/company2.png" alt="">
                    </h1>
                    <div class="postcard__bar"></div>
                    <div class="postcard__preview-txt">World guide holding group pty limited offers clients a platform to own any of their dream cars. From luxury sports cars to family vans all at the tip of your finger. World guide have the best deals for cars and also serves its customers with deliveries of their purchases all around the world to their doorstep. Join us today and have a pick of your dream cars and get transported anywhere around the globe. Visit: <a href="#">https://world-guide.org/Cars</a> for more information.</div>

                </div>
            </article>
        </div>
    </section>
    <!-- =========== POLICY END HERE ========= -->
    <!-- =========== FOOTER START HERE ========= -->
    <x-public-footer/>
    <!-- =========== FOOTER END HERE ========= -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>