<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="style.css" />
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
    <style>
      .MapContainer {
        position: relative !important;
        width: 80% !important;
      }

      .tooltip {
        position: absolute !important;
        padding: 5px 10px !important;
        background-color: black !important;
        color: white !important;
        border-radius: 5px !important;
        font-size: 12px !important;
        white-space: nowrap !important;
        pointer-events: none !important;
        opacity: 0;
        transition: opacity 0.2s !important;
      }

      .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 16px;
      }
      #map {
        width: 90vw;
        max-width: 1000px;
        height: fit-content;
        overflow-x: auto;
      }
      .selected-country {
        font-size: 1.2em;
        font-weight: bold;
        color: #0071a4;
      }
      .MapContainer {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .MapContainer svg path {
        fill: #7798ba;
        cursor: pointer;
      }

      .MapContainer svg path:hover {
        fill: #356ca3;
      }

      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0, 0, 0); /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4); /* Black w/ opacity */
      }

      /* Modal Content/Box */
      .modal-content {
        background-color: transparent;
        /* padding: 20px; */
        border: none;
        margin: 15% auto; /* 15% from the top and centered */
        position: relative;
        width: 50%; /* Could be more or less, depending on screen size */
        min-width: 500px;
      }

      /* The Close Button */
      .close {
        position: absolute;
        right: 10px;
        top: 10px;
        color: #fff;

        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }

      @media screen and (max-width: 770px) {
        #button-container {
          flex-direction: column;
          bottom: -100% !important;
        }
        .header-container {
          margin-bottom: 600px !important;
        }
      }
      @media screen and (max-width: 1185px) {
        .contryCard {
          width: 293.33px !important;
          max-width: 293.33px !important;
        }
      }
      @media screen and (max-width: 1160px) {
        .ads-section {
          grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }
      }

      @media screen and (max-width: 1000px) {
        #countryCardsContainer {
          grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
          width: 100% !important;
        }
        .contryCard {
          width: 400px !important;
          max-width: 400px !important;
        }
        .MapContainer {
          width: 80% !important;
          margin: 0 auto !important;
        }
      }
      @media screen and (max-width: 900px) {
        .contryCard {
          width: 350px !important;
          max-width: 350px !important;
        }
      }
      @media screen and (max-width: 800px) {
        .contryCard {
          width: 300px !important;
          max-width: 300px !important;
        }
        .video-section {
          flex-direction: column !important;
          width: 90% !important;
          .left,
          .right {
            width: 100% !important;
          }
        }
      }
      @media screen and (max-width: 780px) {
        .ads-section {
          grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
        }
        .ads-card {
          width: 90% !important;
        }
      }
      @media screen and (max-width: 700px) {
        #countryCardsContainer {
          grid-template-columns: repeat(1, minmax(0, 1fr)) !important;
        }
        .contryCard {
          width: 90% !important;
          max-width: 90% !important;
        }
      }
      @media screen and (max-width: 550px) {
        .nav-btns {
          flex-direction: column;
          align-items: center !important;
          row-gap: 5px;
        }
        .header-container {
          margin-bottom: 700px !important;
        }
        .desc-section {
          width: 90% !important;
          padding: 0px 0px !important;
        }
      }
    </style>

    <title>Sign Up</title>
  </head>
  <body
    class="relative flex justify-center items-center w-full h-screen bg-gray-100"
  >
    <div class="flex flex-col">
      <div
        class="flex flex-col items-center justify-center h-fit gap-y-2 w-fit min-w-[500px] border-2 border-gray-300 rounded-lg bg-white px-6 py-10"
      >
        <label for="username" class="w-full">Username</label>
        <input
          id="username"
          type="text"
          class="px-3 py-2 border-[1.5px] border-gray-300 rounded-lg w-full mb-3"
        />
        <label for="email" class="w-full">Email</label>
        <input
          id="email"
          type="email"
          class="px-3 py-2 border-[1.5px] border-gray-300 rounded-lg w-full"
        />
        <div class="flex w-full justify-start items-center text-[.9rem] mt-2">
          Registration confirmation will be emailed to you.
        </div>
        <div class="flex w-full justify-start items-center mt-2">
          <button
            class="px-8 py-2 rounded-xl bg-gray-500 text-white hover:text-black hover:bg-blue-400 text-2xl font-thin transition-all ease-in-out duration-700"
          >
            Register
          </button>
        </div>
        <div class="w-full border-t border-gray-300 my-4"></div>
        <button
          class="w-full flex items-center justify-center gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50"
        >
          <img
            src="https://www.google.com/favicon.ico"
            alt="Google"
            class="w-5 h-5"
          />
          Continue with Google
        </button>
        <button
          class="w-full flex items-center justify-center gap-2 px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50"
        >
          <img
            src="https://twitter.com/favicon.ico"
            alt="Twitter"
            class="w-5 h-5"
          />
          Continue with Twitter
        </button>
      </div>
      <div class="py-8">
        <div class="flex justify-center gap-x-2 py-5">
          <a href="./sign-in.html" class="hover:text-blue-500 cursor-pointer"
            >Login</a
          >
          <div class="text-gray-600">|</div>
          <div class="hover:text-blue-500 cursor-pointer">
            Lost your password?
          </div>
        </div>
        <a
          href="/index.html"
          class="text-gray-600 text-center hover:text-blue-500 cursor-pointer flex justify-center items-center"
        >
          Go to Your guide to whole world
        </a>
      </div>
    </div>

    <script src="/country_guide.js"></script>
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("loginBtn");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on the button, open the modal
      btn.onclick = function () {
        modal.style.display = "block";
      };

      // When the user clicks on <span> (x), close the modal
      span.onclick = function () {
        modal.style.display = "none";
      };

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function (event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      };

      document.querySelectorAll(".MapContainer svg path").forEach((path) => {
        const tooltip = document.getElementById("tooltip");

        path.addEventListener("mouseenter", (event) => {
          const title = event.target.getAttribute("title");
          tooltip.innerText = title;
          tooltip.style.opacity = 1;
          console.log(`${event.pageX + 10}px`, `${event.pageY + 10}px`);
          tooltip.style.left = `${event.pageX - 100}px`;
          tooltip.style.top = `${event.pageY - 1450}px`;
          // console.log(tooltip.style);
        });

        path.addEventListener("mousemove", (event) => {});

        path.addEventListener("mouseleave", () => {
          tooltip.style.opacity = 0;
        });
      });
      const btnData = [
        { title: "Immigration", img: "./images/immigration-law.png" },
        { title: "Real Estate", img: "./images/property.png" },
        {
          title: "Rent Car & Hotel & Flight",
          img: "./images/reception.png",
        },
        { title: "Sell & Moving ​​Cars", img: "./images/tesla.png" },
        { title: "World Mall", img: "./images/click.png" },
      ];

      const buttonContainer = document.getElementById("button-container");

      btnData.forEach((item) => {
        const buttonDiv = document.createElement("div");
        buttonDiv.className =
          "flex flex-col items-center justify-center bg-[#42A7DF] px-1 py-2 w-[130px] text-center text-white h-[110px] text-[1rem] shadow-md";

        const icon = document.createElement("img");
        icon.className = "h-10 w-10";
        icon.src = item.img;
        // icon.innerHTML = item.img;

        const title = document.createElement("p");
        title.textContent = item.title;

        buttonDiv.appendChild(icon);
        buttonDiv.appendChild(title);
        buttonContainer.appendChild(buttonDiv);
      });

      // Country data
      const countryDataForCards = [
        { name: "Australia", img: "./cimage/australia.jpg" },
        { name: "New Zealand", img: "./cimage/new-zealand.jpg" },
        { name: "United Kingdom", img: "./cimage/uk.jpg" },
        { name: "France", img: "./cimage/fr.jpg" },
        { name: "United States", img: "./cimage/us.jpg" },
        { name: "Canada", img: "./cimage/cn.jpg" },
        { name: "Russia", img: "./cimage/ru.jpg" },
        { name: "Germany", img: "./cimage/gr.jpg" },
        { name: "Switzerland", img: "./cimage/sw.jpg" },
        { name: "Japan", img: "./cimage/jp.jpg" },
        { name: "China", img: "./cimage/china.jpg" },
        { name: "Korea", img: "./cimage/kor.jpg" },
        { name: "Italy", img: "./cimage/it.jpg" },
        { name: "Spain", img: "./cimage/sp.jpg" },
        { name: "Denmark", img: "./cimage/dk.jpg" },
        { name: "Turkey", img: "./cimage/tr.jpeg" },
        { name: "Thailand", img: "./cimage/th.jpg" },
        { name: "Mexico", img: "./cimage/mx.jpg" },
        { name: "Pakistan", img: "./cimage/pk.jpg" },
        { name: "India", img: "./cimage/in.jpg" },
        { name: "Bangladesh", img: "./cimage/bd.jpg" },
        { name: "Emirates", img: "./cimage/uae.jpg" },
        { name: "Malaysia", img: "./cimage/my.jpg" },
        { name: "Qatar", img: "./cimage/qa.jpg" },
        { name: "Egypt", img: "./cimage/eg.jpg" },
        { name: "Saudi Arabia", img: "./cimage/sa.png" },
        { name: "Morocco", img: "./cimage/moro.jpg" },
        { name: "Hungary", img: "./cimage/hu.jpg" },
        { name: "Austria", img: "./cimage/au.jpg" },
        { name: "Maldives", img: "./cimage/mv.jpg" },
        { name: "Bosnia and Herzegovina", img: "./cimage/ba.jpg" },
        { name: "Indonesia", img: "./cimage/id.jpg" },
        { name: "South Africa", img: "./cimage/za.jpg" },
      ];

      function createCountryCards() {
        const container = document.getElementById("countryCardsContainer");

        countryDataForCards.forEach((country) => {
          // Create card container
          const card = document.createElement("div");
          card.className =
            "max-w-[360px] w-[360px] flex flex-col gap-y-2 h-[29.5vh] items-center justify-between contryCard";

          // Create image element
          const img = document.createElement("img");
          img.src = country.img;
          img.alt = country.name;
          img.className =
            "min-h-[168px] h-[168px] w-full object-cover shadow-[rgba(0,0,0,0.35)_0px_5px_15px]";

          // Create name element
          const nameDiv = document.createElement("div");
          nameDiv.className =
            "bg-gradient-to-l from-[#11bed0] to-[#34a853] hover:from-[#34a853] hover:to-[#11bed0] transition-all ease-in-out duration-900 w-full h-[6vh] flex items-center justify-center gap-x-2 text-white py-3 rounded-lg select-none cursor-pointer";
          nameDiv.innerHTML = `<span>🌍</span> ${country.name}`; // Replace <FaGlobe /> with a globe emoji

          // Append image and name to card
          card.appendChild(img);
          card.appendChild(nameDiv);

          // Append card to container
          container.appendChild(card);
        });
      }

      // Call function to create and display cards
      createCountryCards();
    </script>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
