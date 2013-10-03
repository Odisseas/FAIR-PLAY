<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="description" title="FAIR PLAY KOMOTINI">
	<title>FAIR PLAY</title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="shortcut icon" href="img/favicon.ico">
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyPiCCvVw2iRecRse9qNolQiOfQuYhJGc&sensor=true&language=el">
    </script>
    <script type="text/javascript">

    	var map;
		var brooklyn = new google.maps.LatLng(41.107198, 25.418433);

		var MY_MAPTYPE_ID = 'custom_style';

	    function initialize() {
	        var featureOpts = [
	    	{
	    	  stylers: [
	    	    { hue: '#904904' },
	    	    { visibility: 'on' },
	    	    { gamma: 0.5 },
	    	    { weight: 0.5 }
	    	  ]
	    	},
	    	{
	    	  featureType: 'road.highway',
	    	  elementType: 'geometry',
	    	  stylers: [
	    	    { hue: '#904904' },
	    	    { saturation: 60 },
	    	    { lightness: -20 }
	    	  ]
	    	},
	    	{
	    	  elementType: 'labels',
	    	  stylers: [
	    	    { visibility: 'on' }
	    		]
	    	},
	    	{
	    	  featureType: 'water',
	    	  stylers: [
	    		{ color: '#252055' }
	      		]
	    	}
	  		];

	  		var mapOptions = {
	    		zoom: 12,
	   			center: brooklyn,
	    		mapTypeControlOptions: {
	      		mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
	    		},
	    		mapTypeId: MY_MAPTYPE_ID
	  			};

	  			map = new google.maps.Map(document.getElementById('map-canvas'),mapOptions);

	  			var marker = new google.maps.Marker({
	   				position: brooklyn,
	      			map: map,
	      			title: 'CLICK TO ZOOM'
	  			});

	  			google.maps.event.addListener(map, 'center_changed', function() {
				    // 3 seconds after the center of the map has changed, pan back to the
				    // marker.
				    window.setTimeout(function() {
				      map.panTo(marker.getPosition());
				    }, 1500);
				  });

				  google.maps.event.addListener(marker, 'click', function() {
				    map.setZoom(15);
				    map.setCenter(marker.getPosition());
				  });

	  		var styledMapOptions = {
	    		name: 'Custom Style'
	  		};

	  		var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

	  		map.mapTypes.set(MY_MAPTYPE_ID, customMapType);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
	    <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-38928336-3', 'fair-play.gr');
		  ga('send', 'pageview');

		</script>
</head>
<body>

	<header class='effect'>
		<div class="logo">
			<a href="index.html">
				<img src="./img/logo.png" alt="FAIR PLAY">
				<h1>FAIR PLAY</h1>
				<p>Ένας πολυχώρος για όλη την οικογένεια</p>
			</a>
		</div>

		<nav>
			<li><a href="index.html"><p>Αρχική</p></a></li>
			<li><a href="place.html"><p>Ο Χώρος</p></a></li>
			<li><a href="offers.html"><p>Προσφορές</p></a></li>
			<li class="active"><a href="#0"><p>Επικοινωνία</p></a></li>
		</nav>
	</header>

	<div id="content">
		<div class="wrapper">
			<div class="bg">
				<div class="image">
				<img src="./img/myclock.jpg" alt="">
				</div>
			</div>
			<div class="contact">
				<h1>Στοιχεία Επικοινωνίας:</h1>
				<p><span>Πάρτε μας τηλέφωνο:</span> 
				<p>Σταθερό: (+30)2531082915 </p>
				<p>What's UP: 6979 234 999 (Νίκος)</p> What's UP: 6988 016 399 (Ανδρέας)</p>
				<p><span>Στείλτε μας ΦΑΞ:</span> (+30)2531031952</p>
				<p><span>Ελάτε να πιούμε καφέ:</span> Τέρμα Σισμανόγλου (στον δρόμο προς Αλεξ/πολη κ έναντι Grand Μασούτης)</p>
			</div>

				<h3>Βρείτε μας στον χάρτη</h3>
				<div id="map-canvas"></div>			

			<div class="form">

				<!-- Form -->
		<form id="contact-form" action="?" method="POST">
			<h3>Επικοινωνήστε μαζί μας μέσω email</h3>
			<h4>Συμπληρώστε την φόρμα και θα επικοινωνήσουμε μαζί σας σε 24 ώρες!</h4>
			 <label for="name">Όνομα <span style="color:red">*</span>: </label>
        <input type="text" id="name" name="name" value="" placeholder="Όνομα Επώνυμο" required="required" autofocus="autofocus" />
        
        <label for="email">Διεύθυνση e-mail <span style="color:red">*</span>: </label>
        <input type="email" id="email" name="email" value="" placeholder="όνομα@example.com" required="required" />
        
        <label for="telephone">Τηλέφωνο <span style="color:red">*</span>: </label>
        <input type="tel" id="telephone" name="telephone" value="" />
        

		<label for="human" class="spam"><span style="color:red">***</span>Πόσο κάνει 2+2? (Anti-spam)<span style="color:red">***</span></label>
		<input type="human" name="human" id="human" placeholder="Απαντήστε σωστά για να στείλετε το μήνυμα σας">
        
        <label for="message">Μήνυμα <span style="color:red">*</span>:</label>
        <textarea id="message" name="message" placeholder="Το μήνυμα πρέπει να είναι τουλάχιστον 20 χαρακτήρες" required="required" data-minlength="20"></textarea>
        
        <span id="loading"></span>
        <input type="submit" value="Αποστολή" id="submit-button" name="submit" />
        <p id="req-field-desc"><span style="color:red">*</span> Απαιτούμενα Πεδία</p>

        	<section>
				<?php
			    $name = $_POST['name'];
			    $email = $_POST['email'];
			    $message = $_POST['message'];
			    $from = "From: $name";
			    $tel = $_POST['telephone']; 
			    $to = 'tsatsaridis_odisseas@yahoo.gr';
			    $subject = 'Hello';
			    $human = $_POST['human'];
			    $feedback = $_POST['feedback'];
						
			    $body = "Από: $name\n
			    E-Mail: $email\n
			    Τηλέφωνο: $tel\n
			    \n
			    \n
			    Message:\n
			    $message";
							
			    if ($_POST['submit'] && $human == '4') {				 
			        if (mail ($to, $subject, $body, $from)) {
				    echo '<section style="color:green;">Ευχαριστούμε για το μήνυμα σας!</section>';
					} else { 
						    echo '<p style="color:red;">Ούπς, κάτι κάναμε λάθος! Παρακαλούμε προσπαθήστε ξανά...</p>'; 
							} 
				    } else if ($_POST['submit'] && $human != '4') {
						echo '<p style="color:orange;">Απαντήστε στην ερώτηση για να στείλετε το μήνυμα!</p>';
					    }
						?>
			</section>

			
		</form>	<!-- Form -->
		
		</div>
	</div>
			</div>

	<footer>
		<div class="info_footer">
			<h1>Επισκεφθείτε τις σελίδες μας στο Facebook:</h1>
			<section>
				<h3>FAIR PLAY GYM:</h3>
				<a class="facebook" href="https://www.facebook.com/GymFair" target="_blank"><img src="./img/facebook.png" alt=""></a>
			</section>

			<section>
				<h3>FAIR PLAY PAINTBALL:</h3>
				<a class="facebook" href="https://www.facebook.com/pages/PAINTBALL-KOMOTHNH%CE%A3/303522343001280" target="_blank"><img src="./img/facebook.png" alt=""></a>
			</section>
		</div>
		<div class="info_classic">
			&copy 2013 FAIR PLAY & Co.
				<p>
				Δημιουργία του site με πολύ ♥ από : <a href="https://www.facebook.com/loukavinio" target="_blank">Alexandros Tsatsaridis</a> & <a href="https://www.facebook.com/tsatsaridis.odisseas" target="_blank">Odisseas Tsatsaridis</a>
				</p>
		</div>
	</footer>

</body>
</html>