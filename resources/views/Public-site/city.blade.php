<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Style CSS Link -->
     <link rel="stylesheet" href="assets/public-site/css/style.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>

     <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
{{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <title>World Guide | City</title>
  </head>

  
  <style>
    .accordion-headings{

          font-family: Quicksand;
    font-size: 18px;
    font-weight: 700;
    /* line-height: 19.8px; */
    color: rgb(51, 51, 51);
    }
    .visit-sec-icon i {
    color: #75B0E8;
    font-size: 25px;
    float: right;
}
.accordion-button:focus {
    z-index: 3;
    border-color: none;
    outline: 0;
    box-shadow: none;
}
.accordion_image{
      display: block; 
    margin: 0 auto;
    margin-top: 13px;
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
     <div class="container country-sec">
      <div class="row">
        <div class="col-md-12 mt-5">
          <h1>{{$city->city_name}}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-12 quick-access-sec">
          <!-- <div class="section-divider d-flex align-items-center mb-3">
            <div class="flex-grow-1 border-line"></div>
            <div class="mx-3 section-text">Quick Access</div>
            <div class="flex-grow-1 border-line"></div>
          </div> -->
          <a href="{{$city->taxi_url}}" target="__"  class="btn btn-yellow">Add Your Business</a>
          <a   href="{{$city->taxi_url}}" target="__" class="btn btn-blue"><i class="fa-solid fa-car"></i>&nbsp; Taxis</a>
          <a href="{{$city->law_url}}" target="__"  class="btn btn-blue"><i class="fa-solid fa-circle-half-stroke"></i>&nbsp; Roads Law</a>
          <a  href="{{$city->lawyer_url}}" target="__"  class="btn btn-blue"><i class="fa-solid fa-circle-half-stroke"></i>&nbsp; Lawyers</a>
          <a  href="{{$city->event_url}}" target="__" class="btn btn-red"><i class="fa-solid fa-circle-half-stroke"></i>&nbsp; Events</a>
          <a  href="{{$city->tours_url}}" target="__"  class="btn btn-blue"><i class="fa-solid fa-circle-half-stroke"></i>&nbsp; Tours</a>
        </div>
        <!-- //////////////////// -->
        <div class="col-lg-9 col-md-12">
          <div class="row">
            <div class="col-md-12 aus-btn">
              <button  onclick="window.location.href='{{$city->car_url}}', '_blank';" >
                <span class="button_top"><i class="fa-solid fa-car"></i>&nbsp; Rent a car </span>
              </button>
              <button  onclick="window.location.href='{{$city->estate_url}}', '_blank';" >
                <span class="button_top aus-btn2"><i class="fa-solid fa-house"></i>&nbsp; Real Estate </span>
              </button>
              <button  onclick="window.location.href='{{$city->hotel_url}}', '_blank';" >
                <span class="button_top"><i class="fa-solid fa-building"></i>&nbsp; Hotels </span>
              </button>
              <button  onclick="window.location.href='{{$city->restaurant_url}}', '_blank';" >
                <span class="button_top"><i class="fa-solid fa-utensils"></i>&nbsp; Restaurants </span>
              </button  onclick="window.location.href='{{$city->coffee_url}}', '_blank';" >
              <button>
                <span class="button_top"><i class="fa-solid fa-mug-hot"></i>&nbsp; Coffee </span>
              </button>
              <button  onclick="window.location.href='{{$city->bars_url}}', '_blank';" >
                <span class="button_top"><i class="fa-solid fa-mug-hot"></i>&nbsp; Bars </span>
              </button> 
            </div>
          </div>
          
          <?php 
          if (isset($city->city_video)) {
              $videoUrl = $city->city_video;
              if (preg_match('/(?:https?:\/\/)?(?:www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $videoUrl, $matches)) {
                  $city->city_video = 'https://www.youtube.com/embed/' . $matches[2];
              }
          }
          ?>
          <iframe class="mt-2" width="100%" height="537" src="{{$city->city_video}}" title="Travel to Australia, Top 10 Tourist Destinations" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <!-- Map  -->
          <iframe src="{!!$city->city_map!!}" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <!--  -->
          <div class="container my-5">
            <div class="section-divider d-flex align-items-center">
              <div class="flex-grow-1 border-line"></div>
              <div class="mx-3 section-text">Visit {{$city->city_name}}</div>
              <div class="flex-grow-1 border-line"></div>
            </div>
            <!--  -->





               <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapse1">
                        <div class="visit-sec-icon"> 
                            <i class="fa-solid fa-calendar-days" aria-hidden="true"></i>
                          </div>  &nbsp;&nbsp;&nbsp;
                          <h2 class="accordion-headings">Best Time To Go</h2>
                        </button>
                      </h2>
                      <div id="flush-collapse1" class="accordion-collapse collapse" aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{$city->best_time}}</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                           <div class="visit-sec-icon"> 
                            <i class="fa-solid fa-car" aria-hidden="true"></i>
                          </div>  &nbsp;&nbsp;&nbsp;
                    <h2 class="accordion-headings">Transportation</h2>
                          
                        </button>
                      </h2>
                      <div id="flush-collapse2" class="accordion-collapse collapse" aria-labelledby="flush-heading2" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">{{$city->transportation}}</div>
                      </div>
                    </div>


                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                       
                         <div class="visit-sec-icon"> 
                            <i class="fa-solid fa-cloud" aria-hidden="true"></i>
                          </div>  &nbsp;&nbsp;&nbsp;
                    <h2 class="accordion-headings">Weather</h2> 
                        </button>
                      </h2>
                      <div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> {{$city->weather}}</div>
                      </div>
                    </div>


                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                        
                        
                          <div class="visit-sec-icon"> 
                            <i class="fa-solid fa-lightbulb" aria-hidden="true"></i>
                          </div>  &nbsp;&nbsp;&nbsp;
                    <h2 class="accordion-headings">Information</h2> 

                        </button>
                      </h2>
                      <div id="flush-collapse4" class="accordion-collapse collapse" aria-labelledby="flush-heading4" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> {{$city->information}}</div>
                      </div>
                    </div>

                     

                  </div>


 


  
          </div>
          <!--  -->
          <div class="container-fluid choose-sec">
            <div class="container">
                <div class="row">

                  @if ($category)
                  @foreach ($category as $item)
                      
 
                <div class="col-lg-4 col-md-6 mt-5"> 
                  <a href="{{ route('category.show', ['name' => $name ?? 'unknown', 'id' => $country->id, 'code' => $code ?? 'NA', 'city_id' => $city->id, 'city' => $city->city_name ?? 'NA', 'category_id' => $item->id, 'category' => $item->name ?? 'NA', 'slug' => $item->slug ?? 'NA']) }}">
                      <div class="card" style="width: 100%;">
                          <img src="assets/category_img/{{$item->image}}" class="card-img-top">
                          <div class="card-body">
                            <a href="{{ route('category.show', ['name' => $name ?? 'unknown', 'id' => $country->id, 'code' => $code ?? 'NA', 'city_id' => $city->id, 'city' => $city->city_name ?? 'NA', 'category_id' => $item->id, 'category' => $item->name ?? 'NA', 'slug' => $item->slug ?? 'NA']) }}"  class="btn btn-primary"><i class="fa-solid fa-circle-half-stroke"></i>&nbsp; {{$item->name}}</a>
                          </div>
                        </div>
                  </a>
                 </div>  
          
                  @endforeach
                      
                  @endif


                     
                       {{-- <div class="col-lg-4 col-md-6 mt-5">
                        <a href="#">
                            <div class="card" style="width: 100%;">
                                <img src="assets/public-site/img/Queenstown-New-Zealand.jpg" class="card-img-top">
                                <div class="card-body">
                                  <a href="#" class="btn btn-primary"><i class="fa-solid fa-circle-half-stroke"></i>&nbsp; New Zealand</a>
                                </div>
                              </div>
                        </a>
                       </div>  --}}
                       
                 
 
                  
                </div>
            </div>
         </div>
        </div>
      </div>
     </div>
      <!--  -->
    <div class="container world-ads-sec">
       <!--  -->
       <div class="row">
        <div class="col-md-12 p-0">
          <div class="container my-5">
            <div class="section-divider d-flex align-items-center">
              <div class="flex-grow-1 border-line"></div>
              <div class="mx-3 section-text">{{$city->city_name}} Ad's</div>
              <div class="flex-grow-1 border-line"></div>
            </div>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="row row-cols-1 row-cols-md-3 g-4">

        @if ($adds)
        @foreach ($adds as $item)

   

        <div class="col-lg-4 col-md-6 col-12">
          <div class="card h-100">
            <img src="assets/adds/data_{{$item->user_id}}/{{$item->image}}" class="card-img-top" alt="..."  style="max-height: 250px; min-height: 200px;">
            <div class="card-body">
              <h5 class="card-title">{{$item->title}} </h5>
              <button type="button" class="btn btn-outline-secondary disabled">Be the first to review!</button> <span><i class="fa-solid fa-location-dot"></i> {{$item->city_name}} </span>
            </div>
            <a href="#">
              <div class="card-footer">
                <small class="text-muted"><i class="fa-solid fa-phone"></i> Call</small>
              </div>
            </a>
          </div>
        </div>
            
        @endforeach
            
        @endif
   
        {{-- <div class="col-lg-4 col-md-6 col-12">
          <div class="card h-100">
            <img src="assets/public-site/img/ad2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h6>Closed Now</h6> <br>
              <h5 class="card-title">Arusha Resort Hotel</h5>
              <p class="card-text">Arusha Resort, Crest Safari Lodge, Lodge in Arusha, Safari Hotel Arusha</p>
              <button type="button" class="btn btn-outline-secondary disabled">Be the first to review!</button> 
              <span><i class="fa-solid fa-location-dot"></i> Other
              </span>
            </div>
            <a href="#">
              <div class="card-footer">
                <small class="text-muted"><i class="fa-solid fa-phone"></i> Call</small>
              </div>
            </a>
          </div>
        </div> --}}
    
       
  
      </div>
       <!--  -->
       {{-- <div class="row">
        <div class="col-md-12 p-0">
          <div class="container my-5">
            <div class="section-divider d-flex align-items-center">
              <div class="flex-grow-1 border-line"></div>
              <div class="mx-3 section-text">Sydney Ad's</div>
              <div class="flex-grow-1 border-line"></div>
            </div>
          </div>
        </div>
      </div> --}}
  </div>
  
    <!-- =========== FOOTER START HERE ========= -->
    <x-public-footer/>
    <!-- =========== FOOTER END HERE ========= -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>