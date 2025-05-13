<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style CSS Link -->
     {{-- <link rel="stylesheet" href="assets/public-site/css/signup.css"> --}}
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
{{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>World Guide | Sign In</title>
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



<style>
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}

body {
  background: url('assets/public-site/img/Queenstown-New-Zealand.jpg'); /* Replace with your chosen gradient */
  /* background: linear-gradient(to right, #42A7DF, #00c8ffea, #c292fe); Replace with your chosen gradient */
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  color: black; /* Ensures text is readable against the background */
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;;
}
  .card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}
.submit_btn:hover{
  background-color: #247fbe;
}

.avatar-upload {
    position: relative;
    max-width: 205px;
   
    .avatar-edit {
        position: absolute;
        right: 64px;
        z-index: 1;
        top: 10px;
        input {
            display: none;
            + label {
                display: inline-block;
                width: 34px;
                height: 34px;
                margin-bottom: 0;
                border-radius: 100%;
                background: #FFFFFF;
                border: 1px solid transparent;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                cursor: pointer;
                font-weight: normal;
                transition: all .2s ease-in-out;
                &:hover {
                    background: #f1f1f1;
                    border-color: #d6d6d6;
                }
                &:after {
                    content: "\f0ee";
                    font-family: 'FontAwesome';
                    color: #757575;
                    position: absolute;
                    top: 10px;
                    left: 0;
                    right: 0;
                    text-align: center;
                    margin: auto;
                }
            }
        }
    }
    .avatar-preview {
        width: 150px;
        height: 150px;
        position: relative;
        border-radius: 100%;
        border: 6px solid #F8F8F8;
        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
        > div {
            width: 100%;
            height: 100%;
            border-radius: 100%;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
    }
}

@media(max-width:502px){
.social_btn{
  font-size: 13px;
}
}

.nav-link {
    display: block;
    padding: .5rem 1rem;
    color: #399add;
    text-decoration: none;
    transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
}

link:hover {
    color: #5ca6d4;
}

.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
    color: #fff;
    background-color: #399add;
}
</style>




    {{-- New Template Design ================ Start --}}

    

    <section class="h-100   ">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class=" card-registration my-4">
              <div class="row g-0">
                <div class="col-xl-3 d-none d-xl-block">
                  {{-- <img src="assets/public-site/img/Queenstown-New-Zealand.jpg" 
                    alt="Sample photo" class="img-fluid"
                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; height: 100%;" /> --}}
                </div>
                <div class="col-xl-6 card">



                  <!-- Pills navs -->
                  <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a class="nav-link active" id="tab-login" onclick="ChangeTab(this.id)" data-mdb-pill-init   role="tab" style="cursor: pointer;"
                        aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                      <a class="nav-link" id="tab-register"  onclick="ChangeTab(this.id)" data-mdb-pill-init  role="tab" style="cursor: pointer;"
                        aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                  </ul>
                  <!-- Pills navs -->



                  <!-- Pills content -->
<div class="tab-content">
  <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
    <form action="/login" method="POST">@csrf
     

      {{-- Login Tab Start ======================= --}}

      <div class="card-body p-md-5 text-black">
        {{-- <h3 class="mb-4 text-uppercase">LogIn Account</h3> --}}

        <div class="row">


          
       

         
 

          <div class="col-md-12 mb-2">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" class="form-control form-control-lg" required />
            </div>
          </div>

      
 

          <div class="col-md-12 mb-2">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg" required />
            </div>
          </div>

          
      


       



        </div>



       

        <div class=" d-flex justify-content-center   align-items-center pt-3  signup_main" style="text-align: center;flex-direction: column;">
       

           <!-- Submit button -->
           <button type="submit" class="btn btn-warni btn-lg ms-2 submit_btn mb-2" 
           style="color: #ffffff; background-color: #399add; border-color: #399add; width: 60%;">
     Log In
   </button>

  </form>

<div class="divider d-flex align-items-center justify-content-center my-4">
<p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
</div>

<form action="/facebook/redirect" method="GET" > @csrf
  <button  type="submit"  name="facebook_action"  data-mdb-ripple-init class="btn btn-primary btn-lg btn-block mb-2 social_btn" style="background-color: #3b5998; display: block; width: 100%;"  
   >
  <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
  </button>
  </form>
  
  <form action="/google/redirect" method="GET" > @csrf
  <button  type="submit"  name="google_action"  data-mdb-ripple-init class="btn btn-primary btn-lg btn-block mb-2 social_btn" style="background-color: #55acee; display: block; width: 100%;"  
   >
  <i class="fab fa-google me-2"></i>Continue with Google</button>
  </form>

        </div>
        

      </div>




  </div>

   <div class="col-xl-3 d-none d-xl-block">   </div>

    
                
  <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
    <form action="/signup" method="POST">@csrf 
    

      {{-- Register Tab Start ===================== --}}
      
      <div class="card-body p-md-5 text-black">
        {{-- <h3 class="mb-4 text-uppercase">Create Account</h3> --}}

        <div class="row">


          
          <div class="col-md-12 mb-2">

            
              <div class="avatar-upload">
                  <div class="avatar-edit">
                      <input type='file' name="profile" id="imageUpload" accept=".png, .jpg, .jpeg"  />
                      <label for="imageUpload"></label>
                  </div>
                  <div class="avatar-preview">
                      <div id="imagePreview" style="background-image: url(https://avatar.iran.liara.run/public/boy);">
                      </div>
                  </div>
              </div>
          
        
            
          </div>

          <div class="col-md-12 mb-2">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="name">User Name</label>
              <input type="text" name="name" id="name" placeholder="User Name" class="form-control form-control-lg" required />
            </div>
          </div>

          <div class="col-md-12 mb-2">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="number">Phone Number</label>
              <input type="tel" name="number" id="number" placeholder="0123456789" class="form-control form-control-lg"  required />
            </div>
          </div>

          <div class="col-md-12 mb-2">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="email">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" class="form-control form-control-lg" required />
            </div>
          </div>

          <div class="col-md-12 mb-2">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="country">Country</label>
              <input type="text" name="country" id="country" placeholder="Country" class="form-control form-control-lg" required />
            </div>
          </div>

          <div class="col-md-12 mb-2">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="city">City</label>
              <input type="text" name="city" id="city" placeholder="City" class="form-control form-control-lg" required />
            </div>
          </div>

          <div class="col-md-12 mb-2">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="password">Password</label>
              <input type="password" name="password" id="password" placeholder="Password" class="form-control form-control-lg" required />
            </div>
          </div>

          
          <div class="col-md-12 mb-2">
            <div data-mdb-input-init class="form-outline">
              <label class="form-label" for="c_password">Confirm Password</label>
              <input type="password" name="c_password" id="c_password" placeholder="Confirm Password" class="form-control form-control-lg"  required />
            </div>
          </div>


       



        </div>



       

        <div class=" d-flex justify-content-center   align-items-center pt-3  signup_main" style="text-align: center;flex-direction: column;">
       

           <!-- Submit button -->
           <button type="submit" class="btn btn-warni btn-lg ms-2 submit_btn mb-2" 
           style="color: #ffffff; background-color: #399add; border-color: #399add; width: 60%;">
     Sign Up
   </button>
  </form>
<div class="divider d-flex align-items-center justify-content-center my-4">
<p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
</div>


<form action="/facebook/redirect" method="GET" > @csrf
<button  type="submit"  name="facebook_action"  data-mdb-ripple-init class="btn btn-primary btn-lg btn-block mb-2 social_btn" style="background-color: #3b5998; display: block; width: 100%;"  
 >
<i class="fab fa-facebook-f me-2"></i>Continue with Facebook
</button>
</form>

<form action="/google/redirect" method="GET" > @csrf
<button  type="submit"  name="google_action"  data-mdb-ripple-init class="btn btn-primary btn-lg btn-block mb-2 social_btn" style="background-color: #55acee; display: block; width: 100%;"  
 >
<i class="fab fa-google me-2"></i>Continue with Google</button>
</form>

        </div>
        

      </div>



       
  </div>
</div>
<!-- Pills content -->


                  





                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    {{-- New Template Design ================ END --}}

 
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
<script>


function ChangeTab(Clicked) { 
  $('.nav-link').removeClass('active');
  $('.tab-pane').removeClass('show');
  $('.tab-pane').removeClass('active');
  $('#'+Clicked).addClass('active');
  if (Clicked == 'tab-login') {
    $('#pills-login').addClass('active');
    $('#pills-login').addClass('show');
    
  } else {
    $('#pills-register').addClass('show');
    $('#pills-register').addClass('active');
    
  }
  
 }





    $("#signup").click(function() {
  $(".message").css("transform", "translateX(100%)");
  if ($(".message").hasClass("login")) {
    $(".message").removeClass("login");
  }
  $(".message").addClass("signup");
});

$("#login").click(function() {
  $(".message").css("transform", "translateX(0)");
  if ($(".message").hasClass("login")) {
    $(".message").removeClass("signup");
  }
  $(".message").addClass("login");
});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
</script>