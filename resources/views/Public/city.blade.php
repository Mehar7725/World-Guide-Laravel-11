<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
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
    <title>City</title>
    <style>
      @media only screen and (max-width: 1440px) {
        .w-\[100\%\].flex.flex-col.gap-y-2.h-\[29\.5vh\].items-center.justify-between.contryCard {
    margin-bottom: 35px;
}
      }
    </style>
  </head>
  <body class="bg-[#FFFFFF] font-sans">
    <!-- Navbar -->
    <script src="assets/public/JS/navbar.js"></script>
   
    <x-public-login/>
    <!-- Country Header Banner -->
    <script src="assets/public/JS/bannerImage.js"></script>

    <div class="container mx-auto">
      <div class="mx-auto border-2 border-solid rounded-b-lg pl-0 pr-10">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <!-- Image Section -->
          <div>
            <img
              src="assets/public/images/creative-img.jpg"
              alt="Creative product showcase"
              class="w-full h-64 object-cover rounded-lg"
            />
          </div>

          <!-- Content Section -->
          <div class="mt-3 md:col-span-2 flex flex-col space-y-4">
            <img
              class="ml-auto w-6"
              src="assets/public/images/achoice.svg"
              alt="Achoice logo"
            />
            <h3 class="text-xl font-semibold text-gray-800">
              Affordable Grinding Machines in Mexico
            </h3>
            <p class="text-gray-600">
              Looking for affordable grinding machines in
              <span class="font-bold">{city}</span>? Check out our wide
              selection today!
            </p>
            <h3 class="text-lg font-medium text-gray-800">
              Sponsored by: Grinding Machine
            </h3>
            <button
              class="px-6 py-2 text-blue-600 font-bold uppercase bg-transparent rounded-lg border-2 border-blue-600"
            >
              Learn more
            </button>
          </div>
        </div>
      </div>
      <h1 class="font-bold text-center text-5xl mt-10 mb-16">{{$city->city_name}}</h1>
      <div class="flex flex-col w-[100%]">
        <div class="flex flex-wrap gap-4 w-full" id="right-side-top">
          <a href="{{$city->car_url}}" target="__"
            class="flex items-center gap-x-2 px-6 sm:px-8 md:px-10 lg:px-12 bg-[#1491D0] hover:bg-blue-500 text-white rounded-lg transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl !text-white flex items-center fa-solid fa-car" aria-hidden="true"></i>
            <span>Rent a car</span>
          </a>
          <a href="{{$city->estate_url}}" target="__"
            class="flex items-center gap-x-2 px-6 sm:px-8 md:px-10 lg:px-12 bg-[#56B1CC] hover:bg-red-500 text-white rounded-lg transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl !text-white flex items-center fa-solid fa-house" aria-hidden="true"></i>
            <span>Real Estate</span>
          </a>
          <a href="{{$city->hotel_url}}" target="__"
            class="flex items-center gap-x-2 px-6 sm:px-8 md:px-10 lg:px-12 bg-[#6D87D9] hover:bg-blue-500 text-white rounded-lg transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl !text-white flex items-center fa-solid fa-building" aria-hidden="true"></i>
            <span>Hotels</span>
          </a>
          <a href="{{$city->restaurant_url}}" target="__"
            class="flex items-center gap-x-2 px-6 sm:px-8 md:px-10 lg:px-12 bg-[#FFA827] hover:bg-blue-500 text-white rounded-lg transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl !text-white flex items-center fa-solid fa-cutlery" aria-hidden="true"></i>
            <span>Restaurants</span>
          </a>
          <a href="{{$city->coffee_url}}" target="__"
            class="flex items-center gap-x-2 px-6 sm:px-8 md:px-10 lg:px-12 bg-[#D5CBB7] hover:bg-blue-500 text-white rounded-lg transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl !text-white flex items-center fa-solid fa-coffee" aria-hidden="true"></i>
            <span>Coffee</span>
          </a>
          <a href="{{$city->bars_url}}" target="__"
            class="flex items-center gap-x-2 px-6 sm:px-8 md:px-10 lg:px-12 bg-[#F8C77D] hover:bg-red-500 text-white rounded-lg transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl !text-white flex items-center fa-solid fa-beer" aria-hidden="true"></i>
            <span>Bars</span>
          </a>
        </div>
        
      </div>
      <div class="flex gap-x-8 w-[100%]">
        <div
          class="flex flex-col mt-24 gap-y-2 w-[20%] min-w-[250px]"
          id="quick-access"
        >
          <a href="{{$city->business_url}}" target="__"
            class="flex items-center gap-x-2 p-2 px-5 my-2 text-center justify-center border-2 border-black bg-none text-black hover:bg-black-500 text-white rounded transition duration-300 ease-in-out py-3"
          >
            <span>Add Your Business</span></a
          ><a href="{{$city->taxi_url}}" target="__"
            class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#19C7D3] hover:bg-blue-500 text-white rounded transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl fa-solid fa-taxi" aria-hidden="true"></i
            ><span> Taxis</span></a
          ><a href="{{$city->law_url}}" target="__"
            class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#19C7D3] hover:bg-blue-500 text-white rounded transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl fa-solid fa-adjust" aria-hidden="true"></i
            ><span> Roads Law</span></a
          ><a href="{{$city->lawyer_url}}" target="__"
            class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#19C7D3] hover:bg-blue-500 text-white rounded transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl fa-solid fa-adjust" aria-hidden="true"></i
            ><span> Lawyers</span></a
          ><a href="{{$city->event_url}}" target="__"
            class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#FF7E74] hover:bg-red-500 text-white rounded transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl fa-solid fa-adjust" aria-hidden="true"></i
            ><span> Events</span></a
          ><a href="{{$city->tours_url}}" target="__"
            class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#19C7D3] hover:bg-blue-500 text-white rounded transition duration-300 ease-in-out py-3"
          >
            <i class="text-xl fa-solid fa-adjust" aria-hidden="true"></i
            ><span>Tours</span>
          </a>
        </div>

        <div class="flex flex-col mt-14 gap-y-2 w-[80%]">

          <?php 
          if (isset($city->city_video)) {
              $videoUrl = $city->city_video;
              if (preg_match('/(?:https?:\/\/)?(?:www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $videoUrl, $matches)) {
                  $city->city_video = 'https://www.youtube.com/embed/' . $matches[2];
              }
          }
          ?>

          <div class="flex flex-col gap-y-5" id="right-side-body">
            <iframe
              width="100%"
              height="450"
              src="{{$city->city_video}}"
              title="YouTube video player"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin"
              allowfullscreen=""
            ></iframe>

            {!!$country->country_map!!}
            <div class="flex items-center gap-x-2 w-full">
              <div class="w-full h-[4px] bg-[#00C1CF]"></div>
              <div class="whitespace-nowrap" id="visit-company-name">
                Visit null
              </div>
              <div class="w-full h-[4px] bg-[#00C1CF]"></div>
            </div>
            <div class="wrapper" id="accordions-wrapper">
              <div class="space-y-4">
                <!-- Accordion Item -->
                <div class="accordion-item border border-gray-300 rounded-lg">
                  <button
                    class="accordion-header flex items-center justify-between w-full px-4 py-4 text-left bg-[#E8E8E8] hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    onclick="toggleAccordion(this)"
                  >
                    <div class="flex items-center gap-x-2">
                      <i class="fa-solid fa-calendar-days text-[#7F7F7F]"></i>
                      <span class="text-[#7F7F7F] font-bold"
                        >Best Time To Go</span
                      >
                    </div>
                    <i class="fa-solid fa-plus"></i>
                  </button>
                  <div class="accordion-content hidden px-4 py-2 text-gray-700">
                    {{$city->best_time}}
                  </div>
                </div>

                <!-- Accordion Item -->
                <div class="accordion-item border border-gray-300 rounded-lg">
                  <button
                    class="accordion-header flex items-center justify-between w-full px-4 py-4 text-left bg-[#E8E8E8] text-left bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    onclick="toggleAccordion(this)"
                  >
                    <div class="flex items-center gap-x-2">
                      <i class="fa-solid fa-car text-[#7F7F7F]"></i>
                      <span class="text-[#7F7F7F] font-bold"
                        >Transportation</span
                      >
                    </div>
                    <i class="fa-solid fa-plus"></i>
                  </button>
                  <div class="accordion-content hidden px-4 py-2 text-gray-700">
                    {{$city->transportation}}
                  </div>
                </div>

                <!-- Additional Accordion Items (Add more items as needed) -->
                <div class="accordion-item border border-gray-300 rounded-lg">
                  <button
                    class="accordion-header flex items-center justify-between w-full px-4 py-4 text-left bg-[#E8E8E8] text-left bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    onclick="toggleAccordion(this)"
                  >
                    <div class="flex items-center gap-x-2">
                      <i class="fa-solid fa-cloud text-[#7F7F7F]"></i>
                      <span class="text-[#7F7F7F] font-bold">Weather</span>
                    </div>
                    <i class="fa-solid fa-plus"></i>
                  </button>
                  <div class="accordion-content hidden px-4 py-2 text-gray-700">
                    {{$city->weather}}
                  </div>
                </div>



                <!-- Additional Accordion Items (Add more items as needed) -->
                <div class="accordion-item border border-gray-300 rounded-lg">
                  <button
                    class="accordion-header flex items-center justify-between w-full px-4 py-4 text-left bg-[#E8E8E8] text-left bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500"
                    onclick="toggleAccordion(this)"
                  >
                    <div class="flex items-center gap-x-2">
                      <i class="fa-solid fa-circle-info text-[#7F7F7F]"></i>
                      <span class="text-[#7F7F7F] font-bold">Information</span>
                    </div>
                    <i class="fa-solid fa-plus"></i>
                  </button>
                  <div class="accordion-content hidden px-4 py-2 text-gray-700">
                    {{$city->information}}
                  </div>
                </div>




              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="w-full flex justify-center items-center my-8">
        <div
          id="cityCardsContainer"
          class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-3 place-items-center justify-center w-fit gap-10"
        >

        @if ($category)
        @foreach ($category as $item)
            
        <div
        class="w-[100%] flex flex-col gap-y-2 h-[29.5vh] items-center justify-between contryCard"
      >
        <img
          src="assets/category_img/{{$item->image}}"
          alt="Australia"
          class="min-h-[168px] h-[168px] w-full object-cover shadow-[rgba(0,0,0,0.35)_0px_5px_15px] cursor-pointer"
        />
        <div
          class="bg-gradient-to-l from-[#00c1cf] to-[#5472d2] hover:from-[#5472d2] hover:to-[#00c1cf] transition-all ease-in-out duration-900 w-full h-[6vh] flex items-center justify-center gap-x-2 text-white py-3 rounded-lg select-none cursor-pointer"
        >
          <span>🌍</span>  {{$item->name}}
        </div>
      </div>

        @endforeach
            
        @endif
       









          {{-- <div
            class="w-[100%] flex flex-col gap-y-2 h-[29.5vh] items-center justify-between contryCard"
          >
            <img
              src="assets/public/images/queen-victoria-building-sydney-600x300.jpg"
              alt="New Zealand"
              class="min-h-[168px] h-[168px] w-full object-cover shadow-[rgba(0,0,0,0.35)_0px_5px_15px] cursor-pointer"
            />
            <div
              class="bg-gradient-to-l from-[#00c1cf] to-[#5472d2] hover:from-[#5472d2] hover:to-[#00c1cf] transition-all ease-in-out duration-900 w-full h-[6vh] flex items-center justify-center gap-x-2 text-white py-3 rounded-lg select-none cursor-pointer"
            >
              <span>🌍</span>  Shopping
            </div>
          </div> --}}
        
        
        </div>
      </div>


      <div class="flex items-center gap-x-2 w-full">
        <div class="w-full h-[4px] bg-[#00C1CF]"></div>
        <div class="whitespace-nowrap font-bold" id="visit-company-name">
          Sydney Event
        </div>
        <div class="w-full h-[4px] bg-[#00C1CF]"></div>
      </div>




      {{-- <div class="flex items-center mt-14 gap-x-2 w-full">
        <div class="w-full h-[4px] bg-[#00C1CF]"></div>
        <div class="whitespace-nowrap font-bold" id="visit-company-name">
          Sydney Ad's
        </div>
        <div class="w-full h-[4px] bg-[#00C1CF]"></div>
      </div> --}}






      <!-- cards section start from here -->
      <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6 mt-24">
       
       
       
        @if ($adds)
        @foreach ($adds as $item)


          <!-- Card 1 -->
          <div class="relative bg-none border-2 border-[#EBEBEB] p-0" style="height: fit-content">
            <!-- Heart Icon -->
            <div class="absolute top-2 left-2 bg-white rounded-full p-1">
              <i class="fa fa-heart text-[#FFFFFF]" aria-hidden="true"></i>
            </div>
            <!-- Content overlay -->
            <div class="relative bg-white bg-opacity-90">
              <div class="mb-4">
                <img src="assets/adds/data_{{$item->user_id}}/{{$item->image}}" alt="Logo" class="w-full">
              </div>
              <div class="flex justify-end mt-2 mr-4">
                {{-- <p class="text-red-500 font-semibold">Closed Now</p> --}}
              </div>
              <div class="flex mb-2 px-6 py-3">
                <h2 class="text-xl font-bold">{{$item->title}} </h2>
              </div>
              <div class="flex justify-between items-center mb-2 px-6">
                <p class="text-[#837F7F] border-2 border-gray-300 w-40 text-center rounded">Be the first to review!</p>
                <p class="text-[#837F7F] font-semibold"><i class="fa fa-map-marker" aria-hidden="true"></i> {{$item->city_name}} </p>
              </div>
              <hr class="mt-4">
              <div class="flex justify-center items-center space-x-4">
                <button class="bg-none text-[#797979] px-4 py-2 rounded text-gray-700"><i class="fa fa-map-pin" aria-hidden="true"></i> Show Map</button>
              </div>
            </div>
          </div>
            
        @endforeach
            
        @endif
       
       
        {{-- <!-- Card 1 -->
        <div class="relative bg-none border-2 border-[#EBEBEB] p-0">
          <!-- Heart Icon -->
          <div class="absolute top-2 left-2 bg-white rounded-full p-1">
            <i class="fa fa-heart text-[#FFFFFF]" aria-hidden="true"></i>
          </div>
          <!-- Content overlay -->
          <div class="relative bg-white bg-opacity-90">
            <div class="mb-4">
              <img src="assets/public/images/branding.png" alt="Logo" class="w-full">
            </div>
            <div class="flex justify-end mt-2 mr-4">
              <p class="text-red-500 font-semibold">Closed Now</p>
            </div>
            <div class="flex mb-2 px-6 py-3">
              <h2 class="text-xl font-bold">Falcon Web Solutions </h2>
            </div>
            <div class="flex justify-between items-center mb-2 px-6">
              <p class="text-[#837F7F] border-2 border-gray-300 w-40 text-center rounded">Be the first to review!</p>
              <p class="text-[#837F7F] font-semibold"><i class="fa fa-map-marker" aria-hidden="true"></i> Sydney</p>
            </div>
            <hr class="mt-4">
            <div class="flex justify-center items-center space-x-4">
              <button class="bg-none text-[#797979] px-4 py-2 rounded text-gray-700"><i class="fa fa-map-pin" aria-hidden="true"></i> Show Map</button>
            </div>
          </div>
        </div> --}}





          <!-- Card 2 -->
          <div class="relative bg-none border-2 border-[#EBEBEB] p-0" style="height: fit-content;">
            <!-- Heart Icon -->
            <div class="absolute top-2 left-2 bg-white rounded-full p-1">
              <i class="fa fa-heart text-[#FFFFFF]" aria-hidden="true"></i>
            </div>
            <!-- Content overlay -->
            <div class="relative bg-white bg-opacity-90">
              <div class="mb-4">
                <img src="assets/public/images/Central-Coast-SEO-Logo.jpg" alt="Logo" class="w-full">
              </div>
              <div class="flex justify-between items-center mb-2 p-6">
                <div class="flex flex-col">
                  <h2 class="text-xl font-bold">Central Coast SEO </h2>
                  <p>Central coast web design, Central coast websites, SEO, Seo Central Coast, Web Design Central Coast</p>
                </div>
              </div>
              <div class="flex justify-between items-center mb-2 px-6">
                <p class="text-[#837F7F] border-2 border-gray-300 w-40 text-center rounded">Be the first to review!</p>
                <p class="text-[#837F7F] font-semibold"><i class="fa fa-map-marker" aria-hidden="true"></i> Sydney</p>
              </div>
              <hr class="mt-4">
              <div class="grid grid-cols-2 gap-4 items-center relative">
                <!-- Left Button -->
                <button class="flex items-center justify-center bg-none text-center text-[#797979] px-4 py-2 rounded text-gray-700">
                  <i class="fa fa-phone mr-2" aria-hidden="true"></i> Call
                </button>
                <!-- Vertical Divider -->
                <div class="absolute top-0 bottom-0 left-1/2 transform -translate-x-1/2 w-px bg-gray-300"></div>
                <!-- Right Button -->
                <button class="flex items-center justify-center bg-none text-center text-[#797979] px-4 py-2 rounded text-gray-700">
                  <i class="fa fa-map-pin mr-2" aria-hidden="true"></i> Show Map
                </button>
              </div>              
            </div>
          </div>

        </div>



        <div class="flex items-center mt-14 gap-x-2 w-full">
          <div class="w-full h-[4px] bg-[#00C1CF]"></div>
          <div class="whitespace-nowrap font-bold" id="visit-company-name">
            Sydney's Blog Posts
          </div>
          <div class="w-full h-[4px] bg-[#00C1CF]"></div>
        </div>
      </div>
    </div>
        <!-- Footer -->
        <div
        class="flex items-center justify-center w-full bg-[#363f48] py-12 flex gap-x-5 text-white mt-8"
        id="footer-navs"
      ></div>
      <div id="footer-last"></div>
      <script src="assets/public/JS/main.js"></script>
      <div class="bg-[#45505b] text-center pb-10 text-[lightgray] font-thin">
        Proudly World Guide by Domain & App Developers
        <script src="assets/public/JS/country.js"></script>
      </div>

    <!-- faqs js here -->
    <script>
      function toggleAccordion(button) {
        const content = button.nextElementSibling;
        const isVisible = !content.classList.contains("hidden");

        // Collapse all open accordions
        document.querySelectorAll(".accordion-content").forEach((item) => {
          item.classList.add("hidden");
          item.previousElementSibling
            .querySelector("i.fa-minus")
            ?.classList.replace("fa-minus", "fa-plus");
        });

        // Toggle current accordion
        if (!isVisible) {
          content.classList.remove("hidden");
          button
            .querySelector("i.fa-plus")
            .classList.replace("fa-plus", "fa-minus");
        }
      }
    </script>
  </body>
</html>
