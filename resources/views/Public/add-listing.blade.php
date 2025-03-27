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
    <script>
      const isAuthenticated = @json(Auth::check());
  </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    {{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- =======Toastr CDN ======== --}}

    <title>Add Listing</title>
  </head>
  <body class="relative">
    <!-- Navbar -->
    <script src="assets/public/JS/navbar.js"></script>
    <!-- =============================== -->
    <!-- Modal (Login) -->
    <!-- =============================== -->
    <x-public-login/>
    <!-- Add Listing Header Banner -->
    <script src="assets/public/JS/bannerImage.js"></script>
    <!-- Add Listing Details -->
    <div class="flex justify-center items-center w-full">
      <div
        class="flex justify-between items-center w-[800px] px-20 h-fit gap-x-8 pb-4 nav-btns"
      >
        <img src="assets/public/images/google.png" alt="google" class="w-[300px]" />
        <img src="assets/public/images/appstore.png" alt="apple" class="w-[300px]" />
      </div>
    </div>
    <div
      class="w-full h-fit flex justify-center items-center flex-col text-xl font-semibold gap-y-1 py-8"
    >
      <div class="">Welcome everyone</div>
      <div class="">
        At World Guide Holding Group, we support all types of business
      </div>
      <div class="">So we put free ads to support everyone</div>
      <div class="">But something happened that we didn’t expect which is</div>
      <div class="">
        Many of advertisers became continue to repeated own Ad until became at
        the first of the list or first of the page
      </div>
      <div class="">
        that’s made the Ads be duplicate, and made them not looks like great.
      </div>
      <div class="">
        So we decided that we created kind of levels to help your business to
        grow up as you like :-
      </div>
      <div class="text-[blue]">
        1-Prime level:-all participants ads will be at the top of the page
      </div>
      <div class="text-[blue]">
        2-Free ads will be at the bottom of the pages
      </div>
      <div class="text-[blue]">
        3-Static Ads will be appear on our Site
        <a href="" class="text-black">Press Here</a>
      </div>
      <div class="text-[blue]">
        4-App Ads will be professional and Static
        <a href="" class="text-black"> Press Here</a>
      </div>
      <div class="text-[red]">
        We will prevent the publication of duplicate ads to avoid harassing
        visitors or our clients
      </div>
    </div>

    <div class="w-full flex justify-center items-start gap-x-10">
      <div id="pkgContainer" class="flex flex-col w-fit gap-10"></div>
      <div class="flex flex-col gap-y-4">
        <div
          id="pkgOptions"
          class="grid grid-cols-2 gap-x-10 gap-y-2 px-2 py-2 h-[35vh] overflow-auto"
        ></div>
        <button
          id="btn-choose-plan"
          class="px-3 py-3 border-2 border-blue-500 w-[356px] hover:bg-blue-500 hover:text-white transition-all ease-in-out duration-700"
        >
          Choose Plan
        </button>
      </div>
    </div>

    <!-- Footer -->
    <div
      class="flex items-center justify-center w-full bg-[#363f48] py-12 flex gap-x-5 text-white mt-8"
      id="footer-navs"
    ></div>
    <script src="assets/public/JS/footer_bottom.js"></script>

    <script src="assets/public/JS/main.js"></script>

    <script src="assets/public/JS/LoginBtn.js"></script>

    <script src="assets/public/JS/AddListing.js"></script>
  </body>
</html>
