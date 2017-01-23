<!DOCTYPE html>

<html>

  <head>
  	<meta charset="utf-8">
  	<title>Apple Harvest Festival</title>
  	<link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
    <script src="js/main.js"></script>
  </head>

  <div id="container">

    <div id= "navigate">
        <nav>
        	<img src="images/apple_icon.png" alt="apple icon">
        	<!-- Owned/Made by Freepik from http://www.flaticon.com/free-icon/apple_119068#term=apple&page=1&position=20 -->
        	<a href="#anchor_about">About</a>
        	<a href="#anchor_transportation">Directions</a>
        	<a href="#anchor_image">Food &amp; Beverage</a>      
        	<a href="#anchor_map">Map</a>
        	<a href="#anchor_groups">Get Involved</a>
   		 </nav>
   	</div>

    <div id="banner">
        <img src="images/apple_banner.jpg" alt="apple banner image">
        <!--Owned/Taken by Haewon Hwang, 2014; Modified by Michelle Jang-->

        <div id="banner_text">
	        <h1>Apple Harvest Festival</h1>
	        	<p id="description">Ithaca's vegetarian-friendly festival celebrating food, fun, and apples!</p>
    	</div>
    </div>

    <a class="anchor" id="anchor_about"></a>

   	<div id="about">
   	<!--Text adapted from: http://www.downtownithaca.com/ithaca-events/Apple%20Harvest%20Festival%20Presented%20by%20Tompkins%20Trust -->
   		<br></br>
   		<h1>About the Festival</h1>
   			<p>Apple Harvest Festival is a great introduction to the rich farm and artist community of Ithaca.  First time visitors can witness a variety of wonderful local entertainment while also visiting the historical outdoor pedestrian shopping mall, The Ithaca Commons.</p>
   		<h1>Vegetarian-friendly</h1>
   			<p>Many vegetarian-friendly vendors will be selling unique apple varieties, hot apple cider donuts, kettle corn, local farm fresh baked goods and a multitude of around the world specialties. There will be a variety of vegan options around as well!</p>
   		<h1>Supporting Local Businesses</h1>
   			<p>Support Ithaca local businesses by coming down to the Apple Harvest Festival!</p>
   		    <ul>
                <li>Local farmers are on site selling everything from tasty apple beverages to local pumpkins and of course, apples, apples and more apples.</li>
                <li>Looking for quality goods, visit 60 different handcrafting artisans along Cayuga Street at the fall craft show which includes jewelry, ceramics, home decor, body care, specialty gifts, unique sculpture, clothing and so much more.</li>
                <li>Wineries and cideries have regional beverages available for tasting and purchase.</li>               
            </ul>
   		<p id="sponsor">Sponsored by:</p>
   		<img src="images/tompkins_logo.png" alt="Tompkins Trust logo">
   		<!-- Image taken from: https://www.tompkinstrust.com/img/ttc_logo_new.png -->
   	</div>

    <a class="anchor" id="anchor_transportation"></a>

   	<div id="transportation">
   		<h1>How to get to the Festival</h1>
   		<h2>(via eco-friendly transportation options)</h2>

   		<a href="https://www.zimride.com/cornell" target="_blank"><img src="images/car.png" alt="car_icon"></a>
   		<!-- Owned/Made by Freepik from http://www.flaticon.com/free-icon/car_171239#term=car&page=1&position=8 -->
   		<h2>Zimride</h2>
   		<p>Ride the sustainable ride-sharing service that matches Cornell-affliated drivers with ride requests.</p>

   		<a href="https://tcat.nextinsight.com/" target="_blank"><img src="images/bus.png" alt="bus_icon"></a>
   		<!-- Owned/Made by Freepik from http://www.flaticon.com/free-icon/bus_224468#term=bus&page=1&position=81 -->
   		<h2>TCAT</h2>
   		<p>Take Ithaca's public bus transportation service that has stops all around Cornell University.</p>

   		<a href="https://goo.gl/dkCVd8" target="_blank"><img src="images/map_location.png" alt="map_icon"></a>
   		<!-- Owned/Made by Madebyoliver from http://www.flaticon.com/free-icon/map-location_149061#term=map&page=1&position=22 -->
   		<h2>Walking</h2>
   		<p>Take a brisk stroll from Collegetown or the Cornell campus and take pictures of Ithaca's fall scenery.</p>
   	</div>

    <a class="anchor" id="anchor_image"></a>

    <div id=slideshow_container>

    <h1>Food</h1>
        <div id="image_container">
            <img id="apple_image" src="images/apple(2).jpg" alt="apple-related themes">
            <!--Owned/Taken by Haewon Hwang, 2014-->
        </div>
        
        <div id="button_container">
              <!-- Prev button -->
              <button onclick="increment(appleimg, 0)">Prev</button>
              <!-- Next Button -->
              <button onclick="increment(appleimg, 1)">Next</button>
        </div> <!-- end of button_container div -->
    </div>

    <a class="anchor" id="anchor_map"></a>   

    <div id="maps">
      <?php include 'includes/veganmap.php' ?>
    </div>

    <a class="anchor" id="anchor_groups"></a>
     <div id = "groups_chart">
        <h1>Local Outreach Groups</h1>
        <h2>(Looking to get Involved?)</h2>
        <?php include 'includes/groups.php' ?>
     </div>
        
  </div>

  <footer>
      <p>Team Green Red Apple Final Project</p>
  </footer>

  </body>

</html>