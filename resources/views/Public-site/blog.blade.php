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

    <title>World Guide | Blog</title>
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
     <!--  =================== BLOG CARDS START HERE  ============================== -->
     <div class="container blog-card-sec mt-5">
      <div class="row">
        <a href="/blog-details">
          <div class="col-md-4 mt-5">     
            <!-- Cards: User -->
            <div class="user-card">
              <!-- Card Cover/Avatar -->
              <div class="card-cover" style="background-image: url('./img/blog1.jpg');">
                <div class="avatar-wrapper">
                  <div class="avatar">
                    <img src="https://cdn.tailkit.com/media/placeholders/avatar-c_GmwfHBDzk-160x160.jpg" alt="User Avatar" class="avatar-img">
                  </div>
                </div>
              </div>
              <!-- END Card Cover/Avatar -->
              <!-- Card Body -->
              <div class="card-body">
                <p class="card-info">Blog</p>
                <h3 class="card-name">The 10 most beautiful holiday <br> destinations in the world</h3>
                <div class="card-body">
                  <a href="#" class="card-link"><i class="fa-solid fa-user"></i> rakib2019</a>
                  <a href="#" class="card-link"><i class="fa-solid fa-calendar"></i> 15/04/2019</a>
                </div>
              </div>
              <!-- END Card Body -->
            </div>
            <!-- END Cards: User -->
                  </div>
        </a>
        <div class="col-md-4 mt-5">     
          <!-- Cards: User -->
          <div class="user-card">
            <!-- Card Cover/Avatar -->
            <div class="card-cover" style="background-image: url('./img/blog1.jpg');">
              <div class="avatar-wrapper">
                <div class="avatar">
                  <img src="https://cdn.tailkit.com/media/placeholders/avatar-c_GmwfHBDzk-160x160.jpg" alt="User Avatar" class="avatar-img">
                </div>
              </div>
            </div>
            <!-- END Card Cover/Avatar -->
            <!-- Card Body -->
            <div class="card-body">
              <p class="card-info">Blog</p>
              <h3 class="card-name">The 10 most beautiful holiday <br> destinations in the world</h3>
              <div class="card-body">
                <a href="#" class="card-link"><i class="fa-solid fa-user"></i> rakib2019</a>
                <a href="#" class="card-link"><i class="fa-solid fa-calendar"></i> 15/04/2019</a>
              </div>
            </div>
            <!-- END Card Body -->
          </div>
          <!-- END Cards: User -->
                </div>
                <div class="col-md-4 mt-5">     
                  <!-- Cards: User -->
                  <div class="user-card">
                    <!-- Card Cover/Avatar -->
                    <div class="card-cover" style="background-image: url('./img/blog1.jpg');">
                      <div class="avatar-wrapper">
                        <div class="avatar">
                          <img src="https://cdn.tailkit.com/media/placeholders/avatar-c_GmwfHBDzk-160x160.jpg" alt="User Avatar" class="avatar-img">
                        </div>
                      </div>
                    </div>
                    <!-- END Card Cover/Avatar -->
                    <!-- Card Body -->
                    <div class="card-body">
                      <p class="card-info">Blog</p>
                      <h3 class="card-name">The 10 most beautiful holiday <br> destinations in the world</h3>
                      <div class="card-body">
                        <a href="#" class="card-link"><i class="fa-solid fa-user"></i> rakib2019</a>
                        <a href="#" class="card-link"><i class="fa-solid fa-calendar"></i> 15/04/2019</a>
                      </div>
                    </div>
                    <!-- END Card Body -->
                  </div>
                  <!-- END Cards: User -->
                        </div>
                        <div class="col-md-4 mt-5">     
                          <!-- Cards: User -->
                          <div class="user-card">
                            <!-- Card Cover/Avatar -->
                            <div class="card-cover" style="background-image: url('./img/blog1.jpg');">
                              <div class="avatar-wrapper">
                                <div class="avatar">
                                  <img src="https://cdn.tailkit.com/media/placeholders/avatar-c_GmwfHBDzk-160x160.jpg" alt="User Avatar" class="avatar-img">
                                </div>
                              </div>
                            </div>
                            <!-- END Card Cover/Avatar -->
                            <!-- Card Body -->
                            <div class="card-body">
                              <p class="card-info">Blog</p>
                              <h3 class="card-name">The 10 most beautiful holiday <br> destinations in the world</h3>
                              <div class="card-body">
                                <a href="#" class="card-link"><i class="fa-solid fa-user"></i> rakib2019</a>
                                <a href="#" class="card-link"><i class="fa-solid fa-calendar"></i> 15/04/2019</a>
                              </div>
                            </div>
                            <!-- END Card Body -->
                          </div>
                          <!-- END Cards: User -->
                                </div>
                                <div class="col-md-4 mt-5">     
                                  <!-- Cards: User -->
                                  <div class="user-card">
                                    <!-- Card Cover/Avatar -->
                                    <div class="card-cover" style="background-image: url('./img/blog1.jpg');">
                                      <div class="avatar-wrapper">
                                        <div class="avatar">
                                          <img src="https://cdn.tailkit.com/media/placeholders/avatar-c_GmwfHBDzk-160x160.jpg" alt="User Avatar" class="avatar-img">
                                        </div>
                                      </div>
                                    </div>
                                    <!-- END Card Cover/Avatar -->
                                    <!-- Card Body -->
                                    <div class="card-body">
                                      <p class="card-info">Blog</p>
                                      <h3 class="card-name">The 10 most beautiful holiday <br> destinations in the world</h3>
                                      <div class="card-body">
                                        <a href="#" class="card-link"><i class="fa-solid fa-user"></i> rakib2019</a>
                                        <a href="#" class="card-link"><i class="fa-solid fa-calendar"></i> 15/04/2019</a>
                                      </div>
                                    </div>
                                    <!-- END Card Body -->
                                  </div>
                                  <!-- END Cards: User -->
                                        </div>
                                        <div class="col-md-4 mt-5">     
                                          <!-- Cards: User -->
                                          <div class="user-card">
                                            <!-- Card Cover/Avatar -->
                                            <div class="card-cover" style="background-image: url('./img/blog1.jpg');">
                                              <div class="avatar-wrapper">
                                                <div class="avatar">
                                                  <img src="https://cdn.tailkit.com/media/placeholders/avatar-c_GmwfHBDzk-160x160.jpg" alt="User Avatar" class="avatar-img">
                                                </div>
                                              </div>
                                            </div>
                                            <!-- END Card Cover/Avatar -->
                                            <!-- Card Body -->
                                            <div class="card-body">
                                              <p class="card-info">Blog</p>
                                              <h3 class="card-name">The 10 most beautiful holiday <br> destinations in the world</h3>
                                              <div class="card-body">
                                                <a href="#" class="card-link"><i class="fa-solid fa-user"></i> rakib2019</a>
                                                <a href="#" class="card-link"><i class="fa-solid fa-calendar"></i> 15/04/2019</a>
                                              </div>
                                            </div>
                                            <!-- END Card Body -->
                                          </div>
                                          <!-- END Cards: User -->
                                                </div>
                                                <div class="col-md-4 mt-5">     
                                                  <!-- Cards: User -->
                                                  <div class="user-card">
                                                    <!-- Card Cover/Avatar -->
                                                    <div class="card-cover" style="background-image: url('./img/blog1.jpg');">
                                                      <div class="avatar-wrapper">
                                                        <div class="avatar">
                                                          <img src="https://cdn.tailkit.com/media/placeholders/avatar-c_GmwfHBDzk-160x160.jpg" alt="User Avatar" class="avatar-img">
                                                        </div>
                                                      </div>
                                                    </div>
                                                    <!-- END Card Cover/Avatar -->
                                                    <!-- Card Body -->
                                                    <div class="card-body">
                                                      <p class="card-info">Blog</p>
                                                      <h3 class="card-name">The 10 most beautiful holiday <br> destinations in the world</h3>
                                                      <div class="card-body">
                                                        <a href="#" class="card-link"><i class="fa-solid fa-user"></i> rakib2019</a>
                                                        <a href="#" class="card-link"><i class="fa-solid fa-calendar"></i> 15/04/2019</a>
                                                      </div>
                                                    </div>
                                                    <!-- END Card Body -->
                                                  </div>
                                                  <!-- END Cards: User -->
                                                        </div>
      </div>
    </div>
     <!--  =================== BLOG CARDS END HERE  ============================== -->

    <!-- =========== ABOUT US START HERE ========= -->
     <div class="container-fluid mt-5 about-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1 class=" text-center">You Welcome To Write Your Blog</h1>
                    <h2>Please <a href="#">log in </a>to submit content!</h2>
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