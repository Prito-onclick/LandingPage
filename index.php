<!DOCTYPE html>
<html>
<head>
  <title>Mock-Up</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" type="text/css" href="styles.css">
  <!-- <link rel="stylesheet" type="text/css" href="responsive.css"> -->

</head>
<body>
	<!-- <div class="head">
		<div class="nav">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-2 col-sm-12 col-xs-12">
						<div class="logo">
							<img src="image/HONOR_logo.png">
						</div>
						<div class="nav-mobile">
					        <a id="nav-toggle" href="#!"><span></span></a>
					    </div>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<ul class="middle">
							<li>
								<a href="#">HONOR 9X</a>
							</li>
							<li>
								<a href="#">HONOR MagicWatch 2</a>
							</li>
							<li>
								<a href="#">About</a>
							</li>
							<li>
								<a href="#">Products</a>
							</li>
							<li>
								<a href="#">News</a>
							</li>
							<li>
								<a href="#">Photos</a>
							</li>
							<li>
								<a href="#">Support</a>
							</li>
						</ul>
					</div>
					<div class="col-md-2 col-sm-12 col-xs-12">
						<ul class="end">
							<li>
								<a href="#">Global</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-user"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<section class="navigation">
		  <div class="nav-container">
			    <div class="brand">
			      	<img src="image/HONOR_logo.png">
			    </div>
			    <nav>
			      <div class="nav-mobile">
			        <a id="nav-toggle" href="#!"><span></span></a>
			      </div>
			      <ul class="nav-list">
			        <!-- Setting the links to #! will ensure that no action takes place on click. -->
			        <li><a href="#!">HONOR 9X</a></li>
			        <li><a href="#!">HONOR MagicWatch 2</a></li>
			        <li><a href="#!">About</a>
			          <!-- <ul class="nav-dropdown">
			            <li><a href="#!">Web Design</a></li>
			            <li><a href="#!">Web Development</a></li>
			            <li><a href="#!">Graphic Design</a></li>
			          </ul> -->
			        </li>
			        <li><a href="#!">Products</a></li>
			        <li><a href="#!">News</a></li>
			        <li><a href="#!">Photos</a></li>
			        <li><a href="#!">Support</a></li>
			      </ul>
			    </nav>
		  </div>
	</section>
	<script>
		(function($) { // Begin jQuery
			  $(function() { // DOM ready
			    // If a link has a dropdown, add sub menu toggle.
			    $('nav ul li a:not(:only-child)').click(function(e) {
			      $(this).siblings('.nav-dropdown').toggle();
			      // Close one dropdown when selecting another
			      $('.nav-dropdown').not($(this).siblings()).hide();
			      e.stopPropagation();
			    });
			    // Clicking away from dropdown will remove the dropdown class
			    $('html').click(function() {
			      $('.nav-dropdown').hide();
			    });
			    // Toggle open and close nav styles on click
			    $('#nav-toggle').click(function() {
			      $('nav ul').slideToggle();
			    });
			    // Hamburger to X toggle
			    $('#nav-toggle').on('click', function() {
			      this.classList.toggle('active');
			    });
			  }); // end DOM ready
		})(jQuery); // end jQuery
	</script>
</body>
</html>