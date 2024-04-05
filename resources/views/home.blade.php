<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Rhythmic Pulse</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="HimanshuGupta">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<!-- Animate CSS -->
		<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
		<!-- Basic stylesheet -->
        <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
		<!-- Font awesome CSS -->
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">	
		<!-- Custom CSS -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">	
        <link href="{{ asset('css/style-color.css') }}" rel="stylesheet">	
		<link href="{{ asset('fonts/fonticons.css') }}" rel="stylesheet">	
		<link href="{{ asset('fonts/plugins.css') }}" rel="stylesheet">	

		
		<!-- Favicon -->
		<link rel="shortcut icon" href="img/logo/favicon.ico">
	</head>
	
	<body>
		
		<!-- modal for booking ticket form -->
		<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="bookTicket">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Buy Ticket &nbsp; <small><span class="label label-success">Available</span> &nbsp; <span class="label label-danger">Not Available</span></small></h4>
					</div>
					<!-- form for events ticket booking -->
					<form>
						<div class="modal-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">
							</div>
							<div class="form-group">
								<label for="exampleInputContact">Contact</label>
								<input type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">
							</div>
							<div class="form-group">
								<label for="exampleInputSeats">Number of Tickets</label>
								<select class="form-control" id="exampleInputSeats">
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
							<div class="checkbox">
								<label>
									<input type="checkbox"> I accept the Terms of Service
								</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<!-- link to payment gatway here -->
							<button type="button" class="btn btn-primary">Book Now</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<!-- wrapper -->
		<div class="wrapper" id="home">
		
			<!-- header area -->
			<header>
				<!-- secondary menu -->
				<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<div class="sm-left">
							<strong>Phone</strong>:&nbsp; <a href="#">555 555 555</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<strong>E-mail</strong>:&nbsp; <a href="#">music.site@melodi.com</a>
						</div>
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								<a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
				<!-- primary menu -->
				<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- logo area -->
							<a class="navbar-brand" href="#home">
								<!-- logo image -->
								<img class="img-responsive" src="img/logo.png" alt="" />
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
                                <li><a href="#genre">Genre</a></li>
								<li><a href="#latestalbum">Latest Album</a></li>
								<li><a href="#featuredalbum">Featured Album</a></li>
								<li><a href="#events">Upcoming Events</a></li>
								<li><a href="#blog">Blog</a></li>
                                <li><a href="#course">Our Courses</a></li>
                                <li><a href="#merch">Merchandise</a></li>
                                <li><a href="#joinus">Join Us</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="#contact">Hi, Admin</a></li>
								<li> <a href="/profile/{{auth()->user()->username}}"><img class="avatar-tiny" src="{{auth()->user()->avatar}}" /></a> </li>
								
							</ul>
							
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--/ header end -->
			
			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
                            <img src="{{ asset('media/banner.jpg') }}" />
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i> Rhythmic Pulse - The Art of Music</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Find More Innovative &amp; Creative Music Albums.</h3>
								</div>
							</div>
						</div>
						<div class="item">
                        <img src="{{ asset('media/person-singing.jpg') }}" />
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Listen It...</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Lorem ipsum dolor sit amet, consectetur elit.</h3>
									<!-- button -->
									<a href="#" class="animated fadeIn btn btn-theme">Listen Now</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<!--/ banner end -->
			
			<!-- block for animate navigation menu -->
			<div class="nav-animate"></div>


            


            <!-- Genre Introduction -->
            <div id="genre" class="hero pad">
                <div class="container">
                    <div class="default-heading">
                        <h2>Genre</h2>
                        <hr>
                        <p>Music is an art form and cultural activity whose medium is sound organized in time. The common elements of music are <strong class="theme-color">pitch</strong>, <strong class="theme-color">rhythm</strong>, <strong class="theme-color">dynamics</strong> and the sonic qualities of <strong class="theme-color">timbre</strong> and <strong class="theme-color">texture</strong>.</p>
						
					</div>
                </div>


				

                <div class="music-genres">
                <div class="genre">
                    <h3> <strong class="theme-color"> METALCORE </strong></h3>
					<h4> <strong class="theme-color"> Active : </strong> 1980 </h4>
                    <p>
                    At first, this wave of American bands seemed only unified in their  <strong class="theme-color"> stance against Nu-Metal </strong>, but gradually a specific, well-defined genre unfolded, named Metalcore. It must be noted that Metalcore already had a long and experimental history before Nu Metal, emerging shortly after Crossover Thrash, but remaining rather obscure before the mid nineties. Instead of mutually aggravating each other towards the extreme like Grindcore, Metalcore is a <strong class="theme-color"> balanced mix of Hardcore and (Death) Metal </strong> elements, which undoubtedly has led to <strong class="theme-color"> longer, more complex </strong> songs. The song structure and mentality is still Hardcore, but with a <strong class="theme-color"> slower drum beat </strong> and <strong class="theme-color"> metallic single note </strong> guitars. Metalcore is the least emotional type of Hardcore, which has led to the hyperrational, technical Mathcore or Math Metal and Math Rock. Other, lesser known subgenres include <strong class="theme-color"> Melodic Metalcore, Noisecore, Deathcore, and Nintendocore </strong>. Metalcore is a forced marriage between Hardcore Punk and Metal in order to save both genres their legacies, despite mutual differences. Nevertheless, Metalcore’s numerous offspring subgenres prove the healthiness of this marriage in one way or another.
                    </p>

                    
                </div>
                <div class="genre">
                    <h3> <strong class="theme-color"> PROGRESSIVE METAL </strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1974 </h4>
                    <p>
                    A few Heavy Metal bands (eventually more and more) <strong class="theme-color"> could not be classified </strong> within any existing genre. The metal community, more obsessed with genres and classification than any other music community, came up with progressive metal or Prog Metal. Yet it would be too easy to discard Progressive Metal as a residual non-genre. In the footsteps of Progressive Rock, Prog Metal bands experiment with <strong class="theme-color"> long, elaborately structured songs </strong> and adding <strong class="theme-color"> classical </strong> or <strong class="theme-color"> exotic elements </strong>. They thrive to make Metal sound more <strong class="theme-color"> intense, crisp and clean </strong>, yet unpredictable and non-formal. By doing so, Prog Metal also sounds somewhat <strong class="theme-color"> less heavy </strong> and thus gained less appeal. Most Progressive Metal uses more sound layers or tracks than other Metal genres, accompanied by a <strong class="theme-color"> steady rhythm </strong>. Prog Metal sounds like the delicate middle ground between Power Metal, Gothic Metal, and Thrash Metal. In this quest for metallic perfection, only a tiny handful of bands became known. The others remained shrouded in obscurity that they probably embraced.
                    In recent years, Math Metal has given birth to one of the newest and most peculiar of Progressive Metal subgenres: <strong class="theme-color"> Djent </strong>. Djent is a Swedish Prog Metal subgenre based around a <strong class="theme-color"> special technique of guitar strokes </strong> that sound like the word “Djent”. The term Prog Metal became also somewhat outdated in the 21st century, and thus the latest wave of experimental Metal artists became known as <strong class="theme-color"> Post-Metal </strong>.
                    </p>

                </div>
				<a class="genre-page" href="{{url('/genre')}}"> <button class="btn-outline-primary mb-3 btn-lg"> Go To Genre</button>  </a>


				
            </div>

            </div>
            




			
			<!-- Hero block area -->
			<div id="latestalbum" class="hero pad">
				<div class="container">
					<!-- hero content -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Latest Album</h2>
						<hr>
						<!-- paragraph -->
						<p>We sing the best <strong class="theme-color">Songs</strong> and now we control the world best <strong class="theme-color">Music</strong>.</p>
					</div>
                </div>
					<!-- hero play list -->
					<div class="hero-playlist">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- music album image -->
								<div class="figure">
									<!-- image -->
									<img class="img-responsive"  src="{{ asset('media/1.jpg') }}" />
									<!-- disk image -->
                                    <img class="img-responsive"  src="{{ asset('media/disk.jpg') }}" />
									
								</div>
								<!-- album details -->
								<div class="album-details">
									<!-- title -->
									<h4>Perfect Melodi</h4>
									<!-- composed by -->
									<h5>By Himanshu</h5>
									<!-- paragraph -->
									<p>Lorem Ipsum has been the industry's standard dummy text ever since 1500.</p>
									<!-- button -->
									<a href="#" class="btn btn-lg btn-theme" id="playNowBtn"><i class="fa fa-play"></i>&nbsp; Play Now</a>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- play list -->
								<div class="playlist-content">
									<ul class="list-unstyled">
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>Melodi Song Track One</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<a href="#"><i class="fa fa-play"></i></a>
												<a href="#"><i class="fa fa-pause"></i></a>
											</div>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>Melodi Song Track Two</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<a href="#"><i class="fa fa-play"></i></a>
												<a href="#"><i class="fa fa-pause"></i></a>
											</div>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>Melodi Song Track Three</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<a href="#"><i class="fa fa-play"></i></a>
												<a href="#"><i class="fa fa-pause"></i></a>
											</div>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>Melodi Song Track Four</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<a href="#"><i class="fa fa-play"></i></a>
												<a href="#"><i class="fa fa-pause"></i></a>
											</div>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>Melodi Song Track Five</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<a href="#"><i class="fa fa-play"></i></a>
												<a href="#"><i class="fa fa-pause"></i></a>
											</div>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>Melodi Song Track Six</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<a href="#"><i class="fa fa-play"></i></a>
												<a href="#"><i class="fa fa-pause"></i></a>
											</div>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>Melodi Song Track Seven</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<a href="#"><i class="fa fa-play"></i></a>
												<a href="#"><i class="fa fa-pause"></i></a>
											</div>
											<div class="clearfix"></div>
										</li>
										<li class="playlist-number">
											<!-- song information -->
											<div class="song-info">
												<!-- song title -->
												<h4>Melodi Song Track Eight</h4>
												<p><strong>Album</strong>: Title &nbsp;|&nbsp; <strong>Type</strong>: Rock &nbsp;|&nbsp; <strong>Singer</strong>: Dawn</p>
											</div>
											<!-- music icon -->
											<div class="music-icon">
												<a href="#"><i class="fa fa-play"></i></a>
												<a href="#"><i class="fa fa-pause"></i></a>
											</div>
											<div class="clearfix"></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ hero end -->
			
			<!-- promo -->
			<div class="promo parallax-one pad">
				<div class="container">
					<!-- promo element -->
					<div class="promo-element ">
						<!-- heading -->
						<h3>Music An Art...</h3>
						<!-- paragraph -->
						<p>Music is an art form and cultural activity whose medium is sound organized in time. The common elements of music are <strong>pitch</strong>, <strong>rhythm</strong>, <strong>dynamics</strong> and the sonic qualities of <strong>timbre</strong> and <strong>texture</strong>.</p>
						<!-- link -->

					</div>
				</div>
			</div>
			<!--/ promo end -->
			
			<!-- featured abbum -->
			<div class="featured pad" id="featuredalbum">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Featured Album</h2>
                        <hr>
					</div>
					<!-- featured album elements -->
					<div class="featured-element">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
                                        <img class="img-responsive" src="{{ asset('media/featured.jpg') }}" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Power Pop</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="{{ asset('media/featured.jpg') }}" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Bad Brains</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="{{ asset('media/featured.jpg') }}" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>The Mars Volta</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="{{ asset('media/featured.jpg') }}" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Dirty Dancing</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="{{ asset('media/featured.jpg') }}" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Hotel California</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<!-- featured item -->
								<div class="featured-item ">
									<!-- image container -->
									<div class="figure">
										<!-- image -->
										<img class="img-responsive" src="{{ asset('media/featured.jpg') }}" />
										<!-- paragraph -->
										<p>There are many variations of passages available, but the majority have suffered Lorem alteration in some form, by injected look even slightly believable.</p>
									</div>
									<!-- featured information -->
									<div class="featured-item-info">
										<!-- featured title -->
										<h4>Punk Compilation</h4>
										<!-- horizontal line -->
										<hr />
										<!-- some responce from social medial or web likes -->
										<p>1024+ <span class="label label-theme">Like</span> &nbsp;&nbsp; 825+ <span class="label label-theme">Love</span></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- features end -->
			
			<!-- call to action -->
			<div class="cta parallax-one pad">
				<div class="container">
					<!-- cta element -->
					<div class="cta-element ">
						<div class="row">
							<div class="col-md-9 col-sm-8">
								<!-- heading -->
								<h3>Melodi, A Fully Rock Album Pro</h3>
								<!-- paragraph -->
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim sectetur adipiscing elit, sed do eiusmod tempoad minim veniam consequat.</p>
							</div>
							<div class="col-md-3 col-sm-4">
								<div class="cta-btn text-center">
									<!-- purchase now button -->
									<a href="#" class="btn btn-default btn-lg">Download Now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ cta end -->
			
			<!-- work with us -->
			<div class="work-with-us pad" id="joinus">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Work With Us</h2>
                        <hr>
					</div>
					<!-- why work with us content -->
					<div class="why-content">
						<!-- paragraph -->
						<p class="why-message">It would be a great pleasure to have you in our team, follow these steps to join us.</p>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-one">
									<span class="why-number">1</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accus antium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-two">
									<span class="why-number">2</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accu santium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-three">
									<span class="why-number">3</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accus antium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<!-- why work with us item -->
								<div class="why-item  delay-four">
									<span class="why-number">4</span>
									<!-- paragraph -->
									<p>Sed ut perspi ciatis unde omnis iste natus error sit vol uptatem accus antium totam rem aperiam, eaque ipsa quae ab illo inventore veritatisnatus.</p>
								</div>
							</div>
						</div>
						<!-- apply button -->
						<div class="apply-btn">
							<!-- button line -->
							<a class="btn btn-lg btn-theme" href="#">Join Now</a>
						</div>
					</div>
				</div>
			</div>
			<!--/ end work with us -->
	
			

			
			<!-- events -->
			<div class="events parallax-one pad" id="events">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading-shadow">
						<!-- heading -->
						<h2>Coming Events</h2>
                        <hr>
					</div>
					<!-- events element -->
					<div class="events-element">
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											24 <span class="emonth">Jan</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">06:30 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> New York</span>
										<!-- image -->
                                        <img class="img-responsive" src="{{ asset('media/event.jpg') }}" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Sound Of melodi In Instrumesnts</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											31 <span class="emonth">Jan</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">09:45 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> Romania</span>
										<!-- image -->
										<img class="img-responsive" src="{{ asset('media/event.jpg') }}" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Rock Music Festival at City Life Mall</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											14 <span class="emonth">Feb</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">10:30 am</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> New Delhi</span>
										<!-- image -->
										<img class="img-responsive" src="{{ asset('media/event.jpg') }}" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Fashion Show Light At Hollywood</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<!-- event item -->
								<div class="events-item ">
									<!-- image container -->
									<div class="figure">
										<!-- event date -->
										<div class="event-date">
											31 <span class="emonth">Mar</span>
											<div class="clearfix"></div>
											<!-- time -->
											<span class="etime">10:00 pm</span>
										</div>
										<!-- event location -->
										<span class="event-location"><i class="fa fa-map-marker"></i> New Delhi</span>
										<!-- image -->
										<img class="img-responsive" src="{{ asset('media/event.jpg') }}" />
										<!-- image hover -->
										<div class="img-hover">
											<!-- hover icon -->
											<a href="#"><i class="fa fa-play-circle"></i></a>
										</div>
									</div>
									<!-- event information -->
									<div class="event-info">
										<!-- event title -->
										<h3>Fashion Show Light At Hollywood</h3>
										<!-- horizontal line --><hr />
										<!-- paragraph -->
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua, sed doconsect etur eiusmod teme et dolore magna aliqua... <a href="#">more</a></p>
										<!-- buy ticket button link -->
										<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal" >Book Ticket</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- events end -->


			<!-- Our Courses start -->
			<div class="hero pad" id="course">

					<!-- default heading -->
					<div class="default-heading">
						<h2>Our Courses</h2>
						<hr>
						<p> Rhythmic Pulse offers <strong class="theme-color"> vocal, guitar, piano, drumming and flute </strong> learning courses with our well trained instructors. </p>
						<p> Browse and <strong class="theme-color"> enroll now! </strong> </p>
					</div>

					
					<div id="lessons" class="lessons">
            			<div class="container">
                <div class="row">
                    <div class="main_lessons">
                        <div class="col-sm-8 col-sm-offset-1">
                            <div class="main_lessons_area sections">
                                <div class="lesson_title">
                                    <h1> <strong class="theme-color"> OUR LESSONS</strong> </h1>
                                    <p>ARE EASY</p>
                                </div>
                                <div class="lesson_content">
                                    <ul class="lessonsborder">
                                        <li> <i class="fa fa-clone"></i> <p>Get lessons from our <strong class="theme-color"> well trained </strong> instructors.</p></li>
                                        <li> <i class="fa fa-globe"></i> <p> <strong class="theme-color"> Recorded class, questions </strong> and personal sessions.</p></li>
                                        <li> <i class="lnr lnr-rocket"></i> <p>Weekly assignment and <strong class="theme-color"> progress update </strong> .</p></li>
                                        <li> <i class="lnr lnr-volume-high"> </i> <p> Get <strong class="theme-color"> lifetime membership </strong> of any course if you buy once.</p></li>

                                    </ul>
                                </div>
                            </div>
                        </div>

						

                </div>
				
            </div>
			
		</div>
				</div>


				<div class="course">
					<div class="course-container">
						<div class="course-box">
						<img class="img-course" src="{{ asset('media/guitar2.jpg') }}" />
						<div class="course-text">
							<h4 class="course-head"> Guitar Lesson </h2>
							<p>  Utilizing the patented Rhythmic Pulse Method, our highly-trained professional instructors 
								teach guitar lessons to beginners starting with the fundamentals, including scales, chords, 
								tuning, arpeggios and rhythm. They then use famous rock songs to help guide guitar students 
								through the early stages of musical development. Our beginner guitar lessons inspire creativity
								 and help develop new students into world-class players with weekly private guitar lessons and 
								 group rehearsals. School of Rock's core philosophy is that the best way for students to gain musical proficiency is through performance-based music education.
								 All of our lessons for guitar students include a performance aspect. </p>
								 
						</div>
						</div>


						<div class="course-box">
						<img class="img-course" src="{{ asset('media/drums.jpg') }}" />
						<div class="course-text">
							<h4 class="course-head"> Drums Lesson </h2>
							<p>  We offer simple yet effective drum lessons for beginners that bypass entry-level pad training. Students get behind a drum kit during their 
								first lesson to start learning how to play the drums. Through private drum lessons, group rehearsals, and live performances, students will learn introductory rudiments to drum 
								fills and solos. We have been teaching drum lessons to kids and adults for decades and we have given more drummers a start in the business than any other music program in the world. Our core
								 philosophy is that the best way for students to gain musical proficiency is through the
								 patented method and performance-based music education. All of our programs include a performance aspect.

						</div>
						</div>

						


						<div class="course-box">
						<img class="img-course" src="{{ asset('media/piano.jpg') }}" />
						<div class="course-text">
							<h4 class="course-head"> Keyboard & Piano Lesson </h2>
							<p>Our keyboard lessons are vastly different from traditional one-on-one beginner piano lessons that most students end up dreading. Our keyboard teachers get
								 students to love the keyboard (and piano) by teaching them to play popular rock songs while implementing basic concepts and skills like finger placement,
								 scales, pedaling, key differentiation and rhythm. We start with private keyboard lessons paired with band rehearsals to prepare our piano students to play a live gig 
								 with a full band. The patented School of Rock Method builds musical proficiency through our proprietary Method App, Method Book collection, SongFirst approach, and performance-based music curriculum. All of our lessons programs include a performance aspect.</p>
							
						</div>
						</div>
						</div>


						<div id="testimonial" class="testimonial">
            <div class="container">
                <div class="row">
                    <div class="main_testimonial_area sections text-center">
                        <div class="head_title">
                            <h2>TESTIMONIALS</h2>
                            <div class="separator"></div>
                        </div>
                        <div class="main_testimonial_content">
                            <div class="single_testimonial">
                                <div class="single_test_thumbnail">
								<img class="img-responsive" src="{{ asset('media/man.png') }}" />
                                </div>
                                <div class="single_test_content">
								<p>Hey there!</p> <br>
                                    <p> I have been teaching music lesson for more than 5 years. Music is not just a subject to me; it's a lifelong passion that I am eager to share with others.
                                         I believe that music education goes beyond learning notes and chords; it fosters creativity, discipline, and confidence in individuals.
                                          Whether it's teaching the fundamentals of rhythm and melody to beginners or guiding advanced students in their musical journeys,
                                           I am committed to providing a nurturing and enriching learning environment. <br>

                                        Throughout my career, I have had the privilege of witnessing the transformative power of music in the lives of my students.
										 From helping a shy beginner find their voice to preparing talented musicians for prestigious performances, every moment in the classroom is a reminder of the impact 
										 music can have. </p>

                                    <div class="single_author_content">
                                        <h2>Abir Rahman</h2>
                                        <p>Music Teacher</p>
                                    </div>
                                </div>
                            </div>
                        </div>


						


						<div class="head_title">
                            <h2>FAQ</h2>
                            <div class="separator"></div>
                        </div>




                    </div>
                </div>
            </div>
</div>

				</div>
			</div>


						<!-- Blog Start -->
						<div class="blog parallax-five pad" id="blog">
				<!-- default heading -->
				<div class="default-heading-shadow">
						<h2>Blog </h2>
						<hr>
						<p> Welcome to the blog section. You can write about your <strong class="theme-color"> thoughts and opinion </strong> related to music. 
							You can also share your experience of any <strong class="theme-color"> concert </strong>
							you enjoyed, your <strong class="theme-color"> favourite </strong> music band or any <strong class="theme-color"> music album </strong> you loved. </p>
							 
				</div>
				<li> <a href="/profile/{{auth()->user()->username}}"><img class="avatar-tiny" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a> </li>
				<a class="genre-page" href="/profile/{{auth()->user()->username}}"> <button class="btn-outline-primary mb-3 btn-lg"> Go To Blog</button>  </a>


			</div>





	
				


			
			
			
			<!-- contact -->
			<div class="contact pad" id="contact">
				<div class="container">
					<!-- default heading -->
					<div class="default-heading">
						<!-- heading -->
						<h2>Contact Us</h2>
                        <hr>
					</div>
					<div class="row">	
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-street-view"></i>
								<!-- contact details  -->
								<span class="contact-details">#30/67, 5th Street, Mega Market Circle, New Delhi - 625001</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-wifi"></i>
								<!-- contact details  -->
								<span class="contact-details">music.site@melodi.com</span>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<!-- contact item -->
							<div class="contact-item ">
								<!-- big icon -->
								<i class="fa fa-phone"></i>
								<!-- contact details  -->
								<span class="contact-details">555 555 5555</span>
							</div>
						</div>
					</div>


					<section  class="contact">
            <div class="ourmaps">
                <div class="container">

                    <div class="row">
                        <div class="main_maps">
                            <div class="maps"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


					<!-- form content -->
					<div class="form-content ">
						<!-- paragraph -->
						<p>Do you have any idea in your mind? Drop us a line.</p>
						<form role="form" id="contactForm" method="post">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
									</div>
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone">
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="message">Message</label>
										<textarea class="form-control" id="message" name="message" rows="9" placeholder="Enter message"></textarea>
									</div>
								</div>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-lg btn-theme">Send Message</button>
							</div>
						</form>
												
					</div>

				</div>
			</div>
			<!-- contact end -->
			
		
			
			<!-- Scroll to top -->
			<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 
			
		</div>

		<section id="footer_widget" class="footer_widget">
            <div class="container">
                <div class="row">
                    <div class="main_widget">


                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <div class="footer_logo">
                                        <img src="assets/images/logo2.png" alt="" />
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. 
                                        Etiam tempor odio tellus, at bibendum neque faucibus quis. Sed vel facilisis elit. </p>
                                    <p>Nullam fringilla pharetra diam non accumsan. Morbi eget aliquam mauris. 
                                        Etiam vehicula efficitur mi.</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4 class="footer_title">CONTACT</h4>
                                    <div class="separator3"></div>
                                    <ul>
                                        <li><a href=""><i class="fa fa-envelope"></i> info@guitarlessons.com</a></li>
                                        <li><a href=""><i class="fa fa-phone"></i> 0123 456 789 0112</a></li>
                                        <li><a href=""><i class="fa fa-map-marker"></i> Greenplatz Ben 29, Germany 60435</a></li>
                                        <li><a href=""><i class="fa fa-fax"></i> (0012) 654 356 445</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="single_widget wow fadeIn" data-wow-duration="800ms">
                                    <h4 class="footer_title">LATEST NEWS</h4>
                                    <div class="separator3"></div>
                                    <ul>
                                        <li class="single_latest_news">
                                            <p class="latest_date">02.08.2015</p>
                                            <p class="subtitle">Etiam tempor odio tellus.</p>
                                            <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus.</p>
                                        </li>

                                        <li class="single_latest_news">
                                            <p class="latest_date">02.08.2015</p>
                                            <p class="subtitle">Etiam tempor odio tellus.</p>
                                            <p class="details">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in egestas lectus. Etiam tempor odio tellus.</p>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </section>
		
		<!-- Javascript files -->
		<!-- jQuery -->
        <link href="{{ asset('js/jquery.js') }}" rel="stylesheet">
        <script src="{{ asset('js/jquery.js') }}"></script> 

		<!-- Bootstrap JS -->
        <link href="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet">
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 

		<!-- WayPoints JS -->
        <link href="{{ asset('js/waypoints.min.js') }}" rel="stylesheet">
        <script src="{{ asset('js/waypoints.min.js') }}"></script> 

		<!-- Include js plugin -->
        <link href="{{ asset('js/owl.carousel.min.js') }}" rel="stylesheet">
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script> 

		<!-- One Page Nav -->
        <link href="{{ asset('js/jquery.nav.js') }}" rel="stylesheet">
        <script src="{{ asset('js/jquery.nav.js') }}"></script> 

		<!-- Respond JS for IE8 -->
        <link href="{{ asset('js/respond.min.js') }}" rel="stylesheet">
        <script src="{{ asset('js/respond.min.js') }}"></script> 

		<!-- HTML5 Support for IE -->
        <link href="{{ asset('js/html5shiv.js') }}" rel="stylesheet">
        <script src="{{ asset('js/html5shiv.js') }}"></script> 

		<!-- Custom JS -->
        <link href="{{ asset('js/custom.js') }}" rel="stylesheet">
        <script src="{{ asset('js/custom.js') }}"></script><link href="{{ asset('http://maps.google.com/maps/api/js') }}" rel="stylesheet">
        <script src="{{ asset('http://maps.google.com/maps/api/js') }}"></script>

        <link href="{{ asset('js/gmaps.min.js') }}" rel="stylesheet">
        <script src="{{ asset('js/gmaps.min.js') }}"></script>

        <script>
            var map = new GMaps({
                el: '.ourmaps',
                scrollwheel: false,
                lat: 23.8041,
                lng: 90.4152
            });
		</script>




	</body>	
</html>