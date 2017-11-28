<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coldplay</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">     
  <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/plugins/vegas/dist/vegas.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .container-1 {
      padding: 80px 120px;
	  opacity: 0.8;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      -webkit-filter: grayscale(90%);
      filter: grayscale(90%); /* make all photos black and white */ 
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {  
      background-image: url("bg15.jpg");
	  background-position: center;
	  background-repeat:no-repeat;
	  background-size:cover;
	  filter: grayscale(90%);
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;color: #fff;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .bg-2 {
      background-image: url("quotes.gif");
	  background-position: center;
	  background-repeat:no-repeat;
	  background-size:cover;
  }
  .bg-2 h3 {color: #fff;}
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
	  opacity: 0.9;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  
  #login-dp {
    min-width: 350px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:#2d2d30;
  }
  #login-dp .help-block {
    font-size:11px  
  }
  #login-dp .bottom {
    background-color:#2d2d30;
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
	opacity: 0.9;
  }
  #login-dp .form-group {
    margin-bottom: 10px;
  }
  
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage"><img src="cpLogo8.gif" width="150" height="25"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">ABOUT</a></li>
        <li><a href="#tour">TOUR</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li><a href="#media">MEDIA</a></li>
<!-- Login -->	
		<li class="dropdown">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>LOGIN</b><span class="caret"></span></a>
			<ul id="login-dp" class="dropdown-menu">
			  <li>
				<div class = "col-md-12">
					<b><em>Listen to the voice of Soul</em></b>
					<form class="form" role="form" method="post" action="login" accept-charset="UTF-8"id="login-nav">
						<div class="form-group">
							<label class="sr-only" for="exampleInputEmail2">Email address</label>
							<input type="email" class="form-control"id="exampleInputEmail2" placeholder="Email address" required>
						</div>
						<div class="form-group">
							<label class="sr-only" for="exampleInputPassword2">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                            <div class="help-block text-right"><a href="">Forget the password?</a></div>
						</div>	
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-block">Sign in</button>
						</div>
						<div class="checkbox">
							<label><input type="checkbox">Keep me logged-in</label>
						</div>
					</form>
				</div>
				<div class="bottom text-center">
					New here?<a href="#"><b> Join Us</b></a>
				</div>
			  </li>
			</ul>
		</li>
<!-- Login -->	
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="cpConcert2.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>London</h3>
          <p>Concert organised by Prince Harry in Kensington Palaca Gardens.</p> 
        </div>      
      </div>

      <div class="item">
        <img src="cpBand4.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Mumbai</h3>
          <p>Global Citizen Festival, an annual music festival.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="cpBand.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Viva La Vida or Death And All His Friends</h3>
          <p>A desire to move from black and white into colour.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>COLDPLAY</h3>
  <p><em>The birth of a Sensation</em></p>
  <p>The members of Coldplay met and became friends while living in the same dormitory at the University College of London in the mid-1990s. 
  They formed a band, originally naming themselves Starfish. When friends of theirs who were playing in a band called Coldplay no longer wanted to use the name, 
  Starfish officially became Coldplay. The name was taken from a book of poetry called Child's Reflections, Cold Play. 
  The group comprises bassist Guy Berryman, guitarist Buckland, drummer Will Champion, and lead singer, guitarist, and pianist Martin. 
  Martin had wanted to be a musician since the age of eleven. He explained to Katherine Turman of Mother Jones that when he began attending UCL, 
  he was more interested in finding bandmates than in studying his major, ancient history. 
  Asked by Turman whether he started his education thinking he would become an ancient history teacher, 
  Martin jokingly responded, "That was my real dream, but then Coldplay came about!".</p>
  
<p><em>"Our sound will change, but all we care about is melody and emotion."</em></p>

  <br>
  <div class="row">
    <div class="col-sm-3">
      <p class="text-center"><strong>Chris Martin</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="chris.gif" class="img-circle person" alt="Chris Martin" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Lead Vocalist, musician, songwriter and record producer</p>
        <p>Formed The Rock Band Coldplay in 1998</p>
        <p>Name as The World's Sexiest Vegetarian - by PETA</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Jonny Buckland</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="jonny.gif" class="img-circle person" alt="Jonny Buckland" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Lead Guitarist and Musician</p>
        <p>Noted for his sparse arrangements and use of slide</p>
        <p>Stylistic chimming inspired by U2</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Guy Berryman</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="berryman.gif" class="img-circle person" alt="Guy Berryman" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Bassist and Multi-instrumentalist</p>
        <p>Left-handed, but plays the bass right-handed</p>
        <p>Took candid pictures of the band</p>
      </div>
    </div>
	<div class="col-sm-3">
      <p class="text-center"><strong>Will Champion</strong></p><br>
      <a href="#demo4" data-toggle="collapse">
        <img src="will.gif" class="img-circle person" alt="Will Champion" width="255" height="255">
      </a>
      <div id="demo4" class="collapse">
        <p>Drummer and Multi-instrumentalist</p>
        <p>Learned piano and violin when he was 8</p>
        <p>Album - Parachutes was dedicated to his mother</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container-1">
    <h3 class="text-center">TOUR DATES</h3>
    <p class="text-center">I call it magic when I'm with you.<br> Remember to book your tickets!</p>
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
      <li class="list-group-item">November <span class="badge">3</span></li> 
    </ul>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="paris.jpg" alt="Paris" width="400" height="300">
          <p><strong>Paris</strong></p>
          <p>Friday 27 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="newyork.jpg" alt="New York" width="400" height="300">
          <p><strong>New York</strong></p>
          <p>Saturday 28 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="sanfran.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>San Francisco</strong></p>
          <p>Sunday 29 November 2015</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
        </div>
      </div>	  
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Chicago, US</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">And you're with me wherever I go</h3>  
  </div>
</div>

<!--//music-section-->
<div id="media" class="bg-2">
<div class="container-1">
	<section id="music" class="music-section section text-center">
        <div class="container">
            <h3 class="text-center">Song by Coldplay</h3>
            <div class="sc-block ml-auto mr-auto">
                <div class="item">
                    <iframe width="100%" height="166" scrolling="no" frameborder="no" 
					src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/148399353&amp;color=0E0E10&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                </div><!--//item-->

            </div><!--//sc-block-->
        </div><!--//container-->
	</section><!--//music-section-->
</div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br>
  <p><em>Look at the stars, look how they shine for you</em></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>


</body>
</html>
