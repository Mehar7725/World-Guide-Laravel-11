<nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">
          <img src="assets/public-site/img/logo1.png" width="70%">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/blog">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about-us">About Us</a>
            </li><li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>

            
         
         
          @if (!Auth::user())

        </li><li class="nav-item">
          <a class="nav-link" href="/signup-user"><i class="fa-solid fa-user"></i> Sign In</a>
        </li>
      </ul> 

          @else

        </li><li class="nav-item">
          <a class="nav-link" href="/logout"><i class="fa-solid fa-user"></i> Log Out</a>
        </li>
      </ul> 
          <form class="d-flex">
            <!-- <a class="nav-link" href="listing.html"><i class="fa-solid fa-plus"></i> Add Listing</a> -->
              <button class="btn btn-outline-light" type="submit"><a href="/add-listing"><i class="fa-solid fa-plus"></i> Add Listing</a></button>
          </form>
          @endif
          
       
        </div>
      </div>
    </nav>