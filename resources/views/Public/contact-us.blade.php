<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script
      src="https://kit.fontawesome.com/5aff4a9523.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="assets/public/indexStyle.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css"
      integrity="sha512-B46MVOJpI6RBsdcU307elYeStF2JKT87SsHZfRSkjVi4/iZ3912zXi45X5/CBr/GbCyLx6M1GQtTKYRd52Jxgw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/jvectormap@2.0.5/jquery-jvectormap.css"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/5aff4a9523.js"
      crossorigin="anonymous"
    ></script>
    <script>
      const isAuthenticated = @json(Auth::check());
  </script>
    <title>Contact Us</title>
  </head>
  <body class="relative">
    <!-- Navbar -->
    <script src="assets/public/JS/navbar.js"></script>
    <!-- =============================== -->
    <!-- Modal (Login) -->
    <!-- =============================== -->
    <x-public-login/>
    <!-- Blog Header Banner -->
    <script src="assets/public/JS/bannerImage.js"></script>
    <!-- contact Cards -->
    <div class="w-full flex flex-col justify-center items-center gap-y-5 my-20">
      <div class="flex justify-between gap-x-8 w-[50%]">
        <div class="flex flex-col items-start w-1/2 gap-y-2">
          <label for="first-name" class="">
            First Name <span class="text-[red]">*</span>
          </label>
          <input
            type="text"
            name="first-name"
            id="first-name"
            class="w-full px-3 py-2 border-[1.5px] border-[lightgray]"
            placeholder="Your first name here..."
          />
        </div>
        <div class="flex flex-col items-start w-1/2 gap-y-2">
          <label for="last-name" class="">
            Last Name <span class="text-[red]">*</span>
          </label>
          <input
            type="text"
            name="last-name"
            id="last-name"
            class="w-full px-3 py-2 border-[1.5px] border-[lightgray]"
            placeholder="Your last name here..."
          />
        </div>
      </div>
      <div class="flex flex-col items-start w-1/2">
        <label for="email" class="">
          Email <span class="text-[red]">*</span>
        </label>
        <input
          type="email"
          name="email"
          id="email"
          class="w-full px-3 py-2 border-[1.5px] border-[lightgray]"
          placeholder="Your email here..."
        />
      </div>
      <div class="flex flex-col items-start w-1/2">
        <label for="email" class=""
          >Comment or Message <span class="text-[red]">*</span>
        </label>
        <textarea
          type="email"
          name="email"
          id="email"
          class="w-full px-3 py-2 border-[1.5px] border-[lightgray] h-[120px]"
          minlength="10"
          placeholder="Your message here..."
        ></textarea>
      </div>
      <div class="flex w-1/2 items-start my-3">
        <button class="bg-[#42A7DF] text-white px-4 py-2 rounded-lg">
          Submit
        </button>
      </div>
    </div>

    <!-- Footer -->
    <div
      class="flex items-center justify-center w-full bg-[#363f48] py-12 flex gap-x-5 text-white mt-8"
      id="footer-navs"
    ></div>
    <script src="assets/public/JS/footer_bottom.js"></script>
    <script src="assets/public/JS/LoginBtn.js"></script>
    <script src="assets/public/JS/main.js"></script>
  </body>
</html>
