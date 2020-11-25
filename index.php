<?php

$conn = mysqli_connect("localhost", "root", "", "SOE");
if ($conn->connect_error) {
	die("Connection failed:" . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS notice;";
$conn->query($sql);
$sql = "INSERT INTO notice (information, url, new)
        VALUES ('Comming from php', 'test1', 0)";
$conn->query($sql);
$sql = "INSERT INTO notice (information, url, new)
        VALUES ('Again from php', 'test2', 1)";
$conn->query($sql);
$sql = "SELECT id, information, url, new from notice";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<?php 
include 'scripts.php';
?>
<body>
	<!-- Umesh -->
	<?php include "header.php"; ?>
	<!-- Swiper -->
	<div class="container-fluid p-0">
		<img src="images/slide1.jpg" alt="" class="bg-img img-fluid" style="position: absolute; z-index: -1;">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide" style="background-image: linear-gradient(rgba(63,208,212,0.5),rgba(0,0,0,0.7)), url('images/slide1.jpg');">
					<div class="title">Slide 1</div>
					<div class="subtitle">Subtitle</div>
				</div>
				<div class="swiper-slide" data-swiper-autoplay="3000" style="background-image: linear-gradient(rgba(63,208,212,0.5),rgba(0,0,0,0.7)),  url('images/slide2.jpg');">
					<div class="title">Slide 2</div>
					<div class="subtitle">Subtitle</div>
				</div>
				<div class="swiper-slide" data-swiper-autoplay="3000" style="background-image: linear-gradient(rgba(63,208,212,0.5),rgba(0,0,0,0.7)),  url('images/slide3.jpg');">
					<div class="title">Slide 3</div>
					<div class="subtitle">Subtitle</div>
				</div>
			</div>
			<!-- Add Pagination -->
			<div class="swiper-pagination swiper-pagination-white">

			</div>
			<!-- Add Navigation -->
			<div class="prev-btn swiper-button-prev">
				<img src="images/slide1.jpg" alt="">
			</div>
			<div class="next-btn swiper-button-next">
				<img src="images/slide1.jpg" alt="">
			</div>
		</div>
	</div>
	<!-- End Umesh -->
	<!-- Ajay -->
	<section class="updates mt-3">
		<div class="container">
			<div class="section-content">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<div class="col-md-2  text-md-right">
								<div class="News ">
									<div class="bn-title d-none d-sm-block">
										<p style="font-size: 1.4em;" class="badge badge-danger">Bulletin</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-8 events pt-1 ml-2 ml-md-0">
								<p><a href="" class="typewrite" data-period="2000" data-type='[ "Hi, we are from JNU.", "I am Creative.", "I Love Design.", "I Love to Develop." ]'><span class="wrap"></span></a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container mt-4">
		<div class="row pt-2">
			<div class="col-md-6 col-sm-12 bg-bag">
				<div class="line mt-3 "></div>
				<h4 class="ml-4 pt-3">ABOUT <span class="h5 font-weight-bold" style="color: #8B4513;font-family: tahoma;">JNU
						DELHI</span></h4>
				<hr class="bg-info ml-4 mt-0" style="width: 250px;">
				<div class="row p-2 pt-0">
					<div class="col-md-8">
						<p>School of Engineering, Jawaharlal Nehru University offers five year dual degree program with B. Tech in
							engineering discipline combined with a Master specialisation in Social science/Humanities/Science/
							Technology.
							In the current scenario, technology is playing a big role in identifying and solving social issues...</p>
					</div>
					<div class="col-md-4 pt-3">
						<img src="images/slide6.jpg" style="display: block;width: 100%;">
					</div>
					<button type="button" class="btn btn-sm btn-outline-info ml-3 mt-1" data-toggle="modal" data-target="#jnuModal">Read More
					</button>
				</div>

				<!-- jnu modal -->
				<div class="modal fade" id="jnuModal" tabindex="-1" role="dialog" aria-labelledby="jnuModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="ml-4 pt-3 modal-title" id="jnuModalLabel">SCHOOL OF ENGINEERING <span class="h5 font-weight-bold" style="color: #8B4513;font-family: tahoma;">JNU</span></h4>
								<hr class="bg-info ml-4 mt-0" style="width: 400px;">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-8">
										School of Engineering, Jawaharlal Nehru University offers five year dual degree program with B. Tech
										in engineering discipline combined with a Master specialisation in Social
										science/Humanities/Science/Technology.<br>
										In the current scenario, technology is playing a big role in identifying and solving social issues.
										Keeping this point in mind, School of Engineering gives its students an opportunity to explore
										various disciplines of social sciences along with the Engineering program. The program is unique in
										nature and first of its kind in India.<br>
										Established in 2018, School of Engineering is in its emerging stage. But, with the help of
										infrastructure of Jawaharlal Nehru University, its worldwide legacy in the field of Science and
										Social Science and its well grown schools, School of Engineering is determined to be a fore-runner
										in cutting edge technology, research, and education. At present, School of Engineering offers degree
										in two engineering disciplines, viz., Computer Science and Engineering and Electronics and
										Communication Engineering. However, three more disciplines, viz., Mechanical Engineering, Chemical
										Engineering, and Civil and Environmental Engineering have been planned to be launched in recent
										years. The School will start its PhD program from July, 2021.
									</div>
									<div class="col-md-4 mt-5">
										<img src="images/slide6.jpg" style="display: block;width: 100%;">
									</div>
								</div>
							</div>
							<div class="modal-footer">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="line mt-3 "></div>
				<h4 class="ml-4 pt-3">DEAN'S <span class="h5 font-weight-bold" style="color: #8B4513;font-family: tahoma;">DESK</span></h4>
				<hr class="bg-info ml-4 mt-0" style="width: 250px;">
				<div class="row p-2 pt-0">
					<div class="col-md-8">
						<p>School of Engineering, Jawaharlal Nehru University offers five year dual degree program with B. Tech in
							engineering discipline combined with a Master specialisation in Social science/Humanities/Science/
							Technology.
							In the current scenario, technology is playing a big role in identifying and solving social issues...</p>
					</div>
					<div class="col-md-4 pt-3">
						<img src="images/slide5.jpg" style="display: block;width: 100%;">
					</div>
					<button type="button" class="btn btn-sm btn-outline-info ml-3 mt-1" data-toggle="modal" data-target="#soeModal">Read More
					</button>
				</div>

				<!-- soe modal -->
				<div class="modal fade" id="soeModal" tabindex="-1" role="dialog" aria-labelledby="soeModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="ml-4 pt-3 modal-title" id="soeModalLabel">SCHOOL OF ENGINEERING <span class="h5 font-weight-bold" style="color: #8B4513;font-family: tahoma;">JNU</span></h4>
								<hr class="bg-info ml-4 mt-0" style="width: 400px;">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row">
									<div class="col-md-8">
										School of Engineering, Jawaharlal Nehru University offers five year dual degree program with B. Tech
										in engineering discipline combined with a Master specialisation in Social
										science/Humanities/Science/Technology.<br>
										In the current scenario, technology is playing a big role in identifying and solving social issues.
										Keeping this point in mind, School of Engineering gives its students an opportunity to explore
										various disciplines of social sciences along with the Engineering program. The program is unique in
										nature and first of its kind in India.<br>
										Established in 2018, School of Engineering is in its emerging stage. But, with the help of
										infrastructure of Jawaharlal Nehru University, its worldwide legacy in the field of Science and
										Social Science and its well grown schools, School of Engineering is determined to be a fore-runner
										in cutting edge technology, research, and education. At present, School of Engineering offers degree
										in two engineering disciplines, viz., Computer Science and Engineering and Electronics and
										Communication Engineering. However, three more disciplines, viz., Mechanical Engineering, Chemical
										Engineering, and Civil and Environmental Engineering have been planned to be launched in recent
										years. The School will start its PhD program from July, 2021.
									</div>
									<div class="col-md-4 mt-5">
										<img src="images/slide5.jpg" style="display: block;width: 100%;">
									</div>
								</div>
							</div>
							<div class="modal-footer">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container mt-4">
		<div class="row pt-2">
			<div class="col-md-6 col-sm-12">
				<div class="line mt-3 "></div>
				<h4 class="ml-4 pt-3">ADMISSION <span class="h5 font-weight-bold" style="color: #8B4513;">ZONE</span></h4>
				<h6 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">B.Tech+M.Tech/MS Admissions 2020</h6>
				<div class="col-12 mt-3">
					<div class="well font-weight-bold h6">
						<ul class="list-group checked-list-box" id="content1">
							<li class="list-group-item" style="background-color: #FAF0E6">Admissions through CSAB-2020/JOSAA-2020</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Admissions through DASA scheme-2020</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">School of Engineering facilitates online
								reporting of selected candidates under DASA scheme</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Guidelines for online verification of
								documents for admission into dual degree (B.Tech + M.Tech/MS)program at JNU</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Schedule for admission under DASA
								Scheme-Information Brochure</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Fee detail for admission under DASA Scheme
							</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">Certificates to be produced at the time of
								Admission for JNU 2020</li>
							<li class="list-group-item" style="background-color: #FAF0E6 ">2019 opening and closing ranks (Category
								Wise) </li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 bg-bag">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">NOTICE <span class="h5 font-weight-bold" style="color: #8B4513;">BOARD</span></h4>
				<h6 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">INFORMATION</h6>
				<div class="col-12 mt-3">
					<div class="well font-weight-bold h6">
						<ul class="list-group checked-list-box" id="content2">
							<?php
							if ($result && $result->num_rows) {
								while ($row = $result->fetch_assoc()) {
									$new = "";
									if ($row['new']) {
										$new = "<span>This is New Symbol</span>";
									}
									echo "<li class='list-group-item' style='background-color: #FAF0E6'> <a class='notice' href='" . $row["url"] . ".php'>" . $row["information"] . " " . $new . "</a></li>";
								}
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="container mt-3">
		<div class="row pt-5">
			<div class="col-md-8 col-sm-12 bg-bag">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">ACADEMIC <span class="h5 font-weight-bold" style="color: #8B4513;">ACTIVITIES</span></h4>
				<h6 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">CAMPUS EVENTS</h6>
				<div class="col-12 mt-3">
					<div id="owl-demo" class="owl-carousel owl-theme owl-1">
						<div class="item"><img src="images/slide4.jpg" alt="Owl Image"></div>
						<div class="item"><img src="images/slide5.jpg" alt="Owl Image"></div>
						<div class="item"><img src="images/slide6.jpg" alt="Owl Image"></div>
					</div>
					<div class="owl-controls">
						<div class="owl-nav">
							<div class="owl-prev"></div>
							<div class="owl-next"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">RESEARCH <span class="h5 font-weight-bold" style="color: #8B4513;">UPDATES</span></h4>
				<h6 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">INFORMATION</h6>
				<div class="col-12 mt-3">
					<div class="row">
						<div class="card border-danger golge">
							<div class="card-body">
								<div class="carousel vert s/slide" data-ride="carousel" data-interval="3000">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<ul class="timeline">
												<li>
													<a target="_blank" href="#">Research header</a>
													<a href="#" class="float-right">09 Ocak, 2019</a>
													<p class="article">Haberler burada gözükecek..</p>
												</li>
												<hr>
												<li>
													<a href="#">Research header</a>
													<a href="#" class="float-right">4 Temmuz, 2018</a>
													<p>Haberler burada gözükecek..Haberler burada gözükecek..</p>
												</li>
												<hr>
												<li>
													<a href="#">Research header</a>
													<a href="#" class="float-right">4 Temmuz, 2018</a>
													<p>Haberler burada gözükecek..Haberler burada gözükecek.</p>
												</li>
											</ul>
										</div>
										<div class="carousel-item">
											<ul class="timeline">
												<li>
													<a href="#">Research header</a>
													<a href="#" class="float-right">09 Ocak, 2019</a>
													<p class="article">>Haberler burada gözükecek..</p>
												</li>
												<hr>
												<li>
													<a href="#">Research header</a>
													<a href="#" class="float-right">4 Temmuz, 2018</a>
													<p>Haberler burada gözükecek..Haberler burada gözükecek.</p>
												</li>
												<hr>
												<li>
													<a href="#">Research header</a>
													<a href="#" class="float-right">4 Temmuz, 2018</a>
													<p>Haberler burada gözükecek..Haberler burada gözükecek.</p>
												</li>
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
	</section>

	<section class="container mt-3">
		<div class="row">
			<div class="blog_section col-md-8">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">EVENTS <span class="h5 font-weight-bold" style="color: #8B4513;">SEMINARS</span></h4>
				<h6 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">LATEST</h6>
				<div class="blog_content mt-3">
					<div class="owl-carousel owl-theme owl-4">
						<div class="blog_item">
							<div class="blog_image">
								<img class="img-fluid" src="images/slide4.jpg" alt="images not found">
								<span><i class="icon ion-md-create"></i></span>
							</div>
							<div class="blog_details">
								<ul>
									<li><i class="icon ion-md-person"></i>Alex</li>
									<li><i class="icon ion-md-calendar"></i>August 1, 2018</li>
								</ul>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
								<a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
							</div>
						</div>
						<div class="blog_item">
							<div class="blog_image">
								<img class="img-fluid" src="images/slide5.jpg" alt="images not found">
								<span><i class="icon ion-md-create"></i></span>
							</div>
							<div class="blog_details">
								<ul>
									<li><i class="icon ion-md-person"></i>Alex</li>
									<li><i class="icon ion-md-calendar"></i>August 1, 2018</li>
								</ul>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
								<a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
							</div>
						</div>
						<div class="blog_item">
							<div class="blog_image">
								<img class="img-fluid" src="images/slide6.jpg" alt="images not found">
								<span><i class="icon ion-md-create"></i></span>
							</div>
							<div class="blog_details">
								<ul>
									<li><i class="icon ion-md-person"></i>Alex</li>
									<li><i class="icon ion-md-calendar"></i>August 1, 2018</li>
								</ul>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem...</p>
								<a href="#">Read More<i class="icofont-long-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 bg-bag">

				<!-- Fluid width widget -->
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">NEWS <span class="h5 font-weight-bold" style="color: #8B4513;">UPDATES</span></h4>
				<h6 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">SOE IN MEDIA</h6>
				<div class="panel panel-danger mt-3">
					<div class="panel-body">
						<ul class="media-list">
							<li class="media">
								<div class="media-left">
									<div class="text-center date mr-2">
										<div class="panel-heading month">
											<span class="panel-title strong h5">
												Mar
											</span>
										</div>
										<div class="panel-body day text-info h5">
											23
										</div>
									</div>
								</div>
								<div class="media-body">
									<h5 class="media-heading text-danger">
										Pulvinar Mauris Eu
									</h5>
									<p>
										Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
									</p>
								</div>
							</li>
							<li class="media">
								<div class="media-left">
									<div class="text-center date mr-2">
										<div class="panel-heading month">
											<span class="panel-title strong h5">
												Mar
											</span>
										</div>
										<div class="panel-body day text-info h5">
											23
										</div>
									</div>
								</div>
								<div class="media-body">
									<h5 class="media-heading text-danger">
										Pulvinar Mauris Eu
									</h5>
									<p>
										Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
									</p>
								</div>
							</li>
							<li class="media">
								<div class="media-left">
									<div class="text-center date mr-2">
										<div class="panel-heading month">
											<span class="panel-title strong h5">
												Mar
											</span>
										</div>
										<div class="panel-body day text-info h5">
											23
										</div>
									</div>
								</div>
								<div class="media-body">
									<h5 class="media-heading text-danger">
										Pulvinar Mauris Eu
									</h5>
									<p>
										Vivamus pulvinar mauris eu placerat blandit. In euismod tellus vel ex vestibulum congue.
									</p>
								</div>
							</li>

						</ul>
					</div>
				</div>
				<!-- End fluid width widget -->
			</div>
		</div>
	</section>

	<section class="container mt-3">
		<div class="row">
			<div class="blog_section col-md-12 bg-bag">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">SOCIAL <span class="h5 font-weight-bold" style="color: #8B4513;">INITIATIVES</span></h4>
				<h5 class="text-center bg-info text-white mt-3 pt-1" style="height: 30px;">JNU CLUBS</h5>
				<div class="col-12 mt-3">
					<div id="owl-demo" class="owl-carousel owl-theme owl-3">
						<div class="item"><img src="images/slide4.jpg" alt="Owl Image"></div>
						<div class="item"><img src="images/slide5.jpg" alt="Owl Image"></div>
						<div class="item"><img src="images/slide6.jpg" alt="Owl Image"></div>
					</div>
					<div class="owl-controls">
						<div class="owl-nav">
							<div class="owl-prev"></div>
							<div class="owl-next"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="container mt-3">
		<div class="row">
			<div class="col-md-5 col-sm-3 col-xs-2">
				<!-- Fluid width widget -->
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">FAQ '<span class="h5 font-weight-bold" style="color: #8B4513;"> S</span></h4>
				<h6 class="text-center bg-info text-white pt-1 mt-3" style="height: 30px;">FREQUENTLY ASKED QUESTIONS</h6>
				<div class="col-md-12">
					<ul id="accordion" class="col-sm-6 col-md-12 mt-3">
						<!-- Question one -->
						<li class="mb-2">
							<div class="panel-heading" id="choose" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								How often do you upgrade the system ?
								<span class="fa fa-plus fa-1x text-info pull-right d-none d-sm-block"></span>
							</div>
							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</li>

						<!-- Question two -->
						<li class="mb-2">
							<div class="collapsed panel-heading" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								Where do I go incase I have a complaint?
								<span class="fa fa-plus fa-1x text-info pull-right d-none d-sm-block"></span>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</li>

						<!-- Question three -->
						<li class="mb-2">
							<div class="collapsed panel-heading" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Do you have any outlets in the country ?
								<span class="fa fa-plus fa-1x text-info pull-right d-none d-sm-block"></span>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</li>

						<!-- Question Four -->
						<li class="mb-2">
							<div class="collapsed panel-heading" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								How can I file a complaint?
								<span class="fa fa-plus fa-1x text-info pull-right d-none d-sm-block"></span>
							</div>
							<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</li>

						<!-- Questiion Five -->
						<li class="mb-2">
							<div class="collapsed panel-heading" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								How can I join the team?
								<span class="fa fa-plus fa-1x text-info pull-right d-none d-sm-block"></span>
							</div>
							<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</li>

						<!-- Question Six-->
						<li class="mb-2">
							<div class="collapsed panel-heading" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
								In case I forgot my password, what do I do?
								<span class="fa fa-plus fa-1x text-info pull-right d-none d-sm-block"></span>
							</div>
							<div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="card-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
								</div>
							</div>
						</li>
					</ul>
				</div>
				<!-- End fluid width widget -->
			</div>

			<div class="col-md-7 col-sm-12 bg-bag" id="photos">
				<div class="line mt-3"></div>
				<h4 class="ml-4 pt-3">JNU <span class="h5 font-weight-bold" style="color: #8B4513;">GALLERY</span> <span class="badge badge-info ml-2">MORE</span></h4>
				<h6 class="text-center bg-info text-white p-1 mt-3" style="height: 30px;">PHOTOS@JNU</h6>
				<div class="row mt-3 gallery">
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide4.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide5.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide6.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide4.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide5.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide6.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide4.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide5.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide6.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide4.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide5.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
					<div class="col-md-3 p-2">
						<figure>
							<img src="images/slide6.jpg" alt="" />
							<figcaption>Daytona Beach <small>United States</small></figcaption>
						</figure>
					</div>
				</div>
				<div class="row mt-3 s/slider-gallery">
					<div class="col-sm-12 pic">
						<div class="owl-carousel owl-5">
							<img src="images/slide4.jpg">
							<img src="images/slide5.jpg">
							<img src="images/slide6.jpg">
							<img src="images/slide4.jpg">
						</div>
					</div>
				</div>
			</div>
	</section>
	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display:none;">
		<symbol id="close" viewBox="0 0 18 18">
			<path fill-rule="evenodd" clip-rule="evenodd" fill="#FFFFFF" d="M9,0.493C4.302,0.493,0.493,4.302,0.493,9S4.302,17.507,9,17.507
			S17.507,13.698,17.507,9S13.698,0.493,9,0.493z M12.491,11.491c0.292,0.296,0.292,0.773,0,1.068c-0.293,0.295-0.767,0.295-1.059,0
			l-2.435-2.457L6.564,12.56c-0.292,0.295-0.766,0.295-1.058,0c-0.292-0.295-0.292-0.772,0-1.068L7.94,9.035L5.435,6.507
			c-0.292-0.295-0.292-0.773,0-1.068c0.293-0.295,0.766-0.295,1.059,0l2.504,2.528l2.505-2.528c0.292-0.295,0.767-0.295,1.059,0
			s0.292,0.773,0,1.068l-2.505,2.528L12.491,11.491z" />
		</symbol>
	</svg>
	<!-- End Ajay -->

	<!--footer starts from here-->
	<?php include "footer.php"; ?>
	<div class="to-top-link">
		<a href="#page-wrapper" class="top-link">
			<i class="fas fa-arrow-up"></i>
		</a>
	</div>
	<!-- required js files -->
	<script src="libs/jquery-3.5.1.js"></script>
	<script src="libs/popper-2.5.3.js"></script>
	<script src="libs/bootstrap-4.5.3.js"></script>
	<!-- Swiper JS -->
	<script src="js/swiper-bundle-min.js"></script>
	<!-- Initialize Swiper -->
	<script>
		window.onresize = function() {
			location.reload();
		}
		window.onload = function() {
			setTransform();
		}
		var swiper = new Swiper('.swiper-container', {
			speed: 1500,
			spacebetween: 30,
			loop: true,
			slidesperview: 1,
			effect: 'fade',
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			autoplay: {
				delay: 5000,
				disableOnInteraction: false,
			},
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
				hideOnClick: false,
			},
		});

		swiper.on('slideChange', setTransform);

		function setTransform() {
			let curSlide = swiper.slides[swiper.activeIndex];
			let title = curSlide.querySelector('.title');
			let subtitle = curSlide.querySelector('.subtitle');

			let moveUp = String(-0.5 * h - title.offsetHeight) + 'px';
			let moveDown = String(0.5 * h + subtitle.offsetHeight) + 'px';


			title.style.transform = `translateY(${moveUp})`;
			subtitle.style.transform = `translateY(${moveDown})`;
			swiper.slides.forEach(slide => {
				if (slide !== swiper.slides[swiper.activeIndex]) {
					slide.querySelector('.title').style.transform = 'none';
					slide.querySelector('.subtitle').style.transform = 'none';
				}
			});
		}
		let h = document.querySelector('.bg-img').offsetHeight;
		document.querySelector('.swiper-container').style.height = h + 'px';
		console.log(h);
	</script>
	<!-- Owl Corousel -->
	<script src="owlcarousel/owl.carousel.min.js"></script>
	<!-- bulletin and slider -->
	<script type="text/javascript" src="js/bullet-script.js"></script>
	<!-- main js -->
	<script type="text/javascript" src="js/scripts.js"></script>
	<!-- navbar responsive -->
	<script type="text/javascript" src="js/responsive-navbar.js"></script>
</body>

</html>