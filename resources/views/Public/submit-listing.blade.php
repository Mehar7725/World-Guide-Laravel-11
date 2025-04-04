<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script
      src="https://kit.fontawesome.com/5aff4a9523.js"
      crossorigin="anonymous"
    ></script>
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
    <title>Home Page</title>
  </head>

  
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
    .loading-spinner {
      position: relative;
      float: right !important;
      left: 138px !important;
       bottom: -12px !important;
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


  <body class="relative bg-gray-100">
    <!-- Navbar -->
    <script src="assets/public/JS/navbar.js"></script>
    <!-- =============================== -->
    <!-- Modal (Login) -->
    <!-- =============================== -->
    <x-public-login/>
    <!-- Homer Banner -->
    <script src="assets/public/JS/bannerImage.js"></script>

    <div class="bg-gray-100 flex flex-col items-center justify-center">
      <div class="w-[90%] max-w-[1000px] text-center">
        <!-- Title -->
        <h1 class="text-2xl font-semibold text-gray-800">Add your Listing</h1>
        <!-- Subtitle -->
        <p class="text-gray-500 mt-1">Add details about your listing</p>
        <!-- Divider -->
        <div class="w-8 h-1 bg-gray-400 mx-auto my-4"></div>

        <!-- Notification Box -->
        <div
          class="flex items-center justify-start bg-gray-50 border border-gray-200 p-4 mt-6 rounded-lg text-gray-600"
        >
          <!-- Profile Icon Placeholder -->
          <img
            src="assets/public/images/avatar.png"
            class="w-10 h-10 bg-gray-300 rounded-full mr-3"
          />
          <!-- Notification Text -->
          <div class="text-sm">
            You are currently signed in as <strong>{{Auth::user()->name}}</strong>,
            <a href="#" class="text-blue-600 hover:underline">Sign out</a> or
            continue below and start submission.
          </div>
        </div>
      </div>
      <div class="w-[85%] max-w-[900px] h-[1px] bg-gray-400 my-3"></div>
      <div class="flex bg-gray-100 py-6 w-[90%] max-w-[1000px]">
        <!-- Left section (form) -->
        <form id="addForm" action="/upload-add" method="POST" enctype="multipart/form-data"> @csrf 

          <input type="hidden" name="payment_id" id="payment_id" value="">
          <input type="hidden" name="price" id="price" value="{{$pricing}}">
          <input type="hidden" name="time" id="time" value="{{$time}}">

        <div class="w-[80%] overflow-y-auto h-[90vh]">
          <div class="w-full bg-white p-6 shadow-md rounded-lg">
            <h2 class="text-lg font-semibold text-gray-700 mb-4">
              PRIMARY LISTING DETAILS
            </h2>

            <!-- Listing Title -->
            <div class="mb-4">
              <label
                class="text-sm font-semibold text-gray-600"
                for="listingTitle"
              >
                Listing Title *</label
              >
              <input
                type="text"
                id="title" name="title"
                placeholder="Staple & Fancy Hotel"
                class="w-full mt-1 p-2 border border-gray-300 rounded"
              />
            </div>

            <!-- Full Address -->
            <div class="mb-4 w-full">
              <label
                class="text-sm font-semibold text-gray-600 flex items-center justify-between !w-full"
                for="fullAddress"
              >
                <div class="" id="address-label">Full Address</div>
                <div class="w-fit">
                  <button
                    class="w-fit p-2 bg-blue-500 text-white font-semibold rounded-none"
                    id="buttonAd"
                  >
                    Search By Google
                  </button>
                  <button
                    class="w-fit p-2 bg-gray-200 font-semibold text-gray-700 border-l border-gray-300"
                    id="buttonAd"
                  >
                    Manual Coordinates
                  </button>
                  <button
                    class="w-fit p-2 bg-gray-200 font-semibold text-gray-700 border-l border-gray-300 rounded-r"
                    id="buttonAd"
                  >
                    Drop Pin
                  </button>
                </div>
              </label>
              <div class="flex flex-col hidden gap-y-2" id="by-coord">
                <input
                  type="text"
                  id="fullAddress"
                  placeholder="Start typing and find your place in google map"
                  class="w-full p-2 border border-gray-300 rounded-l"
                />
                <div class="flex gap-x-2">
                  <div class="flex flex-col w-1/2">
                    <label
                      class="text-sm font-semibold text-gray-600"
                      for="Latitude"
                    >
                      Latitude
                    </label>
                    <input
                      type="text"
                      id="Latitude"
                      placeholder="40.1231455"
                      class="w-full mt-1 p-2 border border-gray-300 rounded"
                    />
                  </div>
                  <div class="flex flex-col w-1/2">
                    <label
                      class="text-sm font-semibold text-gray-600"
                      for="Longitude"
                    >
                      Longitude
                    </label>
                    <input
                      type="text"
                      id="Longitude"
                      placeholder="-74.876545678"
                      class="w-full mt-1 p-2 border border-gray-300 rounded"
                    />
                  </div>
                </div>
              </div>
              <div class="flex items-center w-full" id="by-address">
                <input
                  type="text"
                  id="address" name="address"
                  placeholder="Start typing and find your place in google map"
                  class="w-full p-2 border border-gray-300 rounded-l"
                />
              </div>
            </div>

            <!-- Country -->
            <div class="mb-4">
              <label class="text-sm font-semibold text-gray-600" for="country"
                >Country</label
              >
              <select
                id="country" name="country"
                class="w-full mt-1 p-2 border border-gray-300 rounded text-gray-600"
              >
                <option value="" disabled selected >Select Your Listing Country</option>
                @if ($country)
                @foreach ($country as $item)
                <option value="{{$item->id}}"   >{{$item->country_name}}</option>
                 
             @endforeach
                 
             @endif
              </select>
            </div>

            <!-- City -->
            <div class="mb-4">
              <label class="text-sm font-semibold text-gray-600" for="city"
                >City</label
              >
              <select
                id="city" name="city"
                class="w-full mt-1 p-2 border border-gray-300 rounded text-gray-600"
              >
                <option value="" disabled selected>Select Your Listing City</option>
              </select>
            </div>

            <!-- City -->
            <div class="mb-4">
              <label class="text-sm font-semibold text-gray-600" for="category"
                >Category</label
              >
              <select
                id="category" name="category"
                class="w-full mt-1 p-2 border border-gray-300 rounded text-gray-600"
              >
                <option value="" disabled selected>Select Your Listing Category</option>
              </select>
            </div>

            <!-- Website -->
            <div class="mb-4">
              <label class="text-sm font-semibold text-gray-600" for="website"
                >Website</label
              >
              <input
                type="text"
                id="website" name="website"
                placeholder="http://"
                class="w-full mt-1 p-2 border border-gray-300 rounded"
              />
            </div>

            <!-- Phone -->
            <div class="mb-4">
              <label class="text-sm font-semibold text-gray-600" for="phone"
                >Phone</label
              >
              <input
                type="text"
                id="phone" name="phone"
                placeholder="111-111-1234"
                class="w-full mt-1 p-2 border border-gray-300 rounded"
              />
            </div>

            <!-- Whatsapp -->
            <div>
              <label class="text-sm font-semibold text-gray-600" for="whatsapp"
                >Whatsapp</label
              >
              <input
                type="text"
                id="whatsapp" name="whatsapp"
                placeholder="111-111-1234"
                class="w-full mt-1 p-2 border border-gray-300 rounded"
              />
            </div>
          </div>
           

          <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <h3 class="text-lg font-bold mb-4">PRICE DETAILS</h3>
            <div class="flex mb-4">
              <div class="flex-1 mr-4">
                <label
                  for="price_details"
                  class="block text-gray-700 text-sm font-bold mb-2"
                >
                  Price Details
                </label>
                <input
                  type="text"
                  id="price_details" name="price_details"
                  placeholder="not to say, price from, price to"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                />
              </div>
              <div class="flex-1 mr-4">
                <label
                  for="price_from"
                  class="block text-gray-700 text-sm font-bold mb-2"
                  >Price From</label
                >
                <input
                  type="text"
                  id="price_from" name="price_from"
                  placeholder="Price From"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                />
              </div>
              <div class="flex-1">
                <label
                  for="price_to"
                  class="block text-gray-700 text-sm font-bold mb-2"
                >
                  Price To
                </label>
                <input
                  type="text"
                  id="price_to" name="price_to"
                  placeholder="Price To"
                  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                />
              </div>
            </div>
          </div>

          <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <h3 class="text-lg font-bold mb-4">Business Hours</h3>

            <div class="flex flex-col" id="full_availibility_div">
             
              {{-- <div
                class="flex w-full justify-between border-b-[1px] border-gray-200 py-3"
              >
                <div class="w-[90px]">Saturday</div>
                <div class="">4:00 - 7:00</div>
                <i class="fa-solid fa-circle-xmark text-x l text-[#E1ADA9]"></i>
              </div> --}}
            </div>
            <div class="w-full flex justify-between items-center py-2">
              <div class="flex gap-x-3 items-center">
                <div class="">
                  <select id="select_day"
                    class="form-select block w-full mt-1 border-[1px] border-gray-300  "
                  >
                    <option value="">Select Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday">Tuesday</option>
                    <option value="Wednesday">Wednesday</option>
                    <option value="Thursday">Thursday</option>
                    <option value="Friday">Friday</option>
                    <option value="Saturday">Saturday</option>
                    <option value="Sunday">Sunday</option>
                  </select>
                </div>
                <div class="">
                  <select id="select_start_time"
                    class="form-select block w-full mt-1 border-[1px] border-gray-300  "
                  >
                    <option value="">Select Time</option>
                    <option value="00:00 AM">12:00 AM</option>
                    <option value="00:30 AM">12:30 AM</option>
                    <option value="01:00 AM">1:00 AM</option>
                    <option value="01:30 AM">1:30 AM</option>
                    <option value="02:00 AM">2:00 AM</option>
                    <option value="02:30 AM">2:30 AM</option>
                    <option value="03:00 AM">3:00 AM</option>
                    <option value="03:30 AM">3:30 AM</option>
                    <option value="04:00 AM">4:00 AM</option>
                    <option value="04:30 AM">4:30 AM</option>
                    <option value="05:00 AM">5:00 AM</option>
                    <option value="05:30 AM">5:30 AM</option>
                    <option value="06:00 AM">6:00 AM</option>
                    <option value="06:30 AM">6:30 AM</option>
                    <option value="07:00 AM">7:00 AM</option>
                    <option value="07:30 AM">7:30 AM</option>
                    <option value="08:00 AM">8:00 AM</option>
                    <option value="08:30 AM">8:30 AM</option>
                    <option value="09:00 AM">9:00 AM</option>
                    <option value="09:30 AM">9:30 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="10:30 AM">10:30 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="11:30 AM">11:30 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="12:30 PM">12:30 PM</option>
                    <option value="13:00 PM">1:00 PM</option>
                    <option value="13:30 PM">1:30 PM</option>
                    <option value="14:00 PM">2:00 PM</option>
                    <option value="14:30 PM">2:30 PM</option>
                    <option value="15:00 PM">3:00 PM</option>
                    <option value="15:30 PM">3:30 PM</option>
                    <option value="16:00 PM">4:00 PM</option>
                    <option value="16:30 PM">4:30 PM</option>
                    <option value="17:00 PM">5:00 PM</option>
                    <option value="17:30 PM">5:30 PM</option>
                    <option value="18:00 PM">6:00 PM</option>
                    <option value="18:30 PM">6:30 PM</option>
                    <option value="19:00 PM">7:00 PM</option>
                    <option value="19:30 PM">7:30 PM</option>
                    <option value="20:00 PM">8:00 PM</option>
                    <option value="20:30 PM">8:30 PM</option>
                    <option value="21:00 PM">9:00 PM</option>
                    <option value="21:30 PM">9:30 PM</option>
                    <option value="22:00 PM">10:00 PM</option>
                    <option value="22:30 PM">10:30 PM</option>
                    <option value="23:00 PM">11:00 PM</option>
                    <option value="23:30 PM">11:30 PM</option>
                  </select>
                </div>
                <div class="">
                  <select id="select_end_time"
                    class="form-select block w-full mt-1 border-[1px] border-gray-300  "
                  >
                    <option value="">Select Time</option> 
                    <option value="00:30 AM">12:30 AM</option>
                    <option value="01:00 AM">1:00 AM</option>
                    <option value="01:30 AM">1:30 AM</option>
                    <option value="02:00 AM">2:00 AM</option>
                    <option value="02:30 AM">2:30 AM</option>
                    <option value="03:00 AM">3:00 AM</option>
                    <option value="03:30 AM">3:30 AM</option>
                    <option value="04:00 AM">4:00 AM</option>
                    <option value="04:30 AM">4:30 AM</option>
                    <option value="05:00 AM">5:00 AM</option>
                    <option value="05:30 AM">5:30 AM</option>
                    <option value="06:00 AM">6:00 AM</option>
                    <option value="06:30 AM">6:30 AM</option>
                    <option value="07:00 AM">7:00 AM</option>
                    <option value="07:30 AM">7:30 AM</option>
                    <option value="08:00 AM">8:00 AM</option>
                    <option value="08:30 AM">8:30 AM</option>
                    <option value="09:00 AM">9:00 AM</option>
                    <option value="09:30 AM">9:30 AM</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="10:30 AM">10:30 AM</option>
                    <option value="11:00 AM">11:00 AM</option>
                    <option value="11:30 AM">11:30 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="12:30 PM">12:30 PM</option>
                    <option value="13:00 PM">1:00 PM</option>
                    <option value="13:30 PM">1:30 PM</option>
                    <option value="14:00 PM">2:00 PM</option>
                    <option value="14:30 PM">2:30 PM</option>
                    <option value="15:00 PM">3:00 PM</option>
                    <option value="15:30 PM">3:30 PM</option>
                    <option value="16:00 PM">4:00 PM</option>
                    <option value="16:30 PM">4:30 PM</option>
                    <option value="17:00 PM">5:00 PM</option>
                    <option value="17:30 PM">5:30 PM</option>
                    <option value="18:00 PM">6:00 PM</option>
                    <option value="18:30 PM">6:30 PM</option>
                    <option value="19:00 PM">7:00 PM</option>
                    <option value="19:30 PM">7:30 PM</option>
                    <option value="20:00 PM">8:00 PM</option>
                    <option value="20:30 PM">8:30 PM</option>
                    <option value="21:00 PM">9:00 PM</option>
                    <option value="21:30 PM">9:30 PM</option>
                    <option value="22:00 PM">10:00 PM</option>
                    <option value="22:30 PM">10:30 PM</option>
                    <option value="23:00 PM">11:00 PM</option>
                    <option value="23:30 PM">11:30 PM</option>
                  </select>
                </div>
                <div class="form-group flex items-center gap-x-1">
                  <input
                    type="checkbox"
                    id="full_available"
                    name="full_available"
                  />
                  <label for="full_available"
                    >24 Hours Service</label
                  >
                </div>
              </div>

              <input type="hidden" name="availability" id="availability">


              <button type="button"
                id="add-day"
                class="text-[.9rem] w-6 h-6 bg-blue-600 p-1 rounded-lg flex justify-center items-center text-white"
              >
                <i class="fa-solid fa-plus"></i>
              </button>

            </div>
          </div>

          <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <h3 class="text-lg font-bold mb-4">Social Media</h3>
            
            <div class="flex justify-between items-center">
                <h2 class="whitespace-nowrap text-[1rem] font-semibold">Social Media</h2>
                <select id="select_social_media" class="form-select block w-fit border border-gray-300   py-2 rounded leading-tight shadow outline-none">
                    <option value="">Please Select</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Instagram">Instagram</option>
                    <option value="Twitter">Twitter</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="YouTube">YouTube</option>
                </select>
                <input type="text" id="social_media_link" placeholder="Enter social media link"
                    class="shadow appearance-none border rounded w-full max-w-[300px] py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
        
            <input type="hidden" id="all_links" name="all_links">
        
            <div class="w-full flex justify-end py-4">
                <button id="add-links" type="button" class="flex items-center gap-x-1">
                    <div class="text-[.9rem] w-6 h-6 bg-blue-600 p-1 rounded-lg flex justify-center items-center text-white">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="text-blue-600">Add Link</div>
                </button>
            </div>
        
            <!-- Social Links List (Below the button) -->
            <div id="social-links-list" class="flex flex-col gap-3"></div>
        
        </div>
        

          <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <h3 class="text-lg font-bold mb-4">Frequently Asked Questions</h3>
        
            <div class="flex gap-4 mt-4">
                <label for="faq_question" class="block text-gray-700 text-sm font-bold mb-2">FAQ</label>
                <div class="flex flex-col gap-y-2 w-full pl-5">
                    <input type="text" id="faq_question" placeholder="Enter FAQ question"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <textarea id="faq_answer" placeholder="Enter FAQ answer"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline min-h-[10vh]"></textarea>
                </div>
            </div>
        
            <input type="hidden" id="all_faq" name="all_faq">
        
            <!-- Add FAQ Button -->
            <div class="w-full flex justify-end py-4">
                <button id="add-faq" type="button" class="flex items-center gap-x-1">
                    <div class="text-[.9rem] w-6 h-6 bg-blue-600 p-1 rounded-lg flex justify-center items-center text-white">
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="text-blue-600">Add FAQ</div>
                </button>
            </div>
        
            <!-- FAQs List (Now below the button) -->
            <div class="flex flex-col gap-4" id="faq-questions"></div>
        
        </div>
        

          <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <h3 class="text-lg font-bold mb-4">More Info</h3>
            <h3 class="text-lg font-bold mb-4">Description</h3>
            
              <textarea name="description" id="default"></textarea>
           
            <script src="assets/public/tinymce/tinymce.min.js"></script>
            <script src="assets/public/JS/rt_script.js"></script>
          </div>

          <div class="bg-white shadow-md rounded px-8 py-6 mb-4">
            <h3 class="text-[1rem] font-bold mb-2">
              Your Business Video <span class="font-normal">(Optional)</span>
            </h3>
            <div class="mb-4">
              <input
                type="text"
                id="business_video" name="video"
                placeholder="ex: https://youtu.be/lY2y"
                class="w-full mt-1 p-2 border border-gray-300 rounded"
              />
            </div>
            
            <h3 class="text-lg font-bold mb-2">Images</h3>
            <label
              for="image"
              class="relative flex flex-col items-center justify-center h-52 w-full cursor-pointer border-2 border-dashed border-gray-300 bg-white p-6 rounded-lg shadow-md gap-4 bg-[#f5f5f5]"
              id="image-label"
            >
              <!-- Image Preview -->
              <div class="relative hidden group" id="image-preview-container">
                <img id="image-preview" class="w-32 h-32 object-cover rounded-lg" />
                
                <!-- Remove Button -->
                
                <button  type="button" id="image-remove-btn" class="remove-faq text-red-500 bg-white ml-3 absolute top-1 right-1 w-6 h-6 flex items-center justify-center rounded-full shadow-md opacity-0 group-hover:opacity-100" >
                  <i class="fa-solid fa-times"></i>
              </button>
              </div>
            
              <!-- Icon & Text -->
              <div class="flex items-center justify-center" id="image-text-content" style="flex-direction: column;">
                <i class="fa-solid fa-upload text-gray-500 text-6xl "></i>
                <span class="text-gray-600 font-medium">Click to upload image</span>
                <div class="bg-white border-[2px] border-blue-600 text-blue-600 px-2 py-1">
                  Browse Files
                </div>
              </div>
            
              <!-- Hidden Input -->
              <input type="file" id="image" name="image" class="hidden" accept="image/*" />
            </label>
            
            <h3 class="text-lg font-bold mb-2 mt-4">Upload Featured Image</h3>
            <label
              for="featured_image"
              class="relative flex flex-col items-center justify-center h-fit w-full cursor-pointer border-2 border-dashed border-gray-300 bg-[#f5f5f5] bg-white p-6 py-10 rounded-lg shadow-md gap-4"
              id="featured-label"
            >
              <!-- Image Preview -->
              <div class="relative hidden group" id="featured-preview-container">
                <img id="featured-preview" class="w-32 h-32 object-cover rounded-lg" />
            
                <!-- Remove Button -->
                 
                <button  type="button" id="featured-remove-btn" class="remove-faq text-red-500 bg-white ml-3 absolute top-1 right-1 w-6 h-6 flex items-center justify-center rounded-full shadow-md opacity-0 group-hover:opacity-100" >
                  <i class="fa-solid fa-times"></i>
              </button>
              </div>
            
              <!-- Text -->
              <div class="flex items-center gap-x-2" id="featured-text-content">
                <div class="bg-white border-[2px] border-blue-600 text-blue-600 px-2 py-1">
                  Browse Files
                </div>
                <div>Choose a file</div>
              </div>
            
              <!-- Hidden Input -->
              <input type="file" id="featured_image" name="featured_image" class="hidden" accept="image/*" />
            </label>
            
            <h3 class="text-lg font-bold mb-2 mt-4">Upload Business Logo</h3>
            <label
              for="logo"
              class="relative flex flex-col items-center justify-center h-fit w-full cursor-pointer border-2 border-dashed border-gray-300 bg-white p-6 py-10 rounded-lg shadow-md gap-4 bg-[#f5f5f5]"
              id="logo-label"
            >
              <!-- Image Preview -->
              <div class="relative hidden group" id="logo-preview-container">
                <img id="logo-preview" class="w-32 h-32 object-cover rounded-lg" />
            
                <!-- Remove Button -->
                 <button  type="button" id="logo-remove-btn" class="remove-faq text-red-500 bg-white ml-3 absolute top-1 right-1 w-6 h-6 flex items-center justify-center rounded-full shadow-md opacity-0 group-hover:opacity-100" >
                  <i class="fa-solid fa-times"></i>
              </button>
              </div>
            
              <!-- Text -->
              <div class="flex items-center gap-x-2" id="logo-text-content">
                <div class="bg-white border-[2px] border-blue-600 text-blue-600 px-2 py-1">
                  Browse Files
                </div>
                <div>Choose a file</div>
              </div>
            
              <!-- Hidden Input -->
              <input type="file" id="logo" name="logo" class="hidden" accept="image/*" />
            </label>
            
            
            
          
          </div>
          <button onclick="PreviewService()" 
           type="button" class="text-white bg-green-600 hover:bg-green-700 transition-all ease-in-out duration-700 w-full text-center py-2 font-bold rounded-lg"
          >
            Save & Preview
          </button>
        </div>

      </form>

      <!-- Modal -->
<div class="modal fade" id="PaymentModel" tabindex="-1" aria-labelledby="PaymentModelLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="PaymentModelLabel" style="font-size: 20px">Credit Card Payment Gateway</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
   
      
        <!-- Credit Card Payment Form - START -->
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-md-offset-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <div class="row">
                                <h3 class="text-center" style="font-size: 18px">Payment Details</h3>
                                <div class="inlineimage"> <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Mastercard-Curved.png"> <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png"> <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png"> <img class="img-responsive images" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/American-Express-Curved.png"> </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form role="form">
                              <div class="row mb-3">
                                <div class="col-xs-12">
                                    <div class="form-group"> <label>CARD OWNER</label>
                                       <input type="text" name="holder_name" id="holder_name" class="form-control" placeholder="Card Owner Name" /> </div>
                                </div>
                            </div>
                                <div class="row mb-3">
                                    <div class="col-xs-12">
                                        <div class="form-group"> <label>CARD NUMBER</label>
                                            <div class="input-group"> 
                                              <input type="tel" name="card_number" id="card_number" class="form-control" placeholder="Valid Card Number" /> <span class="input-group-addon"><span class="fa fa-credit-card"></span></span> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-xs-7 col-md-7">
                                        <div class="form-group"> <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                           <input type="text" name="date" id="date" class="form-control" placeholder="MM/YY" /> </div>
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <div class="form-group"> <label>CV CODE</label> 
                                          <input type="tel" name="cvv" id="cvv" class="form-control" placeholder="CVC" /> </div>
                                    </div>
                                </div>
                              
                            </form>
                        </div>
                     
                    </div>
                </div>
            </div> 
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  onclick="SubmitPayment()" id="pay_btn"  type="button" class="btn btn-success btn-block" >Confirm Payment {{$pricing}} </button>
        
      </div>
    </div>
  </div>
</div>

        <!-- Right section (info card) -->
        <div class="w-1/3 ml-6 bg-white p-6 shadow-md rounded-lg h-fit">
          <h2 class="text-lg font-semibold text-gray-700" id="side-title">
            Title
          </h2>
          <p class="text-sm text-gray-600 mt-2" id="side-content">
            Enter your complete business name for when people who know your
            business by name and are looking you up.
          </p>
          <img
            src="assets/public/images/titleimage.png"
            alt="Example image"
            id="side-image"
            class="mt-4 w-full rounded-md border border-gray-300"
          />
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div
      class="flex items-center justify-center w-full bg-[#363f48] py-12 flex gap-x-5 text-white mt-8"
      id="footer-navs"
    ></div>
    <script src="assets/public/JS/footer_bottom.js"></script>

    <!-- js file for Index JS -->
    <script src="assets/public/JS/submit-listing.js"></script>
    <script src="assets/public/JS/main.js"></script>
    <script src="assets/public/JS/LoginBtn.js"></script>
<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    {{-- Get Cities On Change Country Start --}}
    <script>
      $('#country').on('change', function () {
          var country =  $('#country').val(); 
           
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
                type: "POST",
                url: '/get-cities',
                data:{ country:country,  _token: '{{csrf_token()}}'},
                dataType: 'json',
                success: function (response) {

                    var cities = response['cities'] ;

                    var len = cities.length ; 
                    
                    $('#city').empty();
                    $('#city').append('<option value="" disabled selected >Select Your Listing City</option>');
                    $('#category').empty();
                    $('#category').append('<option value="" disabled selected >Select Your Listing Category</option>');
                    if (len > 0 ) {
    
    for (let i = 0; i < len; i++) {
      var id = response['cities'][i].id;
      var city_name = response['cities'][i].city_name;
  
     var content_div = `<option value="${id}"   >${city_name}</option>`;

     $('#city').append(content_div);

 
    } 
  }
           
                },
              
            });
          
        });
    </script>
    {{-- Get Cities On Change Country END --}}

    {{-- Get Categories On Change City Start --}}
    <script>
      $('#city').on('change', function () {
          var country =  $('#country').val(); 
          var city =  $('#city').val(); 
           
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });

            $.ajax({
                type: "POST",
                url: '/get-categories',
                data:{ country:country,city:city,  _token: '{{csrf_token()}}'},
                dataType: 'json',
                success: function (response) {

                    var categories = response['categories'] ;
                    var len = categories.length ;
                    
                    $('#category').empty();
                    $('#category').append('<option value="" disabled selected >Select Your Listing Category</option>');
                    if (len > 0 ) {
    
    for (let i = 0; i < len; i++) {
      var id = response['categories'][i].id;
      var name = response['categories'][i].name;
  
     var content_div = `<option value="${id}"   >${name}</option>`;

     $('#category').append(content_div);

 
    } 
  }
           
                },
              
            });
          
        });
    </script>
    {{-- Get Categories On Change City END --}}



{{-- Show preview Images selection script Start ======= --}}
    <script>
      function setupImageUpload(inputId, previewId, containerId, textId, removeBtnId) {
        const fileInput = document.getElementById(inputId);
        const previewContainer = document.getElementById(containerId);
        const previewImage = document.getElementById(previewId);
        const textContent = document.getElementById(textId);
        const removeBtn = document.getElementById(removeBtnId);
    
        fileInput.addEventListener("change", function (event) {
          const file = event.target.files[0];
    
          if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
              previewImage.src = e.target.result;
              previewContainer.classList.remove("hidden");
              textContent.classList.add("hidden");
            };
            reader.readAsDataURL(file);
          }
        });
    
        removeBtn.addEventListener("click", function (event) {
          event.stopPropagation(); // Prevent label click
          fileInput.value = ""; // Clear input
          previewContainer.classList.add("hidden");
          textContent.classList.remove("hidden");
        });
      }
    
      // Setup functionality for all three image inputs
      setupImageUpload("image", "image-preview", "image-preview-container", "image-text-content", "image-remove-btn");
      setupImageUpload("featured_image", "featured-preview", "featured-preview-container", "featured-text-content", "featured-remove-btn");
      setupImageUpload("logo", "logo-preview", "logo-preview-container", "logo-text-content", "logo-remove-btn");
    </script>

{{-- Show preview Images selection script END ======= --}}

{{-- Add Faqs script END ======= --}}
<script>
  $(document).ready(function () {
    let faqs = []; // Array to store FAQ objects

    $("#add-faq").click(function () {
        let question = $("#faq_question").val().trim();
        let answer = $("#faq_answer").val().trim();

        if (question === "" || answer === "") {
            alert("Please enter both question and answer!");
            return;
        }

        let uniqueId = Date.now(); // Generate unique ID for tracking

        // Append the question in UI (without answer)
        $("#faq-questions").append(`
            <div class="faq-item flex items-center justify-between bg-gray-100 p-3 rounded-lg" data-id="${uniqueId}">
                <p class="font-semibold">${question}</p>
                <button class="remove-faq text-red-500 ml-3" data-id="${uniqueId}">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>
        `);

        // Add FAQ object to array
        faqs.push({ id: uniqueId, question: question, answer: answer });

        // Update hidden input
        updateFaqInput();

        // Clear input fields
        $("#faq_question").val("");
        $("#faq_answer").val("");
    });

    // Remove FAQ when clicking the cross button
    $(document).on("click", ".remove-faq", function () {
        let faqId = $(this).data("id");

        // Remove from UI
        $(this).closest(".faq-item").remove();

        // Remove from array
        faqs = faqs.filter(faq => faq.id !== faqId);

        // Update hidden input
        updateFaqInput();
    });

    function updateFaqInput() {
        let formattedFaqs = faqs.map(faq => ({
            question: faq.question,
            answer: faq.answer
        }));

        $("#all_faq").val(JSON.stringify(formattedFaqs));
    }
});


</script>
{{-- Add Faqs script Start ======= --}}




{{-- Add Sical Links  script Start ======= --}}
<script>
  $(document).ready(function () {
    let socialLinks = [];

    $("#add-links").click(function () {
        let platform = $("#select_social_media").val();
        let url = $("#social_media_link").val();

        if (!platform || !url) {
            alert("Please select a platform and enter a valid URL.");
            return;
        }

        // Add to the socialLinks array
        socialLinks.push({ platform, url });

        // Remove selected option from dropdown
        $("#select_social_media option[value='" + platform + "']").remove();

        // Append new link to the list
        $("#social-links-list").append(`
            <div class="flex justify-between items-center border p-2 rounded shadow-md" data-platform="${platform}">
                <span class="font-semibold">${platform}:</span>
                <a href="${url}" target="_blank" class="text-blue-600">${url}</a>
                <button class="remove-link text-red-500 ml-3" data-platform="${platform}">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>
        `);

        // Update hidden input
        $("#all_links").val(JSON.stringify(socialLinks));

        // Clear input fields
        $("#select_social_media").val("");
        $("#social_media_link").val("");
    });

    // Remove Link
    $(document).on("click", ".remove-link", function () {
        let platform = $(this).data("platform");

        // Remove from socialLinks array
        socialLinks = socialLinks.filter(link => link.platform !== platform);

        // Add the removed platform back to the dropdown
        $("#select_social_media").append(`<option value="${platform}">${platform}</option>`);

        // Remove from the list
        $(this).closest("div").remove();

        // Update hidden input
        $("#all_links").val(JSON.stringify(socialLinks));
    });
});

</script>
{{-- Add Sical Links  script END ======= --}}



{{-- Add Availibility Bussines Time  script Start ======= --}}
<script>
document.addEventListener("DOMContentLoaded", function () {
    const daySelect = document.getElementById("select_day");
    const startTimeInput = document.getElementById("select_start_time");
    const endTimeInput = document.getElementById("select_end_time");
    const fullAvailableCheckbox = document.getElementById("full_available");
    const addButton = document.getElementById("add-day");
    const availabilityList = document.getElementById("full_availibility_div");
    const availabilityInput = document.getElementById("availability");

    let availabilityData = [];

    // Disable start & end time if "24 Hours Available" is checked
    fullAvailableCheckbox.addEventListener("change", function () {
        if (this.checked) {
            startTimeInput.disabled = true;
            endTimeInput.disabled = true;
            startTimeInput.value = "";
            endTimeInput.value = "";
        } else {
            startTimeInput.disabled = false;
            endTimeInput.disabled = false;
        }
    });

    // Validate start time < end time
    function isValidTime(start, end) {
        return start < end;
    }

    // Add availability
    addButton.addEventListener("click", function () {
        const selectedDay = daySelect.value;
        const startTime = startTimeInput.value;
        const endTime = endTimeInput.value;
        const isFullAvailable = fullAvailableCheckbox.checked;

        if (!selectedDay) {
            alert("Please select a day.");
            return;
        }

        if (!isFullAvailable && (!startTime || !endTime)) {
            alert("Please select start and end times or check '24 Hours Available'.");
            return;
        }

        if (!isFullAvailable && !isValidTime(startTime, endTime)) {
            alert("Start time must be earlier than end time.");
            return;
        }

        // Add to array
        let newEntry = {
            day: selectedDay,
            start_time: isFullAvailable ? null : startTime,
            end_time: isFullAvailable ? null : endTime,
            full_available: isFullAvailable ? 1 : 0
        };

        availabilityData.push(newEntry);

        // Remove selected day from dropdown
        $("#select_day option[value='" + selectedDay + "']").remove();

        updateAvailabilityUI();
        updateHiddenInput();
        resetInputs();
    });

    // Update UI
    function updateAvailabilityUI() {
        $('#full_availibility_div').empty();

        // Sort availabilityData by weekday order
        const daysOrder = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        availabilityData.sort((a, b) => daysOrder.indexOf(a.day) - daysOrder.indexOf(b.day));

        availabilityData.forEach((item, index) => {
            let show_time = (item.full_available == 1) ? "24 Hours" : `${item.start_time} - ${item.end_time}`;

            let html = `
                <div class="flex w-full justify-between border-b-[1px] border-gray-200 py-3">
                    <div class="w-[90px]">${item.day}</div>
                    <div>${show_time}</div>
                    <button class="remove_availability" data-index="${index}" data-day="${item.day}">
                        <i class="fa-solid fa-circle-xmark text-xl text-[#E1ADA9]"></i>
                    </button>
                </div>
            `;

            $('#full_availibility_div').append(html);
        });
    }

    // Update hidden input with availability data
    function updateHiddenInput() {
        availabilityInput.value = JSON.stringify(availabilityData);
    }

    // Remove availability entry when clicking the button
    $(document).on("click", ".remove_availability", function () {
        let index = $(this).data("index");
        let removedDay = $(this).data("day");

        // Remove from array
        availabilityData.splice(index, 1);

        // Add the removed day back to dropdown
        $("#select_day").append(`<option value="${removedDay}">${removedDay}</option>`);

        updateAvailabilityUI();
        updateHiddenInput();
    });

    // Reset inputs after adding availability
    function resetInputs() {
        daySelect.value = "";
        startTimeInput.value = "";
        endTimeInput.value = "";
        fullAvailableCheckbox.checked = false;
        startTimeInput.disabled = false;
        endTimeInput.disabled = false;
    }
});


</script>
{{-- Add Availibility Bussines Time  script END ======= --}}


{{-- Service Validation Form Check script Start ======= --}}
<script>
function PreviewService() { 
 
    var title = $('#title').val().trim();
    var address = $('#address').val().trim();
    var country = $('#country').val();
    var city = $('#city').val();
    var category = $('#category').val();
    var website = $('#website').val().trim();
    var phone = $('#phone').val().trim();
    var whatsapp = $('#whatsapp').val().trim();
    var price_details = $('#price_details').val().trim();
    var price_from = $('#price_from').val().trim();
    var price_to = $('#price_to').val().trim();
    var availability = $('#availability').val();
    var all_links = $('#all_links').val();
    var all_faq = $('#all_faq').val();
    var description = tinymce.get('default').getContent().trim(); // Tinymic Textarea
    var business_video = $('#business_video').val().trim(); // Video Link
    var image = $('#image').val();
    var featured_image = $('#featured_image').val();
    var logo = $('#logo').val();

    // Validation flag
    var isValid = true;

    // Function to show error
    function showError(input, message) {
        alert(message);  // You can replace this with a better UI error message
        $(input).focus();
        isValid = false;
    }

    // Basic Validations
    if (title === "") return showError('#title', "Title is required.");
    if (address === "") return showError('#address', "Address is required.");
    if (country === null) return showError('#country', "Country selection is required.");
    if (city === null) return showError('#city', "City selection is required.");
    if (category === null) return showError('#category', "Category selection is required.");
    if (availability === "") return showError('#availability', "Availability is required.");
    if (all_links === "") return showError('#all_links', "Social Link is required.");
    // if (all_faq === "") return showError('#all_faq', "Faqs is required.");
    if (description === "") return showError('#default', "Description is required.");
    
     // **Phone & WhatsApp Validation (Required & Numbers Only)**
     var phonePattern = /^[0-9]+$/;
    if (phone === "" || !phone.match(phonePattern)) return showError('#phone', "Phone number must contain only numbers.");
    if (whatsapp === "" || !whatsapp.match(phonePattern)) return showError('#whatsapp', "WhatsApp number must contain only numbers.");

    // URL Validation for website & business video (if provided)
    var urlPattern = /^(https?:\/\/)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)$/;
    if (website !== "" && !website.match(urlPattern)) return showError('#website', "Enter a valid website URL.");
    if (business_video !== "" && !business_video.match(urlPattern)) return showError('#business_video', "Enter a valid video URL.");
   
    
   // **Price Validation (Required & Must Be Valid Numbers)**
   if (price_from === "" || isNaN(price_from)) return showError('#price_from', "Price From must be a valid number.");
    if (price_to === "" || isNaN(price_to)) return showError('#price_to', "Price To must be a valid number.");
    if (parseFloat(price_from) > parseFloat(price_to)) 
        return showError('#price_to', "Price To must be greater than Price From.");

    // Image Validation
    if (!image) return showError('#image', "Please upload an image.");
    if (!featured_image) return showError('#featured_image', "Please upload a featured image.");
    if (!logo) return showError('#logo', "Please upload a logo.");

    // If all validations pass, open the modal
    if (isValid) {
        $('#PaymentModel').modal('show'); // Bootstrap modal trigger
    }
}

</script>
{{-- Service Validation Form Check script END ======= --}}



{{-- Service Payment script Start ======= --}}
<script>
  

document.getElementById("date").addEventListener("keyup", function (event) {
    let input = this.value.replace(/\D/g, ""); // Remove non-numeric characters
    let formattedValue = "";

    if (input.length > 0) {
        let month = input.substring(0, 2);

        if (parseInt(month, 10) > 12) {
            month = "12"; // Restrict to max 12
        }

        formattedValue = month;
    }

    if (input.length > 2) {
        let day = input.substring(2, 4);
        formattedValue += "/" + day;
    }

    this.value = formattedValue;
});




// Submit Payment By Ajax =============== Script start ==========
function SubmitPayment() { 
    let holderName = document.getElementById("holder_name").value.trim();
    let cardNumber = document.getElementById("card_number").value.trim();
    let cvv = document.getElementById("cvv").value.trim();
    let date = document.getElementById("date").value;
    let price = @json($pricing);
     
    
    // Cardholder Name Validation (Only Letters & Spaces)
    let nameRegex = /^[a-zA-Z\s]+$/;
    if (!nameRegex.test(holderName) || holderName === "") {
        alert("Please enter a valid Card Holder Name (letters only).");
        return;
    }

    // Card Number Validation (16 Digits)
    let cardRegex = /^\d{16}$/;
    if (!cardRegex.test(cardNumber)) {
        alert("Please enter a valid 16-digit Card Number.");
        return;
    }

    // CVV Validation (3 or 4 Digits)
    let cvvRegex = /^\d{3,4}$/;
    if (!cvvRegex.test(cvv)) {
        alert("Please enter a valid CVV (3 or 4 digits).");
        return;
    }

    // Validate Expiry Date (MM/YY format and future date check)
    if (!/^(0[1-9]|1[0-2])\/\d{2}$/.test(date)) {
        alert("Please enter a valid date in MM/YY format.");
        return;
    } else {
        // Split the date into month and year
        var [month, year] = date.split('/');
        var expiry = new Date(`20${year}`, month - 1);
        var now = new Date();
        
        // Check if expiry date is in the future
        if (expiry <= now) {
            alert("Please enter a valid future expiry date.");
            return;
        }
    }
 
    // Prepare Data for AJAX
    let formData = {
        _token: $('meta[name="csrf-token"]').attr('content'),
        holder_name: holderName,
        card_number: cardNumber,
        cvv: cvv,
        date: date,
        price: price
    };


    var btn_html = $('#pay_btn').text();
    const button = document.getElementById('pay_btn');
            // const spinner = document.getElementById('BtnSpinner');
            $(button).html('Waiting');
            button.disabled = true;
            // $(spinner).css('display', 'block'); 
 

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: "POST",
        url: '/add-payment',
        data: formData,
        dataType: 'json',
        success: function (response) {
 
            
            $(button).html(btn_html);
                button.disabled = false;
                // spinner.style.display = 'none';

                 
                if (response.success) {
                     $('#payment_id').val(response.payment_id);
                   
                 // Submit the form after setting the payment ID
                  $('#addForm').off('submit').submit();
                }
               
               
            // You can redirect or update the UI based on the response
        },
        error: function (xhr, status, error) {
            $(button).html(btn_html);
                button.disabled = false;
                // spinner.style.display = 'none';
            alert("Payment submission failed. Please try again.");
            console.error(xhr.responseText);
        }
    });
}



    
// Submit Payment By Ajax =============== Script END ==========


</script>
{{-- Service Payment script END ======= --}}



  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>
