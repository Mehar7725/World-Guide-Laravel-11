<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="utf-8">
    <title>WORLD | Add Country</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places"></script>

    <!-- ================== BEGIN core-js ================== -->
   
<!-- ================== BEGIN core-js ================== -->
<script src="assets/admin/js/vendor.min.js"></script>
<script src="assets/admin/js/app.min.js"></script>
<!-- ================== END core-js ================== -->

<!-- ================== BEGIN admin-js ================== -->
<script src="assets/admin/js/admin-config.js"></script>
<script src="assets/admin/js/admin-utils.js"></script>
<script src="assets/admin/js/admin-api.js"></script>
<script src="assets/admin/js/world-admin.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places"></script>
<!-- ================== END admin-js ================== -->

<!-- Initialize WorldAdmin -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        try {
            window.worldAdmin = new WorldAdmin();
            // Check authentication for protected pages
            if (!worldAdmin.isAuthenticated()) {
                window.location.href = 'page_login.html';
            }
        } catch (error) {
            console.error('Failed to initialize WorldAdmin:', error);
        }
    });
</script>

<!-- ================== BEGIN core-js ================== -->
<script src="assets/admin/js/vendor.min.js"></script>
<script src="assets/js/app.min.js"></script>
<!-- ================== END core-js ================== -->

<!-- ================== BEGIN page-js ================== -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="assets/admin/js/world-admin.js"></script>
    <!-- ================== END admin-js ================== -->
    
    <!-- ================== BEGIN core-css ================== -->
    <link href="assets/admin/css/vendor.min.css" rel="stylesheet">
    <link href="assets/admin/css/app.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- ================== END core-css ================== -->

     <!-- jQuery -->
     <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    
    {{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{-- =======Toastr CDN ======== --}}
    
    <style>
        .left-menu {
            position: fixed;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 200px;
            z-index: 1000;
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
            background-color: rgba(0,0,0,0.2);
            border-radius: 4px;
        }
        .wpsm_panel-heading {
            padding: 15px;
            cursor: pointer;
        }
        .wpsm_panel-body {
            padding: 15px;
            display: block;
        }
        .form-section {
            background: rgba(0,0,0,0.2);
            padding: 20px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        .navigation-buttons {
        padding: 15px;
        background: rgba(0,0,0,0.2);
        border-radius: 4px;
        margin-top: 20px;
    }
    .navigation-buttons .btn {
        display: flex;
        align-items: center;
        gap: 8px;
        min-width: 140px;
        justify-content: center;
    }
    .navigation-buttons .btn i {
        font-size: 1.2em;
    }
    .top-buttons {
                        padding: 15px;
                        background: rgba(0,0,0,0.2);
                        border-radius: 4px;
                        margin-top: 20px;
                    }
                    .top-buttons .btn {
                        min-width: 150px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 8px;
                    }
                    .top-buttons .btn i {
                        font-size: 1.2em;
                    }
    </style>
</head>
<body>

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

 
    <form id="myForm" action="/add-new-country" method="POST" enctype="multipart/form-data"> @csrf
    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- Left Menu -->
        <div class="left-menu">
            <div class="quick-access-item">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="fact_btn"  class="btn left-menu-btn facts-btn">
                    <i class="bi bi-globe"></i> <span class="country-name">Country</span> Facts
                </button>
                <div class="url-input-container"  id="fact_btn_div">
                    <input type="text" name="facts_url" id="country_facts_url" class="form-control url-input" 
                           placeholder="Enter URL for Facts"
                           data-button="fact_btn">
                </div>
            </div>

            <div class="quick-access-item">
                <button type="button"  onclick="ShowInputsBtn(this.id)" id="history_btn"  class="btn left-menu-btn history-btn">
                    <i class="bi bi-clock-history"></i> History
                </button>
                <div class="url-input-container"  id="history_btn_div" >
                    <input type="text" name="history_url" id="history_url" class="form-control url-input" 
                           placeholder="Enter URL for History"
                           data-button="history_btn">
                </div>
            </div>

            <div class="quick-access-item">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="dining_btn"  class="btn left-menu-btn dining-btn">
                    <i class="bi bi-cup-hot"></i> Dining
                </button>
                <div class="url-input-container"  id="dining_btn_div">
                    <input type="text" name="dining_url" id="dining_url" class="form-control url-input" 
                           placeholder="Enter URL for Dining"
                           data-button="dining_btn">
                </div>
            </div>

            <div class="quick-access-item">
                <button type="button"  onclick="ShowInputsBtn(this.id)" id="visa_btn"  class="btn left-menu-btn visa-btn">
                    <i class="bi bi-card-text"></i> Visa Info
                </button>
                <div class="url-input-container" id="visa_btn_div">
                    <input type="text" name="visa_info_url" id="visa_info_url" class="form-control url-input" 
                           placeholder="Enter URL for Visa Info"
                           data-button="visa_btn">
                </div>
            </div>

            <div class="quick-access-item">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="visa_light_btn" class="btn left-menu-btn visa-light-btn">
                    <i class="bi bi-credit-card"></i> Visa Light Accepted Fees
                </button>
                <div class="url-input-container"  id="visa_light_btn_div">
                    <input type="text" name="visa_light_url" id="visa_light_url" class="form-control url-input" 
                           placeholder="Enter URL for Visa Light Fees"
                           data-button="visa_light_btn">
                </div>
            </div>

            <div class="quick-access-item">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="tour_btn"  class="btn left-menu-btn tours-btn">
                    <i class="bi bi-map"></i> Tours
                </button>
                <div class="url-input-container" id="tour_btn_div" >
                    <input type="text" name="tours_url" id="tour_url" class="form-control url-input" 
                           placeholder="Enter URL for Tours"
                           data-button="tour_btn">
                </div>
            </div>
        </div>

        <!-- BEGIN #content -->
        <div id="content" class="app-content">
            <div id="content" class="app-content">
                <!-- Add this section for top buttons -->
                <div class="container mb-3">
                    <!-- Add this right after the top buttons container and before the form -->
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
 

 
<div class="row">
    <div class="col-12">
        <div class="top-buttons d-flex justify-content-center gap-2">
            <div class="quick-access-item">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="constitution_btn"  class="btn btn-primary">
                    <i class="bi bi-book"></i> Constitution
                </button>
                <div class="url-input-container"  id="constitution_btn_div">
                    <input type="text" name="constitution_url" id="constitution_url" class="form-control url-input" 
                           placeholder="Enter URL for Constitution"
                           data-button="constitution_btn">
                </div>
            </div>

            <div class="quick-access-item">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="emergency_btn"  class="btn btn-danger">
                    <i class="bi bi-telephone"></i> Emergency Numbers
                </button>
                <div class="url-input-container" id="emergency_btn_div">
                    <input type="text" name="emergency_url" id="emergency_url" class="form-control url-input" 
                           placeholder="Enter URL for Emergency Number"
                           data-button="emergency_btn">
                </div>
            </div>

            <div class="quick-access-item">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="embassies_btn"  class="btn btn-success">
                    <i class="bi bi-briefcase"></i> Embassies
                </button>
                <div class="url-input-container"  id="embassies_btn_div">
                    <input type="text" name="embassies_url" id="embassies_url" class="form-control url-input" 
                           placeholder="Enter URL for Embassies"
                           data-button="embassies_btn">
                </div>
            </div>

            <div class="quick-access-item">
                <button type="button" onclick="ShowInputsBtn(this.id)" id="news_btn"  class="btn btn-info">
                    <i class="bi bi-newspaper"></i> News/Offers
                </button>
                <div class="url-input-container"  id="news_btn_div">
                    <input type="text" name="news_url" id="news_url" class="form-control url-input" 
                           placeholder="Enter URL for News/Offers"
                           data-button="news_btn">
                </div>
            </div>
          
            {{-- <button type="button" class="btn btn-danger">
                <i class="bi bi-telephone"></i> Emergency Numbers
            </button> --}}
            
            {{-- <button type="button" class="btn btn-info">
                <i class="bi bi-newspaper"></i> News/Offers
            </button> --}}
        </div>
    </div>
</div>
</div>
            
         
       
            
                <!-- Rest of your existing content -->
                <div class="container">
                    
                    
                        <!-- ... rest of your form ... -->
            <div class="container">
                <div id="addCountryForm">
                    <!-- Basic Country Information -->
                    <div class="form-section">
                        <h4 class="mb-3">Basic Country Information</h4>
                        <div class="row">

                            <div class="col-md-12 mb-3">
                                <div class="currency-image-upload">
                                    <label class="form-label">Upload Country Image</label>
                                    <input type="file" class="form-control" name="country_image" id="countryImage" 
                                           accept="image/*" onchange="previewImage(this, 'countryPreview')">
                                    <div class="image-preview mt-2" id="countryPreview">
                                        <img src="" alt="Country preview" style="max-width: 100%; display: none;">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label">Country Name</label>
                                <input type="text" name="country_name" class="form-control" id="country_name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Country Code</label>
                                <input type="text" name="country_code" class="form-control" id="country_code"  required>
                            </div>
                        </div>
                    </div>

                    <!-- Video Section -->
                    <div class="form-section">
                        <h4 class="mb-3">Country Video</h4>
                        <div class="mb-3">
                            <label class="form-label">YouTube Video URL</label>
                            <input type="url" name="country_video" class="form-control" id="video_url">
                            <div class="alert alert-danger error-message" style="display: none;" id="urlError"></div>
                        </div>
                        <div class="video-container" id="videoPreview"></div>
                    </div>

                    <!-- Map Section -->
                    <div class="form-section">
                        <h4 class="mb-3">Country Map</h4>
                        <div class="mb-3">
                            <label class="form-label">Google Maps Embed URL</label>
                            <input type="url" name="country_map" class="form-control" id="map_url">
                            <div class="alert alert-danger error-message" style="display: none;" id="mapError"></div>
                        </div>
                        <div class="map-container" id="mapPreview">
                        </div>
                    </div>

                    <!-- Country Details Panels -->
                    <div class="wpsm_panel-group">
                        <div class="wpsm_panel">
                            <div class="wpsm_panel-heading">
                                <h4 class="panel-title">Best Time To Go</h4>
                            </div>
                            <div class="wpsm_panel-body">
                                <textarea class="form-control" name="best_time" rows="3" id="best_time" 
                                          placeholder="Best time to visit this country"></textarea>
                            </div>
                        </div>

                        <div class="wpsm_panel">
                            <div class="wpsm_panel-heading">
                                <h4 class="panel-title">Transportation</h4>
                            </div>
                            <div class="wpsm_panel-body">
                                <textarea class="form-control" name="transportation" rows="3" id="transportation" 
                                          placeholder="Transportation information"></textarea>
                            </div>
                        </div>

                        <div class="wpsm_panel">
                            <div class="wpsm_panel-heading">
                                <h4 class="panel-title">Weather</h4>
                            </div>
                            <div class="wpsm_panel-body">
                                <textarea class="form-control" name="weather" rows="3" id="weather" 
                                          placeholder="Weather information"></textarea>
                            </div>
                        </div>

                        <div class="wpsm_panel">
                            <div class="wpsm_panel-heading">
                                <h4 class="panel-title">Information</h4>
                            </div>
                            <div class="wpsm_panel-body">
                                <textarea class="form-control" name="information" rows="3" id="information" 
                                          placeholder="General information"></textarea>
                            </div>
                        </div>

                        <div class="wpsm_panel">
                            <div class="wpsm_panel-heading">
                                <h4 class="panel-title">Language</h4>
                            </div>
                            <div class="wpsm_panel-body">
                                <textarea class="form-control" name="language" rows="3" id="language" 
                                          placeholder="Language"></textarea>
                            </div>
                        </div>

                       <!-- Replace the existing Electric and Currency panels with these updated versions -->

<div class="wpsm_panel">
    <div class="wpsm_panel-heading">
        <h4 class="panel-title">The Electric</h4>
    </div>
    <div class="wpsm_panel-body">
        <div class="row">
            <div class="col-md-8">
                <textarea class="form-control" rows="3" name="electric" id="electric" 
                          placeholder="Electrical system information"></textarea>
            </div>
            <div class="col-md-4">
                <div class="electric-image-upload">
                    <label class="form-label">Upload Electric Plug Image</label>
                    <input type="file" class="form-control" name="electric_image" id="electricImage" 
                           accept="image/*" onchange="previewImage(this, 'electricPreview')">
                    <div class="image-preview mt-2" id="electricPreview">
                        <img src="" alt="Electric plug preview" style="max-width: 100%; display: none;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="wpsm_panel">
    <div class="wpsm_panel-heading">
        <h4 class="panel-title">Currency</h4>
    </div>
    <div class="wpsm_panel-body">
        <div class="row">
            <div class="col-md-8">
                <textarea class="form-control" name="currency" rows="3" id="currency_info" 
                          placeholder="Currency information"></textarea>
            </div>
            <div class="col-md-4">
                <div class="currency-image-upload">
                    <label class="form-label">Upload Currency Image</label>
                    <input type="file" class="form-control" name="currency_image" id="currencyImage" 
                           accept="image/*" onchange="previewImage(this, 'currencyPreview')">
                    <div class="image-preview mt-2" id="currencyPreview">
                        <img src="" alt="Currency preview" style="max-width: 100%; display: none;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
 

                    <!-- Submit Button -->
                    <div class="text-center mt-4 mb-4">
                        <button type="button" onclick="SaveCountry(this.id)" id="Save_country"  class="btn btn-primary btn-lg">Save Country</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

    <!-- ================== BEGIN core-js ================== -->
    <script src="assets/admin/js/vendor.min.js"></script>
    <script src="assets/admin/js/app.min.js"></script>
    <!-- ================== END core-js ================== -->
 
    <!-- Page Specific JavaScript -->
    <script>


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

 
 
        
        function ShowInputsBtn(Clicked) { 
            
            
            const button = document.getElementById(Clicked);  

            if ($('#' + Clicked + '_div').css('display') === 'none') {
                $('.url-input-container').css('display', 'none'); // Hide all
                $('#' + Clicked + '_div').css('display', 'block'); // Show the clicked one
            } else {
                $('.url-input-container').css('display', 'none'); // Hide all
            }
         
         }
    document.addEventListener('DOMContentLoaded', function() {


         

        // Handle URL input changes
        document.querySelectorAll('.url-input').forEach(input => {
            input.addEventListener('change', (e) => {
                const buttonClass = e.target.dataset.button;
                const url = e.target.value.trim();
                
                if (url) {
                    worldAdmin.updateQuickAccessUrl(buttonClass, url);
                    e.target.parentElement.style.display = 'none';
                }
            });
        });

     

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
            const input = this.value.trim();
        const mapError = document.getElementById('mapError');
        const mapPreview = document.getElementById('mapPreview');

        // Regex for extracting src attribute if the full <iframe> tag is provided
        const iframeSrcRegex = /<iframe[^>]+src="([^"]+)"[^>]*>/;
        const googleMapsRegex = /^https:\/\/www\.google\.com\/maps\/embed\?pb=.+/;

        let extractedUrl = input;

        // If full <iframe> tag is provided, extract the src value
        if (iframeSrcRegex.test(input)) {
            const match = iframeSrcRegex.exec(input);
            extractedUrl = match ? match[1] : input;
        }

        // Validate the extracted or provided URL
        if (googleMapsRegex.test(extractedUrl)) {
            mapError.style.display = 'none';
            mapError.textContent = '';
            mapPreview.innerHTML = `
                <iframe 
                    src="${extractedUrl}" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            `;
        } else {
            mapError.style.display = 'block';
            mapError.textContent = 'Please enter a valid Google Maps embed code or URL.';
            mapPreview.innerHTML = '';
        }
    });

 
        
             
    });
    </script>



{{-- Ajax Add Country Script Start========= --}}
<script>
   function SaveCountry(Clicked) {
    // Retrieve all fields and their display names
    const fields = [
        { id: 'country_facts_url', name: 'Country Facts URL' },
        { id: 'history_url', name: 'History URL' },
        { id: 'dining_url', name: 'Dining URL' },
        { id: 'visa_info_url', name: 'Visa Info URL' },
        { id: 'visa_light_url', name: 'Visa Light URL' },
        { id: 'tour_url', name: 'Tour URL' },
        { id: 'constitution_url', name: 'Constitution URL' },
        { id: 'emergency_url', name: 'Emergency URL' },
        { id: 'embassies_url', name: 'Embassies URL' },
        { id: 'news_url', name: 'News URL' },
        { id: 'countryImage', name: 'Country Image' },
        { id: 'country_name', name: 'Country Name' },
        { id: 'country_code', name: 'Country Code' },
        { id: 'video_url', name: 'YouTube Video URL' },
        { id: 'map_url', name: 'Google Maps Embed URL' },
        { id: 'best_time', name: 'Best Time' },
        { id: 'transportation', name: 'Transportation' },
        { id: 'weather', name: 'Weather' },
        { id: 'information', name: 'Information' },
        { id: 'language', name: 'Language' },
        { id: 'electric', name: 'Electric Information' },
        { id: 'electricImage', name: 'Electric Image' },
        { id: 'currency_info', name: 'Currency Information' },
        { id: 'currencyImage', name: 'Currency Image' },
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

    // Validate images
    const countryImage = document.getElementById('countryImage').files[0];
    const electricImage = document.getElementById('electricImage').files[0];
    const currencyImage = document.getElementById('currencyImage').files[0];
    if (!countryImage) {
        alert("Country Image is required.");
        document.getElementById('countryImage').focus();
        return;
    }
    if (!electricImage) {
        alert("Electric Image is required.");
        document.getElementById('electricImage').focus();
        return;
    }
    if (!currencyImage) {
        alert("Currency Image is required.");
        document.getElementById('currencyImage').focus();
        return;
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