<?php
include("DB_connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Jobyfied</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700|Work+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">



  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="fonts/neo fobia/stylefont.css" />

  <style>
    @media only screen and (max-width: 768px) {

      /* For mobile phones: */
      .abc {
        font-size: 12px;
      }
    }

    .bg-primary {
      background-color: rgb(130, 32, 117);
    }
  </style>

</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap js-site-navbar bg-white">

      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.php" style="font-family:'Neo Fobia Bold';font-weight:normal;font-size:25px"><img src="images/logo1.png" width="150px" ;height="80px"></a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="postjob.php"><span class=" text-white py-3 px-4 rounded" style="background-color: rgb(130, 32, 117);width:150px">See Land For Sale</span></a></li>
                      <li><a href="postjob.php"><span class=" text-white py-3 px-4 rounded" style="background-color: rgb(130, 32, 117);">How To Buy Land</span></a></li>
                      <li><a href="postjob.php"><span class=" text-white py-3 px-4 rounded" style="background-color: rgb(130, 32, 117);">About Us</span></a></li>
                      <li><a href="postjob.php"><span class=" text-white py-3 px-4 rounded" style="background-color: rgb(130, 32, 117);">Testimonials</span></a></li>

                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="height: 113px;"></div>

    <div class="site-blocks-cover overlay" style="background-image: url('images/bg1.jpg');" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12" data-aos="fade">
            <h1>Search Land</h1>
            <form action="#" method="post">
              <div class="row mb-3">
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-9 mb-3 mb-md-0">
                      <select name="category" id="category" class="form-control" required>
                        <option>--All--</option>
                        <option value="accounting/finanace">Land For Sale In Apache Country Arizona</option>
                        <option value="engineering">Land For Sale In Apache Country Arizona</option>
                        <option value="healthcare">Land For Sale In Apache Country Arizona</option>
                        <option value="automotive">Land For Sale In Apache Country Arizona</option>
                        <option value="IT and networking">Land For Sale In Apache Country Arizona</option>
                        <option value="food services">Land For Sale In Apache Country Arizona</option>
                        <option value="telecommunications">Land For Sale In Apache Country Arizona</option>
                        <option value="other jobs">Land For Sale In Apache Country Arizona</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <input type="submit" class="btn btn-search  btn-block" value="Search" name="btn" style="background-color: rgb(130, 32, 117);color:white">
                    </div>
                  </div>
                </div>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Hot Places</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="100">
            <a href="accounts.php" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>New York</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="200">
            <a href="automotive.php" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>San Francisco</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="300">
            <a href="engineering.php" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Washinton DC</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="400">
            <a href="telecomunication.php" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Los Angeles</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="500">
            <a href="healthcare.php" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Dallas</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="600">
            <a href="IT_networking.php" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Sandiago</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="800">
            <a href="hotelservices.php" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Houston</h2>
            </a>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3 mb-3" data-aos="fade-up" data-aos-delay="700">
            <a href="others_jobs.php" class="h-100 feature-item">
              <span class="d-block icon flaticon-worker mb-3 text-primary"></span>
              <h2>Chicago</h2>
            </a>
          </div>
        </div>

      </div>
    </div>


    <div class="site-section bg-light">
      <div class="container">
        <div class="col-md-12 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <h2 class="mb-5 h3">Recent On Sale!</h2>
          <div class="property-list row">
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-power-paved-road-in-port-charlotte-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/11/IMG_6142-480x360.jpg" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,499</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power &amp; Paved Road! In Port Charlotte, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-porpoisedr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura3Polygon-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$3,799</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-34-acres-chaplindr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura-PolygonA-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,999</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.34 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-power-paved-road-in-port-charlotte-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/11/IMG_6142-480x360.jpg" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,499</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power &amp; Paved Road! In Port Charlotte, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-porpoisedr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura3Polygon-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$3,799</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-34-acres-chaplindr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura-PolygonA-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,999</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.34 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-power-paved-road-in-port-charlotte-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/11/IMG_6142-480x360.jpg" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,499</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power &amp; Paved Road! In Port Charlotte, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-porpoisedr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura3Polygon-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$3,799</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-34-acres-chaplindr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura-PolygonA-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,999</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.34 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-power-paved-road-in-port-charlotte-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/11/IMG_6142-480x360.jpg" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,499</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power &amp; Paved Road! In Port Charlotte, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-porpoisedr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura3Polygon-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$3,799</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-34-acres-chaplindr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura-PolygonA-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,999</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.34 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-power-paved-road-in-port-charlotte-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/11/IMG_6142-480x360.jpg" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,499</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power &amp; Paved Road! In Port Charlotte, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-23-acres-porpoisedr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura3Polygon-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$3,799</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.23 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>
            <div class="col-sm-6 col-md-4" style="width: 400px;">
              <a href="https://www.compasslandusa.com/property/0-34-acres-chaplindr-in-punta-gorda-charlotte-county-fl/">
                <div class="property-image">
                  <span class="property-type-heading">Land For Sale</span>
                  <img src="https://cdn.carrot.com/uploads/sites/42930/2020/08/JBonaventura-PolygonA-480x360.png" alt="Property Image" loading="lazy" style="width: 300px;">
                  <ul class="property-details list-inline">
                    <li class="lead"><b>$4,999</b></li>
                  </ul>
                </div>
                <h2 class="property-title card-title">0.34 Acres – With Power! In Punta Gorda, Charlotte County FL</h2>
              </a>
            </div>


          </div>

        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="col-md-12 text-center">
          <p><a href="index.php" style="font-family:'Neo Fobia Bold';font-weight:normal;font-size:40px; color: #FFFFFF;">REAL STATE</a></p>
          <p style="font-size: 16px; color: #FFFFFF;">Simplyfing Land Search</p>
        </div>
        <br>
        <div class="text-center">
          <div class="col-md-12">
            <p style="color: white;">
              Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script> All Rights Reserved | This Website Made By <a href="http://www.digitadm.com/" style="color: green;">Digita Digital Marketing.</a>
            </p>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>


  <script src="js/mediaelement-and-player.min.js"></script>

  <script src="js/main.js"></script>


  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var mediaElements = document.querySelectorAll('video, audio'),
        total = mediaElements.length;

      for (var i = 0; i < total; i++) {
        new MediaElementPlayer(mediaElements[i], {
          pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
          shimScriptAccess: 'always',
          success: function() {
            var target = document.body.querySelectorAll('.player'),
              targetTotal = target.length;
            for (var j = 0; j < targetTotal; j++) {
              target[j].style.visibility = 'visible';
            }
          }
        });
      }
    });
  </script>


  <script>
    // This example displays an address form, using the autocomplete feature
    // of the Google Places API to help users fill in the information.

    // This example requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;
    var componentForm = {
      street_number: 'short_name',
      route: 'long_name',
      locality: 'long_name',
      administrative_area_level_1: 'short_name',
      country: 'long_name',
      postal_code: 'short_name'
    };

    function initAutocomplete() {
      // Create the autocomplete object, restricting the search to geographical
      // location types.
      autocomplete = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */
        (document.getElementById('autocomplete')), {
          types: ['geocode']
        });

      // When the user selects an address from the dropdown, populate the address
      // fields in the form.
      autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
      // Get the place details from the autocomplete object.
      var place = autocomplete.getPlace();

      for (var component in componentForm) {
        document.getElementById(component).value = '';
        document.getElementById(component).disabled = false;
      }

      // Get each component of the address from the place details
      // and fill the corresponding field on the form.
      for (var i = 0; i < place.address_components.length; i++) {
        var addressType = place.address_components[i].types[0];
        if (componentForm[addressType]) {
          var val = place.address_components[i][componentForm[addressType]];
          document.getElementById(addressType).value = val;
        }
      }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
          var geolocation = {
            lat: position.coords.latitude,
            lng: position.coords.longitude
          };
          var circle = new google.maps.Circle({
            center: geolocation,
            radius: position.coords.accuracy
          });
          autocomplete.setBounds(circle.getBounds());
        });
      }
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete" async defer></script>

</body>

</html>