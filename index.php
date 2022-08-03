<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Educoda - Education and Assignment Services HTML Template.</title>
	
	<link rel="icon" href="assets/images/fav.png" type="image/gif" sizes="20x20">

	<!-- Jquery Ui CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css"/>
	<!-- Box Icon CSS -->
	<link rel="stylesheet" href="assets/css/boxicons.min.css">
	<!-- Bootstrap Icon CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css">
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- Odometer CSS -->
	<link rel="stylesheet" href="assets/css/odometer.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css">

	
	<!-- Main CSS -->
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css">
	

</head>
<body>

<!-- Preloader -->

<div class="preloader">
	<div class="sk-cube-grid">
		<div class="sk-cube sk-cube1"></div>
		<div class="sk-cube sk-cube2"></div>
		<div class="sk-cube sk-cube3"></div>
		<div class="sk-cube sk-cube4"></div>
		<div class="sk-cube sk-cube5"></div>
		<div class="sk-cube sk-cube6"></div>
		<div class="sk-cube sk-cube7"></div>
		<div class="sk-cube sk-cube8"></div>
		<div class="sk-cube sk-cube9"></div>
	</div>
</div>

<!-- Preloader End -->

<!-- back to to button start-->
   <a href="javascript:void(0);" id="scroll-top" class="back-to-top-btn"><i class="bi bi-arrow-up"></i></a>
<!-- back to to button end-->


<!-- Header area -->
<header>

<?php include_once "./assets/php/components/header.php"; ?>

<!-- Hero Area Start -->

<div class="hero-style-three positioning">
	<div class="container">
		<div class="row justify-content-center ">
			<div class="col-xxl-8 col-xl-10 col-lg-11 col-md-12 col-sm-12 col-12">
				<div class="hero-content hero-content-style-3 text-center">
					<h2>Looking for <a href="Contact-Us.php">help</a> from premier Assignment.</h2>
					<h1>Assignment Help Service in the World.</h1>
               <div class="hero-btn-wrap">
                  <a class="common-btn" href="Our-Services.php">Read More About +</a>
               </div>
				</div>
			</div>
		</div>
	</div>
	<img class="shape hero-shape-3" src="assets/images/shape/hero-shape-3.png" alt="">
</div>

<!-- Hero Area End -->


</header>
<!--  Header area end -->


<!-- Assignment Form Area 3 Start -->

<div class="assignment-form-area pt-120 pb-120" style="background: #E5E5E5;">
   <div class="container">
      <div class="row">
         <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="assignment-nav-wrap">
					<ul class="nav nav-pills" id="pills-tab-1" role="tablist">
						<li class="nav-item" role="presentation">
							<button class="nav-link active" id="pills-five-tab" data-bs-toggle="pill" data-bs-target="#pills-five" type="button" role="tab" aria-controls="pills-five" aria-selected="true">Assignment</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-six-tab" data-bs-toggle="pill" data-bs-target="#pills-six" type="button" role="tab" aria-controls="pills-six" aria-selected="false">Exams</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" id="pills-seven-tab" data-bs-toggle="pill" data-bs-target="#pills-seven" type="button" role="tab" aria-controls="pills-seven" aria-selected="false">Report</button>
						</li>
						<li class="nav-item" role="presentation">
							<button class="nav-link" style="margin-right: 0;" id="pills-eight-tab" data-bs-toggle="pill" data-bs-target="#pills-eight" type="button" role="tab" aria-controls="pills-eight" aria-selected="false">Thesis</button>
						</li>
					</ul>
				</div>
				<div class="tab-content tab-content-3" id="pills-tabContent-1">
					<div class="tab-pane fade show active" id="pills-five" role="tabpanel" aria-labelledby="pills-five-tab">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="assignment-form-wrap">
									<form action="./assets/php/Form1.php" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="Enter Your Name" name="Lead_Name">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" id="datepicker" placeholder="Due Date   mm/dd/yyyy" name="Lead_Date">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="email" placeholder="webinfo@gmail.com" name="Lead_Email">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<div class="input-file-upload position-relative">
													<input type="file" name="file">
													<img src="assets/images/icon/upload-icon-2.png" alt="">
													<span>Assignment Files Upload</span>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="Subject Name" name="Lead_Subject">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="School Name" name="Lead_School">
											</div>
											<div class="col-xl-10 col-lg-9 col-sm-12 col-12">
												<input type="text" placeholder="Message" name="Lead_Message">
											</div>
											<div class="col-xl-2 col-lg-3 col-sm-12 col-12">
												<div class="assignment-btn-wrap text-center">
													<button type="submit" class="assignment-btn" name="Lead_Submit">Let’s start +</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-six" role="tabpanel" aria-labelledby="pills-six-tab">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="assignment-form-wrap">
									<form action="./assets/php/Form1.php" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="Enter Your Name" name="Lead_Name">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" id="datepicker" placeholder="Due Date   mm/dd/yyyy" name="Lead_Date">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="email" placeholder="webinfo@gmail.com" name="Lead_Email">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<div class="input-file-upload position-relative">
													<input type="file" name="file">
													<img src="assets/images/icon/upload-icon-2.png" alt="">
													<span>Assignment Files Upload</span>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="Subject Name" name="Lead_Subject">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="School Name" name="Lead_School">
											</div>
											<div class="col-xl-10 col-lg-9 col-sm-12 col-12">
												<input type="text" placeholder="Message" name="Lead_Message">
											</div>
											<div class="col-xl-2 col-lg-3 col-sm-12 col-12">
												<div class="assignment-btn-wrap text-center">
													<button type="submit" class="assignment-btn" name="Lead_Submit">Let’s start +</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-seven" role="tabpanel" aria-labelledby="pills-seven-tab">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="assignment-form-wrap">
									<form action="./assets/php/Form1.php" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="Enter Your Name" name="Lead_Name">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" id="datepicker" placeholder="Due Date   mm/dd/yyyy" name="Lead_Date">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="email" placeholder="webinfo@gmail.com" name="Lead_Email">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<div class="input-file-upload position-relative">
													<input type="file" name="file">
													<img src="assets/images/icon/upload-icon-2.png" alt="">
													<span>Assignment Files Upload</span>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="Subject Name" name="Lead_Subject">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="School Name" name="Lead_School">
											</div>
											<div class="col-xl-10 col-lg-9 col-sm-12 col-12">
												<input type="text" placeholder="Message" name="Lead_Message">
											</div>
											<div class="col-xl-2 col-lg-3 col-sm-12 col-12">
												<div class="assignment-btn-wrap text-center">
													<button type="submit" class="assignment-btn" name="Lead_Submit">Let’s start +</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-eight" role="tabpanel" aria-labelledby="pills-eight-tab">
						<div class="row">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
								<div class="assignment-form-wrap">
									<form action="./assets/php/Form1.php" method="POST" enctype="multipart/form-data">
										<div class="row">
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="Enter Your Name" name="Lead_Name">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" id="datepicker" placeholder="Due Date   mm/dd/yyyy" name="Lead_Date">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="email" placeholder="webinfo@gmail.com" name="Lead_Email">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<div class="input-file-upload position-relative">
													<input type="file" name="file">
													<img src="assets/images/icon/upload-icon-2.png" alt="">
													<span>Assignment Files Upload</span>
												</div>
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="Subject Name" name="Lead_Subject">
											</div>
											<div class="col-xl-6 col-lg-6 col-sm-12 col-12">
												<input type="text" placeholder="School Name" name="Lead_School">
											</div>
											<div class="col-xl-10 col-lg-9 col-sm-12 col-12">
												<input type="text" placeholder="Message" name="Lead_Message">
											</div>
											<div class="col-xl-2 col-lg-3 col-sm-12 col-12">
												<div class="assignment-btn-wrap text-center">
													<button type="submit" class="assignment-btn" name="Lead_Submit">Let’s start +</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
         </div>
      </div>
   </div>
</div>

<!-- Assignment Form Area 3 End -->


<!-- Rating Area Start -->

<div class="rating-area pb-120" style="background: #E5E5E5;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="rating-slide-wrap owl-carousel">
					<div class="rating-box text-center">
						<img src="assets/images/icon/rating.jpg" alt="">
						<!-- <ul>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li><i class="bi bi-star-fill"></i></li>
							<li>/4.5</li>
						</ul> -->
					</div>
					<div class="rating-box text-center">
						<img src="assets/images/icon/rating2.jpg" alt="">
					</div>
					<div class="rating-box text-center">
						<img src="assets/images/icon/rating3.jpg" alt="">
					</div>
					<div class="rating-box text-center">
						<img src="assets/images/icon/rating4.jpg" alt="">
					</div>
					<div class="rating-box text-center">
						<img src="assets/images/icon/rating5.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Rating Area End -->


<!-- Service Area 3 Start -->

<div class="service-area pt-120 pb-120" style="background: rgba(100, 64, 250, 0.07);">
	<div class="container">
		<div class="row">
			<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="section-title text-center wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
					<p>Excellent Service</p>
					<h1>Get Only New And Unique Boots Your <br> Edocoda Online Learning!</h1>
				</div>
			</div>
		</div>
		<div class="row mt-60">
			<div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="service-nav-wrap">
					<ul class="nav nav-pills" id="pills-tab-2" role="tablist">
						<li class="nav-item" role="presentation">
							<div class="nav-link active" id="pills-service-1-tab" data-bs-toggle="pill" data-bs-target="#pills-service-1" role="tab" aria-controls="pills-service-1" aria-selected="true">
								<div class="single-service-box text-center">
									<div class="service-icon service-icon-1">
										<img src="assets/images/icon/service-icon-1.png" alt="">
									</div>
									<div class="service-content">
										<h3>Dissertation Writing Service</h3>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item" role="presentation">
							<div class="nav-link" id="pills-service-2-tab" data-bs-toggle="pill" data-bs-target="#pills-service-2"  role="tab" aria-controls="pills-service-2" aria-selected="false">
								<div class="single-service-box text-center">
									<div class="service-icon service-icon-2">
										<img src="assets/images/icon/service-icon-2.png" alt="">
									</div>
									<div class="service-content">
										<h3>Thesis Writing Help</h3>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item" role="presentation">
							<div class="nav-link" id="pills-service-3-tab" data-bs-toggle="pill" data-bs-target="#pills-service-3"  role="tab" aria-controls="pills-service-3" aria-selected="false">
								<div class="single-service-box text-center">
									<div class="service-icon service-icon-3">
										<img src="assets/images/icon/service-icon-3.png" alt="">
									</div>
									<div class="service-content">
										<h3>Online Exam & quiz</h3>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="tab-content" id="pills-tabContent-2">
					<div class="tab-pane fade show active" id="pills-service-1" role="tabpanel" aria-labelledby="pills-service-1-tab">
						<div class="service-tab-slide-wrap owl-carousel">
							<div class="row justify-content-between align-items-center">
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="service-tab-img overflow-hidden">
										<img class="w-100" src="assets/images/service-tab-img-1.png" alt="">
									</div>
								</div>
								<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 mobt-24">
									<div class="service-tab-content">
										<h1>Dissertation Writing Service</h1>
										<p>Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo. Suspensive ut placenta turpin. Nulled sed augur sed maurist corvallis fuegian partition eu nisi. Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus.</p>
										<ul>
											<li><i class="bi bi-check2-square"></i>Nuns egesta sodalist congee sit amen neue sed auctors.</li>
											<li><i class="bi bi-check2-square"></i>Aeneas premium neue eger massa quia semper.</li>
											<li><i class="bi bi-check2-square"></i>Crash id utricles ex, et congee torpor. Aeneas non pianissimo tellus.</li>
											<li><i class="bi bi-check2-square"></i>Maurist at placenta Nullo consenter dui sed ligula auctors.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row justify-content-between align-items-center">
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="service-tab-img overflow-hidden">
										<img class="w-100" src="assets/images/service-tab-img-1.png" alt="">
									</div>
								</div>
								<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 mobt-24">
									<div class="service-tab-content">
										<h1>Dissertation Writing Service</h1>
										<p>Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo. Suspensive ut placenta turpin. Nulled sed augur sed maurist corvallis fuegian partition eu nisi. Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus.</p>
										<ul>
											<li><i class="bi bi-check2-square"></i>Nuns egesta sodalist congee sit amen neue sed auctors.</li>
											<li><i class="bi bi-check2-square"></i>Aeneas premium neue eger massa quia semper.</li>
											<li><i class="bi bi-check2-square"></i>Crash id utricles ex, et congee torpor. Aeneas non pianissimo tellus.</li>
											<li><i class="bi bi-check2-square"></i>Maurist at placenta Nullo consenter dui sed ligula auctors.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-service-2" role="tabpanel" aria-labelledby="pills-service-2-tab">
						<div class="service-tab-slide-wrap owl-carousel">
							<div class="row justify-content-between align-items-center">
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="service-tab-img overflow-hidden">
										<img class="w-100" src="assets/images/service-tab-img-1.png" alt="">
									</div>
								</div>
								<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 mobt-24">
									<div class="service-tab-content">
										<h1>Thesis Writing Help</h1>
										<p>Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo. Suspensive ut placenta turpin. Nulled sed augur sed maurist corvallis fuegian partition eu nisi. Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus.</p>
										<ul>
											<li><i class="bi bi-check2-square"></i>Nuns egesta sodalist congee sit amen neue sed auctors.</li>
											<li><i class="bi bi-check2-square"></i>Aeneas premium neue eger massa quia semper.</li>
											<li><i class="bi bi-check2-square"></i>Crash id utricles ex, et congee torpor. Aeneas non pianissimo tellus.</li>
											<li><i class="bi bi-check2-square"></i>Maurist at placenta Nullo consenter dui sed ligula auctors.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row justify-content-between align-items-center">
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="service-tab-img overflow-hidden">
										<img class="w-100" src="assets/images/service-tab-img-1.png" alt="">
									</div>
								</div>
								<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 mobt-24">
									<div class="service-tab-content">
										<h1>Thesis Writing Help</h1>
										<p>Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo. Suspensive ut placenta turpin. Nulled sed augur sed maurist corvallis fuegian partition eu nisi. Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus.</p>
										<ul>
											<li><i class="bi bi-check2-square"></i>Nuns egesta sodalist congee sit amen neue sed auctors.</li>
											<li><i class="bi bi-check2-square"></i>Aeneas premium neue eger massa quia semper.</li>
											<li><i class="bi bi-check2-square"></i>Crash id utricles ex, et congee torpor. Aeneas non pianissimo tellus.</li>
											<li><i class="bi bi-check2-square"></i>Maurist at placenta Nullo consenter dui sed ligula auctors.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-service-3" role="tabpanel" aria-labelledby="pills-service-3-tab">
						<div class="service-tab-slide-wrap owl-carousel">
							<div class="row justify-content-between align-items-center">
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="service-tab-img overflow-hidden">
										<img class="w-100" src="assets/images/service-tab-img-1.png" alt="">
									</div>
								</div>
								<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 mobt-24">
									<div class="service-tab-content">
										<h1>Online Exam & quiz</h1>
										<p>Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo. Suspensive ut placenta turpin. Nulled sed augur sed maurist corvallis fuegian partition eu nisi. Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus.</p>
										<ul>
											<li><i class="bi bi-check2-square"></i>Nuns egesta sodalist congee sit amen neue sed auctors.</li>
											<li><i class="bi bi-check2-square"></i>Aeneas premium neue eger massa quia semper.</li>
											<li><i class="bi bi-check2-square"></i>Crash id utricles ex, et congee torpor. Aeneas non pianissimo tellus.</li>
											<li><i class="bi bi-check2-square"></i>Maurist at placenta Nullo consenter dui sed ligula auctors.</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="row justify-content-between align-items-center">
								<div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
									<div class="service-tab-img overflow-hidden">
										<img class="w-100" src="assets/images/service-tab-img-1.png" alt="">
									</div>
								</div>
								<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12 col-sm-12 col-12 mobt-24">
									<div class="service-tab-content">
										<h1>Online Exam & quiz</h1>
										<p>Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo. Suspensive ut placenta turpin. Nulled sed augur sed maurist corvallis fuegian partition eu nisi. Dubs aliquot vulgate leo, quia corvallis eros ornate a. Nulled in erat a maurist congee tempus.</p>
										<ul>
											<li><i class="bi bi-check2-square"></i>Nuns egesta sodalist congee sit amen neue sed auctors.</li>
											<li><i class="bi bi-check2-square"></i>Aeneas premium neue eger massa quia semper.</li>
											<li><i class="bi bi-check2-square"></i>Crash id utricles ex, et congee torpor. Aeneas non pianissimo tellus.</li>
											<li><i class="bi bi-check2-square"></i>Maurist at placenta Nullo consenter dui sed ligula auctors.</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Service Area 3 End -->


<!-- Count Area Start -->

<div class="count-area pt-120 pb-120" style="background-color: #E5E5E5;">
	<div class="container">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="counter-item-wrap text-center">
					<div class="counter-item d-flex align-items-center justify-content-center">
						<h1 class="odometer" data-odometer-final="1.2">.</h1>
						<em>K+</em>
					</div>
					<h3>Total Tutorial</h3>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="counter-item-wrap text-center">
					<div class="counter-item d-flex align-items-center justify-content-center">
						<h1 class="odometer" data-odometer-final="7.8">.</h1>
						<em>K+</em>
					</div>
					<h3>Total Students</h3>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="counter-item-wrap text-center">
					<div class="counter-item d-flex align-items-center justify-content-center">
						<h1 class="odometer" data-odometer-final="450">.</h1>
					</div>
					<h3>Total Teacher</h3>
				</div>
			</div>
			<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
				<div class="counter-item-wrap text-center">
					<div class="counter-item d-flex align-items-center justify-content-center">
						<h1 class="odometer" data-odometer-final="9.7">.</h1>
						<em>K+</em>
					</div>
					<h3>Total Visitors</h3>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Count Area End -->


<!-- Team Area Start -->

<div class="team-area team-area-2 positioning pb-120" style="background-color: #E5E5E5;">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="team-cta-wrap text-center">
					<h1>Meet the main pioneers of education</h1>
					<div class="team-cta-btn-wrap wow flipInX" data-wow-duration="2.5s" data-wow-delay=".4s">
						<a class="common-btn" href="About-Us.php">Read More About +</a>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-120">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="section-title style-two text-center wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
					<p>Excellent Courses</p>
					<h1>Added New Courses</h1>
				</div>
			</div>
		</div>
		<div class="service-tab-slide-wrap owl-carousel mt-60">
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-1.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-2.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-3.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-4.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-5.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-6.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-6.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-5.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-4.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-3.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-2.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
					<div class="single-courses-box single-courses-box-2">
						<div class="courses-img">
							<a href="javascript:void(0);"><img class="w-100" src="assets/images/courses/course-img-1.png" alt=""></a>
						</div>
						<div class="courses-content">
							<h3><a href="javascript:void(0);">2022 Complete Python Bootlace Zero to Hero in Python.</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<img class="shape assignment-shape-2" src="assets/images/shape/assignment-single.png" alt="">
</div>

<!-- Team Area End -->


<!-- Team Member Home 3 Start -->

<div class="team-member-wrap pt-120 pb-96">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="section-title style-two text-center wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
					<p style="color: $secondary-color;">Expert Team</p>
					<h1>Our Team Member</h1>
				</div>
			</div>
		</div>
		<div class="row row-cols-1 row-cols-xl-5 row-cols-xxl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 mt-60">
			<div class="col wow fadeIn" data-wow-duration="2.5s" data-wow-delay=".7s">
				<div class="team-box team-box-design-2">
					<div class="team-img">
						<a href="javascript:void(0);"><img class="w-100" src="assets/images/team/team-1.png" alt=""></a>
					</div>
					<div class="team-content-wrap d-flex align-items-center justify-content-between">
						<div class="team-content">
							<h3><a href="javascript:void(0);">Oliver Ava</a></h3>
							<p>Educoda Manager</p>
						</div>
						<div class="team-social">
							<a href="javascript:void(0);"><i class="bx bxl-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col wow fadeIn" data-wow-duration="2.5s" data-wow-delay=".8s">
				<div class="team-box team-box-design-2">
					<div class="team-img">
						<a href="javascript:void(0);"><img class="w-100" src="assets/images/team/team-2.png" alt=""></a>
					</div>
					<div class="team-content-wrap d-flex align-items-center justify-content-between">
						<div class="team-content">
							<h3><a href="javascript:void(0);">Oliver Ava</a></h3>
							<p>Educoda Manager</p>
						</div>
						<div class="team-social">
							<a href="javascript:void(0);"><i class="bx bxl-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col wow fadeIn" data-wow-duration="2.5s" data-wow-delay=".9s">
				<div class="team-box team-box-design-2">
					<div class="team-img">
						<a href="javascript:void(0);"><img class="w-100" src="assets/images/team/team-3.png" alt=""></a>
					</div>
					<div class="team-content-wrap d-flex align-items-center justify-content-between">
						<div class="team-content">
							<h3><a href="javascript:void(0);">Oliver Ava</a></h3>
							<p>Educoda Manager</p>
						</div>
						<div class="team-social">
							<a href="javascript:void(0);"><i class="bx bxl-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1s">
				<div class="team-box team-box-design-2">
					<div class="team-img">
						<a href="javascript:void(0);"><img class="w-100" src="assets/images/team/team-4.png" alt=""></a>
					</div>
					<div class="team-content-wrap d-flex align-items-center justify-content-between">
						<div class="team-content">
							<h3><a href="javascript:void(0);">Oliver Ava</a></h3>
							<p>Educoda Manager</p>
						</div>
						<div class="team-social">
							<a href="javascript:void(0);"><i class="bx bxl-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1.1s">
				<div class="team-box team-box-design-2">
					<div class="team-img">
						<a href="javascript:void(0);"><img class="w-100" src="assets/images/team/team-5.png" alt=""></a>
					</div>
					<div class="team-content-wrap d-flex align-items-center justify-content-between">
						<div class="team-content">
							<h3><a href="javascript:void(0);">Oliver Ava</a></h3>
							<p>Educoda Manager</p>
						</div>
						<div class="team-social">
							<a href="javascript:void(0);"><i class="bx bxl-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col wow fadeIn" data-wow-duration="2.5s" data-wow-delay="1.2s">
				<div class="team-box team-box-design-2">
					<div class="team-img">
						<a href="javascript:void(0);"><img class="w-100" src="assets/images/team/team-6.png" alt=""></a>
					</div>
					<div class="team-content-wrap d-flex align-items-center justify-content-between">
						<div class="team-content">
							<h3><a href="javascript:void(0);">Kiam Ava</a></h3>
							<p>Educoda Manager</p>
						</div>
						<div class="team-social">
							<a href="javascript:void(0);"><i class="bx bxl-facebook"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Team Member Home 3 End -->


<!-- Testimonial Start -->

<div class="testimonial-area pt-120 pb-120">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="testimonial-title text-start text-xl-center position-relative">
					<img class="wow fadeInDown" data-wow-duration="2s" data-wow-delay=".2s" src="assets/images/testimonial-quote.png" alt="">
					<h1>Testimonials</h1>
				</div>
			</div>
		</div>
		<div class="row mt-60 justify-content-center">
			<div class="col-xl-10 col-lg-11 col-md-12 col-sm-12 col-12">
				<div class="testimonial-slide-wrap owl-carousel">
					<div class="single-testimonial">
						<p>“Maecenas egesta efficient eliot, vel fuegian torpor accusant sits amen. Sed vitae facilities magna. Nuns augur rectus, mollie et the auctors quia, molesting at edward.”</p>
					</div>
					<div class="single-testimonial">
						<p>“Maecenas egesta efficient eliot, vel fuegian torpor accusant sits amen. Sed vitae facilities magna. Nuns augur rectus, mollie et the auctors quia, molesting at edward.”</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Testimonial End -->


<!-- FAQ Area Start -->

<div class="faq-area pt-120 pb-120" style="background: #fff;">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="section-title text-center wow fadeIn" data-wow-duration="2s" data-wow-delay=".5s">
					<p>Our Faq</p>
					<h1>frequency and questions</h1>
				</div>
			</div>
		</div>
		<div class="row mt-60 justify-content-between align-items-center">
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-1 order-lg-0 mobt-60 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".7s">
				<div class="faq-wrap">
					<div class="accordion" id="accordionExample">
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingOne">
					      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								Morbid et partition ex. Fusee nibs ligula?
					      </button>
					    </h2>
					    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
					      <div class="accordion-body">
								Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo.
					      </div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingTwo">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
					        Maurist ullamcorper, risus eger elided accusant?
					      </button>
					    </h2>
					    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
					      <div class="accordion-body">
								Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo.
					      </div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingThree">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
					        Iquique varies a solicitude nullo consequent ut?
					      </button>
					    </h2>
					    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
					      <div class="accordion-body">
								Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo.
					      </div>
					    </div>
					  </div>
					  <div class="accordion-item">
					    <h2 class="accordion-header" id="headingFour">
					      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								Donee vivaria sem vel commode mattie. Sed vel purus at maurist?
					      </button>
					    </h2>
					    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
					      <div class="accordion-body">
								Pellentesque habitant morbid critique selectus et net's et aalesund fames ac turpin egesta. Donee accusal sapiens augur, pulvinate minibus nullo sagittal at. Sed egesta augur eger lucius pianissimo.
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 order-0 order-lg-1">
				<div class="faq-img-wrap text-center text-lg-end">
					<img src="assets/images/faq-img.png" alt="">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- FAQ Area End -->


<?php include_once "./assets/php/components/footer.php"; ?>

<!-- Jquery JS -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- Jquery Ui JS -->
<script src="assets/js/jquery-ui.js"></script>
<!-- Bootstrap JS -->		
<script src="assets/js/bootstrap.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Magnific Popup JS -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Odometer JS -->
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/viewport.jquery.js"></script>
<!-- Main JS -->
<script src="assets/js/main.js"></script>

</body>
</html>
