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
    <link rel="stylesheet" href="assets/public/country.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css"
      integrity="sha512-B46MVOJpI6RBsdcU307elYeStF2JKT87SsHZfRSkjVi4/iZ3912zXi45X5/CBr/GbCyLx6M1GQtTKYRd52Jxgw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/5aff4a9523.js" crossorigin="anonymous"></script>
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        {{-- =======Toastr CDN ======== --}}
    <link rel="stylesheet" type="text/css" 
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    {{-- =======Toastr CDN ======== --}}

    <script>
      const isAuthenticated = @json(Auth::check());
  </script>
    <title>Country</title>
  </head>
  <body class="relative">
     <!-- Navbar -->
     <script src="assets/public/JS/navbar.js"></script>

     <x-public-login/>
    <!-- Country Header Banner -->
    <script src="assets/public/JS/bannerImage.js"></script>
    <!-- Country Cards -->
    <div class="w-full flex flex-col justify-center items-center gap-y-5 mt-20">
      <div id="company-name"></div>
    </div>
    <div class="flex justify-center items-center w-full">
      <div class="flex gap-x-8 w-[90%] justify-center">
        <div class="flex flex-col gap-y-2 w-[20%] min-w-[250px]" id="quick-access">
          <div class="flex items-center gap-x-2 py-4">
            <div class="w-full h-[2px] bg-[#ebebeb]"></div>
            <div class="whitespace-nowrap">Quick Access</div>
            <div class="w-full h-[2px] bg-[#ebebeb]"></div>
          </div>
          {{-- <script>
            const quickAccess = document.getElementById("quick-access");

            const quickAccessButtons = [
              {
                title: "Australia Rules",
                img: "fa-solid fa-flag",
              },
              {
                title: "History",
                img: "fa-solid fa-book",
              },
              {
                title: "Driving",
                img: "fa-solid fa-car",
              },
              {
                title: "Universities",
                img: "fa-solid fa-graduation-cap",
              },
              {
                title: "Visa + Uni Acceptance Free",
                img: "fa-solid fa-graduation-cap",
              },
              {
                title: "Tours",
                img: "fa-solid fa-suitcase",
              },
            ];

            quickAccessButtons.forEach((button) => {
              const buttonElement = document.createElement("button");
              buttonElement.className = `flex items-center gap-x-2 p-2 px-5 my-2 ${
                button.title === "Australia Rules"
                  ? "bg-[#FF9902] hover:bg-yellow-500"
                  : button.title === "Visa + Uni Acceptance Free"
                  ? "bg-[#FF675B] hover:bg-red-500"
                  : "bg-[#0088CD] hover:bg-blue-500"
              } text-white rounded transition duration-300 ease-in-out py-3`;
              const imgIcon = document.createElement("i");
              imgIcon.className = `text-xl ${button.img}`;
              const title = document.createElement("span");
              title.textContent = button.title;
              buttonElement.appendChild(imgIcon);
              buttonElement.appendChild(title);
              quickAccess.appendChild(buttonElement);
            });
          </script> --}}
          <a href="{{$country->facts_url}}" target="__" class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#FF9902] hover:bg-yellow-500 text-white rounded transition duration-300 ease-in-out py-3"><i class="text-xl fa-solid fa-flag" aria-hidden="true"></i><span>Australia Rules</span></a>
          <a href="{{$country->history_url}}" target="__" class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#0088CD] hover:bg-blue-500 text-white rounded transition duration-300 ease-in-out py-3"><i class="text-xl fa-solid fa-book" aria-hidden="true"></i><span>History</span></a>
          <a href="{{$country->dining_url}}" target="__" class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#0088CD] hover:bg-blue-500 text-white rounded transition duration-300 ease-in-out py-3"><i class="text-xl fa-solid fa-car" aria-hidden="true"></i><span>Driving</span></a>
          <a href="{{$country->visa_info_url}}" target="__" class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#0088CD] hover:bg-blue-500 text-white rounded transition duration-300 ease-in-out py-3"><i class="text-xl fa-solid fa-graduation-cap" aria-hidden="true"></i><span>Universities</span></a>
          <a href="{{$country->visa_light_url}}" target="__" class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#FF675B] hover:bg-red-500 text-white rounded transition duration-300 ease-in-out py-3"><i class="text-xl fa-solid fa-graduation-cap" aria-hidden="true"></i><span>Visa + Uni Acceptance Free</span></a>
          <a href="{{$country->tours_url}}" target="__" class="flex items-center gap-x-2 p-2 px-5 my-2 bg-[#0088CD] hover:bg-blue-500 text-white rounded transition duration-300 ease-in-out py-3"><i class="text-xl fa-solid fa-suitcase" aria-hidden="true"></i><span>Tours</span></a>
        </div>


















     <div class="flex flex-col gap-y-2 w-[60%]">
          <div class="flex gap-x-1" id="right-side-top">
            <a href="{{$country->constitution_url}}" target="__" class="flex items-center gap-x-2 p-2 px-8 bg-[#0088CD] hover:bg-blue-500 border-b-[5px] border-b-[#006394] hover:border-b-0 text-white rounded-lg transition duration-300 ease-in-out py-3"><i class="text-xl !text-white flex items-center fa-solid fa-building" aria-hidden="true"></i><span>Australia Constitution</span></a>
            <a href="{{$country->emergency_url}}" target="__" class="flex items-center gap-x-2 p-2 px-8 bg-[#FF675B] hover:bg-red-500 border-b-[5px] border-b-[#FF3324] hover:border-b-0 text-white rounded-lg transition duration-300 ease-in-out py-3"><i class="text-xl !text-white flex items-center fa-solid fa-square-phone-flip" aria-hidden="true"></i><span>Emergency Numbers</span></a>
            <a href="{{$country->embassies_url}}" target="__" class="flex items-center gap-x-2 p-2 px-8 bg-[#0088CD] hover:bg-blue-500 border-b-[5px] border-b-[#006394] hover:border-b-0 text-white rounded-lg transition duration-300 ease-in-out py-3"><i class="text-xl !text-white flex items-center fa-solid fa-building" aria-hidden="true"></i><span>Embassies</span></a>
            <a href="{{$country->news_url}}" target="__" class="flex items-center gap-x-2 p-2 px-8 bg-[#0088CD] hover:bg-blue-500 border-b-[5px] border-b-[#006394] hover:border-b-0 text-white rounded-lg transition duration-300 ease-in-out py-3"><i class="text-xl !text-white flex items-center fa-solid fa-handshake" aria-hidden="true"></i><span>New Offers</span></a></div>
          {{-- <script>
            const lefttopButtons = [
              {
                title: "Australia Constitution",
                img: "fa-solid fa-building",
              },
              {
                title: "Emergency Numbers",
                img: "fa-solid fa-square-phone-flip",
              },
              {
                title: "Embassies",
                img: "fa-solid fa-building",
              },
              {
                title: "New Offers",
                img: "fa-solid fa-handshake",
              },
            ];

            const leftTopBtns = document.getElementById("right-side-top");

            lefttopButtons.forEach((button) => {
              const buttonElement = document.createElement("button");
              buttonElement.className = `flex items-center gap-x-2 p-2 px-8 ${
                button.title === "Emergency Numbers"
                  ? "bg-[#FF675B] hover:bg-red-500 border-b-[5px] border-b-[#FF3324] hover:border-b-0"
                  : "bg-[#0088CD] hover:bg-blue-500 border-b-[5px] border-b-[#006394] hover:border-b-0"
              } text-white rounded-lg transition duration-300 ease-in-out py-3`;
              const imgIcon = document.createElement("i");
              // imgIcon.class = button.img;
              imgIcon.className = `text-xl !text-white flex items-center ${button.img}`;
              const title = document.createElement("span");
              title.textContent = button.title;
              buttonElement.appendChild(imgIcon);
              buttonElement.appendChild(title);
              leftTopBtns.appendChild(buttonElement);
            });
          </script> --}}
          <?php 
          if (isset($country->country_video)) {
              $videoUrl = $country->country_video;
              if (preg_match('/(?:https?:\/\/)?(?:www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $videoUrl, $matches)) {
                  $country->country_video = 'https://www.youtube.com/embed/' . $matches[2];
              }
          }
          ?>
          
          <div class="flex flex-col gap-y-5" id="right-side-body">
            <iframe width="100%" height="450" src="{{$country->country_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen=""></iframe>

            {!!$country->country_map!!}
            <div class="flex items-center gap-x-2 w-full">
              <div class="w-full h-[4px] bg-[#00C1CF]"></div>
              <div class="whitespace-nowrap" id="visit-company-name">Visit null</div>
              <script>
                const urlParams = new URLSearchParams(window.location.search);
                const country = urlParams.get("country");
                document.getElementById("company-name").innerText = country;
                document.getElementById(
                  "visit-company-name"
                ).innerText = `Visit ${country}`;
              </script>
              <div class="w-full h-[4px] bg-[#00C1CF]"></div>
            </div>
            <div class="wrapper" id="accordions-wrapper"><input type="radio" id="radio-best-time-to-go" name="accordion">
              <label class="item" for="radio-best-time-to-go">
                <div class="title">
                  <div class="flex items-center gap-x-2">
                    <i class="fa-solid fa-calendar-days" aria-hidden="true"></i>
                    <div>Best Time To Go</div>
                  </div>
                </div>
                <div class="content">{{$country->best_time}}</div>
              </label>
              <input type="radio" id="radio-transportation" name="accordion">
              <label class="item" for="radio-transportation">
                <div class="title">
                  <div class="flex items-center gap-x-2"><i class="fa-solid fa-car" aria-hidden="true"></i><div>Transportation</div>
                </div>
              </div>
              <div class="content">{{$country->transportation}}</div>
            </label>
            <input type="radio" id="radio-weather" name="accordion">
            <label class="item" for="radio-weather">
              <div class="title">
                <div class="flex items-center gap-x-2"><i class="fa-solid fa-cloud" aria-hidden="true"></i><div>Weather</div>
              </div>
            </div>
            <div class="content">{{$country->weather}}</div>
          </label><input type="radio" id="radio-information" name="accordion">
          <label class="item" for="radio-information">
            <div class="title">
              <div class="flex items-center gap-x-2"><i class="fa-solid fa-lightbulb" aria-hidden="true"></i><div>Information</div>
            </div>
          </div>
          <div class="content">{{$country->information}}</div>
        </label>
        <input type="radio" id="radio-the-electric" name="accordion">
        <label class="item" for="radio-the-electric">
          <div class="title">
            <div class="flex items-center gap-x-2"><i class="fa-solid fa-bolt" aria-hidden="true"></i><div>The Electric</div>
          </div>
        </div>
        <div class="content">{{$country->electric}}

          <img loading="lazy" decoding="async" class="text-center" src="assets/country_img/electric/{{$country->electric_image}}" alt="" width="399" height="280"  sizes="auto, (max-width: 399px) 100vw, 399px">
        </div>
      </label>
      <input type="radio" id="radio-language" name="accordion">
      <label class="item" for="radio-language">
        <div class="title">
          <div class="flex items-center gap-x-2"><i class="fa-solid fa-language" aria-hidden="true"></i><div>Language</div>
        </div>
      </div>
      <div class="content">{{$country->language}}</div>
    </label>
    <input type="radio" id="radio-currency" name="accordion">
    <label class="item" for="radio-currency">
      <div class="title">
        <div class="flex items-center gap-x-2"><i class="fa-solid fa-money-bill" aria-hidden="true"></i><div>Currency</div>
      </div>
    </div>
    <div class="content">{{$country->currency}}

      <img loading="lazy" decoding="async" class="text-center" src="assets/country_img/currency/{{$country->currency_image}}" alt="" width="399" height="280"  sizes="auto, (max-width: 399px) 100vw, 399px">
       
    </div>
  </label>
</div>
            {{-- <script>
              const AccordionWrapper =
                document.getElementById("accordions-wrapper");

              const data = [
                {
                  title: "Best Time To Go",
                  icon: "fa-solid fa-calendar-days",
                  id: "best-time-to-go",
                  content:
                    "Australia is one of the world’s biggest countries, so when to go depends entirely on where you’re going.",
                },
                {
                  title: "Transportation",
                  icon: "fa-solid fa-car",
                  id: "transportation",
                  content:
                    "All of Australia’s major towns have reliable, affordable public bus networks, and there are suburban train lines in Sydney, Melbourne, Brisbane, Adelaide and Perth. Melbourne also has trams (Adelaide has one!), Sydney and Brisbane have ferries and Sydney has a light-rail line. Taxis operate Australia-wide. Opal is the smartcard ticketing system used to pay for travel on public transport in Sydney Press Here",
                },
                {
                  title: "Weather",
                  icon: "fa-solid fa-cloud",
                  id: "weather",
                  content:
                    "All of Australia’s major towns have reliable, affordable public bus networks, and there are suburban train lines in Sydney, Melbourne, Brisbane, Adelaide and Perth. Melbourne also has trams (Adelaide has one!), Sydney and Brisbane have ferries and Sydney has a light-rail line. Taxis operate Australia-wide. Opal is the smartcard ticketing system used to pay for travel on public transport in Sydney Press Here",
                },
                {
                  title: "Information",
                  icon: "fa-solid fa-lightbulb",
                  id: "information",
                  content:
                    "Australia’s landmass of 7,617,930 square kilometres (2,941,300 sq mi) is on the Indo-Australian Plate. … The world’s smallest continent and sixth largest country by total area, Australia—owing to its size and isolation—is often dubbed the “island continent”, and is sometimes considered the world’s largest island.",
                },
                {
                  title: "The Electric",
                  icon: "fa-solid fa-bolt",
                  id: "the-electric",
                  content:
                    "Voltage Converters Mains voltage in Australia is 230V 50Hz. Travellers from most nations in Asia, Africa and Europe should have appliances that work on the same mains voltage as Australia – therefore you will not need a voltage converter. Notable exceptions to this are Japan, USA and Canada which uses 100/120V 50/60Hz. Power Adapters The plugs in Australia have two flat metal pins shaped live a “V” and some may contain a third flat pin in the centre.",
                },
                {
                  title: "Language",
                  icon: "fa-solid fa-language",
                  id: "language",
                  content:
                    "Australian English has a unique accent and vocabulary. Collectively, Australians have more than 200 spoken languages. In the 2011 census, 76.8% Australian spokeEnglish at home. Mandarin is the biggest non-English dialect spoken in Australia",
                },
                {
                  title: "Currency",
                  icon: "fa-solid fa-money-bill",
                  id: "currency",
                  content:
                    "The Australian dollar (sign: $; code: AUD) is the currency of the Commonwealth of Australia, including its external territories Christmas Island, Cocos (Keeling) Islands, and Norfolk Island, as well as the independent Pacific Island states of Kiribati, Nauru, Papua New Guinea, Tonga, Tuvalu, and Vanuatu. Within Australia, it is almost always abbreviated with the dollar sign ($), with A$ or AU$ sometimes used to distinguish it from other dollar-denominated currencies. It is subdivided into 100 cents.",
                },
              ];

              // Loop through each item in the data array to dynamically create accordion elements
              data.forEach((dt, index) => {
                const createAccordionItem = () => {
                  const input = document.createElement("input");
                  input.type = "radio";
                  input.id = `radio-${dt.id}`;
                  input.name = "accordion";
                  input.checked = index === 0 ? true : false;

                  const label = document.createElement("label");
                  label.className = "item";
                  label.setAttribute("for", input.id);

                  const labelTitleChild = document.createElement("div");
                  labelTitleChild.className = "title";

                  const labelTitleWrapper = document.createElement("div");
                  labelTitleWrapper.className = "flex items-center gap-x-2";

                  const labelTitleIcon = document.createElement("i");
                  labelTitleIcon.className = dt.icon;

                  const labelTitleName = document.createElement("div");
                  labelTitleName.innerHTML = dt.title;

                  const labelContentChild = document.createElement("div");
                  labelContentChild.className = "content";
                  labelContentChild.innerHTML = dt.content;

                  labelTitleWrapper.appendChild(labelTitleIcon);
                  labelTitleWrapper.appendChild(labelTitleName);
                  labelTitleChild.appendChild(labelTitleWrapper);
                  label.appendChild(labelTitleChild);
                  label.appendChild(labelContentChild);

                  return { input, label };
                };

                const { input, label } = createAccordionItem();
                AccordionWrapper.appendChild(input);
                AccordionWrapper.appendChild(label);
              });
              var acc = document.getElementsByClassName("accordion");
              var i;

              for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                  for (var j = 0; j < acc.length; j++) {
                    if (j !== i) {
                      acc[j].classList.remove("active");
                      var panel = acc[j].nextElementSibling;
                      panel.style.display = "none";
                    }
                  }
                  this.classList.toggle("active");
                  var panel = this.nextElementSibling;
                  if (panel.style.display === "block") {
                    panel.style.display = "none";
                    this.classList.remove("active");
                  } else {
                    panel.style.display = "block";
                  }
                });
              }
            </script> --}}
          </div>
        </div>
      </div>
    </div>
    <div class="w-full flex justify-center items-center my-8">
      <div id="cityCardsContainer" class="grid grid-cols-3 place-items-center justify-center w-fit gap-10">
        
        @if ($city)
        @foreach ($city as $item)
        <a href="{{ route('city.show', ['name' => $name ?? 'unknown', 'id' => $item->id, 'code' => $code ?? 'NA', 'city_id' => $item->id, 'city' => $item->city_name ?? 'NA']) }}">
          <div class="max-w-[360px] w-[360px] flex flex-col gap-y-2 h-[29.5vh] items-center justify-between contryCard">
            <img src="assets/city_img/{{$item->city_image}}" alt="{{$item->city_name}}" class="min-h-[168px] h-[168px] w-full object-cover shadow-[rgba(0,0,0,0.35)_0px_5px_15px] cursor-pointer">
            <div class="bg-gradient-to-l from-[#11bed0] to-[#34a853] hover:from-[#34a853] hover:to-[#11bed0] transition-all ease-in-out duration-900 w-full h-[6vh] flex items-center justify-center gap-x-2 text-white py-3 rounded-lg select-none cursor-pointer">
              <span>🌍</span> {{$item->city_name}}</div>
          </div>
        </a>
            
        @endforeach
            
        @endif
       
         
        </div>
      {{-- <script>
        const citiesDataForCards = [
          { name: "Australia", img: "./cimage/australia.jpg" },
          { name: "New Zealand", img: "./cimage/new-zealand.jpg" },
          { name: "United Kingdom", img: "./cimage/uk.jpg" },
          { name: "France", img: "./cimage/fr.jpg" },
          { name: "United States", img: "./cimage/us.jpg" },
          { name: "Canada", img: "./cimage/cn.jpg" },
        ];
        // Blog data
        function createCitiesCards() {
          const container = document.getElementById("cityCardsContainer");

          citiesDataForCards.forEach((country) => {
            // Create card container
            const card = document.createElement("div");
            card.className =
              "max-w-[360px] w-[360px] flex flex-col gap-y-2 h-[29.5vh] items-center justify-between contryCard";

            // Create image element
            const img = document.createElement("img");
            img.src = country.img;
            img.alt = country.name;
            img.className =
              "min-h-[168px] h-[168px] w-full object-cover shadow-[rgba(0,0,0,0.35)_0px_5px_15px] cursor-pointer";

            // Create name element
            const nameDiv = document.createElement("div");
            nameDiv.className =
              "bg-gradient-to-l from-[#11bed0] to-[#34a853] hover:from-[#34a853] hover:to-[#11bed0] transition-all ease-in-out duration-900 w-full h-[6vh] flex items-center justify-center gap-x-2 text-white py-3 rounded-lg select-none cursor-pointer";
            nameDiv.innerHTML = `<span>🌍</span> ${country.name}`; // Replace <FaGlobe /> with a globe emoji
            nameDiv.addEventListener("click", function () {
              window.location.href = `/city.html?city=${country.name}`;
            });
            img.addEventListener("click", function () {
              window.location.href = `/city.html?city=${country.name}`;
            });

            // Append image and name to card
            card.appendChild(img);
            card.appendChild(nameDiv);

            // Append card to container
            container.appendChild(card);
          });
        }

        // Call function to create and display cards
        createCitiesCards();
      </script> --}}
    </div>

    <!-- Footer -->
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

      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
  </body>
</html>
