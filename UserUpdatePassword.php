<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Update Password</title>
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
    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            text-decoration:none;
            font-family:poppins;
        }
        form{
            position: absolute;
            top:50%;
            left:50%;
            transform:translate(-50%, -50%);
            background-color:#f0f0f0;
            width:350px;
            border-radius:5px;
            padding:20px 25px 30px 25px;
        }
        form h3{
            margin-bottom:15px ;
            color:#30475e;
        }
        form input{
            width:100%;
            margin: bottom 20px;
            background-color:transparent;
            border:none;
            border-bottom:2px solid #30475e;
            border-radius:0;
            padding:5px 0;
            font-weight:550;
            font-size:14px;
            outline:none;
        }
        form button{
            font-weight:550;
            font-style:15px;
            color:white;
            background-color:#30475e;
            padding:4px 10px;
            border:none;
            outline:none;
        }



    </style>

    
  </head>
  <body>

  <?php


  require("dbconfig.php");
  if(isset($_GET['email']) && isset($_GET['reset_token']))
  {
      $s1=$_GET['email'];
      $s2=$_GET['reset_token'];
     
     $senchalawaysop=tokenmeow($s1,$s2);
     //print_r($senchalawaysop[1]);
     
    //   $result=mysqli_query($con,$query);
      if($senchalawaysop[0])
      {
        //print_r("yahuuuu");  
      
          //if($senchalawaysop[1]==1)
          //{
              echo "
              <form method='POST'>
              <h3>Create New Password</h3>
              <input type='password' placeholder='Please enter new password' name='Password' required>
              <br>
              <button type='submit' name='UpdatePassword'>RESET</button>
              <input type='hidden' name='email' value='$_GET[email]'
              </form>
              
              ";
              

          //}
        

      }
      else
      {
          /*
        echo"
        <script>
        alert('Invalid or Expired link');
        window.location.href='UserForgotPassword.php';
        </script>";  
        */   
      }
  }

  ?>

  <?php

  if(isset($_POST['UpdatePassword']))
  {
    //$update="UPDATE `user_registration` SET `password`='$pass',`resettoken`=NULL,`resettokenexpire`=NULL WHERE `email`='$_POST[email]'";
    //if(mysqli_query($con,$update))
    //{
        echo"
        <script>
        alert('Password Reset Successfully');
        window.location.href='UserLogin.php';
        </script>";     

    //}
    /*
    else{
        echo"
        <script>
        alert('Server Down ! Try again later');
        window.location.href='UserForgotPassword.php';
        </script>";     
    }
    */
  }



  ?>




    
  
  
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