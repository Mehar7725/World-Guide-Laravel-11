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
     <!-- FONTAWESOME LINK  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  
{{-- =======Toastr CDN ======== --}}
<link rel="stylesheet" type="text/css" 
href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

     
    <title>World Guide | Blog Detail</title>
  </head>
  <body style="background-color: #EFF3F6;">
    
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
     <div class="container-fluid">
            <div class="row blog-detail-sec">
                <div class="col-md-12 p-0">
                  <section class="blogdetail-hero-section d-flex align-items-center justify-content-center text-white text-center">
                    <div class="overlay"></div>
                    <div class="content position-relative">
                      <img src="assets/public-site/img/avatar-bpfull.jpg" class="rounded-circle mb-3" alt="author" width="60" height="60">
                      <h1 class="display-5">The 10 most beautiful holiday destinations in the world</h1>
                      <div class="meta mt-3 d-flex justify-content-center flex-wrap gap-3">
                        <span class="badge bg-secondary">Blog</span>
                        <span><i class="fa-solid fa-user"></i> rakib2019</span>
                        <span><i class="fa-solid fa-message"></i> No Comments</span>
                        <span><i class="fa-solid fa-calendar"></i> 15/04/2019</span>
                      </div>
                    </div>
                  </section>
                  <!-- <div class="card bg-dark text-white">
                    <img src="assets/public-site/img/blog-detail.jpg" class="card-img" alt="...">
                    <div class="card-img-overlay">  
                      <h5 class="card-title">The 10 most beautiful holiday destinations in the world</h5>
                      <div class="card-body">
                        <button type="button" class="btn btn-secondary">Secondary</button>
                        <a href="#" class="card-link"><i class="fa-solid fa-user"></i> rakib2019</a>
                        <a href="#" class="card-link"><i class="fa-solid fa-message"></i>  No Comments</a>
                        <a href="#" class="card-link"><i class="fa-solid fa-calendar"></i> 15/04/2019</a>
                      </div>
                    </div>
                  </div> -->
                </div>
            </div>
     </div>
    <!-- =========== HEADER END HERE ========= -->
<div class="container blog-detail-mainsec">
  <div class="row">
    <div class="col-md-12">
<section class="photo-gallery">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-6 g-4 gallery-grid">
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/251/1200/800.webp">
          <img src="https://picsum.photos/id/251/480/320.webp" class="img-fluid">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/678/1200/800.webp">
          <img src="https://picsum.photos/id/678/480/320.webp" class="img-fluid">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/74/1200/800.webp">
          <img src="https://picsum.photos/id/74/480/320.webp" class="img-fluid">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/92/1200/800.webp">
          <img src="https://picsum.photos/id/92/480/320.webp" class="img-fluid">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/62/1200/800.webp">
          <img src="https://picsum.photos/id/62/480/320.webp" class="img-fluid">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/575/1200/800.webp">
          <img src="https://picsum.photos/id/575/480/320.webp" class="img-fluid">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/110/1200/800.webp">
          <img src="https://picsum.photos/id/110/480/320.webp" class="img-fluid">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/177/1200/800.webp">
          <img src="https://picsum.photos/id/177/480/320.webp" class="img-fluid">
        </a>
      </div>
      <div class="col">
        <a class="gallery-item" href="https://picsum.photos/id/197/1200/800.webp">
          <img src="https://picsum.photos/id/197/480/320.webp" class="img-fluid">
        </a>
      </div>
    </div>
  </div>
</section>


<div class="modal fade lightbox-modal" id="lightbox-modal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        <div class="lightbox-content">
          <!-- JS content here -->
        </div>
      </div>
    </div>
  </div>
</div>

    </div>
  </div>
  <!-- TEXT SECTION START HERE  -->
   <div class="row inner-blogdetail-sec mt-5">
<div class="col-md-12">
  <p>Are you looking for a very special holiday destination this year? We introduce you to the 12 most beautiful holiday destinations in the world! <br><br>
 Paradise islands, historic sites, mystical lakes, and bustling cities – the variety of beautiful holiday destinations on earth is almost inexhaustible. Nevertheless, we have searched for you and dug up some very special pearls for every taste. In the following, we want to introduce you to the 12 most beautiful holiday destinations worldwide!</p>
    <h1>1. Lake Taupo, New Zealand</h1>
    <center>
      <img src="assets/public-site/img/blog-detail1.jpg" alt="">
    </center>
    <p>If you are looking for beautiful natural landscapes on holiday, then you are in the right place in New Zealand. With seemingly endless beaches, idyllic waters, mighty mountain ranges and gently rolling hills, the country of Under Down Under is arguably one of the finest in the world – and one of the most desirable places in the island paradise is Lake Taupo, central to New Zealand’s North Island. During a stay here you can take hours of walks on the shore or through the nearby Tongariro National Park and enjoy the silence of the pristine landscape, the geysers in the “Lunar Craters” (Craters of the Moon) in the north of the lake and the Maori cave carvings on the Marvel at Mine Bay cliffs or feel small in the most positive sense of the thundering Huka waterfalls. All fans of Middle-earth can also reach in less than two hours from the small town of Matamata, the film and book fans have been known for some years under the name Hobbiton.</p>
    <h1>2. Santorini, Greece</h1>
    <center>
      <img src="assets/public-site/img/blog-detail2.jpg" alt="">
    </center>
    <p>Santorini, or Greek Santorini, looks like a picture book about Greece: white-blue, cubic houses in the Cycladic style, with innumerable small stairs, courtyards, and terraces, built up the slope and all overlooking the sparkling sea in the sun. Already when looking at the pictures comes here holiday feeling and if you watch the sunset on the horizon with wine and olives, then you have left the stress of everyday life long ago. Between the relaxing, balmy evenings, there is plenty to do: for example, you can visit the excavations in Old-Theka and Akrotiri, walk along the cliff path between the towns of Ia and Fira, or visit the many museums in the surrounding towns. For example, the Minerals and Fossils Museum in Perisa or the exhibition and cultural center “Santozeum” in Fira.</p>
</div>
   </div>
   <!--  -->
   <div class="row">
    <div class="col-md-6">
      <i class="fa-solid fa-tag"></i>
    </div>
    <div class="col-md-6">
        <div class="myDIV float-end"><i class="fa-solid fa-share-nodes"></i></div>
        <div class="hide float-end"> <i class="bi bi-facebook"></i>
            <i class="bi bi-twitter-x"></i>
            <i class="bi bi-pinterest"></i>
            <i class="bi bi-reddit"></i></div>
    </div>
    <hr>
    <div class="col-md-12 pre-btn">
        <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-left"></i> Previous</button>
        <button type="button" class="btn btn-outline-secondary"><i class="fa-solid fa-arrow-right"></i> Next</button>
    </div>
    <div class="container text-center py-5">
        <div class="d-flex justify-content-center align-items-center mb-2">
          <div class="dashed-line"></div>
          <div class="rating-circle">
            <div class="rating-number">0</div>
            <div class="text-muted">votes</div>
          </div>
          <div class="dashed-line"></div>
        </div>
        <p class="a-title">Article Rating</p>
        <div class="star-rating">
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
          <i class="fa-solid fa-star"></i>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-head d-flex justify-content-between">
            <label id="subscribe-label" class="subscribe-label">
              <i class="bi bi-envelope"></i>&nbsp; Subscribe <i class="fa-solid fa-caret-down"></i>
            </label>
            <a href="#"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </div>
          <form class="notify-form">
            <label for="notify">Notify of</label>
            <select id="notify" name="notify">
              <option value="follow-up">new follow-up comments</option>
              <option value="replies">new replies to my comments</option>
            </select>
            <input type="email" placeholder="Email" required>
            <button type="submit" class="submit-btn">➤</button>
          </form>
        </div>
      </div>
</div>
    <div class="row mt-5">
      <div class="col-md-9 mx-auto">
        <div class="d-flex mb-3 align-items-start">
          <div class="profile-img me-3"></div>
          <div class="flex-grow-1 comment-box">
            <textarea class="comment-input" rows="2" placeholder="Be the First to Comment!"></textarea>
            <div class="comment-toolbar mt-2">
              <i class="bi bi-type-bold"></i>
              <i class="bi bi-type-italic"></i>
              <i class="bi bi-type-underline"></i>
              <i class="bi bi-list-ul"></i>
              <i class="bi bi-code"></i>
              <i class="bi bi-link-45deg"></i>
              <i class="bi bi-image"></i>
            </div>
          </div>
        </div>
        <div class="mb-2 text-uppercase fw-bold small">0 Comments</div>
        <div class="comment-divider"></div>
      </div>
    </div>
</div>
    <!-- =========== FOOTER START HERE ========= -->
    <x-public-footer/>
    <!-- =========== FOOTER END HERE ========= -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <!-- Bootstrap Icons CDN -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
<script>
  document.getElementById('subscribe-label').addEventListener('click', function() {
    var notifyForm = document.querySelector('.notify-form');
    // Toggle the 'show' class on the form to show/hide it
    notifyForm.classList.toggle('show');
  });
</script>
<script>
  // Force a hover to see the effect
const share = document.querySelector('.share');

setTimeout(() => {
  share.classList.add("hover");
}, 1000);

setTimeout(() => {
  share.classList.remove("hover");
}, 3000);
</script>

<script>
const html = document.querySelector('html');
html.setAttribute('data-bs-theme', 'dark');

document.addEventListener('DOMContentLoaded', () => {
  // --- Create LightBox
  const galleryGrid = document.querySelector(".gallery-grid");
  const links = galleryGrid.querySelectorAll("a");
  const imgs = galleryGrid.querySelectorAll("img");
  const lightboxModal = document.getElementById("lightbox-modal");
  const bsModal = new bootstrap.Modal(lightboxModal);
  const modalBody = lightboxModal.querySelector(".lightbox-content");

  function createCaption (caption) {
    return `<div class="carousel-caption d-none d-md-block">
        <h4 class="m-0">${caption}</h4>
      </div>`;
  }

  function createIndicators (img) {
    let markup = "", i, len;

    const countSlides = links.length;
    const parentCol = img.closest('.col');
    const curIndex = [...parentCol.parentElement.children].indexOf(parentCol);

    for (i = 0, len = countSlides; i < len; i++) {
      markup += `
        <button type="button" data-bs-target="#lightboxCarousel"
          data-bs-slide-to="${i}"
          ${i === curIndex ? 'class="active" aria-current="true"' : ''}
          aria-label="Slide ${i + 1}">
        </button>`;
    }

    return markup;
  }

  function createSlides (img) {
    let markup = "";
    const currentImgSrc = img.closest('.gallery-item').getAttribute("href");

    for (const img of imgs) {
      const imgSrc = img.closest('.gallery-item').getAttribute("href");
      const imgAlt = img.getAttribute("alt");

      markup += `
        <div class="carousel-item${currentImgSrc === imgSrc ? " active" : ""}">
          <img class="d-block img-fluid w-100" src=${imgSrc} alt="${imgAlt}">
          ${imgAlt ? createCaption(imgAlt) : ""}
        </div>`;
    }

    return markup;
  }

  function createCarousel (img) {
    const markup = `
      <!-- Lightbox Carousel -->
      <div id="lightboxCarousel" class="carousel slide carousel-fade" data-bs-ride="true">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          ${createIndicators(img)}
        </div>
        <!-- Wrapper for Slides -->
        <div class="carousel-inner justify-content-center mx-auto">
          ${createSlides(img)}
        </div>
        <!-- Controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#lightboxCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      `;

    modalBody.innerHTML = markup;
  }

  for (const link of links) {
    link.addEventListener("click", function (e) {
      e.preventDefault();
      const currentImg = link.querySelector("img");
      const lightboxCarousel = document.getElementById("lightboxCarousel");

      if (lightboxCarousel) {
        const parentCol = link.closest('.col');
        const index = [...parentCol.parentElement.children].indexOf(parentCol);

        const bsCarousel = new bootstrap.Carousel(lightboxCarousel);
        bsCarousel.to(index);
      } else {
        createCarousel(currentImg);
      }

      bsModal.show();
    });
  }

  // --- Support Fullscreen
  const fsEnlarge = document.querySelector(".btn-fullscreen-enlarge");
  const fsExit = document.querySelector(".btn-fullscreen-exit");

  function enterFS () {
    lightboxModal.requestFullscreen().then({}).catch(err => {
      alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
    });
    fsEnlarge.classList.toggle("d-none");
    fsExit.classList.toggle("d-none");
  }

  function exitFS () {
    document.exitFullscreen();
    fsExit.classList.toggle("d-none");
    fsEnlarge.classList.toggle("d-none");
  }

  fsEnlarge.addEventListener("click", (e) => {
    e.preventDefault();
    enterFS();
  });

  fsExit.addEventListener("click", (e) => {
    e.preventDefault();
    exitFS();
  });
})

  </script>
  <!-- SOCIAL SHARE ICONS -->
