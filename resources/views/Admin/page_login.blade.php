 
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>HUD | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- ================== BEGIN core-css ================== -->
    <link href="assets/admin/css/vendor.min.css" rel="stylesheet">
    <link href="assets/admin/css/app.min.css" rel="stylesheet">
    <!-- ================== END core-css ================== -->
    
{{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- =======Toastr CDN ======== --}}
</head>


<style>
    .loading-spinner {
      position: relative;
      left: 200px;
  bottom: 45px;
          display: none; /* Initially hidden */
          width: 20px;
          height: 20px;
          border: 3px solid #f3f3f3;
          border-radius: 50%;
          border-top: 3px solid #3498db;
          animation: spin 1s linear infinite;
          margin-left: 10px;
      }

      @keyframes spin {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
      }
</style>


<body class='pace-top'>
    <!-- BEGIN #app -->
    <div id="app" class="app app-full-height app-without-header">
        <!-- BEGIN login -->
        <div class="login">
            <!-- BEGIN login-content -->
           <!-- ... previous code ... -->
<div class="login-content">
    <form action="/admin-signin" method="POST">
        <h1 class="text-center">Sign In</h1>
        <div class="text-inverse text-opacity-50 text-center mb-4">
            For your protection, please verify your identity.
        </div>
        
      
        <div class="alert alert-danger " style="display: none;" id="error_div"></div>
		<div class="alert alert-success " style="display: none;" id="success_div"></div>

        <div class="mb-3">
            <label class="form-label">Email Address <span class="text-danger">*</span></label>
            <input type="email" name="email" id="email" @if (isset($_COOKIE["email"])) value="{{ $_COOKIE["email"] }}"  @endif class="form-control form-control-lg bg-inverse bg-opacity-5"   required>
        </div>
        <div class="mb-3">
            <div class="d-flex">
                <label class="form-label">Password <span class="text-danger">*</span></label>
                <a href="#" class="ms-auto text-inverse text-decoration-none text-opacity-50">Forgot password?</a>
            </div>
            <input type="password" name="password" id="password" @if (isset($_COOKIE["password"])) value="{{ $_COOKIE["password"] }}"  @endif class="form-control form-control-lg bg-inverse bg-opacity-5"   required>
        </div>
        <div class="mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" name="remember" id="remember_login">
                <label class="form-check-label" for="customCheck1">Remember me</label>
            </div>
        </div>
        <button type="submit" onclick="LogInUser(this.id)" id="logIn" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
        <div id="SignuploadingSpinner" class="loading-spinner"></div>
        <div class="text-center text-inverse text-opacity-50">
            Don't have an account yet? <a href="/admin-singup" class="text-inverse text-decoration-none text-opacity-50">Sign up</a>
        </div>
    </form>
</div>
<!-- ... rest of the code ... -->
            <!-- END login-content -->
        </div>
        <!-- END login -->
        
        <!-- BEGIN theme-panel -->
        <div class="app-theme-panel">
            <!-- Your existing theme panel code -->
        </div>
        <!-- END theme-panel -->
    </div>
    <!-- END #app -->
    
    <!-- ================== BEGIN core-js ================== -->
    <script src="assets/admin/js/vendor.min.js"></script>
    <script src="assets/admin/js/app.min.js"></script>
    <!-- ================== END core-js ================== -->


	<script>
        function LogInUser(Clicked) { 
           $('#error_div').css('display', 'none');
           $('#success_div').css('display', 'none');
           const checkbox = document.getElementById('customCheck1');
          
const button = document.getElementById(Clicked);
   const spinner = document.getElementById('SignuploadingSpinner');
   
   $(button).html('Waiting');
   button.disabled = true;
  spinner.style.display = 'inline-block';

  
var email = $('#email').val();
var password = $('#password').val();
// var remember = $('#remember_login').val();
var remember = $('input[name="remember"]').is(':checked');
 
 

$('#error_div').html(''); 
$('#success_div').html(''); 


$.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
   });

   $.ajax({
       type: "POST",
       url: '/admin-singin',
       data:{   email:email, password:password, remember:remember,  _token: '{{csrf_token()}}'},
       dataType: 'json',
       success: function (response) {

           $(button).html('Sign In');
       button.disabled = false;
       spinner.style.display = 'none';
       
           if (response.error) {
               $('#error_div').css('display', 'block');
               $('#error_div').html(response.message);
               
           }else if(response.success){
            window.location.href = '/admin-dashboard';
               $('#success_div').css('display', 'block');
               $('#success_div').html(response.message); 
               $('#email').val('');
               $('#password').val(''); 
               $('#remember_login').removeAttr('checked');
           }
       },
     
   });


}
       
   </script>



</body>
</html>