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
    <title>Our Companies</title>
  </head>
  <body class="relative">
    <!-- Navbar -->
    <script src="assets/public/JS/navbar.js"></script>
    <!-- =============================== -->
    <!-- Modal (Login) -->
    <!-- =============================== -->
    <x-public-login/>
    <!-- Companies Header Banner -->
    <script src="assets/public/JS/bannerImage.js"></script>
    <!-- Companies Description -->
    <div class="w-full flex justify-center items-center">
      <div class="w-[80%] flex flex-col gap-y-5 py-10">
        <h1 class="text-[2rem] font-bold">
          WORLD GUIDE HOLDING GROUP AUSTRALIA PTY LIMITED
        </h1>
        <p class="text-[.9rem] font-[300]">
          Have you ever thought of owning a house or had troubles importing a
          car from abroad. Are you a businessperson or an entrepreneur who wants
          to grow his business and increase profit margin by creating the best
          website for your business? Well worry not; World Guide Holding Group
          Australia Pty Limited has got you covered. World Guide has a rich
          heritage and a long history of operation, after its establishment in
          1980 by David William Smith in Sydney,New South Wales Australia on a
          strong principle of journalism; it is the most important global travel
          resource. We are dedicated to providing accurate, objective, reliable
          and informative travel content with history of countries and cities,
          tourist attractions, travel tips, monuments and major landmarks,
          accommodation, nearby excursions, city transport, restaurants and
          shopping, airports etc. We are a diverse, fast-growing and innovative
          global business for travels and general services. We are here to ease
          your travel and general consumer comfort ability in acquiring
          important services just by a touch of a button.
        </p>
        <div class="">
          World Guide Holding Group Pty Limited has lost to offer our clients
          and the services we provide include:
        </div>
      </div>
    </div>
    <!-- Companies Cards -->
    <div class="w-full flex justify-center items-center">
      <div
        id="companiesCardsContainer"
        class="flex flex-col gap-10 w-[100%] gap-y-8"
      ></div>
    </div>
    <div class="w-full flex flex-col ustify-center items-center">
      <div class="w-[80%] my-12">
        We have exceeded our goals for making any service and information so
        easy for all users, how many people are going to our website, staying on
        our website and also calling us… We’ve always viewed our relationship
        with World Guide as an investment to keep us current in our community
        and to keep us relevant and our brand out there. We always pull together
        resources to ensure our clients receive the best there has to be and
        offer long term solutions to our clients needs. As always the future
        seems bright as we move forward together.
      </div>
      <div class="w-fit flex flex-col gap-y-2">
        <div class="">Contact us: +614 17 54 54 54</div>

        <div class="">Email: contact@world-guide.org</div>
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
    <script src="assets/public/JS/OurCompanies.js"></script>
  </body>
</html>
