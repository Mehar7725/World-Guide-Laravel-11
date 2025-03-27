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
    <title>About Us</title>
  </head>
  <body class="relative">
    <!-- Navbar -->
    <script src="assets/public/JS/navbar.js"></script>
    <!-- =============================== -->
    <!-- Modal (Login) -->
    <!-- =============================== -->
    <x-public-login/>
    <!-- About Us Header Banner -->
    <script src="assets/public/JS/bannerImage.js"></script>
    <!-- About Us Details -->
    <div class="w-full flex justify-center items-center">
      <div class="w-[80%] flex gap-x-5 mt-10">
        <div class="w-1/2 w-1/2 flex flex-col text-gray-500 gap-y-5">
          <div class="w-full text-2xl font-semibold text-center">
            Who we are
          </div>
          <div class="">
            World Guide Holding Group Australia Pty Limited (ABN: 62 497 349
            953) As a successful and respected name with regards to global
            travel and general services, World Guide has a rich heritage and a
            long history of operation. Built on sound principles of journalism,
            it is the most important global travel resource. We are dedicated to
            providing accurate, objective, reliable and informative travel
            content with history of countries and cities presented in different
            formats. Our publications include Professional version for the World
            guide for professionals linked with the travel and general services
            industry, the consumer version of the World Travel Guide, and many
            different licensed pieces as part of our solutions for the World
            Guide Content for our commercial partners. We are a diverse,
            fast-growing and innovative global business for travels and general
            services. Feel free to get in touch with us to get to know more.
          </div>
          <div class="w-full text-center">
            Contact Us:
            <span class="text-blue-500">+61 17 54-54-54</span>
          </div>
          <div class="w-full text-center">
            Email: <span class="text-blue-500">contact@world-guide.org</span>
          </div>
        </div>

        <div class="w-1/2 flex flex-col gap-y-5">
          <div class="flex flex-col w-full text-gray-500 gap-y-5">
            <div class="w-full text-2xl font-semibold text-center">
              What are the people say about us
            </div>
            <div class="">
              We have exceeded our goals for makes any service and informations
              so easy for all users, how many people are going to our website,
              staying on our website and also calling us… We’ve always viewed
              our relationship with World Guide as an investment to keep us
              current in our community and to keep us relevant and our brand out
              there.
            </div>
          </div>
          <div class="w-[100%] h-[40vh]">
            <iframe
              src="https://www.youtube.com/embed/oQPqfkfjYcc"
              class="w-full h-full"
            ></iframe>
          </div>
        </div>
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
