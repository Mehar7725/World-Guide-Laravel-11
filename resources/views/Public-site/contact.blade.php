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

    <title>World Guide | Contact</title>
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
    <!-- =========== CONTACT START HERE ========= -->
     <div class="container-fluid mt-5 about-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1 class=" text-center">You Welcome to Contact With World Guide Team’s We here to help you</h1>
                    <!--  -->
                    <div class="row mt-5">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">First Name <span>*</span></label>
                          <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Last Name <span>*</span></label>
                          <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Email <span>*</span></label>
                          <input type="email" class="form-control" id="exampleFormControlInput1">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Comment or Message <span>*</span></label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <button type="button" class="btn-submit">Submit</button>
                      </div>
                    </div>
                    <!--  -->
                </div>
            </div>
        </div>
     </div>
    <!-- =========== CONTACT END HERE ========= -->
    <!-- =========== FOOTER START HERE ========= -->
    <x-public-footer/>
    <!-- =========== FOOTER END HERE ========= -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>