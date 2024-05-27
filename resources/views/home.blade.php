<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Rhythmic Pulse</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Styles -->
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style-color.css') }}" rel="stylesheet">
	<link href="{{ asset('fonts/fonticons.css') }}" rel="stylesheet">
	<link href="{{ asset('fonts/plugins.css') }}" rel="stylesheet">
</head>

<body>





	<!-- wrapper -->
	<div class="wrapper" id="home">

		<!-- header area -->
		<header>

			<!-- primary menu -->
			<nav class="navbar navbar-fixed-top navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>



					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#genre">Genre</a></li>
							<li><a href="#events">Upcoming Events</a></li>
							<li><a href="#searchmusic"> Search Playlist</a></li>
							<li><a href="#searchlyrics"> Search Lyrics</a></li>
							<li><a href="#bands">Bands</a></li>
							<li><a href="#course">Our Courses</a></li>
							<li><a href="#merch">Merchandise</a></li>
							<li><a href="#blog">Blog</a></li>
							<li><a href="#contact">Contact</a></li>
							<li><a href="/admin-only">Hi, Admin</a></li>
							<li> <a href="/profile/{{auth()->user()->username}}"><img class="avatar-tiny" src="{{auth()->user()->avatar}}" /></a> </li>

						</ul>

					</div>
				</div>
			</nav>
		</header>
		<!--/ header end -->

		<!-- banner area -->
		<div class="banner">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="{{ asset('media/banner.jpeg') }}" />
						<div class="container">
							<div class="carousel-caption slide-one">
								<h2 class="animated fadeInLeftBig"> Rhythmic Pulse - The Art of Music</h2>
								<h3 class="animated fadeInRightBig">Find More Innovative & Creative Music Albums...</h3>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="{{ asset('media/banner2.jpeg') }}" />
						<div class="container">
							<div class="carousel-caption slide-two">
								<h2 class="animated fadeInLeftBig">Explore It</h2>
								<h3 class="animated fadeInRightBig">Explore the art of music...</h3>
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
						At first, this wave of American bands seemed only unified in their <strong class="theme-color"> stance against Nu-Metal </strong>, but gradually a specific, well-defined genre unfolded, named Metalcore. It must be noted that Metalcore already had a long and experimental history before Nu Metal, emerging shortly after Crossover Thrash, but remaining rather obscure before the mid nineties. Instead of mutually aggravating each other towards the extreme like Grindcore, Metalcore is a <strong class="theme-color"> balanced mix of Hardcore and (Death) Metal </strong> elements, which undoubtedly has led to <strong class="theme-color"> longer, more complex </strong> songs. The song structure and mentality is still Hardcore, but with a <strong class="theme-color"> slower drum beat </strong> and <strong class="theme-color"> metallic single note </strong> guitars. Metalcore is the least emotional type of Hardcore, which has led to the hyperrational, technical Mathcore or Math Metal and Math Rock. Other, lesser known subgenres include <strong class="theme-color"> Melodic Metalcore, Noisecore, Deathcore, and Nintendocore </strong>. Metalcore is a forced marriage between Hardcore Punk and Metal in order to save both genres their legacies, despite mutual differences. Nevertheless, Metalcore’s numerous offspring subgenres prove the healthiness of this marriage in one way or another.
					</p>


				</div>
				<div class="genre">
					<h3> <strong class="theme-color"> PROGRESSIVE METAL </strong> </h3>
					<h4> <strong class="theme-color"> Active : </strong> 1974 </h4>
					<p>
						A few Heavy Metal bands (eventually more and more) <strong class="theme-color"> could not be classified </strong> within any existing genre. The metal community, more obsessed with genres and classification than any other music community, came up with progressive metal or Prog Metal. Yet it would be too easy to discard Progressive Metal as a residual non-genre. In the footsteps of Progressive Rock, Prog Metal bands experiment with <strong class="theme-color"> long, elaborately structured songs </strong> and adding <strong class="theme-color"> classical </strong> or <strong class="theme-color"> exotic elements </strong>. They thrive to make Metal sound more <strong class="theme-color"> intense, crisp and clean </strong>, yet unpredictable and non-formal. By doing so, Prog Metal also sounds somewhat <strong class="theme-color"> less heavy </strong> and thus gained less appeal. Most Progressive Metal uses more sound layers or tracks than other Metal genres, accompanied by a <strong class="theme-color"> steady rhythm </strong>. Prog Metal sounds like the delicate middle ground between Power Metal, Gothic Metal, and Thrash Metal. In this quest for metallic perfection, only a tiny handful of bands became known. The others remained shrouded in obscurity that they probably embraced.
						In recent years, Math Metal has given birth to one of the newest and most peculiar of Progressive Metal subgenres: <strong class="theme-color"> Djent </strong>. Djent is a Swedish Prog Metal subgenre based around a <strong class="theme-color"> special technique of guitar strokes </strong> that sound like the word “Djent”. The term Prog Metal became also somewhat outdated in the 21st century, and thus the latest wave of experimental Metal artists became known as <strong class="theme-color"> Post-Metal </strong>.
					</p>

				</div>
				<a class="genre-page" href="{{url('/genre')}}"> <button class="btn-outline-primary mb-3 btn-lg"> See More </button> </a>



			</div>

		</div>






		<!-- Hero block area -->

	</div>
	<!--/ hero end -->


	<!-- events -->
	<div class="events parallax-one pad" id="events">
		<div class="container">
			<div class="default-heading-shadow">
				<h2>Upcoming Events</h2>
				<hr>
			</div>
			<div class="events-element">
				<div class="row">

					@foreach($events as $event)
					<div class="col-md-6 col-sm-6">
						<div class="events-item ">
							<div class="figure">
								<div class="event-date">
									DATE : {{$event->event_date}}
									<div class="clearfix"></div>
									<span class="etime"> TIME : {{$event->event_time}} </span>
								</div>
								<span class="event-location">Location : {{$event->location}} </span>

								<img class="img-responsive" src="{{ asset('storage/events/' . basename($event->image)) }}" />

							</div>
							<div class="event-info">
								<h3>{{$event->name}}</h3>
								<hr />
								<p>{{ $event->description }}</p>
								<button href="#bookTicket" class="btn btn-lg btn-theme" data-toggle="modal">Book Ticket</button>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<!-- events end -->




	<!-- Search Music -->
	<div id="searchmusic" class="hero pad">
		<div class="container">
			<div class="default-heading">
				<h2>Search Playlist</h2>
				<hr>
				<p>Yes, you can search for your <strong class="theme-color"> favourite songs</strong> and get your own <strong class="theme-color"> favourite playlist</strong> according to your choice.</p>
			</div>
		</div>
		<a class="genre-page" href="/spotify"> <button class="btn-outline-primary mb-3 btn-lg"> Go To Playlist Search</button> </a>

	</div>
	<!--End Search Music -->

	<!-- Search Lyrics -->
	<div id="searchlyrics" class="hero pad">
		<div class="container">
			<div class="default-heading">
				<h2>Search Lyrics</h2>
				<hr>
				<p>Search for the <strong class="theme-color"> lyrics of your favourite songs</strong>.</p>
			</div>
		</div>
		<a class="genre-page" href="/music-lyrics"> <button class="btn-outline-primary mb-3 btn-lg"> Go To Lyrics Search</button> </a>

	</div>
	<!--End Search Lyrics -->

	<!-- bands -->
	<div id="bands" class="hero pad">
		<div class="container">
			<div class="default-heading">
				<h2>Bands</h2>
				<hr>
				<p>Search and know your <strong class="theme-color"> favourite music bands</strong> .</p>
			</div>
		</div>
		<a class="genre-page" href="/bands"> <button class="btn-outline-primary mb-3 btn-lg"> Go To Band</button> </a>

	</div>
	<!--End Search Music -->


	<!-- Our Courses start -->
	<div class="hero pad" id="course">

		<div class="default-heading">
			<h2>Our Courses</h2>
			<hr>
			<p> Rhythmic Pulse offers <strong class="theme-color"> vocal, guitar, piano, drumming and flute </strong> learning courses with our well trained instructors. </p>
			<p> Browse and <strong class="theme-color"> enroll now! </strong> </p>
		</div>


		<div id="lessons" class="lessons">
			<div class="container">


			</div>
		</div>


		<div class="course">
			<div class="course-container">
				<div class="course-box">
					<img class="img-course" src="{{ asset('media/guitar2.jpg') }}" />
					<div class="course-text">
						<h4 class="course-head"> Guitar Lesson </h2>
							<p> Utilizing the patented Rhythmic Pulse Method, our highly-trained professional instructors
								teach guitar lessons to beginners starting with the fundamentals, including scales, chords,
								tuning, arpeggios and rhythm. They then use famous rock songs to help guide guitar students
								through the early stages of musical development. Our beginner guitar lessons inspire creativity
								and help develop new students into world-class players with weekly private guitar lessons and
								group rehearsals. School of Rock's core philosophy is that the best way for students to gain musical proficiency is through performance-based music education.
								All of our lessons for guitar students include a performance aspect. </p>
							<h3 class="course-head"> Price : 3000 BTD / month </h3>

					</div>

				</div>


				<div class="course-box">
					<img class="img-course" src="{{ asset('media/drums.jpg') }}" />
					<div class="course-text">
						<h4 class="course-head"> Drums Lesson </h2>
							<p> We offer simple yet effective drum lessons for beginners that bypass entry-level pad training. Students get behind a drum kit during their
								first lesson to start learning how to play the drums. Through private drum lessons, group rehearsals, and live performances, students will learn introductory rudiments to drum
								fills and solos. We have been teaching drum lessons to kids and adults for decades and we have given more drummers a start in the business than any other music program in the world. Our core
								philosophy is that the best way for students to gain musical proficiency is through the
								patented method and performance-based music education. All of our programs include a performance aspect.
							<h3 class="course-head"> Price : 3500 BTD / month </h3>
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
							<h3 class="course-head"> Price : 3000 BTD / month </h3>

					</div>
				</div>
			</div>






			<div id="testimonial" class="testimonial">
				<div class="container">
					<div class="row">
						<div class="main_testimonial_area sections text-center">
							<div class="head_title">
								<h2>FROM THE INSTRUCTOR</h2>
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

							<a class="genre-page" href="/checkout"> <button class="btn-outline-primary mb-3 btn-lg"> Go To Payment</button> </a>





						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Our Courses end -->


	<div class="hero pad" id="merch">
		<div class="default-heading">
			<h2>Merchandise</h2>
			<hr>
		</div>

		<!-- call to action -->
		<div class="cta parallax-two pad">
			<div class="container">

				<div class="cta-element ">
					<div class="row">

						<div class="col-md-9 col-sm-8 ">
							<h3>Visit Our Merchandise</h3>
							<p>We connect people with varities of products related to music.</p>
						</div>
						<div class="col-md-3 col-sm-4">
							<div class="cta-btn text-center">
								<a class="genre-page" href="{{url('/merch')}}"> <button class="btn-outline-primary mb-3 btn-lg"> Go To Merch</button> </a>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Blog Start -->
		<div class="blog" id="blog">
			<div class="default-heading">
				<h2>Blog </h2>
				<hr>
				<p> Welcome to the blog section. You can write about your <strong class="theme-color"> thoughts and opinion </strong> related to music.
					You can also share your experience of any <strong class="theme-color"> concert </strong>
					you enjoyed, your <strong class="theme-color"> favourite </strong> music band or any <strong class="theme-color"> music album </strong> you loved. </p>

			</div>

			<a class="genre-page" href="/profile/{{auth()->user()->username}}"> <button class="btn-outline-primary mb-3 btn-lg"> Go To Blog</button> </a>


		</div>







		<!-- contact -->
		<div class="contact pad" id="contact">
			<div class="container">
				<div class="default-heading">
					<h2>Contact Us</h2>
					<hr>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="contact-item ">
							<span class="contact-details"> 6th Floor, House No:13, Road No:5, Gulshan-2, Dhaka, Bangladesh </span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="contact-item ">

							<span class="contact-details">music.site@rhythmic-pulse.com</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">

						<div class="contact-item ">



							<span class="contact-details">555 555 5555</span>
						</div>
					</div>
				</div>


				<section class="contact">
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

			</div>
		</div>
		<!-- contact end -->

	</div>

	<!-- modal for events ticket booking -->

	<div class="modal fade" id="bookTicket" tabindex="-1" role="dialog" aria-labelledby="bookTicket">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Buy Ticket &nbsp; </h4>
				</div>

				<form action="/home" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="modal-body">

						@if (session('error'))
						<div class="alert alert-danger">
							{{ session('error') }}
						</div>
						@endif

						<label>Email</label>
						<input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="example@mail.com">


						<label>Contact</label>
						<input name="contact" type="text" class="form-control" id="exampleInputContact" placeholder="+91 55 5555 5555">


						<label>Number of Tickets</label>
						<select name="number" class="form-control" id="exampleInputSeats">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>



						<label>Select Concert</label>
						<select name="event_name" class="form-control" id="exampleInputSeats">
							@foreach($events as $event)
							<option>{{$event->name}}</option>
							@endforeach
						</select>



					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Book Now</button>
					</div>
				</form>
			</div>
		</div>
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

	<script>
		window.embeddedChatbotConfig = {
			chatbotId: "zsfgSLfrUa_fiNT5tGByU",
			domain: "www.chatbase.co"
		}
	</script>
	<script src="https://www.chatbase.co/embed.min.js" chatbotId="zsfgSLfrUa_fiNT5tGByU" domain="www.chatbase.co" defer>
	</script>

	<link href="{{ asset('js/jquery.js') }}" rel="stylesheet">
	<script src="{{ asset('js/jquery.js') }}"></script>

	<link href="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

	<link href="{{ asset('js/waypoints.min.js') }}" rel="stylesheet">
	<script src="{{ asset('js/waypoints.min.js') }}"></script>

	<link href="{{ asset('js/owl.carousel.min.js') }}" rel="stylesheet">
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

	<link href="{{ asset('js/jquery.nav.js') }}" rel="stylesheet">
	<script src="{{ asset('js/jquery.nav.js') }}"></script>

	<link href="{{ asset('js/respond.min.js') }}" rel="stylesheet">
	<script src="{{ asset('js/respond.min.js') }}"></script>

	<link href="{{ asset('js/html5shiv.js') }}" rel="stylesheet">
	<script src="{{ asset('js/html5shiv.js') }}"></script>

	<link href="{{ asset('js/custom.js') }}" rel="stylesheet">
	<script src="{{ asset('js/custom.js') }}"></script>
	<link href="{{ asset('http://maps.google.com/maps/api/js') }}" rel="stylesheet">
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