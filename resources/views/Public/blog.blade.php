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
    <link rel="stylesheet" href="assets/public/CSS/blog.css" />
    <script>
      const isAuthenticated = @json(Auth::check());
  </script>
    <title>Blog</title>
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
    <!-- Blog Cards -->
    <div class="w-full flex justify-center items-center">
      <div
        id="blogsCardsContainer"
        class="grid grid-cols-3 place-items-center justify-center w-fit gap-10"
      ></div>
    </div>

    <div
      class="w-full flex justify-center items-center text-center text-[1.2rem] font-semibold mt-20"
      id="login-block"
    >
      You Welcome To Write Your Blog
    </div>
    <div
      class="w-full flex justify-center items-center text-center text-sm font-[300] gap-x-1 mb-20"
      id="login-block2"
    >
      Please <a href="/sign-in.html" class="text-blue-500">log in</a> to submit
      content!
    </div>
    <div class="flex w-full items-center justify-center mt-20">
      <div class="font-bold text-xl">You Welcome To Write Your Blog</div>
    </div>
    <div class="flex w-full items-center justify-center">
      <div class="flex flex-col gap-y-2 pb-20 pt-10" id="Write-Blog">
        <label for="email">Your Email</label>
        <input
          type="email"
          id="email"
          placeholder="Your Email"
          class="px-2 py-1"
        />
        <label for="title">Post Title</label>
        <input
          type="text"
          id="title"
          placeholder="Post Title"
          class="px-2 py-1"
        />
        <label for="question">1 + 1 = </label>
        <input
          type="text"
          id="question"
          placeholder="Anti Spam Question"
          class="px-2 py-1"
        />
        <label for="user-submitted-category">Post Category</label>
        <select
          id="user-submitted-category"
          data-required="true"
          required=""
          class="border-[1px] border-black py-2 px-1"
          name="user-submitted-category[]"
        >
          <option value="" selected="true" disabled="">
            Please select a category..
          </option>
          <option value="417">Australia</option>
          <option value="420">Beijing</option>
          <option value="421">Berlin</option>
          <option value="422">Bern</option>
          <option value="256">Blog</option>
          <option value="423">Brisbane</option>
          <option value="424">Cairns</option>
          <option value="425">Canada</option>
          <option value="426">Canberra</option>
          <option value="427">China</option>
          <option value="428">Christchurch</option>
          <option value="429">Darwin</option>
          <option value="430">Dunedin</option>
          <option value="431">France</option>
          <option value="432">Geelong</option>
          <option value="433">Germany</option>
          <option value="434">Gisborne</option>
          <option value="435">Gold Coast</option>
          <option value="436">Hamilton</option>
          <option value="437">Hobart</option>
          <option value="438">Invercargill</option>
          <option value="439">London</option>
          <option value="440">Melbourne</option>
          <option value="441">Moscow</option>
          <option value="442">Napier Hastings</option>
          <option value="443">Nelson</option>
          <option value="418">New Zealand</option>
          <option value="444">Newcastle</option>
          <option value="445">North Korea</option>
          <option value="446">Other</option>
          <option value="447">Ottawa</option>
          <option value="448">Palmerston North</option>
          <option value="449">Paris</option>
          <option value="450">Perth</option>
          <option value="451">Rotorua</option>
          <option value="452">Russia</option>
          <option value="460">Select Washington</option>
          <option value="453">South Korea</option>
          <option value="454">Sunshine Coast</option>
          <option value="455">Switzerland</option>
          <option value="416">Sydney</option>
          <option value="456">Tauranga</option>
          <option value="457">Toowoomba</option>
          <option value="458">Townsville</option>
          <option value="459">United Kingdom</option>
          <option value="461">Wellington</option>
          <option value="462">Whanganui</option>
          <option value="463">Whangarei</option>
          <option value="464">Wollongong</option>
        </select>

        <label for="user-submitted-content">Post Content</label>
        <textarea
          class="h-[10vh] border-[1px] border-black p-1 text-sm"
          id="user-submitted-content"
          placeholder="Post Content"
        ></textarea>
        <label for="user-submitted-content" class="flex flex-col">
          <div class="">Upload an Image</div>
          <div class="">Please select your image(s) to upload.</div>
        </label>
        <div class="flex flex-col gap-y-2 py-2" id="files-blog">
          <script>
            document.addEventListener("DOMContentLoaded", function () {
              const input = document.createElement("input");
              input.type = "file";
              input.accept = "image/*";
              document.getElementById("files-blog").appendChild(input);
            });
          </script>
        </div>
        <div class="" id="file-btn"></div>
        <div class="" id="submit-btn"></div>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function () {
          const button = document.createElement("button");
          button.textContent = "Add another image";
          button.className = "text-blue-700";
          button.onclick = function () {
            const input = document.createElement("input");
            input.type = "file";
            input.accept = "image/*";
            document.getElementById("files-blog").appendChild(input);
          };
          document.getElementById("file-btn").appendChild(button);
          const sbutton = document.createElement("button");
          button.textContent = "Submit Post";
          button.className =
            "bg-[#EFEFEF] text-[#7f7f7f] p-1 px-2 cursor-pointer text-sm";
          document.getElementById("submit-btn").appendChild(button);
        });
      </script>
    </div>

    <!-- Footer -->
    <div
      class="flex items-center justify-center w-full bg-[#363f48] py-12 flex gap-x-5 text-white mt-8"
      id="footer-navs"
    ></div>
    <script src="assets/public/JS/footer_bottom.js"></script>

    <script src="assets/public/JS/LoginBtn.js"></script>

    <script src="assets/public/JS/main.js"></script>

    <script src="assets/public/JS/Blog.js"></script>
  </body>
</html>
