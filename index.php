<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="resources/icon/globe.ico" type="image/ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>All Information At One Place</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="externel/css/index.css?<?php echo time(); ?>">
</head>
<body>
	<div class="container-fluid d-flex flex-wrap p-2">
		<!--start headerr here-->
		<div class="container bg-light shadow-sm p-3 header bg-dark">
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center align-items-center">
					<h2 class="heading">All Information In One Place</h2>
				</div>
			</div>
		</div>
		<!--end header here-->
		<div class="container shadow-sm border p-3 bg-white">
			<nav class="navbar navbar-expand-sm">
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#jobs">Jobs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#movies">New Movies</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#info">Extra Information</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#soft">Software</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#login">Log In</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#register">Register</a>
					</li>
				</ul>
			</nav>
			<!-- start tabs content -->
			<div class="tab-content bg-light">
				<div class="tab-pane container active p-3" id="home">
					home
				</div>
				<div class="tab-pane container fade p-3" id="jobs">
					jobs
				</div>
				<div class="tab-pane container fade p-3" id="movies">
					movies
				</div>
				<div class="tab-pane container fade p-3" id="info">
					Information
				</div>
				<div class="tab-pane container fade p-3" id="soft">
					software
				</div>
				<div class="tab-pane container fade p-3" id="login">
					log in
				</div>
				<div class="tab-pane container fade p-3" id="register">
					register
				</div>
			</div>
			<!-- end tabs content -->
		</div>
		<!--start footer here-->
		<div class="container bg-light shadow-sm p-3 footer">
			<div class="row">
				<div class="col-md-4 d-flex flex-column align-items-center">
					<h5 class="mb-3">About Us</h5>
					<div class="border-top pt-2"></div>
				</div>
				<div class="col-md-4 d-flex flex-column align-items-center">
					<h5 class="mb-3">Contact Us</h5>
					<div class="border-top pt-2">
						<h6>Email : allinformationofficial@gmail.com</h6>
						<h6>Website : https://allinformationofficial.com</h6>
						<h6>Facebook : <a href="https://www.facebook.com/bikram.acharjee.581" target="_blank">
							Bikram Acharjee
						</a></h6>
						<h6>Blog : <a href="https://bikramacharjee.blogspot.com/" target="_blank">
							Bikram Acharjee
						</a> </h6>
						<address>
							<b>Address</b> : Tinsukia, Assam, India, 786125
						</address>
					</div>
				</div>
				<div class="col-md-4 d-flex flex-column align-items-center">
					<h5 class="mb-3">Feedback</h5>
					<div class="border-top pt-2">
						<form autocomplete="off">
							<div class="form-group">
								<input type="text" name="name" placeholder="Your Name" class="form-control">
							</div>

							<div class="form-group">
								<input type="email" name="email" placeholder="Your Email" class="form-control">
							</div>

							<div class="form-group">
								<input type="number" name="mobile" placeholder="Your Mobile Number" class="form-control">
							</div>
							<div class="form-group">
								<textarea name="feedback" placeholder="Your Query" class="form-control" cols="30" rows="2"></textarea>
							</div>

							<button type="Submit" class="btn btn-primary">Submit Query</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--end footer here-->
	</div>
</body>
</html>