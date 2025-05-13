<!doctype html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- TINYMCE LINK  -->
    {{-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <!-- Style CSS Link -->
     <link rel="stylesheet" href="assets/public-site/css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script type="text/javascript" src="https://code.jquery.com/jquery-1.4.2.js"></script>

     <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
{{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>World Guide | Add Listing</title>
  </head>

  <style>
  .upload_gallery1 .image-preview {
  position: relative;
  width: 250px;
  height: 250px;
  margin-bottom: 15px;
  overflow: hidden;
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  background-color: #f8f9fa;
}

.upload_gallery1 .image-preview img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.upload_gallery1 .remove-image {
  position: absolute;
  top: 5px;
  right: 5px;
  z-index: 10;
  background-color: rgba(255, 255, 255, 0.7);
  border: none;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  font-size: 16px;
  line-height: 30px;
  text-align: center;
  cursor: pointer;
  color: #dc3545;
}

  </style>


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


    <!-- =========== NAVBAR START HERE ========= -->
    <x-public-nav/>
    <!-- =========== NAVBAR END HERE ========= -->
    <!-- =========== HEADER START HERE ========= -->
     <div class="container-fluid header-sec">
            <div class="row">
                <div class="col-md-12 p-0">
                    <img src="assets/public-site/img/about-hero-section.jpg">
                </div>
            </div>
     </div>
    <!-- =========== HEADER END HERE ========= -->
    <!-- =========== POLICY START HERE ========= -->
     <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
              <div class="listing-sec">
                <h2>Add your Listing</h2>
                  <p>Add details about your listing</p>
                </div>
            </div>
        </div>
        <!-- ============================== -->
       <div class="row">
        <div class="col-md-12">
          <div class="signout-sec">
            <img src="assets/public-site/img/avatar.png">
            <h4>You are currently signed in as <b>{{Auth::user()->name}}</b>, <a href="#">Sign out</a> or continue below and start submission.</h4>
          </div>
        </div>
       </div>
       <!-- =======================  -->
        <div class="row">

          <div class="col-lg-8 col-md-12">
          <form  id="addForm" action="/update-add" method="POST" enctype="multipart/form-data"> @csrf 

            <input type="hidden" name="add_id" id="add_id" value="{{$add->id}}">
          <input type="hidden" name="payment_id" id="payment_id" value="{{$add->payment_id}}">
          <input type="hidden" name="price" id="price" value="{{$add->price}}">
          <input type="hidden" name="time" id="time" value="{{$add->time}}">

            <div class="listing-detail-sec">
              <h1 class="mb-4">PRIMARY LISTING DETAILS</h1>

              <div class="mb-3">
                <label for="title" class="form-label">Listing Title *</label>
                <input type="text" class="form-control" id="title" value="{{$add->title}}" name="title" placeholder="Staple & Fancy Hotel">
              </div>

              <div class="mb-3">
                <label for="address" class="form-label">Full Address</label>
                <input type="text" class="form-control" value="{{$add->address}}" name="address"  id="address" placeholder="Start typing  and find your place in google map">
              </div>

              <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <select name="country" id="country" class="form-select" aria-label="Default select example">
                  <option value="{{$selected_country->id}}" selected  >{{$selected_country->country_name}}</option>
                  @if ($country)
                  @foreach ($country as $item)
                   <option value="{{$item->id}}"   >{{$item->country_name}}</option>
                  @endforeach
                   @endif
                </select>
              </div>

              <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <select class="form-select" id="city" name="city" aria-label="Default select example">
                  <option value="{{$selected_city->id}}" selected  >{{$selected_city->city_name}}</option>
                  @if ($city)
                  @foreach ($city as $item)
                   <option value="{{$item->id}}"   >{{$item->city_name}}</option>
                  @endforeach
                   @endif
                </select>
              </div>

              <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" id="category" name="category" aria-label="Default select example">
                  <option value="{{$selected_category->id}}" selected  >{{$selected_category->name}}</option>
              @if ($category)
              @foreach ($category as $item)
               <option value="{{$item->id}}"   >{{$item->name}}</option>
              @endforeach
               @endif
                </select>
              </div>

              <div class="mb-3">
                <label for="website" class="form-label">Website</label>
                <input type="text" class="form-control" value="{{$add->website}}" name="website" id="website" placeholder="http://">
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control"  value="{{$add->phone}}" name="phone" id="phone" placeholder="111-111-1234">
              </div>

              <div class="mb-3">
                <label for="whatsapp" class="form-label">Whatsapp</label>
                <input type="text" class="form-control" value="{{$add->whatsapp}}" name="whatsapp" id="whatsapp" placeholder="111-111-1234">
              </div>

              <h1 class="mb-4 mt-4">PRICE DETAILS</h1>

              <div class="row">

                <div class="col-md-4">
                  <div class="mb-3">
                    <label for="price_details" class="form-label">Price Details</label>
                    <input type="text" class="form-control" value="{{$add->price_details}}" name="price_details" id="price_details" placeholder="not to say,price">
                  </div>
                </div>

                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="price_from" class="form-label">Price From</label>
                      <input type="number" class="form-control" value="{{$add->price_from}}" name="price_from" id="price_from" placeholder="Price From">
                    </div>
                  </div>

                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="price_to" class="form-label">Price To</label>
                      <input type="number" class="form-control" value="{{$add->price_to}}" name="price_to" id="price_to" placeholder="Price To">
                    </div>
                  </div>
                
              </div>

              <h1 class="mb-4 mt-4">Business Hours</h1>
              
              <div class="row">
                <div class="col-md-3">
                  <select class="form-select"   id="select_day">
                    <option value="">Select Day</option>
                    <option value="Monday">Monday</option>
                    <option value="Tuesday" >Tuesday</option>
                    <option value="Wednesday" >Wednesday</option>
                    <option value="Thursday" >Thursday</option>
                    <option value="Friday" >Friday</option>
                    <option value="Saturday" >Saturday</option>
                    <option value="Sunday" >Sunday</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select" id="select_start_time">
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
                    <!-- Add more times -->
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-select" id="select_end_time">
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
                    <!-- Add more times -->
                  </select>
                </div>
                <div class="col-md-2">
                  <div class="form-check">
                    <input type="hidden" name="availability" id="availability" value="{{$add->availability}}" >
                    <input class="form-check-input" type="checkbox" name="full_available" id="full_available">
                    <label class="form-check-label" for="full_available">24 Hours Service</label>
                  </div>
                </div>
                <div class="col-md-1">
                  <button type="button" class="btn btn-primary" id="add-day"  ><i class="fa-solid fa-square-plus"></i></button>
                </div>

                 <!-- Display added hours -->
                <div class="mt-4" id="full_availibility_div">
 
              

                </div>
              </div>


              

              <h1 class="mb-4 mt-4">Social Media</h1>

          <div class="row g-2 align-items-center mb-3">
            <div class="col-md-2">
              <label class="form-label">Social Media</label>
            </div>
    <div class="col-md-3">
      <select class="form-select" id="select_social_media">
        <option value="">Please Select</option>
        <option value="Facebook">Facebook</option>
        <option value="Twitter">Twitter</option>
        <option value="Instagram">Instagram</option>
        <option value="LinkedIn">LinkedIn</option>
      </select>
    </div>
    <div class="col-md-4">
      <input type="text" class="form-control" id="social_media_link" placeholder="Enter Social Media Link">
      <input type="hidden" id="all_links" name="all_links" value="{{$add->all_links}}">
    </div>
    <div class="col-md-2 d-flex align-items-end justify-content-center">
      <button type="button" class="btn addlink-btn" id="add-links" ><i class="fa-solid fa-square-plus"></i> Add Link</button>
    </div>
  </div>
  <!-- Container to show added social media links -->
  <div id="social-links-list">   </div>

  <h1 class="mb-4 mt-5">Frequently Asked Questions</h1>
  <div class="mb-3"  >
    <label class="form-label">FAQ</label>
    <input type="text" class="form-control mb-2" id="faq_question" placeholder="Enter FAQ question">
    <textarea class="form-control mb-2" id="faq_answer" rows="5" placeholder="Enter FAQ answer"></textarea>
    <input type="hidden" id="all_faq" name="all_faq"  value="{{$add->all_faq}}" >
    <div class="d-flex justify-content-end">
    <button type="button" class="btn addlink-btn float-end" id="add-faq"><i class="fa-solid fa-square-plus"></i> Add FAQ</button>
  </div>
</div>

  <!-- FAQ List Output -->
  {{-- <div id="faqList"></div> --}}
  <!-- FAQs List (Now below the button) -->
  <div class=" mt-2"  id="faq-questions">


  </div>
  

              <h1 class="mb-4 mt-4">More Info</h1>

              <div class="row">
                  <h2>Description</h2>
                    <textarea name="description" id="default">{{$add->description}}</textarea>
                    <script src="assets/public/tinymce/tinymce.min.js"></script>
            <script src="assets/public/JS/rt_script.js"></script>
              </div>

              <h1 class="mb-4 mt-4">Your Business Video <span>(Optional)</span></h1>

              <div class="row">
                <div class="mb-3">
                  <input type="text" class="form-control"  value="{{$add->video}}" name="video" id="business_video" placeholder="ex: https://youtu.be/ly2y">
                </div>
              </div>

              <h1 class="mb-4 mt-4">Images</h1>

              <div class="row">
                <div>

                  <fieldset class="upload_dropZone text-center mb-3 p-4">
                    <legend class="visually-hidden">Image uploader</legend>
                  
                    <svg class="upload_svg" width="60" height="60" aria-hidden="true">
                      <use href="#icon-imageUpload"></use>
                    </svg>
                  
                    <p class="small my-2 upload-text">Click to upload image</p>
                  
                    <input name="image" id="upload_image_background"
                           data-post-name="image_background"
                           data-post-url="https://someplace.com/image/uploads/backgrounds/"
                           class="position-absolute invisible"
                           type="file"
                           accept="image/jpeg, image/png, image/svg+xml" />
                  
                    <label class="btn btn-upload mb-3" for="upload_image_background">Browse file</label>
                  
                    <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>
                  </fieldset>
                  
                </div>
                
                
                <svg style="display:none">
                  <defs>
                    <symbol id="icon-imageUpload" clip-rule="evenodd" viewBox="0 0 96 96">
                      <path d="M47 6a21 21 0 0 0-12.3 3.8c-2.7 2.1-4.4 5-4.7 7.1-5.8 1.2-10.3 5.6-10.3 10.6 0 6 5.8 11 13 11h12.6V22.7l-7.1 6.8c-.4.3-.9.5-1.4.5-1 0-2-.8-2-1.7 0-.4.3-.9.6-1.2l10.3-8.8c.3-.4.8-.6 1.3-.6.6 0 1 .2 1.4.6l10.2 8.8c.4.3.6.8.6 1.2 0 1-.9 1.7-2 1.7-.5 0-1-.2-1.3-.5l-7.2-6.8v15.6h14.4c6.1 0 11.2-4.1 11.2-9.4 0-5-4-8.8-9.5-9.4C63.8 11.8 56 5.8 47 6Zm-1.7 42.7V38.4h3.4v10.3c0 .8-.7 1.5-1.7 1.5s-1.7-.7-1.7-1.5Z M27 49c-4 0-7 2-7 6v29c0 3 3 6 6 6h42c3 0 6-3 6-6V55c0-4-3-6-7-6H28Zm41 3c1 0 3 1 3 3v19l-13-6a2 2 0 0 0-2 0L44 79l-10-5a2 2 0 0 0-2 0l-9 7V55c0-2 2-3 4-3h41Z M40 62c0 2-2 4-5 4s-5-2-5-4 2-4 5-4 5 2 5 4Z"/>
                    </symbol>
                  </defs>
                </svg>
               
              </div>

              <h1 class="mb-4 mt-4">Upload Featured Image</h1>

            

              <div class="row">
                <div>

                  <fieldset class="upload_dropZone1 text-center mb-3 p-4">
                
                    <legend class="visually-hidden">Image uploader</legend>
                
                    <svg class="upload_svg1" width="60" height="60" aria-hidden="true">
                      <use href="#icon-imageUpload1"></use>
                    </svg>
                
                    <p class="small my-2 upload-text">Choose a file</p>
                
                    <input name="featured_image[]" multiple id="upload_image_background1" data-post-name="image_background" data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible" type="file" multiple accept="image/jpeg, image/png, image/svg+xml" />
                    <input type="hidden" id="selected_image_names" name="selected_image_names" value="{{$add->featured_image}}" />
                    <label class="btn btn-upload1 mb-3" for="upload_image_background1">Browse file</label>
                
                    <div class="upload_gallery1 row justify-content-start"></div>
                
                  </fieldset>
                </div>
                
                
                <svg style="display:none">
                  <defs>
                    <symbol id="icon-imageUpload" clip-rule="evenodd" viewBox="0 0 96 96">
                      <path d="M47 6a21 21 0 0 0-12.3 3.8c-2.7 2.1-4.4 5-4.7 7.1-5.8 1.2-10.3 5.6-10.3 10.6 0 6 5.8 11 13 11h12.6V22.7l-7.1 6.8c-.4.3-.9.5-1.4.5-1 0-2-.8-2-1.7 0-.4.3-.9.6-1.2l10.3-8.8c.3-.4.8-.6 1.3-.6.6 0 1 .2 1.4.6l10.2 8.8c.4.3.6.8.6 1.2 0 1-.9 1.7-2 1.7-.5 0-1-.2-1.3-.5l-7.2-6.8v15.6h14.4c6.1 0 11.2-4.1 11.2-9.4 0-5-4-8.8-9.5-9.4C63.8 11.8 56 5.8 47 6Zm-1.7 42.7V38.4h3.4v10.3c0 .8-.7 1.5-1.7 1.5s-1.7-.7-1.7-1.5Z M27 49c-4 0-7 2-7 6v29c0 3 3 6 6 6h42c3 0 6-3 6-6V55c0-4-3-6-7-6H28Zm41 3c1 0 3 1 3 3v19l-13-6a2 2 0 0 0-2 0L44 79l-10-5a2 2 0 0 0-2 0l-9 7V55c0-2 2-3 4-3h41Z M40 62c0 2-2 4-5 4s-5-2-5-4 2-4 5-4 5 2 5 4Z"/>
                    </symbol>
                  </defs>
                </svg>
               
              </div>


            

              <h1 class="mb-4 mt-4">Upload Business Logo</h1>

              <div class="row">
                <div>
                  <fieldset class="upload_dropZone2 text-center mb-3 p-4">
                    <legend class="visually-hidden">Image uploader</legend>
                    <svg class="upload_svg" width="60" height="60" aria-hidden="true">
                      <use href="#icon-imageUpload2"></use>
                    </svg>
                    <p class="small my-2 upload-text">Choose a file</p>
                    <input name="logo" id="upload_image_background2" data-post-name="image_background" data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible" type="file" accept="image/jpeg, image/png, image/svg+xml" />
                    <label class="btn btn-upload mb-3" for="upload_image_background2">Browse file</label>
                    <div class="upload_gallery2 d-flex flex-wrap justify-content-center gap-3 mb-0"></div>
                  </fieldset>
                </div>
              </div>
              
 
              <div class="row">
                <button onclick="PreviewService()"  type="button" class="btn btn-success">Save & Preview</button>
              </div>
            </div>

          </form>
          </div>



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
                                <div class="inlineimage row">
                                  <div class="col-3">
                                    <img class="img-responsive images" style="height: 90px; width: 100px;" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Mastercard-Curved.png">
                                  </div>
                                  <div class="col-3">
                                    <img class="img-responsive images" style="height: 90px; width: 100px;" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Discover-Curved.png"> 
                                  </div>
                                  <div class="col-3">
                                    <img class="img-responsive images" style="height: 90px; width: 100px;" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/Paypal-Curved.png"> 
                                  </div>
                                  <div class="col-3">
                                    <img class="img-responsive images" style="height: 90px; width: 100px;" src="https://cdn0.iconfinder.com/data/icons/credit-card-debit-card-payment-PNG/128/American-Express-Curved.png"> </div>
                            
                                  </div>
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
                                        <div class="form-group" > <label>CARD NUMBER</label>
                                            <div class="input-group" style="align-items: center;"> 
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
        <button  onclick="SubmitPayment()" id="pay_btn"  type="button" class="btn btn-success btn-block" >Confirm Payment  </button>
        
      </div>
    </div>
  </div>
</div>






          <div class="col-lg-4 col-md-12">
            <div class="title-sec">
              <h1>Title</h1>
              <p>Enter your complete business name for when people who know your business by name and are looking you up.</p>
              <img src="assets/public-site/img/titleimage.png" width="100%">
            </div>
          </div>
        </div>
     </div>
    <!-- =========== POLICY END HERE ========= -->
    <!-- =========== FOOTER START HERE ========= -->
    <x-public-footer/>
    <!-- =========== FOOTER END HERE ========= -->
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


    
{{-- Add Faqs script END ======= --}}
<script>
 $(document).ready(function () {

    
    // Parse existing FAQ data from the hidden input field
    let faqs = JSON.parse($("#all_faq").val() || "[]");
    let uniqueId = Date.now(); // Generate a unique ID for the FAQ
    // Function to update the hidden input field with the current FAQ data
    function updateFaqInput() {
        $("#all_faq").val(JSON.stringify(faqs));
    }

      // Add unique id to each FAQ if not already present
      faqs = faqs.map(faq => {
        return {
            id: Date.now() + Math.floor(Math.random() * 1000), // ensures uniqueness even if called quickly
            ...faq
        };
    });
        // Update the hidden input with new structure
        $("#all_faq").val(JSON.stringify(faqs));
     
    // Populate existing FAQs in the UI on page load
    faqs.forEach(faq => {
        $("#faq-questions").append(`
            <div class="card faq-card mt-2" data-id="${faq.id}">
                <div class="card-body">
                    <h6 class="card-title"><strong>Q:</strong> ${faq.question}</h6>
                    <p class="card-text"><strong>A:</strong> ${faq.answer}</p>
                    <button class="btn btn-sm btn-danger float-end remove-faq" data-id="${faq.id}">
                        ❌ Remove
                    </button>
                </div>
            </div>
        `);
    });

    // Add new FAQ on button click
    $("#add-faq").click(function () {
        let question = $("#faq_question").val().trim();
        let answer = $("#faq_answer").val().trim();

        if (question === "" || answer === "") {
            alert("Please enter both question and answer!");
            return;
        }

        // Check if the question already exists
        if (faqs.some(faq => faq.question === question)) {
            alert("This question has already been added.");
            return;
        }

     

        // Append the new FAQ to the UI
        $("#faq-questions").append(`
            <div class="card faq-card mt-2" data-id="${uniqueId}">
                <div class="card-body">
                    <h6 class="card-title"><strong>Q:</strong> ${question}</h6>
                    <p class="card-text"><strong>A:</strong> ${answer}</p>
                    <button class="btn btn-sm btn-danger float-end remove-faq" data-id="${uniqueId}">
                        ❌ Remove
                    </button>
                </div>
            </div>
        `);

        // Add new FAQ object to the array
        faqs.push({ id: uniqueId, question: question, answer: answer });

        // Update the hidden input field with the new FAQ data
        updateFaqInput();

        // Clear input fields
        $("#faq_question").val("");
        $("#faq_answer").val("");
    });

    // Remove FAQ when clicking the cross button
    $(document).on("click", ".remove-faq", function () {
        let faqId = $(this).data("id");

        // Remove the FAQ from the UI
        $(this).closest(".faq-card").remove();

        // Remove the FAQ from the array
        faqs = faqs.filter(faq => faq.id !== faqId);

        // Update the hidden input field with the updated FAQ data
        updateFaqInput();
    });
});



</script>
{{-- Add Faqs script Start ======= --}}



{{-- Add Sical Links  script Start ======= --}}
<script>
 $(document).ready(function () {
    // Parse existing social media links from hidden input field
    let socialLinks = JSON.parse($("#all_links").val() || "[]");

    // Populate the list with existing links on page load
    socialLinks.forEach(link => {
        $("#social-links-list").append(`
            <div class="social-entry d-flex align-items-center justify-content-between alert alert-secondary" data-platform="${link.platform}">
                   <strong>${link.platform}:</strong> <a href="${link.url}" target="_blank">${link.url}</a>
 
                <button class="btn btn-sm btn-danger remove-link" data-platform="${link.platform}">
                    ❌ Remove
                </button>
            </div>
        `);
    });

    // Function to check if the platform is already added
    function isPlatformAlreadyAdded(platform) {
        return socialLinks.some(link => link.platform === platform);
    }

    // Add new social media link
    $("#add-links").click(function () {
        let platform = $("#select_social_media").val();
        let url = $("#social_media_link").val();

        if (!platform || !url) {
            alert("Please select a platform and enter a valid URL.");
            return;
        }

        // Check if the platform is already added
        if (isPlatformAlreadyAdded(platform)) {
            alert(`${platform} is already added.`);
            return;
        }

        // Add the new link to the socialLinks array
        socialLinks.push({ platform, url });

        // Remove selected platform from dropdown
        $("#select_social_media option[value='" + platform + "']").remove();

        // Append the new link to the list
        $("#social-links-list").append(`
            <div class="social-entry d-flex align-items-center justify-content-between alert alert-secondary" data-platform="${platform}">
                   <strong>${platform}:</strong> <a href="${url}" target="_blank">${url}</a>
 
                <button class="btn btn-sm btn-danger remove-link" data-platform="${platform}">
                    ❌ Remove
                </button>
            </div>
        `);

        // Update the hidden input field with the new socialLinks array
        $("#all_links").val(JSON.stringify(socialLinks));

        // Clear the input fields
        $("#select_social_media").val("");
        $("#social_media_link").val("");
    });

    // Remove a social media link
    $(document).on("click", ".remove-link", function () {
        let platform = $(this).data("platform");

        // Remove the link from the socialLinks array
        socialLinks = socialLinks.filter(link => link.platform !== platform);

        // Add the removed platform back to the dropdown
        $("#select_social_media").append(`<option value="${platform}">${platform}</option>`);

        // Remove the link from the list
        $(this).closest("div").remove();

        // Update the hidden input field with the updated socialLinks array
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

    // Load initial availability data from the hidden input field
    let availabilityData = JSON.parse(availabilityInput.value) || [];

    // Populate the UI with existing availability data
    updateAvailabilityUI();

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

    // Check if the selected day already exists in the availability data
    function isDayAlreadyAdded(day) {
        return availabilityData.some(item => item.day === day);
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

        // Check if the day is already added
        if (isDayAlreadyAdded(selectedDay)) {
            alert(`Availability for ${selectedDay} is already added.`);
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
                <div class="alert alert-light d-flex justify-content-between align-items-center">
                    <div><strong>${item.day}:</strong> ${show_time}</div>
                    <button class="remove_availability btn btn-sm btn-danger" data-index="${index}" data-day="${item.day}">
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
      var image = $('#upload_image_background').val();
      var featured_image = $('#upload_image_background1').val();
      var logo = $('#upload_image_background2').val();
  
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
  
    
      // If all validations pass, open the modal
      if (isValid) {
        $('#addForm').off('submit').submit(); // Bootstrap modal trigger
 
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





  </body> 
</html>
<script>
  function Show_Div(Div_id) {
  if (false == $(Div_id).is(':visible')) {
    $(Div_id).show(250);
  }
  else {
    $(Div_id).hide(250);
  }
}
</script>
<!-- TINYMCE  -->
<script>
  // tinymce.init({
  //   selector: 'textarea#default'
  // });
</script>
<!-- UPLOAD IMAGE  -->
 <script>


(function () {
  'use strict';

  const preventDefaults = event => {
    event.preventDefault();
    event.stopPropagation();
  };

  const highlight = event =>
    event.target.classList.add('highlight');

  const unhighlight = event =>
    event.target.classList.remove('highlight');

  const getInputAndGalleryRefs = element => {
    const zone = element.closest('.upload_dropZone') || false;
    const gallery = zone.querySelector('.upload_gallery') || false;
    const input = zone.querySelector('input[type="file"]') || false;
    return { input: input, gallery: gallery };
  };

  const handleDrop = event => {
    const dataRefs = getInputAndGalleryRefs(event.target);
    dataRefs.files = event.dataTransfer.files;
    handleFiles(dataRefs);
  };

  const eventHandlers = zone => {
    const dataRefs = getInputAndGalleryRefs(zone);
    if (!dataRefs.input) return;

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, preventDefaults, false);
      document.body.addEventListener(event, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(event => {
      zone.addEventListener(event, highlight, false);
    });
    ['dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, unhighlight, false);
    });

    zone.addEventListener('drop', handleDrop, false);

    dataRefs.input.addEventListener('change', event => {
      dataRefs.files = event.target.files;
      handleFiles(dataRefs);
    }, false);
  };

  const dropZones = document.querySelectorAll('.upload_dropZone');
  for (const zone of dropZones) {
    eventHandlers(zone);
  }

  const isImageFile = file =>
    ['image/jpeg', 'image/png', 'image/svg+xml'].includes(file.type);

  function previewFiles(dataRefs) {
    if (!dataRefs.gallery) return;

    // Clear existing previews
    dataRefs.gallery.innerHTML = '';

    const file = dataRefs.files[0];
    if (!file) return;

    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
      let img = document.createElement('img');
      img.className = 'upload_img mt-2';
      img.setAttribute('alt', file.name);
      img.src = reader.result;

      // Create remove button
      let removeBtn = document.createElement('button');
      removeBtn.textContent = 'Remove';
      removeBtn.className = 'btn btn-danger btn-sm mt-2';
      removeBtn.style.height = 'max-content';
      removeBtn.addEventListener('click', () => {
        dataRefs.gallery.innerHTML = '';
        dataRefs.input.value = '';
      });

      dataRefs.gallery.appendChild(img);
      dataRefs.gallery.appendChild(removeBtn);
    };
  }

  const imageUpload = dataRefs => {
    if (!dataRefs.files || !dataRefs.input) return;

    const url = dataRefs.input.getAttribute('data-post-url');
    if (!url) return;

    const name = dataRefs.input.getAttribute('data-post-name');
    if (!name) return;

    const formData = new FormData();
    formData.append(name, dataRefs.files[0]);

    fetch(url, {
      method: 'POST',
      body: formData
    })
      .then(response => response.json())
      .then(data => {
        console.log('posted: ', data);
        if (data.success === true) {
          previewFiles(dataRefs);
        } else {
          console.log('URL: ', url, '  name: ', name);
        }
      })
      .catch(error => {
        console.error('errored: ', error);
      });
  };

  const handleFiles = dataRefs => {
    let files = [...dataRefs.files];

    files = files.filter(item => {
      if (!isImageFile(item)) {
        console.log('Not an image, ', item.type);
      }
      return isImageFile(item) ? item : null;
    });

    if (!files.length) return;
    dataRefs.files = [files[0]]; // Only keep the first file

    previewFiles(dataRefs);
    imageUpload(dataRefs);
  }
})();




document.addEventListener("DOMContentLoaded", function () {
    const existingImage = @json($add->image);
    const userId = `{{ $add->user_id }}`;
    const basePath = `/assets/adds/data_${userId}/`;
    const fullImageUrl = basePath + existingImage;

    if (existingImage) {
      const gallery = document.querySelector('.upload_gallery');
      const input = document.querySelector('#upload_image_background');

      // Create image preview
      let img = document.createElement('img');
      img.className = 'upload_img mt-2';
      img.setAttribute('alt', existingImage);
      img.src = fullImageUrl;

      // Create remove button
      let removeBtn = document.createElement('button');
      removeBtn.textContent = 'Remove';
      removeBtn.className = 'btn btn-danger btn-sm mt-2';
      removeBtn.style.height = 'max-content';
      removeBtn.addEventListener('click', () => {
        gallery.innerHTML = '';
        input.value = '';
      });

      // Append image and button
      gallery.appendChild(img);
      gallery.appendChild(removeBtn);
    }
  });

 </script>
 <!-- UPLOAD IMAGE 1 -->
 <script>
document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  const MAX_FILES = 8;
  let selectedFiles = [];
  let initialImageNames = [];

  const hiddenInput = document.getElementById('selected_image_names');
  const gallery = document.querySelector('.upload_gallery1');
  const input = document.querySelector('.upload_dropZone1 input[type="file"]');
  const dropZone = document.querySelector('.upload_dropZone1');

  const basePath = `/assets/adds/data_{{ $add->user_id }}/`;

  // Update hidden input with current initial image names
  const updateImageNamesField = () => {
    const currentInitials = selectedFiles
      .filter(file => initialImageNames.includes(file.name))
      .map(file => file.name);
    hiddenInput.value = currentInitials.join('|*|');
  };

  // Update input.files to contain only new (not initial) images
  const updateInputFiles = () => {
    const dataTransfer = new DataTransfer();
    selectedFiles
      .filter(file => !initialImageNames.includes(file.name))
      .forEach(file => dataTransfer.items.add(file));
    input.files = dataTransfer.files;
  };

  // Remove image from gallery and selected list
  const removeImage = (fileName) => {
    selectedFiles = selectedFiles.filter(file => file.name !== fileName);
    const imageElement = gallery.querySelector(`[data-name="${fileName}"]`);
    if (imageElement) {
      imageElement.closest('.col-12').remove();
    }
    updateImageNamesField();
    updateInputFiles();
  };

  // Render image preview in gallery
  const previewImage = (file, src) => {
    const colDiv = document.createElement('div');
    colDiv.className = 'col-12 col-sm-6 col-md-4 col-lg-4';

    const imgContainer = document.createElement('div');
    imgContainer.className = 'image-preview';
    imgContainer.setAttribute('data-name', file.name);

    const img = document.createElement('img');
    img.src = src;
    img.alt = file.name;

    const removeBtn = document.createElement('button');
    removeBtn.type = 'button';
    removeBtn.className = 'remove-image';
    removeBtn.innerHTML = '&times;';
    removeBtn.addEventListener('click', () => removeImage(file.name));

    imgContainer.appendChild(img);
    imgContainer.appendChild(removeBtn);
    colDiv.appendChild(imgContainer);
    gallery.appendChild(colDiv);
  };

  // Load already existing images from hidden input
  if (hiddenInput && hiddenInput.value.trim()) {
    initialImageNames = hiddenInput.value.trim().split('|*|');
    initialImageNames.forEach(name => {
      if (!name) return;
      const fakeFile = new File([""], name, { type: "image/jpeg" });
      selectedFiles.push(fakeFile);
      previewImage(fakeFile, basePath + name);
    });
    updateImageNamesField();
  }

  // Handle file upload and preview
  const handleFiles = (newFiles) => {
    const validFiles = Array.from(newFiles).filter(file =>
      ['image/jpeg', 'image/png', 'image/svg+xml'].includes(file.type)
    );

    if (validFiles.length === 0) {
      alert('Please select valid image files (JPEG, PNG, SVG).');
      return;
    }

    const total = selectedFiles.length + validFiles.length;
    if (total > MAX_FILES) {
      alert(`You can only upload a maximum of ${MAX_FILES} images.`);
      return;
    }

    validFiles.forEach(file => {
      selectedFiles.push(file);
      const reader = new FileReader();
      reader.readAsDataURL(file);
      reader.onloadend = () => previewImage(file, reader.result);
    });

    updateInputFiles();
  };

  // Prevent default drag behaviors
  const preventDefaults = (e) => {
    e.preventDefault();
    e.stopPropagation();
  };

  ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event =>
    dropZone.addEventListener(event, preventDefaults, false)
  );

  ['dragenter', 'dragover'].forEach(event =>
    dropZone.addEventListener(event, () => dropZone.classList.add('highlight'), false)
  );

  ['dragleave', 'drop'].forEach(event =>
    dropZone.addEventListener(event, () => dropZone.classList.remove('highlight'), false)
  );

  // Handle dropped files
  dropZone.addEventListener('drop', (e) => {
    const dt = e.dataTransfer;
    handleFiles(dt.files);
  });

  // Handle selected files via input
  input.addEventListener('change', (e) => {
    handleFiles(e.target.files);
  });
});

</script>

@php
  $userId = $add->user_id;
  $featuredImages = explode('|*|', $add->featured_image);
@endphp

<script> 


// document.addEventListener('DOMContentLoaded', function () {

//   const existingImages = @json($featuredImages);
//   const basePath = `/assets/adds/data_{{ $userId }}/`;



//     const gallery = document.querySelector('.upload_gallery1');
//     const input = document.querySelector('.upload_dropZone1 input[type="file"]');
//     if (!gallery || !input || !existingImages.length) return;

//     existingImages.forEach(imageName => {
//       if (!imageName) return;

//       const colDiv = document.createElement('div');
//       colDiv.className = 'col-12 col-sm-6 col-md-4 col-lg-4';

//       const imgContainer = document.createElement('div');
//       imgContainer.className = 'image-preview';
//       imgContainer.setAttribute('data-name', imageName);

//       const img = document.createElement('img');
//       img.src = basePath + imageName;
//       img.setAttribute('alt', imageName);

//       const removeBtn = document.createElement('button');
//       removeBtn.type = 'button';
//       removeBtn.className = 'remove-image';
//       removeBtn.innerHTML = '&times;';
//       removeBtn.addEventListener('click', () => removeImage(imageName, gallery, input));

//       imgContainer.appendChild(img);
//       imgContainer.appendChild(removeBtn);
//       colDiv.appendChild(imgContainer);
//       gallery.appendChild(colDiv);

//       // Add fake File object to selectedFiles for consistency
//       const fakeFile = new File([""], imageName, { type: "image/jpeg" });
//       selectedFiles.push(fakeFile);
//     });

//     updateImageNamesField();
//     updateInputFiles(input);
//   });




  
   </script>
 <!-- UPLOAD IMAGE 2 -->
 <script>

(function () {
  'use strict';

  const preventDefaults = event => {
    event.preventDefault();
    event.stopPropagation();
  };

  const highlight = event =>
    event.target.classList.add('highlight');

  const unhighlight = event =>
    event.target.classList.remove('highlight');

  const getInputAndGalleryRefs = element => {
    const zone = element.closest('.upload_dropZone2') || false;
    const gallery = zone.querySelector('.upload_gallery2') || false;
    const input = zone.querySelector('input[type="file"]') || false;
    return { input: input, gallery: gallery };
  };

  const handleDrop = event => {
    const dataRefs = getInputAndGalleryRefs(event.target);
    dataRefs.files = event.dataTransfer.files;
    handleFiles(dataRefs);
  };

  const eventHandlers = zone => {
    const dataRefs = getInputAndGalleryRefs(zone);
    if (!dataRefs.input) return;

    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, preventDefaults, false);
      document.body.addEventListener(event, preventDefaults, false);
    });

    ['dragenter', 'dragover'].forEach(event => {
      zone.addEventListener(event, highlight, false);
    });
    ['dragleave', 'drop'].forEach(event => {
      zone.addEventListener(event, unhighlight, false);
    });

    zone.addEventListener('drop', handleDrop, false);

    dataRefs.input.addEventListener('change', event => {
      dataRefs.files = event.target.files;
      handleFiles(dataRefs);
    }, false);
  };

  const dropZones = document.querySelectorAll('.upload_dropZone2');
  for (const zone of dropZones) {
    eventHandlers(zone);
  }

  const isImageFile = file =>
    ['image/jpeg', 'image/png', 'image/svg+xml'].includes(file.type);

  function previewFiles(dataRefs) {
    if (!dataRefs.gallery) return;

    // Clear existing previews
    dataRefs.gallery.innerHTML = '';

    const file = dataRefs.files[0];
    if (!file) return;

    let reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onloadend = function () {
      let img = document.createElement('img');
      img.className = 'upload_img mt-2';
      img.setAttribute('alt', file.name);
      img.src = reader.result;

      // Create remove button
      let removeBtn = document.createElement('button');
      removeBtn.textContent = 'Remove';
      removeBtn.className = 'btn btn-danger btn-sm mt-2';
      removeBtn.style.height = 'max-content';
      removeBtn.addEventListener('click', () => {
        dataRefs.gallery.innerHTML = '';
        dataRefs.input.value = '';
      });

      dataRefs.gallery.appendChild(img);
      dataRefs.gallery.appendChild(removeBtn);
    };
  }

  const imageUpload = dataRefs => {
    if (!dataRefs.files || !dataRefs.input) return;

    const url = dataRefs.input.getAttribute('data-post-url');
    if (!url) return;

    const name = dataRefs.input.getAttribute('data-post-name');
    if (!name) return;

    const formData = new FormData();
    formData.append(name, dataRefs.files[0]);

    fetch(url, {
      method: 'POST',
      body: formData
    })
      .then(response => response.json())
      .then(data => {
        console.log('posted: ', data);
        if (data.success === true) {
          previewFiles(dataRefs);
        } else {
          console.log('URL: ', url, '  name: ', name);
        }
      })
      .catch(error => {
        console.error('errored: ', error);
      });
  };

  const handleFiles = dataRefs => {
    let files = [...dataRefs.files];

    files = files.filter(item => {
      if (!isImageFile(item)) {
        console.log('Not an image, ', item.type);
      }
      return isImageFile(item) ? item : null;
    });

    if (!files.length) return;
    dataRefs.files = [files[0]]; // Only keep the first file

    previewFiles(dataRefs);
    imageUpload(dataRefs);
  }
})();





document.addEventListener("DOMContentLoaded", function () {
    const existingImage = @json($add->logo);
    const userId = `{{ $add->user_id }}`;
    const basePath = `/assets/adds/data_${userId}/`;
    const fullImageUrl = basePath + existingImage;

    if (existingImage) {
      const gallery = document.querySelector('.upload_gallery2');
      const input = document.querySelector('#upload_image_background2');

      // Create image preview
      let img = document.createElement('img');
      img.className = 'upload_img mt-2';
      img.setAttribute('alt', existingImage);
      img.src = fullImageUrl;

      // Create remove button
      let removeBtn = document.createElement('button');
      removeBtn.textContent = 'Remove';
      removeBtn.className = 'btn btn-danger btn-sm mt-2';
      removeBtn.style.height = 'max-content';
      removeBtn.addEventListener('click', () => {
        gallery.innerHTML = '';
        input.value = '';
      });

      // Append image and button
      gallery.appendChild(img);
      gallery.appendChild(removeBtn);
    }
  });


   </script>
   <!-- ======================================================================= -->
   <script>
    function addSocial() {
      const platform = document.getElementById('socialSelect').value;
      const link = document.getElementById('socialLink').value.trim();
  
      if (!platform || !link) {
        alert("Please select a social media and enter the link.");
        return;
      }
  
      const list = document.getElementById('socialList');
      const entry = document.createElement('div');
      entry.className = 'social-entry d-flex align-items-center justify-content-between alert alert-secondary';
  
      entry.innerHTML = `
        <div>
          <strong>${platform}:</strong> <a href="${link}" target="_blank">${link}</a>
        </div>
        <button class="btn btn-sm btn-danger" onclick="this.parentElement.remove()">❌ Remove</button>
      `;
  
      list.appendChild(entry);
  
      // Reset fields
      document.getElementById('socialSelect').value = '';
      document.getElementById('socialLink').value = '';
    }
  </script>
  <!-- ========================================================================================== -->
  <script>
    function addFaq() {
      const question = document.getElementById('faqQuestion').value.trim();
      const answer = document.getElementById('faqAnswer').value.trim();
  
      if (!question || !answer) {
        alert("Please enter both question and answer.");
        return;
      }
  
      const faqList = document.getElementById('faqList');
  
      const faqCard = document.createElement('div');
      faqCard.className = 'card faq-card';
  
      faqCard.innerHTML = `
        <div class="card-body">
          <h6 class="card-title"><strong>Q:</strong> ${question}</h6>
          <p class="card-text"><strong>A:</strong> ${answer}</p>
          <button class="btn btn-sm btn-danger" onclick="this.closest('.faq-card').remove()">❌ Remove</button>
        </div>
      `;
  
      faqList.appendChild(faqCard);
  
      // Clear input fields
      document.getElementById('faqQuestion').value = '';
      document.getElementById('faqAnswer').value = '';
    }
  </script>
  <script>
    const fullDayCheck = document.getElementById("fullDayCheck");
    const startTime = document.getElementById("startTime");
    const endTime = document.getElementById("endTime");
  
    fullDayCheck.addEventListener("change", () => {
      const isChecked = fullDayCheck.checked;
      startTime.disabled = isChecked;
      endTime.disabled = isChecked;
    });
  
    function addBusinessHour() {
      const day = document.getElementById("daySelect").value;
      const isFullDay = fullDayCheck.checked;
  
      if (!day) {
        alert("Please select a day.");
        return;
      }
  
      let displayText = "";
  
      if (isFullDay) {
        displayText = `<strong>${day}:</strong> 24 Hours Service`;
      } else {
        const start = startTime.value;
        const end = endTime.value;
  
        if (!start || !end) {
          alert("Please select both start and end time.");
          return;
        }
  
        displayText = `<strong>${day}:</strong> ${start} - ${end}`;
      }
  
      const div = document.createElement("div");
      div.className = "alert alert-light d-flex justify-content-between align-items-center";
      div.innerHTML = `
        <div>${displayText}</div>
        <button class="btn btn-sm btn-danger" onclick="this.parentElement.remove()">Remove</button>
      `;
  
      document.getElementById("businessHoursList").appendChild(div);
  
      // Reset form
      document.getElementById("daySelect").value = '';
      startTime.value = '';
      endTime.value = '';
      fullDayCheck.checked = false;
      startTime.disabled = false;
      endTime.disabled = false;
    }
  </script>