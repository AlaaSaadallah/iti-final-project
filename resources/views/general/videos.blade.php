@extends ('layouts.guest')
@extends ('layouts.parent')
@extends ('layouts.teacher')
@extends ('layouts.student')
@section('content')
	<!-- /.navbar -->
 <div class="video">


		<header id="head" class="secondary">
            <div class="container">
                    <h1>Online Videos</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
                </div>
    </header>


	<!-- container -->
	<section class="container">
		<div class="row">
			<div class="col-md-12">
				<section id="portfolio" class="page-section section appear clearfix">
					<br />
					<br />
			
					<div class="row">
						<nav id="filter" class="col-md-12 text-center">
							<ul>
								<li><a href="#" class="current btn-theme btn-small" data-filter="*">All</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".webdesign">Handmade</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".photography">Sports</a></li>
								<li><a href="#" class="btn-theme btn-small" data-filter=".print">Competitions</a></li>
							</ul>
						</nav>
						<div class="col-md-12">
							<div class="row">
								<div class="portfolio-items isotopeWrapper clearfix" id="3">

									<article class="col-sm-4 isotopeItem webdesign">
										<div class="portfolio-item">
											<a href="#"><img src="../assets/images/portfolio/hand1.jpg" id="im" alt="" /></a>
											
										</div>
									</article>

									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
											<a href="#"><img src="../assets/images/portfolio/sport1.jpg" id="im2"alt="" /></a>
											
									</article>
									


									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
											<a href="#"><img src="../assets/images/portfolio/sport2.jpg" id="im3" alt="" /></a>
											
										</div>
									</article>

									<article class="col-sm-4 isotopeItem print">
										<div class="portfolio-item">
											<a href="#"><img src="../assets/images/portfolio/comp1.jpg" id="im5" alt="" /></a>
											
										</div>
									</article>

									<article class="col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
										<a href="#">	<img src="../assets/images/portfolio/sport3.jpg" id="im4" alt="" /></a>
											
										</div>
									</article>

									<article class="col-sm-4 isotopeItem webdesign">
										<div class="portfolio-item">
										<a href="#" ><img src="../assets/images/portfolio/hand2.jpg" id="im1" alt="" /></a>
											
										</div>
									</article>
									
									
									<!-- Handmade videos -->
									<div id="overlay" class="mo d-flex justify-content-center"  width="800px" height="600px">
										<br>
										<br>
										<a href="#"id="x" class="ml-100px" >X</a>
										<div class="youtube  d-flex justify-content-center" align="center" >
											<iframe width="700" height="400" src="https://www.youtube.com/embed/7z55PcTbJZw" frameborder="0"  allowfullscreen ></iframe>
												<h5>Project Title</h5>
												<i class="fa fa-link fa-2x"></i></a>
										</div>
									</div>
									

									<div id="overlay" class="modal d-flex justify-content-center" width="800px" height="600px">
										<br>
										<br>
										<a href="#"id="x7" class="ml-100px" >X</a>
										<div class="youtube  d-flex justify-content-center" align="center" >
											<iframe width="700" height="400" src="https://www.youtube.com/embed/7z55PcTbJZw" frameborder="0"  allowfullscreen ></iframe>
												<h5>Project Title</h5>
												<i class="fa fa-link fa-2x"></i></a>
										</div>
									</div>

									<!-- sports videos -->

									<div id="overlay" class="sport1 d-flex justify-content-center"  width="800px" height="600px">
										<br>
										<br>
										<a href="#"id="xx" class="ml-100px" >X</a>
									
										<div class="youtube  d-flex justify-content-center" align="center" >
											<iframe width="700" height="400" src="https://www.youtube.com/embed/7z55PcTbJZw" frameborder="0"  allowfullscreen ></iframe>
												<h5>Project Title</h5>
												<i class="fa fa-link fa-2x"></i></a>
										</div>
									</div>
									
									<div id="overlay" class="sport2 d-flex justify-content-center" width="800px" height="600px">
										<br>
										<br>
										<a href="#"id="x1" class="ml-100px" >X</a>
										<!-- <a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a> -->
										<div class="youtube  d-flex justify-content-center" align="center" >
											<iframe width="700" height="400" src="https://www.youtube.com/embed/7z55PcTbJZw" frameborder="0"  allowfullscreen ></iframe>
												<h5>Project Title</h5>
												<i class="fa fa-link fa-2x"></i></a>
										</div>
									</div>
									<div id="overlay" class="sport3 d-flex justify-content-center" width="800px" height="600px">
										<br>
										<br>
										<a href="#"id="x2" class="ml-100px" >X</a>
										<!-- <a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a> -->
										<div class="youtube  d-flex justify-content-center" align="center" >
											<iframe width="700" height="400" src="https://www.youtube.com/embed/7z55PcTbJZw" frameborder="0"  allowfullscreen ></iframe>
												<h5>Project Title</h5>
												<i class="fa fa-link fa-2x"></i></a>
										</div>
									</div>
									
									<div id="overlay" class="sport4 d-flex justify-content-center" width="800px" height="600px">
										<br>
										<br>
										<a href="#" id="x3" class="ml-100px" >X</a>
										<!-- <a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a> -->
										<div class="youtube  d-flex justify-content-center" align="center" >
											<iframe width="700" height="400" src="https://www.youtube.com/embed/7z55PcTbJZw" frameborder="0"  allowfullscreen ></iframe>
												<h5>Project Title</h5>
												<i class="fa fa-link fa-2x"></i></a>
										</div>
									</div>
									<!-- competition videos -->
									<div id="overlay" class="comp1 d-flex justify-content-center" width="800px" height="600px">
										<br>
										<br>
										<a href="#"id="x4" class="ml-100px" >X</a>
										<!-- <a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a> -->
										<div class="youtube  d-flex justify-content-center" align="center" >
											<iframe width="700" height="400" src="https://www.youtube.com/embed/7z55PcTbJZw" frameborder="0"  allowfullscreen ></iframe>
												<h5>Project Title</h5>
												<i class="fa fa-link fa-2x"></i></a>
										</div>
									</div>


									<div id="overlay" class="comp2 d-flex justify-content-center" width="800px" height="600px">
										<br>
										<br>
										<a href="#"id="x5" class="ml-100px" >X</a>
										<!-- <a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a> -->
										<div class="youtube  d-flex justify-content-center" align="center" >
											<iframe width="700" height="400" src="https://www.youtube.com/embed/7z55PcTbJZw" frameborder="0"  allowfullscreen ></iframe>
												<h5>Project Title</h5>
												<i class="fa fa-link fa-2x"></i></a>
										</div>
									</div>
									<div id="overlay" class="comp3 d-flex justify-content-center" width="800px" height="600px">
										<br>
										<br>
										<a href="#"id="x6" class="ml-100px" >X</a>
										<!-- <a title="Close" class="fancybox-item fancybox-close" href="javascript:;"></a> -->
										<div class="youtube  d-flex justify-content-center" align="center" >
											<iframe width="700" height="400" src="https://www.youtube.com/embed/7z55PcTbJZw" frameborder="0"  allowfullscreen ></iframe>
												<h5>Project Title</h5>
												<i class="fa fa-link fa-2x"></i></a>
										</div>
									</div>
									<!-- *** -->
									<article class="col-sm-4 isotopeItem print">
										<div class="portfolio-item">
											<a href="#"><img src="../assets/images/portfolio/comp2.jpg" id="im7" alt="" /></a>
											
										</div>
									</article>

									<article class=" col-sm-4 isotopeItem photography">
										<div class="portfolio-item">
										<a href="#"><img src="../assets/images/portfolio/sport4.jpg" id="im5" alt="" /></a>
										
										</div>
									</article>

									<div class="col-sm-4 isotopeItem print">
										<div class="portfolio-item">
										<a href="#"><img src="../assets/images/portfolio/comp3.jpg" id="im8" alt="" /> </a>
											
										</div>
									</div>
								</div>

							</div>


						</div>
					</div>

				</section>
			</div>
		</div>

	</section>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.cslider.js"></script>
	<script src="../assets/js/jquery.isotope.min.js"></script>
	<script src="../assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="../assets/js/custom.js"></script>
@yield('videos')
@endsection
   </div>