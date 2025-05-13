 

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>WORLD | Edit City</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Core CSS -->
    <link href="assets/admin/css/vendor.min.css" rel="stylesheet">
    <link href="assets/admin/css/app.min.css" rel="stylesheet">
    <link href="assets/admin/css/city-admin.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .left-menu {
            position: fixed;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 200px;
            z-index: 1000;
            padding: 10px;
        }
        .left-menu-btn {
            display: block;
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
            text-align: left;
            border-radius: 0 4px 4px 0;
        }
        .left-menu-btn i {
            margin-right: 10px;
        }
        .main-content {
            margin-left: 220px;
        }
        .url-input-container {
            display: none;
            padding: 10px;
            background: rgba(0,0,0,0.1);
            margin-bottom: 5px;
            border-radius: 0 4px 4px 0;
        }
        .url-input {
            width: 100%;
            margin-top: 5px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
        }
        .facts-btn { background-color: #ff9800; color: white; }
        .history-btn { background-color: #2196F3; color: white; }
        .dining-btn { background-color: #2196F3; color: white; }
        .visa-btn { background-color: #2196F3; color: white; }
        .visa-light-btn { background-color: #ff5722; color: white; }
        .tours-btn { background-color: #2196F3; color: white; }
        
        .video-container, .map-container {
            margin: 20px 0;
            height: 400px;
        }
        .video-container iframe, .map-container iframe {
            width: 100%;
            height: 100%;
        }
        .wpsm_panel {
            margin-bottom: 10px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 4px;
        }
        .wpsm_panel-heading {
            padding: 15px;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(255,255,255,0.05);
        }
        .wpsm_panel-body {
            padding: 15px;
            border-top: 1px solid rgba(255,255,255,0.1);
        }
        .form-section {
            background: rgba(0,0,0,0.2);
            padding: 20px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .function-btn {
            transition: all 0.3s ease;
        }
        .function-btn:hover {
            opacity: 0.9;
            transform: translateY(-2px);
        }
        .city-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .top-nav-buttons {
            margin-bottom: 2rem;
        }
        .url-input:focus {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.3);
            color: white;
        }
    </style>
</head>
<body>
    <form id="myForm" action="/update-new-city" method="POST" enctype="multipart/form-data"> @csrf
        <input type="hidden" name="id" value="{{$city->id}}">
        <!-- Left Menu -->
    <div class="left-menu">
        <div class="menu-item">
            <button type="button" onclick="ShowInputsBtn(this.id)" id="business_btn"  class="btn left-menu-btn facts-btn"  style="background: white; color: black; border: 1px solid #ddd;">
                <i class="bi bi-plus-circle"></i> Add Your Business
            </button>
            <div class="url-input-container"  id="business_btn_div">
                <input type="text" value="{{$city->business_url}}" name="business_url" id="business_url" class="form-control url-input" 
                       placeholder="Enter URL for Business" style="display: block"
                       data-button="business_btn">
            </div>
        </div>

        
        <div class="menu-item">
            <button type="button" onclick="ShowInputsBtn(this.id)" id="taxi_btn"  class="btn left-menu-btn facts-btn"  style="background: #00BCD4; color: white;">
                <i class="bi bi-taxi-front"></i> Taxis
            </button>
            <div class="url-input-container"  id="taxi_btn_div">
                <input type="text" value="{{$city->taxi_url}}" name="taxi_url" id="taxi_url" class="form-control url-input" 
                       placeholder="Enter URL for Taxi" style="display: block"
                       data-button="taxi_btn">
            </div>
        </div>


        <div class="menu-item">
            <button type="button" onclick="ShowInputsBtn(this.id)" id="law_btn"  class="btn left-menu-btn facts-btn"  style="background: #00BCD4; color: white;">
                <i class="bi bi-signpost-2"></i> Roads Law
            </button>
            <div class="url-input-container"  id="law_btn_div">
                <input type="text" value="{{$city->law_url}}" name="law_url" id="law_url" class="form-control url-input" 
                       placeholder="Enter URL for Road Laws" style="display: block"
                       data-button="law_btn">
            </div>
        </div>


        <div class="menu-item">
            <button type="button" onclick="ShowInputsBtn(this.id)" id="lawyer_btn"  class="btn left-menu-btn facts-btn"  style="background: #00BCD4; color: white;">
                <i class="bi bi-person-vcard"></i> Lawyers
            </button>
            <div class="url-input-container"  id="lawyer_btn_div">
                <input type="text" value="{{$city->lawyer_url}}" name="lawyer_url" id="lawyer_url" class="form-control url-input" 
                       placeholder="Enter URL for Lawyers" style="display: block"
                       data-button="lawyer_btn">
            </div>
        </div>


        <div class="menu-item">
            <button type="button" onclick="ShowInputsBtn(this.id)" id="event_btn"  class="btn left-menu-btn facts-btn"  style="background: #FF6B6B; color: white;">
                <i class="bi bi-calendar-event"></i> Events
            </button>
            <div class="url-input-container"  id="event_btn_div">
                <input type="text" value="{{$city->event_url}}" name="event_url" id="event_url" class="form-control url-input" 
                       placeholder="Enter URL for Event" style="display: block"
                       data-button="event_btn">
            </div>
        </div>


        <div class="menu-item">
            <button type="button" onclick="ShowInputsBtn(this.id)" id="tour_btn"  class="btn left-menu-btn facts-btn"  style="background: #00BCD4; color: white;">
                <i class="bi bi-compass"></i> Tours
            </button>
            <div class="url-input-container"  id="tour_btn_div">
                <input type="text" value="{{$city->tours_url}}" name="tours_url" id="tour_url" class="form-control url-input" 
                       placeholder="Enter URL for Tour" style="display: block"
                       data-button="tour_btn">
            </div>
        </div>
















        
        {{-- <div class="menu-item mb-2">
            <button class="btn w-100" style="background: #00BCD4; color: white;">
                <i class="bi bi-taxi-front"></i> Taxis
            </button>
            <input type="url" class="form-control url-input mt-2" style="display: none;" placeholder="Enter URL">
        </div> --}}
        
        
       
    </div>
    <div class="container mb-4">
        <div class="row">
            <div class="col-12">
                <div class="navigation-buttons d-flex justify-content-between align-items-center">
                    <button type="button" class="btn btn-secondary" onclick="window.location.href='/admin-dashboard'">
                        <i class="bi bi-house-door"></i> Back to Home
                    </button>
                    <div class="d-flex gap-2">
                        <button type="button" class="btn btn-info" id="prevCountry" disabled>
                            <i class="bi bi-arrow-left"></i> Previous Country
                        </button>
                        <button type="button" class="btn btn-info" id="nextCountry" disabled>
                            Next Country <i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- BEGIN #content -->
        <div id="content" class="app-content p-4 m-1">
            <div class="container main-content">
                <!-- Dynamic City Name -->
                <div class="city-header mb-4">
                    <h1 class="display-4" id="dynamicCityName">Edit City</h1>
                    {{-- <div class="top-nav-buttons d-flex justify-content-center gap-3 mb-4">
                        <button class="btn btn-primary" onclick="toggleSection('video')">
                            <i class="bi bi-play-circle"></i> Video
                        </button>
                        <button class="btn btn-success" onclick="toggleSection('map')">
                            <i class="bi bi-geo-alt"></i> Map
                        </button>
                        <button class="btn btn-info" onclick="toggleSection('categories')">
                            <i class="bi bi-grid"></i> Categories
                        </button>
                    </div> --}}
                </div>

                <!-- Function Buttons -->
<div class="function-buttons mb-4">
    <div class="row ">
       
            <div class="quick-access-item col-md-2">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="car_btn"  class="btn btn-primary w-100" style="background-color: #2196F3; color: white;">
                    <i class="bi bi-car-front"></i> Rent a car
                </button>
                <div class="url-input-container"  id="car_btn_div">
                    <input type="text" value="{{$city->car_url}}" name="car_url" id="car_url" class="form-control url-input" 
                           placeholder="Enter URL for Rent a Car"  style="display: block"
                           data-button="car_btn">
                </div>
            </div>

            <div class="quick-access-item col-md-2">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="estate_btn"  class="btn btn-primary w-100" style="background-color: #4DB6AC; color: white;">
                    <i class="bi bi-house"></i> Real Estate
                </button>
                <div class="url-input-container"  id="estate_btn_div">
                    <input type="text" value="{{$city->estate_url}}" name="estate_url" id="estate_url" class="form-control url-input" 
                           placeholder="Enter URL for Real Astate"  style="display: block"
                           data-button="estate_btn">
                </div>
            </div>

            <div class="quick-access-item col-md-2">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="hotel_btn"  class="btn btn-primary w-100" style="background-color: #5C6BC0; color: white;">
                    <i class="bi bi-building"></i> Hotels
                </button>
                <div class="url-input-container"  id="hotel_btn_div">
                    <input type="text" value="{{$city->hotel_url}}" name="hotel_url" id="hotel_url" class="form-control url-input" 
                           placeholder="Enter URL for Hotel"  style="display: block"
                           data-button="hotel_btn">
                </div>
            </div>

            <div class="quick-access-item col-md-2">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="restaurant_btn"  class="btn btn-primary w-100"style="background-color: #FF9800; color: white;">
                    <i class="bi bi-cup-hot"></i> Restaurants
                </button>
                <div class="url-input-container"  id="restaurant_btn_div">
                    <input type="text" value="{{$city->restaurant_url}}" name="restaurant_url" id="restaurant_url" class="form-control url-input" 
                           placeholder="Enter URL for Restaurant"  style="display: block"
                           data-button="restaurant_btn">
                </div>
            </div>

            <div class="quick-access-item col-md-2">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="coffee_btn"  class="btn btn-primary w-100"  style="background-color: #BCB5A7; color: white;">
                    <i class="bi bi-cup"></i> Coffee
                </button>
                <div class="url-input-container"  id="coffee_btn_div">
                    <input type="text" value="{{$city->coffee_url}}" name="coffee_url" id="coffee_url" class="form-control url-input" 
                           placeholder="Enter URL for Coffee"  style="display: block"
                           data-button="coffee_btn">
                </div>
            </div>

            <div class="quick-access-item col-md-2">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="bars_btn"  class="btn btn-primary w-100"  style="background-color: #FFB74D; color: white;">
                    <i class="bi bi-cup-straw"></i> Bars
                </button>
                <div class="url-input-container"  id="bars_btn_div">
                    <input type="text" value="{{$city->bars_url}}" name="bars_url" id="bars_url" class="form-control url-input" 
                           placeholder="Enter URL for Bars"  style="display: block"
                           data-button="bars_btn">
                </div>
            </div>












            {{--
            <div class="col-md-2">
             <button class="btn w-100 function-btn" data-type="rentcar" style="background-color: #2196F3; color: white;">
                <i class="bi bi-car-front"></i> Rent a car
            </button>
            <input type="url" class="form-control url-input mt-2" style="display: none;" placeholder="Enter URL">
        </div>
        <div class="col-md-2">
            <button class="btn w-100 function-btn" data-type="realestate" style="background-color: #4DB6AC; color: white;">
                <i class="bi bi-house"></i> Real Estate
            </button>
            <input type="url" class="form-control url-input mt-2" style="display: none;" placeholder="Enter URL">
        </div>
        <div class="col-md-2">
            <button class="btn w-100 function-btn" data-type="hotels" style="background-color: #5C6BC0; color: white;">
                <i class="bi bi-building"></i> Hotels
            </button>
            <input type="url" class="form-control url-input mt-2" style="display: none;" placeholder="Enter URL">
        </div>
        <div class="col-md-2">
            <button class="btn w-100 function-btn" data-type="restaurants" style="background-color: #FF9800; color: white;">
                <i class="bi bi-cup-hot"></i> Restaurants
            </button>
            <input type="url" class="form-control url-input mt-2" style="display: none;" placeholder="Enter URL">
        </div>
        <div class="col-md-2">
            <button class="btn w-100 function-btn" data-type="coffee" style="background-color: #BCB5A7; color: white;">
                <i class="bi bi-cup"></i> Coffee
            </button>
            <input type="url" class="form-control url-input mt-2" style="display: none;" placeholder="Enter URL">
        </div>
        <div class="col-md-2">
            <button class="btn w-100 function-btn" data-type="bars" style="background-color: #FFB74D; color: white;">
                <i class="bi bi-cup-straw"></i> Bars
            </button>
            <input type="url" class="form-control url-input mt-2" style="display: none;" placeholder="Enter URL">
        </div> --}}
    </div>
</div>
<!-- Add after the function buttons and before the main form -->
<!-- Video Section -->
{{-- <div class="section-video" style="display: none;">
    <div class="form-section">
        <h4 class="mb-3">Video</h4>
        <div class="video-container">
            <div id="videoPreview"></div>
        </div>
    </div>
</div> --}}

<!-- Map Section -->
{{-- <div class="section-map" style="display: none;">
    <div class="form-section">
        <h4 class="mb-3">Map</h4>
        <div class="map-container">
            <div id="mapPreview"></div>
        </div>
    </div>
</div> --}}
                <!-- Main Form -->
                <div id="addCityForm">
                    <!-- Basic Information -->
                    <div class="form-section">
                        <h4 class="mb-3">Basic Information</h4>
                        <div class="row">
                            
                            <div class="col-md-6 mb-3">
                                <div class="currency-image-upload">
                                    <label class="form-label">Upload City Image</label>
                                    <input type="file" class="form-control" name="city_image" id="cityImage" 
                                           accept="image/*" onchange="previewImage(this, 'cityPreview')">
                                    <div class="image-preview mt-2" id="cityPreview">
                                        <img src="assets/city_img/{{$city->city_image}}" alt="City preview" style="max-width: 100%; display: block;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Change City Status</label>
                                <select name="status"  class="form-control form-select" >
                                  @if ($city->status == 1)
                                  <option value="1" selected>Active</option>
                                  <option value="0">InActive</option>
                                  @else
                                  <option value="1">Active</option>
                                  <option value="0" selected>InActive</option>
                                  @endif
                                   
                                </select>
                             </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">City Name</label>
                                <input type="text" value="{{$city->city_name}}" class="form-control" name="city_name" id="city_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Country</label>
                                <select class="form-control form-select" name="country" id="country" required>
                                    @if ($country)
                                    @foreach ($country as $item)
                                    @if ($city->country == $item->id)
                                    <option value="{{$city->country}}" selected>{{$item->country_name}}</option>
                                        
                                    @endif
                                    <option value="{{$item->id}}">{{$item->country_name}}</option>
                                        
                                    @endforeach
                                        
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="3">{{$city->description}}</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Video Section -->
                    <div class="form-section">
                        <h4 class="mb-3">City Video</h4>
                        <div class="mb-3">
                            <label class="form-label">YouTube Video URL</label>
                            <input type="url" value="{{$city->city_video}}" name="city_video" class="form-control" id="video_url">
                            <div class="alert alert-danger error-message" style="display: none;" id="urlError"></div>
                        </div>
                        <?php 
                        if (isset($city->city_video)) {
                            $videoUrl = $city->city_video;
                            if (preg_match('/(?:https?:\/\/)?(?:www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $videoUrl, $matches)) {
                                $city->city_video = 'https://www.youtube.com/embed/' . $matches[2];
                            }
                        }
 ?>
                        <div class="video-container" id="videoPreview">
                            <iframe width="560" height="315" src="{{$city->city_video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="">
                        </iframe></div>
                    </div>

                    <!-- Map Section -->
                    <div class="form-section">
                        <h4 class="mb-3">City Map</h4>
                        <div class="mb-3">
                            <label class="form-label">Google Maps Embed URL</label>
                            <input type="url" value="{{$city->city_map}}" name="city_map" class="form-control" id="map_url">
                            <div class="alert alert-danger error-message" style="display: none;" id="mapError"></div>
                        </div>
                        <div class="map-container" id="mapPreview"> {!!$city->city_map!!} </div>
                    </div>

                    <!-- Additional Information -->
                    <div class="form-section">
                        <h4 class="mb-3">Additional Information</h4>
                        
                        <!-- Best Time To Go Panel -->
                        <div class="wpsm_panel mb-3">
                            <div class="wpsm_panel-heading" onclick="togglePanel(this)">
                                <div>
                                    <i class="bi bi-calendar-event"></i> Best Time To Go
                                </div>
                                <span class="float-end"><i class="bi bi-dash-lg"></i></span>
                            </div>
                            <div class="wpsm_panel-body">
                                <textarea class="form-control" name="best_time" rows="3" id="best_time"  placeholder="Enter best time to visit information">{{$city->best_time}}</textarea>
                            </div>
                        </div>
                    
                        <!-- Transportation Panel -->
                        <div class="wpsm_panel mb-3">
                            <div class="wpsm_panel-heading" onclick="togglePanel(this)">
                                <div>
                                    <i class="bi bi-car-front"></i> Transportation
                                </div>
                                <span class="float-end"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="wpsm_panel-body" style="display: none;">
                                <textarea class="form-control" name="transportation" rows="3" id="transportation"  placeholder="Enter transportation information">{{$city->transportation}}</textarea>
                            </div>
                        </div>
                    
                        <!-- Weather Panel -->
                        <div class="wpsm_panel mb-3">
                            <div class="wpsm_panel-heading" onclick="togglePanel(this)">
                                <div>
                                    <i class="bi bi-cloud-sun"></i> Weather
                                </div>
                                <span class="float-end"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="wpsm_panel-body" style="display: none;">
                                <textarea class="form-control" name="weather" rows="3" id="weather"  placeholder="Enter weather information">{{$city->weather}}</textarea>
                            </div>
                        </div>
                    
                        <!-- Information Panel -->
                        <div class="wpsm_panel mb-3">
                            <div class="wpsm_panel-heading" onclick="togglePanel(this)">
                                <div>
                                    <i class="bi bi-info-circle"></i> Information
                                </div>
                                <span class="float-end"><i class="bi bi-plus-lg"></i></span>
                            </div>
                            <div class="wpsm_panel-body" style="display: none;">
                                <textarea class="form-control" rows="3" placeholder="Enter additional information" id="information" name="information">{{$city->information}}</textarea>
                            </div>
                        </div>
                    </div>
                       <!-- Add to the form, before submit button -->
                    {{-- <div class="form-section">
                   <h4 class="mb-3">URLs</h4>
                   <div id="urlContainer">
                       <!-- URLs will be collected here dynamically -->
                  </div>
                       </div> --}}
                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="button"  onclick="SaveCity(this.id)" id="Save_city" class="btn btn-primary btn-lg px-5">
                            <i class="bi bi-save me-2"></i> Save City
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>

    <!-- Scripts -->
    <script src="assets/admin/js/vendor.min.js"></script>
    <script src="assets/admin/js/app.min.js"></script>
    <script src="assets/admin/js/city-admin.js"></script>
    <script>

// Preview Image Script 
function previewImage(input, previewId) {
    const preview = document.getElementById(previewId).querySelector('img');
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = 'block';
        }
        
        reader.readAsDataURL(input.files[0]);
    }
}


        function togglePanel(element) {
            const panel = element.closest('.wpsm_panel');
            const body = panel.querySelector('.wpsm_panel-body');
            const icon = element.querySelector('.float-end i');
            
            if (body.style.display === 'none') {
                body.style.display = 'block';
                icon.classList.replace('bi-plus-lg', 'bi-dash-lg');
            } else {
                body.style.display = 'none';
                icon.classList.replace('bi-dash-lg', 'bi-plus-lg');
            }
        }

    

      



        // Toggle Buttons Show Input script 
        function ShowInputsBtn(Clicked) { 
            
            
            const button = document.getElementById(Clicked);  

            if ($('#' + Clicked + '_div').css('display') === 'none') {
                $('.url-input-container').css('display', 'none'); // Hide all
                $('#' + Clicked + '_div').css('display', 'block'); // Show the clicked one
            } else {
                $('.url-input-container').css('display', 'none'); // Hide all
            }
         
         }

         document.addEventListener('DOMContentLoaded', function () {

          //    Youtube Video Embed Script ===
        document.getElementById('video_url').addEventListener('focusout', function () {
            const urlInput = this.value.trim();
            const urlError = document.getElementById('urlError');
            const videoPreview = document.getElementById('videoPreview');

            // Regular Expression to Validate YouTube URL
            const youtubeRegex = /^https?:\/\/(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/;

            if (youtubeRegex.test(urlInput)) {
                // Clear error message
                urlError.textContent = '';
                $('#urlError').css('display', 'none');
                // Extract the video ID
                const videoId = urlInput.match(youtubeRegex)[3];

                // Embed the iframe dynamically
                videoPreview.innerHTML = `
                    <iframe width="560" height="315" 
                        src="https://www.youtube.com/embed/${videoId}" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                `;
            } else {
                // Show error message
                urlError.textContent = 'Please enter a valid YouTube video URL.';
                videoPreview.innerHTML = ''; // Clear the iframe if invalid
                $('#urlError').css('display', 'block');
            }
        });

   
        // Map Embed Script ==========
   
        document.getElementById('map_url').addEventListener('focusout', function () {
    const inputField = this;
    let input = inputField.value.trim();
    const mapError = document.getElementById('mapError');
    const mapPreview = document.getElementById('mapPreview');

    // Regex to extract src from iframe
    const iframeSrcRegex = /<iframe[^>]*src=["']([^"']+)["']/i;
    const googleMapsEmbedRegex = /^https:\/\/www\.google\.com\/maps\/embed\?pb=.+/;

    // If input is full iframe, extract only the src
    if (iframeSrcRegex.test(input)) {
        const match = input.match(iframeSrcRegex);
        if (match && match[1]) {
            input = match[1]; // Extract the src only
        }
    }

    // Validate and update the input and map preview
    if (googleMapsEmbedRegex.test(input)) {
        mapError.style.display = 'none';
        inputField.value = input; // Set only the src back to the input

        mapPreview.innerHTML = `
            <iframe 
                src="${input}" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>`;
    } else {
        mapError.style.display = 'block';
        mapError.textContent = 'Please enter a valid Google Maps embed iframe or embed URL.';
        mapPreview.innerHTML = '';
    }
});


});


$(document).ready(function () {
 
    let input = @json($city->city_map);
    const mapError = document.getElementById('mapError');
    const mapPreview = document.getElementById('mapPreview');

    // Regex to extract src from iframe
    const iframeSrcRegex = /<iframe[^>]*src=["']([^"']+)["']/i;
    const googleMapsEmbedRegex = /^https:\/\/www\.google\.com\/maps\/embed\?pb=.+/;

    // If input is full iframe, extract only the src
    if (iframeSrcRegex.test(input)) {
        const match = input.match(iframeSrcRegex);
        if (match && match[1]) {
            input = match[1]; // Extract the src only
        }
    }

    // Validate and update the input and map preview
    if (googleMapsEmbedRegex.test(input)) {
        mapError.style.display = 'none'; 
        $('#map_url').val(input);

        mapPreview.innerHTML = `
            <iframe 
                src="${input}" 
                width="100%" 
                height="450" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>`;
    } else {
        mapError.style.display = 'block';
        mapError.textContent = 'Please enter a valid Google Maps embed iframe or embed URL.';
        mapPreview.innerHTML = '';
    }
    
});
 

    </script>




{{-- Ajax Add Country Script Start========= --}}
<script>
    function SaveCity(Clicked) {
     // Retrieve all fields and their display names
     const fields = [
         { id: 'business_url', name: 'Business URL' },
         { id: 'taxi_url', name: 'Taxi URL' },
         { id: 'law_url', name: 'Road of Laws URL' },
         { id: 'lawyer_url', name: 'Lawyers URL' },
         { id: 'event_url', name: 'Event URL' },
         { id: 'tour_url', name: 'Tour URL' },
         { id: 'car_url', name: 'Rent on Car URL' },
         { id: 'estate_url', name: 'Real Estate URL' },
         { id: 'hotel_url', name: 'Hotels URL' },
         { id: 'restaurant_url', name: 'Restaurant URL' },
         { id: 'coffee_url', name: 'Coffe Time' },
         { id: 'bars_url', name: 'Bars Url' }, 
         { id: 'city_name', name: 'City Name' },
         { id: 'country', name: 'Country' },
         { id: 'description', name: 'Description ' },
         { id: 'video_url', name: 'YouTube Video URL' },
         { id: 'map_url', name: 'Google Maps Embed URL' },
         
         { id: 'best_time', name: 'Best Time' },
         { id: 'transportation', name: 'Transportation' },
         { id: 'weather', name: 'Weather' },
         { id: 'information', name: 'Information' },
     ];
 
    
 
     // Validate required fields
     for (let i = 0; i < fields.length; i++) {
         const field = document.getElementById(fields[i].id);
         if (!field || !field.value.trim()) {
             alert(`${fields[i].name} is required.`);
             field.focus(); // Focus the invalid field
             return; // Exit function to show only one alert
         }
     }
 
    
 
     // Validate YouTube Video URL
     const video_url = document.getElementById('video_url').value.trim();
     const youtubeRegex = /^https?:\/\/(www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]{11})/;
     if (!youtubeRegex.test(video_url)) {
         alert("Please enter a valid YouTube video URL.");
         document.getElementById('video_url').focus();
         return;
     }
 
     // Google Maps embed code or URL validation
     const map_url = document.getElementById('map_url').value.trim();
     const iframeSrcRegex = /<iframe[^>]+src="([^"]+)"[^>]*>/;
     const googleMapsRegex = /^https:\/\/www\.google\.com\/maps\/embed\?pb=.+/;
 
     let extractedUrl = map_url;
 
     // Extract src attribute from <iframe> tag if provided
     if (iframeSrcRegex.test(map_url)) {
         const match = iframeSrcRegex.exec(map_url);
         extractedUrl = match ? match[1] : map_url;
     }
 
     if (!googleMapsRegex.test(extractedUrl)) {
         alert("Please enter a valid Google Maps embed code or URL.");
         document.getElementById('map_url').focus();
         return;
     }
 
     // All validations passed
     $('#myForm').submit();
     // Add your save logic here (e.g., AJAX request or form submission)
 }
 </script>
 {{-- Ajax Add Country Script END========= --}}

</body>
</html>