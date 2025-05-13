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

    <title>World Guide | Country</title>
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
          <h1>{{$country->country_name}}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-12 quick-access-sec">
          <div class="section-divider d-flex align-items-center mb-3">
            <div class="flex-grow-1 border-line"></div>
            <div class="mx-3 section-text">Quick Access</div>
            <div class="flex-grow-1 border-line"></div>
          </div>

          <a href="{{$country->facts_url}}" target="__" class="btn btn-yellow"><i class="fa-solid fa-flag"></i> Australia Rules</a>
          <a href="{{$country->history_url}}" target="__" class="btn btn-blue"><i class="fa-solid fa-book"></i> History</a>
          <a  href="{{$country->dining_url}}" target="__" class="btn btn-blue"><i class="fa-solid fa-car"></i> Driving</a>
          <a href="{{$country->visa_info_url}}" target="__" class="btn btn-blue"><i class="fa-solid fa-graduation-cap"></i> Universities</a>
          <a href="{{$country->visa_light_url}}" target="__" class="btn btn-red"><i class="fa-solid fa-graduation-cap"></i> Visa + Uni Acceptance Free</a>
          <a  href="{{$country->tours_url}}"  target="__" class="btn btn-blue"><i class="fa-solid fa-briefcase"></i> Tours</a>
        </div>
        <!-- //////////////////// -->
        <div class="col-lg-9 col-md-12">
          <div class="row">
            <div class="col-md-12 aus-btn">
              <button onclick="window.location.href='{{$country->constitution_url}}', '_blank';"  >
                <span class="button_top"><i class="fa-solid fa-building"></i>&nbsp; Australia Constitution </span>
              </button>
              <button  onclick="window.location.href='{{$country->emergency_url}}', '_blank';"  >
                <span class="button_top aus-btn2"><i class="fa-solid fa-phone"></i>&nbsp; Emergency Numbers </span>
              </button>
              <button  onclick="window.location.href='{{$country->embassies_url}}', '_blank';"   >
                <span class="button_top"><i class="fa-solid fa-building"></i>&nbsp; Embassies </span>
              </button>
              <button  onclick="window.location.href='{{$country->news_url}}', '_blank';"  >
                <span class="button_top"><i class="fa-solid fa-handshake"></i>&nbsp; New Offers </span>
              </button>
            </div>
          </div>
          
          <!-- <div class="row">
            <div class="col-lg-3 col-md-6">
             <button class="btn austrailia-btn aust-btn"><i class="bi bi-building"></i>&nbsp; Australia Constitution</button>
            </div>
            <div class="col-lg-3 col-md-6 constbtn-sec">
             <button class="btn austrailia-btn const-red-btn"><i class="bi bi-telephone-fill"></i></i>&nbsp;  Emergency Numbers</button>
            </div>
            <div class="col-lg-3 col-md-6">
             <button class="btn austrailia-btn const-btn aust-btn"><i class="bi bi-building"></i>&nbsp;  Embassies</button>
            </div>
            <div class="col-lg-3 col-md-6">
             <button class="btn austrailia-btn const-btn aust-btn"><i class="bi bi-hand-thumbs-up-fill"></i>&nbsp;  New Offers</button>
            </div>
            </div> -->
            <?php 
            if (isset($country->country_video)) {
                $videoUrl = $country->country_video;
                if (preg_match('/(?:https?:\/\/)?(?:www\.)?(youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $videoUrl, $matches)) {
                    $country->country_video = 'https://www.youtube.com/embed/' . $matches[2];
                }
            }
            ?>
          <iframe class="mt-2" width="100%" height="537" src="{{$country->country_video}}" title="Travel to Australia, Top 10 Tourist Destinations" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <!-- Map  -->
          
          <iframe src="{!!$country->country_map!!}" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <!--  -->
          <div class="container my-5">
            <div class="section-divider d-flex align-items-center">
              <div class="flex-grow-1 border-line"></div>
              <div class="mx-3 section-text">Visit Australia</div>
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
                        <div class="accordion-body">{{$country->best_time}}</div>
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
                        <div class="accordion-body">{{$country->transportation}}</div>
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
                        <div class="accordion-body"> {{$country->weather}}</div>
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
                        <div class="accordion-body"> {{$country->information}}</div>
                      </div>
                    </div>

                    
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                        <div class="visit-sec-icon"> 
                          <i class="fa-solid fa-bolt" aria-hidden="true"></i>
                          </div>  &nbsp;&nbsp;&nbsp;
                    <h2 class="accordion-headings">The Electric</h2>
                    
                    
                        </button>
                      </h2>
                      <div id="flush-collapse5" class="accordion-collapse collapse" aria-labelledby="flush-heading5" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> {{$country->electric}}

                      <img loading="lazy" decoding="async" class="text-center accordion_image" src="assets/country_img/electric/{{$country->electric_image}}" alt="" width="399" height="280"  sizes="auto, (max-width: 399px) 100vw, 399px">
                    </div>
                      </div>
                    </div>

                    
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapse6">
                        <div class="visit-sec-icon"> 
                           <i class="fa-solid fa-language" aria-hidden="true"></i>
                          </div>  &nbsp;&nbsp;&nbsp;
                    <h2 class="accordion-headings">Language</h2>
                     
                        </button>
                      </h2>
                      <div id="flush-collapse6" class="accordion-collapse collapse" aria-labelledby="flush-heading6" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body"> {{$country->language}}</div>
                      </div>
                    </div>

                    
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapse7">
                        <div class="visit-sec-icon"> 
                            <i class="fa-solid fa-money-bill" aria-hidden="true"></i>
                          </div>  &nbsp;&nbsp;&nbsp;
                    <h2 class="accordion-headings">Currency</h2>
                     
                        </button>
                      </h2>
                      <div id="flush-collapse7" class="accordion-collapse collapse" aria-labelledby="flush-heading7" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                          {{$country->currency}}

                  <img loading="lazy" decoding="async" class="text-center accordion_image" src="assets/country_img/currency/{{$country->currency_image}}" alt="" width="399" height="280"  sizes="auto, (max-width: 399px) 100vw, 399px">
       
                        </div>
                      </div>
                    </div>



                  </div>


  
         
            
          </div>
          <!--  -->
          <div class="container-fluid choose-sec">
            <div class="container">
                <div class="row">

                  @if ($city)
                  @foreach ($city as $item)
            

                  <div class="col-lg-4 col-md-6 mt-5">
                    <a href="{{ route('city.show', ['name' => $name ?? 'unknown', 'id' => $country_id, 'code' => $code ?? 'NA', 'city_id' => $item->id, 'city' => $item->city_name ?? 'NA']) }}" >
                        <div class="card" style="width: 100%;">
                            <img src="assets/city_img/{{$item->city_image}}" lt="{{$item->city_name}}" class="card-img-top">
                            <div class="card-body">
                              <a href="{{ route('city.show', ['name' => $name ?? 'unknown', 'id' => $country_id, 'code' => $code ?? 'NA', 'city_id' => $item->id, 'city' => $item->city_name ?? 'NA']) }}" class="btn btn-primary"> {{$item->city_name}}</a>
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
                                  <a href="#" class="btn btn-primary"> New Zealand</a>
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
              <div class="mx-3 section-text">{{$country->country_name}} Ad's</div>
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
            <img src="assets/adds/data_{{$item->user_id}}/{{$item->image}}" class="card-img-top" alt="..." style="max-height: 250px; min-height: 200px;">
            <div class="card-body">
              <h5 class="card-title">{{$item->title}} </h5>
              <button type="button" class="btn btn-outline-secondary disabled">Be the first to review!</button> <span><i class="fa-solid fa-location-dot"></i> {{$item->country_name}} </span>
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
            <img src="assets/public-site/img/ad1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Teppich-expert.de</h5>
              <button type="button" class="btn btn-outline-secondary disabled">Be the first to review!</button> <span><i class="fa-solid fa-location-dot"></i> Iran</span>
            </div>
            <a href="#">
              <div class="card-footer">
                <small class="text-muted"><i class="fa-solid fa-phone"></i> Call</small>
              </div>
            </a>
          </div>
        </div> --}}
  
  
   

      </div>
  </div>
    <!-- =========== FOOTER START HERE ========= -->
    <x-public-footer/>
    <!-- =========== FOOTER END HERE ========= -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html> 