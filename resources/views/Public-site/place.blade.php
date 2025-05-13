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

    <title>World Guide | Place</title>
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
          <h1>{{$category->name}} in {{$city->city_name}}</h1>
        </div>
      </div>
     </div>
      <!--  -->
    <div class="container world-ads-sec">
       <!-- Map  -->
       <p class="text-center mt-5"> {{$category->slug}} </p>
       {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d27153.845280674104!2d74.01635839999999!3d31.709593599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zLA!5e0!3m2!1sen!2s!4v1745931101595!5m2!1sen!2s" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
       <img src="assets/category_img/{{$category->image}}" class="card-img-top">
       <!--  -->
       <div class="row">
        <div class="col-md-12 p-0">
          <div class="container my-5">
            <div class="section-divider d-flex align-items-center">
              <div class="flex-grow-1 border-line"></div>
              <div class="mx-3 section-text">In North</div>
              <div class="flex-grow-1 border-line"></div>
            </div>
          </div>
        </div>
      </div>



      @if ($adds)
      @foreach ($adds as $item)

      <div class="text-center">
        <h3>{{$item->title}} </h3>
        <p class="text-center mt-5"> {!!$item->description!!} </p>

        <div class="feature">
          <figure class="featured-item image-holder r-3-2 transition" style="background-image: url(&quot;assets/adds/data_{{$item->user_id}}/{{$item->image}}&quot;);"></figure>
        </div>
        
        <div class="gallery-wrapper">
          <div class="gallery">
            @if ($item->featured_image != null)
            @php $featured_image = explode('|*|',$item->featured_image) @endphp
            @foreach ($featured_image as $image)
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 active transition"  style="background-image: url(&quot;assets/adds/data_{{$item->user_id}}/{{$image}}&quot;);" ></figure>
            </div>
            @endforeach
         
            @endif
         
              {{-- <div class="item-wrapper">
                <figure class="gallery-item image-holder r-3-2 transition"></figure>
              </div> --}}
              
               
          
          
          </div>
        </div>
        
        <div class="controls">
          <button class="move-btn left">&larr;</button>
          <button class="move-btn right">&rarr;</button>
        </div>

      </div>
      <hr>
          
      @endforeach

          {{-- <!-- Map  -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d27153.845280674104!2d74.01635839999999!3d31.709593599999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1zLA!5e0!3m2!1sen!2s!4v1745931101595!5m2!1sen!2s" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      <p class="text-center mt-5">Palm Beach is a suburb in the northern beaches region of Sydney, in the state of New South Wales, Australia. Palm Beach is located 41 kilometres (25 mi) north of the Sydney central business district, in the local government area of Northern Beaches Council. Palm Beach sits on a peninsula at the end of Barrenjoey Road, between Pittwater and Broken Bay. The population of Palm Beach was 1,596 as at the 2011 census. <br><br>

          Palm Beach is sometimes colloquially referred to as ‘Palmy’; and is used for exterior filming of the soap opera Home and Away, as the fictional town of Summer Bay. It is also the subject of the newly-announced 2018 film ‘Palm Beach’.Palm Beach housing ranges from cottages to grand estates, owned by some of the country’s most affluent people. Many affluent and famous people can also be found holidaying at Palm Beach in summer</p>
      <!--  -->

      <div class="feature">
        <figure class="featured-item image-holder r-3-2 transition"></figure>
      </div>
      
      <div class="gallery-wrapper">
        <div class="gallery">
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 active transition"></figure>
            </div>
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 transition"></figure>
            </div>
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 transition"></figure>
            </div>
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 transition"></figure>
            </div>
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2"></figure>
            </div>
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 transition"></figure>
            </div>
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 transition"></figure>
            </div>
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 transition"></figure>
            </div>
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 transition"></figure>
            </div>
            <div class="item-wrapper">
              <figure class="gallery-item image-holder r-3-2 transition"></figure>
            </div>
        </div>
      </div>
      
      <div class="controls">
        <button class="move-btn left">&larr;</button>
        <button class="move-btn right">&rarr;</button>
      </div> --}}
 
          
      @endif

  </div>
  <div class="container">

    
{{-- <div class="feature">
      <figure class="featured-item image-holder r-3-2 transition"></figure>
    </div>
    
    <div class="gallery-wrapper">
      <div class="gallery">
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2 active transition"></figure>
          </div>
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2 transition"></figure>
          </div>
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2 transition"></figure>
          </div>
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2 transition"></figure>
          </div>
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2"></figure>
          </div>
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2 transition"></figure>
          </div>
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2 transition"></figure>
          </div>
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2 transition"></figure>
          </div>
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2 transition"></figure>
          </div>
          <div class="item-wrapper">
            <figure class="gallery-item image-holder r-3-2 transition"></figure>
          </div>
      </div>
    </div>
    
    <div class="controls">
      <button class="move-btn left">&larr;</button>
      <button class="move-btn right">&rarr;</button>
    </div> --}}
    {{-- <hr height="10px"> --}}
  </div>
  <!-- =================== LAST SECTION START HERE ======================== -->
   <div class="container upload-photo-sec">
    <div class="row">
      <div class="col-md-12">
        <p>You Welcome to share your photos just click at the bottom down</p>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Post Title">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Select Album/Group</label>
          <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
            <option selected>City Hd</option>
            <option value="1">Beach Hd</option>
            <option value="2">Libarry Hd</option>
            <option value="3">Others</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Select Image</label>
          <input class="form-control" type="file" id="formFile">
        </div>
        <button type="button" class="btn btn-post">Post</button>
        <button type="button" class="btn btn-reset">Reset</button>
      </div>
    </div>
   </div>
    <!-- =========== FOOTER START HERE ========= -->
    <x-public-footer/>
    <!-- =========== FOOTER END HERE ========= -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
<script>
  var gallery = document.querySelector('.gallery');
var galleryItems = document.querySelectorAll('.gallery-item');
var numOfItems = gallery.children.length;
var itemWidth = 23; // percent: as set in css

var featured = document.querySelector('.featured-item');

var leftBtn = document.querySelector('.move-btn.left');
var rightBtn = document.querySelector('.move-btn.right');
var leftInterval;
var rightInterval;

var scrollRate = 0.2;
var left;

function selectItem(e) {
	if (e.target.classList.contains('active')) return;
	
	featured.style.backgroundImage = e.target.style.backgroundImage;
	
	for (var i = 0; i < galleryItems.length; i++) {
		if (galleryItems[i].classList.contains('active'))
			galleryItems[i].classList.remove('active');
	}
	
	e.target.classList.add('active');
}

function galleryWrapLeft() {
	var first = gallery.children[0];
	gallery.removeChild(first);
	gallery.style.left = -itemWidth + '%';
	gallery.appendChild(first);
	gallery.style.left = '0%';
}

function galleryWrapRight() {
	var last = gallery.children[gallery.children.length - 1];
	gallery.removeChild(last);
	gallery.insertBefore(last, gallery.children[0]);
	gallery.style.left = '-23%';
}

function moveLeft() {
	left = left || 0;

	leftInterval = setInterval(function() {
		gallery.style.left = left + '%';

		if (left > -itemWidth) {
			left -= scrollRate;
		} else {
			left = 0;
			galleryWrapLeft();
		}
	}, 1);
}

function moveRight() {
	//Make sure there is element to the leftd
	if (left > -itemWidth && left < 0) {
		left = left  - itemWidth;
		
		var last = gallery.children[gallery.children.length - 1];
		gallery.removeChild(last);
		gallery.style.left = left + '%';
		gallery.insertBefore(last, gallery.children[0]);	
	}
	
	left = left || 0;

	leftInterval = setInterval(function() {
		gallery.style.left = left + '%';

		if (left < 0) {
			left += scrollRate;
		} else {
			left = -itemWidth;
			galleryWrapRight();
		}
	}, 1);
}

function stopMovement() {
	clearInterval(leftInterval);
	clearInterval(rightInterval);
}

leftBtn.addEventListener('mouseenter', moveLeft);
leftBtn.addEventListener('mouseleave', stopMovement);
rightBtn.addEventListener('mouseenter', moveRight);
rightBtn.addEventListener('mouseleave', stopMovement);


//Start this baby up
(function init() {
	// var images = [
	// 	'https://wallpapers.com/images/featured/nature-2ygv7ssy2k0lxlzu.jpg',
	// 	'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/city.jpg',
	// 	'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/deer.jpg',
	// 	'https://cdn.pixabay.com/photo/2018/01/14/23/12/nature-3082832_1280.jpg',
	// 	'https://i.pinimg.com/474x/15/49/33/154933ae57f03430a9f254d33a3f9388.jpg',
	// 	'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/guy.jpg',
	// 	'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/landscape.jpg',
	// 	'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/lips.jpg',
	// 	'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/night.jpg',
	// 	'https://s3-us-west-2.amazonaws.com/forconcepting/800Wide50Quality/table.jpg'
	// ];
	
	//Set Initial Featured Image
	featured.style.backgroundImage = 'url(' + images[0] + ')';
	
	//Set Images for Gallery and Add Event Listeners
	for (var i = 0; i < galleryItems.length; i++) {
		galleryItems[i].style.backgroundImage = 'url(' + images[i] + ')';
		galleryItems[i].addEventListener('click', selectItem);
	}
})();
</script>