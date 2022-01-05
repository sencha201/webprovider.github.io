<?php


include"dbconfig.php";

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Registration</title>
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
    <script src="https://kit.fontawesome.com/8dea007a61.js" crossorigin="anonymous"></script>
    
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
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
                <h2 class="mb-0 site-logo"><a href="index.php">Utility<strong class="font-weight-bold"> Service Provider</strong> </a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      
                      <li><a href="UserLogin.php"><i class="fas fa-sign-in-alt"></i> User Login</a></li>
                      
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
  
    <div style="height: 115px;"></div>

    <div class="unit-5 overlay" style="background-image: url('images/hero_1.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">User Registration</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep"></span> <span>User Registration</span></p>
      </div>
    </div>

    

    
    <div class="site-section bg-dark">
    
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8 mb-5">
          
            
            <form  enctype="multipart/form-data" method="post" class="p-5 bg-dark">

              <div class="row form-group">
                <div class="col-md-12">
                  <h5><label class="font-weight-bold" for="email"><i class="fas fa-user"></i> Name</label></h5>
                  <input type="text" id="email" name="first" class="form-control" placeholder="Please enter your full Name" required >
                </div>
              </div>
			        <div class="row form-group">
                <div class="col-md-12">
                  <h5><label class="font-weight-bold" for="email"><i class="fas fa-phone-square-alt"></i> Mobile</label></h5>
                  <input type="text" id="email" name="mobile" class="form-control" placeholder="Please enter Mobile Number" size='10' required>
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <h5><label class="font-weight-bold" for="email"><i class="fas fa-envelope"></i> Email</label></h5>
                  <input type="email" id="email" name="email" class="form-control" placeholder="Please enter your valid Email Address" required>
                </div>
              </div>
			  
			    <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <h5><label class="font-weight-bold" for="fullname"><i class="fas fa-key"></i> Password</label></h5>
                  <input type="password" id="fullname" name="password" class="form-control" placeholder="PLease enter your Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                </div>
              </div>
	
              <div class="row form-group">
                <div class="col-md-12">
                  <h5><label class="font-weight-bold" for="email"><i class="fas fa-image"></i> Upload Your Picture</label></h5>
                  <input type="file"  name="picture" class="form-control"  accept=".png,.gif,.jpg" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" name="submit" value="Register" class="btn btn-primary pill px-4 py-2">
                  <a href="UserLogin.php" class="btn btn-primary pill px-4 py-2">Already have an account ? Login</a>
                </div>
              </div>
              

            </form> 
            
          </div>


          

          <?php
          error_reporting(0);
          ?>


          <?php

          
         

          if(isset($_POST['submit']))
          {
            
            $first =  $_POST['first'];
            $mobile = $_POST['mobile'];
            $email =  $_POST['email'];
            $password = $_POST['password'];
            $rname = $_POST['picture'];


            extract($_REQUEST);

           
            $error=$_FILES["id_picture"]["error"];
            $name=$_FILES["id_picture"]["name"];
            $type=$_FILES["id_picture"]["type"];
            $size=$_FILES["id_picture"]["size"];
            $tmp_name=$_FILES["id_picture"]["tmp_name"];
                    


            $rerror=$_FILES["picture"]["error"];
            $rname=$_FILES["picture"]["name"];
            $rtype=$_FILES["picture"]["type"];
            $rsize=$_FILES["picture"]["size"];
            $rtmp_name=$_FILES["picture"]["tmp_name"];

            $query="INSERT INTO `user_registration`
	          (`name`, `mobile`, `email`, `password`, `picture`) 
	          VALUES ('$first','$mobile','$email','$password','$rname')";

	          if(move_uploaded_file($rtmp_name,"images/$rname"))
	          {
		          
	              $n=iud($query);
	              if($n==1)
	              {
		              echo"<script>alert('User Registration successfull');
		              window.location='UserLogin.php';
		              </script>";
	              }
	
	          }
	          else
	          {
		          echo"Something Wrong";
	          }
	
            


            //$id_picture = $_FILES["id_picture"]["name"];
            //$tempname = $_FILES["id_picture"]["tmp_name"];    
            //$folder = "saved_image/".$id_picture;

            //$picture = $_FILES["picture"]["name"];
            //$tempname1 = $_FILES["picture"]["tmp_name"];    
            //$folder1 = "saved_image/".$picture;



            //$query="INSERT INTO registration (fullname,mobile,email,password,city,address,experience,id_proof,id_picture,work_type,picture)
            //VALUES ('$fullname','$mobile','$email','$password','$city','$address','$experience','$id_proof','$id_picture','$work_type','$picture')";

            //if(mysqli_query($conn, $query))
            //{
              //if (move_uploaded_file($tempname, $folder))  
              //{
                //if (move_uploaded_file($tempname1, $folder1))
                //{
                //echo"<script>alert('Registration successfully');
                //window.location='login.php';
                //</script>";
                //} 
              //}
            //}
            //else
            //{
            //  echo "ERROR: Hush! Sorry $query. " 
                   // . mysqli_error($conn);
              //echo"<script>alert('Registration failed');
                   // </script>";
            //}   





          }	  
          ?>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white" style="width:425px">
              <img src="images/b.jpg"  >
            </div>
            
          
            <div class="p-4 mb-3 bg-white" style="width:425px;height:520px">
              <img src="images/a.jpg" style="width:400px; ">
			      </div>
          </div>
        </div>
      </div>
    </div>
    
   <?php include"footer.php";?>
  
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
    document.addEventListener('DOMContentLoaded', function() 
    {

      var mediaElements = document.querySelectorAll('video, audio'), total = mediaElements.length;

      for (var i = 0; i < total; i++) 
      {
        new MediaElementPlayer(mediaElements[i], 
        {
          pluginPath: 'https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/',
          shimScriptAccess: 'always',
          success: function () 
          {
            var target = document.body.querySelectorAll('.player'), targetTotal = target.length;
            for (var j = 0; j < targetTotal; j++)
            {
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

    function initAutocomplete() 
    {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
      autocomplete = new google.maps.places.Autocomplete(
     /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
         {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() 
    {
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
        async defer>
    </script>

  </body>
</html>