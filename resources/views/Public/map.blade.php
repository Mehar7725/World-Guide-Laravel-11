<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>World Map with jVectorMap</title>

    <!-- jVectorMap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/jvectormap@2.0.5/jquery-jvectormap.css"
    />

         <!-- Bootstrap CSS -->
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

         <script src="https://kit.fontawesome.com/5aff4a9523.js" crossorigin="anonymous"></script>
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
    <style>
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
      }
      #map {
        width: 100%; /* Make width responsive */
        height: 500px; /* Fixed height for better visibility */
        margin: 20px auto;
        border: 1px solid #ccc;
        background-color: #a4bac4; /* Default background color */
      }
    </style>
  </head>
  <body>
    <!-- Map Container -->
    <div id="map"></div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- jVectorMap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jvectormap@2.0.5/jquery-jvectormap.min.js"></script>

    <!-- jVectorMap World Map -->
    <script src="https://cdn.jsdelivr.net/npm/jvectormap@2.0.5/jquery-jvectormap-world-mill.js"></script>

    <script>
      $(document).ready(function () {
        // Initialize the vector map
        $("#map").vectorMap({
          map: "world_mill", // Specify the world map
          backgroundColor: "#a4bac4",
          series: {
            regions: [
              {
                values: {
                  US: 100, // Example value for the US
                  BR: 200, // Example value for Brazil
                },
                attribute: "fill",
              },
            ],
          },
          onRegionOver: function (event, code) {
            console.log("Hovered over region: " + code);
          },
          onRegionClick: function (event, code) {
            alert("Clicked on region: " + code);
          },
        });
      });
    </script>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
