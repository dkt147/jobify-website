
<?php
include ("DB_connection.php");
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
	  <link rel="stylesheet" type="text/css"
          href="fonts/neo fobia/stylefont.css"/>
    
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
                <h2 class="mb-0 site-logo"><a href="index.php" style="font-family:'Neo Fobia Bold';font-weight:normal;font-size:30px" >JOBYFIED</a></h2>
				  <p style="font-size: 14.6px; color: black;">Simplyfing Job Search</p>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li><a href="postjob.php"><span class="bg-primary text-white py-3 px-4 rounded"><span class="icon-plus mr-3"></span>Post New Job</span></a></li>
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

    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Post a Job</h2>
        <p class="mb-0 unit-6"><a href="index.html">Home</a> <span class="sep">/</span> <span>Post a Job</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="#" class="p-5 bg-white" method="post">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="title">Job Title</label>
                  <input type="text" id="title" class="form-control" name="title" placeholder="eg. Full Stack Frontend" required>
                </div>
              </div>

              <div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="company">Company</label>
                  <input type="text" id="company" class="form-control" name="company" placeholder="eg. Facebook, Inc." required>
                </div>
              </div>

				<div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Category</label>
					<select name="category" id="category" class="form-control" required>
						<option>--Select Category--</option>
                        <option value="accounting/finanace">Accounting/Finanace</option>
                         <option value="engineering">Engineering</option>
                         <option value="healthcare">Healthcare</option>
                         <option value="automotive">Automotive Jobs</option>
						<option value="IT and networking">IT &amp; Networking</option>
						<option value="food services">Restaurant / Food Service</option>
						<option value="telecommunications">Telecommunications</option>
						<option value="other jobs">Other Jobs</option>
                    </select>
                </div>
              </div>

              <div class="row form-group mb-5">
              <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Job Type</label>
				 </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-1">
                    <input type="radio" id="option-job-type-1" name="jobtype" value="Full Time"> Full Time
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-2">
                    <input type="radio" id="option-job-type-2" name="jobtype" value="Part Time"> Part Time
                  </label>
                </div>

                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="option-job-type-4">
                    <input type="radio" id="option-job-type-4" name="jobtype" value="Internship"> Internship
                  </label>
                </div>

              </div>
				
				<div class="row form-group mb-5">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Location</label>
					<select name="location" id="location" class="form-control" required>
                        <option value="pakistan">Pakistan</option>
                         <option value="qatar">Qatar</option>
                    </select>
                </div>
              </div>

              <div class="row form-group">
                 <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold">Job Description</label>
				  </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="description" class="form-control" cols="30" rows="5" required></textarea>
                </div>
              </div>
				
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="btnsubmit" value="Post a Job" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>
			</div>
        </div>
      </div>
    </div>

<?php

if(isset($_POST['btnsubmit']))
{

$jt = $_POST['title'];
$jc = $_POST['company'];
$category = $_POST['category'];
$jtype = $_POST['jobtype'];
$location = $_POST['location'];
$description = $_POST['description'];

$sql = "Insert into jobs(title, company, category, type, location, description) values('$jt', '$jc', '$category', '$jtype',        '$location','$description')";

	
if($con->query($sql)==true)
{

	echo "<script>alert('Job Posted');</script>";
}
	else{ echo "<script>alert('error');</script>";}


}

?>
    


    
    <footer class="site-footer">
      <div class="container">
         <div class="col-md-12 text-center">
                <p><a href="index.php" style="font-family:'Neo Fobia Bold';font-weight:normal;font-size:40px; color: #FFFFFF;" >JOBYFIED</a></p>
			    <p style="font-size: 16px; color: #FFFFFF;">Simplyfing Job Search</p>
              </div>
		  <br>
        <div class="text-center">
          <div class="col-md-12">
            <p style="color: white;">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All Rights Reserved | This Website Made By <a href="http://www.digitadm.com/" style="color: green;">Digita Digital Marketing.</a>
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
                var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

                for (var i = 0; i < total; i++) {
                    new MediaElementPlayer(mediaElements[i], {
                        pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
                        shimScriptAccess: 'always',
                        success: function () {
                            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
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
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

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

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&libraries=places&callback=initAutocomplete"
        async defer></script>

  </body>
</html>