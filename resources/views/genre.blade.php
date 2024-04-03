<!DOCTYPE HTML>
<html>
<head>
<title>Genre</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">
<link href="{{ asset('css/style.css') }}" rel="stylesheet">	
<link href="{{ asset('css/genre.css') }}" rel="stylesheet">	
<link href="{{ asset('css/style-color.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">		
</head>
<body>

<header>
				<!-- secondary menu -->
				<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<div class="sm-left">
							<strong>Phone</strong>:&nbsp; <a href="#">555 555 555</a>&nbsp;&nbsp;&nbsp;&nbsp;
							<strong>E-mail</strong>:&nbsp; <a href="#">music.site@melodi.com</a>
						</div>
					</div>
				</nav>

			</header>

<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
                      <img src="{{ asset('media/Nu-Metal.jpeg') }}" />
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"> Rhythmic Pulse - <strong class="theme-color"> The Art </strong> of Music</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Welcome to the <strong class="theme-color"> Genre Introduction </strong> Page.</h3>
								</div>
							</div>
						</div>


						<div class="item">
              <img src="{{ asset('media/lamb-of-god.jpeg') }}" />
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"> Know Your <strong class="theme-color"> Genre... </strong> </h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig"> Learn about different <strong class="theme-color"> music genres </strong>.</h3>
								</div>
							</div>
						</div>


            <div class="item">
              <img src="{{ asset('media/genre.jpeg') }}" />
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"> <strong class="theme-color"> Listen </strong> It...</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig"> Find different <strong class="theme-color"> music bands </strong> of different genres.</h3>
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


<div id="container">

  <div id="wrapper">
  <div id="navigation">
    <ul class="nav navbar-nav navbar-right">
      <li class="playlist-number"><a href="#content" onclick="changeContent('metalcore')">METALCORE</a></li>
      <li class="playlist-number"><a href="#content" onclick="changeContent('progressive')">PROGRESSIVE METAL</a></li>
      <li class="playlist-number"><a href="#content" onclick="changeContent('power')">POWER METAL</a></li>
      <li class="playlist-number"><a href="#content" onclick="changeContent('death')">DEATH METAL</a></li>
      <li class="playlist-number"><a href="#content" onclick="changeContent('black')">BLACK METAL</a></li>
      <li class="playlist-number"><a href="#content" onclick="changeContent('alter')">ALTERNATIVE ROCK</a></li>
      <li class="playlist-number"><a href="#content" onclick="changeContent('asian')">ASIAN POP</a></li>
      <li class="playlist-number"><a href="#content" onclick="changeContent('folk')">FOLK ROCK</a></li>
      <li class="playlist-number"><a href="#content" onclick="changeContent('prog-rock')">PROGRESSIVE ROCK</a></li>
      <li class="playlist-number"><a href="#content" onclick="changeContent('punk-rock')">PUNK ROCK</a></li>
      <a href="{{url('/home')}}"> <button class="btn btn-primary"> Back To Home </button>  </a>
    </ul>
  </div>
    <div id="content">

    <div id="home" class="content-section">
        <p>
          Welcome to <strong class="theme-color"> Genre Introduction page</strong> . Here you will find the introduction of different music genres. Click on the genre name to know more about the genre.
          Also you can <strong class="theme-color"> play the video </strong> to listen the music of the genre and <strong class="theme-color"> play quiz games </strong> to test your knowledge about the genre.

        </p>

    </div>



    <div id="metalcore" class="content-section" style="display: none;">
    <h3> <strong class="theme-color"> METALCORE </strong></h3>
		<h4> <strong class="theme-color"> Active : </strong> 1980 </h4>
      <p> At first, this wave of American bands seemed only unified in their  <strong class="theme-color"> stance against Nu-Metal </strong>, but gradually a specific, well-defined genre unfolded, named Metalcore. It must be noted that Metalcore already had a long and experimental history before Nu Metal, emerging shortly after Crossover Thrash, but remaining rather obscure before the mid nineties. Instead of mutually aggravating each other towards the extreme like Grindcore, Metalcore is a <strong class="theme-color"> 
        balanced mix of Hardcore and (Death) Metal </strong> elements, which undoubtedly has led to <strong class="theme-color"> longer, more complex </strong> songs. The song structure and mentality is still Hardcore, but with a <strong class="theme-color"> slower drum beat </strong> 
        and <strong class="theme-color"> metallic single note </strong> guitars. Metalcore is the least emotional type of Hardcore, which has led to the hyperrational, technical Mathcore or Math Metal and Math Rock.
         <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/9kgQQuPZ8K0?si=02X_5NlXcGzCplwu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
           Other, lesser known subgenres include <strong class="theme-color"> Melodic Metalcore, Noisecore, Deathcore, and Nintendocore </strong>. Metalcore is a forced marriage between Hardcore Punk and Metal in order to save both genres their legacies, despite mutual differences. Nevertheless, Metalcore's numerous offspring subgenres prove the healthiness of this marriage in one way or another.</p>
      
    </div>


    <div id="progressive" class="content-section" style="display: none;">
    <h3> <strong class="theme-color">PROGRESSIVE METAL </strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1974 </h4>
              <p>
                    A few Heavy Metal bands (eventually more and more) <strong class="theme-color"> could not be classified </strong> within any existing genre. The metal community, more obsessed with genres and classification than any other music community, came up with progressive metal or Prog Metal. Yet it would be too easy to discard Progressive Metal as a residual non-genre. In the footsteps of Progressive Rock, Prog Metal bands experiment with
                     <strong class="theme-color"> long, elaborately structured songs </strong> and adding <strong class="theme-color"> classical </strong> or <strong class="theme-color"> exotic elements </strong>. They thrive to make Metal sound more <strong class="theme-color"> intense, crisp and clean </strong>, yet unpredictable and non-formal. By doing so, Prog Metal also sounds somewhat <strong class="theme-color"> less heavy </strong> and thus gained less appeal.
                     <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/9kgQQuPZ8K0?si=02X_5NlXcGzCplwu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                     Most Progressive Metal uses more sound layers or tracks than other Metal genres, accompanied by a <strong class="theme-color"> steady rhythm </strong>. Prog Metal sounds like the delicate middle ground between Power Metal, Gothic Metal, and Thrash Metal. In this quest for metallic perfection, only a tiny handful of bands became known. The others remained shrouded in obscurity that they probably embraced.
                    In recent years, Math Metal has given birth to one of the newest and most peculiar of Progressive Metal subgenres: <strong class="theme-color"> Djent </strong>. Djent is a Swedish Prog Metal subgenre based around a <strong class="theme-color"> special technique of guitar strokes </strong> that sound like the word “Djent”. The term Prog Metal became also somewhat outdated in the 21st century, and thus the latest wave of experimental Metal artists became known as <strong class="theme-color"> Post-Metal </strong>.
              </p>
    </div>


    <div id="power" class="content-section" style="display: none;">
    <h3> <strong class="theme-color">POWER METAL</strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1977 </h4>
              <p>
              Power Metal is a lesser known but properly defined kind of Heavy Metal that started in the seventies (particularly in <strong class="theme-color"> Germany </strong> ) and still has a dedicated fanbase today. Power Metal is not really heavy; first and foremost it's <strong class="theme-color"> high and fast </strong> .
              
              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/tpogLbU8zlA?si=Hk8yv9YaJOpyYfsp" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

              The lyrics often tell <strong class="theme-color"> fictional fantasy </strong> tales about warriors, knights, dragons and whatnot and are almost always sung in a <strong class="theme-color"> high pitched male voice </strong>. Furthermore the music is filled with <strong class="theme-color"> melodies and drum rolls </strong> , building up and breaking down, like a rollercoaster ride filled with <strong class="theme-color"> energy and enthusiasm </strong> . The difference between the speedy and <strong class="theme-color"> guitar solo-oriented </strong> types of Classic Metal (of which Power Metal evolved, like e.g. early Van Halen) and Power Metal is that the latter seems to constantly maintain its high velocity and even higher frequency, as if it's being <strong class="theme-color"> overcharged </strong> with electricity. Power Metal is a genre that never really influenced other genres or evolved in another one. As such it remained a <strong class="theme-color"> long-lasting parallel Metal stream </strong>, though easily eclipsed by the bigger Metal genres.
              </p>
    </div>

    <div id="death" class="content-section" style="display: none;">
    <h3> <strong class="theme-color">DEATH METAL</strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1986 </h4>
              <p>
              Death Metal can be seen as the leading force in contemporary Metal. It has little to do with death (though the topic isn't avoided), as it sounds more alive than anything else. In form it is similar to Thrash Metal but <strong class="theme-color"> heavier </strong>, deeper, and with <strong class="theme-color"> updated distortions </strong> /effects. Accompanied by extremely deep growling vocals (grunts), it is downright brutal and performed as if the artists are trying to shrug off intense pain. Being a vast genre with multiple subgenres, it would almost be appropriate to call it <strong class="theme-color"> mainstream modern Metal </strong>. Many artists would disagree though, as one of its tendencies is to always push the boundaries (shifting away from “popular“ approval) and becoming even harder, faster, stronger, and more <strong class="theme-color"> reckless </strong>.

              The <strong class="theme-color"> first (US) wave </strong> of Death Metal in the late eighties, was an <strong class="theme-color"> even faster </strong> continuation of Thrash Metal. Because guitar velocity had become so high, Metal drummers developed a special hyper fast drum technique, called <strong class="theme-color"> “blast beats” </strong>. This wave was very <strong class="theme-color"> rough, unpolished </strong> , and with <strong class="theme-color"> little melody </strong> - almost a feral form of Metal, which later strongly influenced Grindcore during its development.

              The <strong class="theme-color"> second (EU) wave </strong> of Death Metal aka <strong class="theme-color"> Melodic Death Metal </strong> happened in the nineties and particularly in <strong class="theme-color"> Sweden </strong>, which is why it's sometimes referred to as (the New Wave of) Swedish Death Metal (NWOSDM). The second wave is a lot more melodic than the first one, with more <strong class="theme-color"> synth influences </strong> and different (sometimes instrumental) <strong class="theme-color"> passages </strong> throughout the music.

              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/gNhN6lT-y5U?si=OHCjUY5vA_X-VXS6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

              Apart from (and overlapping with) these two large waves, Death Metal has numerous subgenres, indicating the versatility and popularity of the genre. The most important ones are the self-explanatory <strong class="theme-color"> Brutal Death </strong> Tech(nical) Death, alongside crossovers such as Death Doom and Deathcore.
              </p>
    </div>



    <div id="black" class="content-section" style="display: none;">
    <h3> <strong class="theme-color">DEATH METAL</strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1991 </h4>
              <p>
              The genre outlined here is actually the <strong class="theme-color"> second wave </strong> of Black Metal. The first wave was very obscure and rapidly vanished. <strong class="theme-color"> Norway </strong>, a country of cold, harsh, and unforgiving landscapes, became the perfect breeding ground for Black Metal - arguably the <strong class="theme-color"> most extreme </strong> and <strong class="theme-color"> least accessible </strong> form of metal. Although Black Metal is a less percussion and bass oriented than its contemporary counterparts, its <strong class="theme-color"> chaotic, screaming avalanche of macabre noise </strong> sounds like it was made by the Devil himself. Hi-pitched vocals, symphonic/Gothic elements, and shrill, hyperfast guitar riffs make such a statement almost believable. Black Metal has always been more about the content than
              the music itself, trying to be as <strong class="theme-color"> satanic and anti-Christian </strong> as possible (and so are many of its practicers). The exact opposite however, is also true, in the form of Christian Black Metal, indicating that probably any genre imaginable already exists.
              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/UA_j_72psoo?si=MOB3smnQBnVrocUU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              Black Metal bands are recognizable by their <strong class="theme-color"> bombastic music, satanic names, elaborate artwork </strong> (usually with a chaotic web of sharp forms) and heavy black & white make-up (reminiscent of Glam Metal but much more grim and serious). Themes of <strong class="theme-color"> torture, pain, blood, and sacrifice </strong> occur more than in other Metal genres.
              Some Black Metal bands became frontpage news by committing <strong class="theme-color"> acts of murder, violence and desecration </strong> , leading to a large amount of indepth Black Metal documentaries about this most evil of music genres.
              </p>
    </div>

    <div id="alter" class="content-section" style="display: none;">
    <h3> <strong class="theme-color">ALTERNATIVE ROCK</strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1991 </h4>
              <p>
              Alternative rock, pop music style, built on <strong class="theme-color"> distorted guitars and rooted in generational discontent </strong>, that dominated and changed rock between 1991 and 1996. It burst into the mainstream when “Smells Like Teen Spirit”—the first major-label single from Nirvana, a trio based in Seattle, Washington, U.S.—became a national hit. Suddenly, older, difficult, and even anarchic movements, as well as a previous decade of do-it-yourself college rock, acquired a flashy beachhead on pop radio.

              Ironically, most alternative rockers were born between the <strong class="theme-color"> late 1950s and late '60s </strong> and grew up during the '70s amid the head-spinning studio refinement and growing 
              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/u5CVsCnxyXg?si=yZsawmwnlzJeq1Xx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              acceptance of the earliest rock music. Whether the richly accessible melodies of <strong class="theme-color"> the Beatles or the free jams of Led Zeppelin </strong> , all music seemed conventional to alternative rockers. They yearned for something different, something apart from what was too accurately called, by the mid-1980s, classic rock. They therefore believed that their interest in such departures would be, by definition, unpopular.
              </p>
    </div>

    <div id="asian" class="content-section" style="display: none;">
    <h3> <strong class="theme-color">ASIAN POP</strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1991 </h4>
              <p>
              Asian Pop music is often neglected in music genealogies. The main reason is that it serves obviously as a portmanteau and when one looks at the individual Asian pop genres, the majority of them are minor reinterpretations of existing (western) genres. However, it is not world music definition-wise as the main countries of subject (China, Japan, and South-Korea) are without a doubt technically advanced. Alternative and experimental Asian music, like J-core and J-noise, are not included here but with their corresponding super-genres.
              Musically, <strong class="theme-color"> China  </strong>  by the far the most conservative country, with restricted access to internet and a strong uphold of traditional Chinese music. However, China is still in a process of great revolution and has only recently (in the eighties) begun with <strong class="theme-color"> subtle crossovers to Rock music </strong>, resulting in <strong class="theme-color"> C-Pop </strong>. Beware: the term applies to all Chinese spoken music, not only music from China.
              In Japan,
              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/bv_cEeDlop0?si=mTaSwjd5xadp4GjV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              there is a prominent interest in more “technological” music genres. Just like C-pop, <strong class="theme-color"> J-pop </strong> is an umbrella term, but a much wider one, which encompasses just about any and very diverse Japanese music. Key genres are Shibuya-Kei (Urban Shoegazing) and Visual Kei (a sort of Glam Metal). Commercial Dance Pop (often consisting of girl groups) is also prominent while an escapist, minimal type of Synthpop known as Technopop in Japan, accompanies perfectly Japan's Zen philosophy. Japan has always had an incredibly broad interest in foreign popular music and is known for demanding special <strong class="theme-color"> Japan-distributed albums </strong> of well-known artists with more songs than the original.
              In South Korea, a large shockwave of new popular culture across the country known as “Hanryu” dramatically changed the musical landscape in the last decades. Sometimes the term is also applied to Korean New Wave music, yet in a much broader meaning of the genre. Out of this music, pure K-pop emerges as an extremely fashion- and image-oriented, boysband/girlsband Electrodancepop. With the advent of music streaming and social media, K-pop became massively popular and Korea’s biggest export product. Its sexual subcontext is well placed in a country where perfection of appearance and online lifestyle is rule, not exception.
              </p>
    </div>

    <div id="folk" class="content-section" style="display: none;">
    <h3> <strong class="theme-color">FOLK ROCK</strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1965 </h4>
              <p>
              The British Invasion casted a shockwave throughout music industry and was practically impossible to ignore in the UK. Even the secluded folk communities took an <strong class="theme-color"> interest in the strong backbeat and catchy guitar hooks </strong>. Pioneering band the Byrds initiated this evolution, starting out as a pure Folk band but dragging along many others in a real Folk Rock hype. By signing up with <strong class="theme-color"> record labels </strong> (and thus going the “commercial” path) the <strong class="theme-color"> (protest) messages and reflective stories </strong> of Folk Rock artists could reach a much larger audience than before. An appealing thought for artists who believed in the importance of <strong class="theme-color"> story over sound </strong>. This came at the expense 
              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/KQetemT1sWc?si=W6YH90H5oDbgsKOX" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              of experimentation: the songs were pretty <strong class="theme-color"> conventional and simple </strong>. 
              On top of that, an idealistic but too naïve world view didn't help either to win over a large amount of fans who weren't keen on this new direction towards Rock.
              Folk Rock differs from the previous Folk Revivals in the use of <strong class="theme-color"> electric, 12-string guitars and vocal harmonies </strong> in bands. There is a significant amount of overlap with Country Rock, as both genres are crossovers from <strong class="theme-color"> acoustic guitar </strong> genres into electric guitar Rock.
              </p>
    </div>

    <div id="prog-rock" class="content-section" style="display: none;">
    <h3> <strong class="theme-color">PROGRESSIVE ROCK</strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1960 </h4>
              <p>
              Progressive rock is a type of rock music with <strong class="theme-color"> complicated musical technique and composition </strong>. This means that the <strong class="theme-color"> tempo, time signature, and style </strong> can change many times in a single song.
              Most normal rock songs follow a very simple <strong class="theme-color"> pattern </strong> in the way they are arranged. This pattern is a verse followed by a chorus, then a different verse, and then the same chorus. Progressive rock is more complicated than this, and can require more skill to play.
              Progressive rock was first made in the late 1960s, but became most popular in the 1970s. It continues to be popular today, too. Progressive rock began in <strong class="theme-color"> England </strong> and spread throughout Europe.
              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/7jMlFXouPk8?si=LHYW28nmS-S2DRyV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                 It remains most popular in Europe, but there are several notable American and Canadian progressive rock bands. 
              This genre was influenced by <strong class="theme-color"> classical music and jazz </strong> fusion. Over the years, different sub-genres of progressive rock have been created, such as <strong class="theme-color"> symphonic rock, art rock, math rock, and progressive metal </strong>.
              </p>
    </div>


    <div id="punk-rock" class="content-section" style="display: none;">
    <h3> <strong class="theme-color">PUNK ROCK</strong> </h3>
					<h4> <strong class="theme-color"> Active :  </strong> 1960 </h4>
              <p>
              Punk Rock probably was the biggest <strong class="theme-color"> revolution </strong> in Rock history, 
              although the build-up was already tangible in the British bars in the form of Pub Rock. The economic and political situation in Britain during the early seventies made
              a few <strong class="theme-color"> young up-to-no-good kids </strong> (“punks”) really angry. In the US, they rediscovered the similar forgotten Garage Rock mentality, but the most important contributor of Punk was
              a strong <strong class="theme-color"> backlash against “Stadium Rock” </strong> of the early seventies. Popular Prog Rock and A.O.R. bands started to reach massive (and more mature) audiences and Rock had become an eclectic spectacle for the elite masses.
              <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/NU9JoFKlaZ0?si=RwfxEoWPBD5jGGy1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
              It was time for a <strong class="theme-color"> return to the primordial roots </strong> of Rock - to give the youth back its stolen and deformed middle finger.
              The music was Hard / Garage Rock, but much <strong class="theme-color"> shorter, faster, energetic, raw and stripped </strong> to the base chords which blended in with the rapidly growing out of control Punk subculture. Many early amateur Punk Rock band names were gross and sleazy: Punk liked to indulge in a provocative culture of extreme haircuts (flashy colors, moehawks, sharp peaks), rebellious fashion (disorderly, rough, torn) and disgusting behavior, such as snorting very foul amphetamine sulphate crystals as they were the cheapest drug around. The difference with Industrial was that you could really go wild and dance to it, thus explaining its unfathomable magnetism. A lot of UK Punk was witnessed in the <strong class="theme-color"> Roxy club </strong> , London, whereas US Punk evolved mainly out of the legendary club <strong class="theme-color"> CBGB's </strong>, New York (which also propelled Post-Punk and New Wave).
    </div>




    </div>

    

  </div>
  
  <div id="extra">
    

  <p id="more-metalcore" class="more-stuff-section" style="display: none;">
      <strong class="">Music Bands : </strong>
      <br>
      1. Artcell <br>
      2. Warfaze <br>
      3. Rockstrata <br>
      4. Artcell <br>
      5. Cryptic Fate <br>
      6. Aurthohin <br>
      7. Nemesis <br>
      8. Black <br>
      9. Powersurge <br>
      10. Arbovirus <br>

    </p>

  
    <p id="more-metalcore" class="more-stuff-section" style="display: none;">
      <strong class="">Music Bands : </strong>
      <br>
      1. Artcell <br>
      2. Warfaze <br>
      3. Rockstrata <br>
      4. Artcell <br>
      5. Cryptic Fate <br>
      6. Aurthohin <br>
      7. Nemesis <br>
      8. Black <br>
      9. Powersurge <br>
      10. Arbovirus <br>

    </p>


    <p id="more-progressive" class="more-stuff-section" style="display: none;">
      <strong>Music Bands : </strong>
      <br>
      1. Bay of Bengal <br>
      2. Trainwreck <br>
      3. H2SO4 <br>
      4. Cryptic Fate <br>
      5. Warfaze <br>
      6. Poizon Green <br>

    </p>



    <p id="more-power" class="more-stuff-section" style="display: none;">
      <strong>Music Bands : </strong>
      <br>
      1. Sabaton <br>
      2. Blind Guardian <br>
      3. Sonata Arctica <br>
      4. Helloween <br>
      5. Kamelot <br>
      6. DragonForce <br>
    </p>

    <p id="more-death" class="more-stuff-section" style="display: none;">
      <strong>Music Bands : </strong>
      <br>
      1. Cannibal Corpse <br>
      2. Children of Bodom <br>
      3. Arch Enemy <br>
      4. Obituary <br>
      5. Napalm Death <br>
      6. Bloodbath <br>
      7. Cattle Decapitation <br>
      8. Gojira <br>
      9. Behemoth <br>
      10. Morbid Angel <br>
    </p>


    <p id="more-black" class="more-stuff-section" style="display: none;">
      <strong>Music Bands : </strong>
      <br>
      1. Mayhem <br>
      2. Behemoth <br>
      3. Cradle of Filth <br>
      4. Obituary <br>
      5. Napalm Death <br>
      6. Shining <br>
      7. Dark Funeral <br>
      8. Profanatica <br>
      9. Immortal <br>
      10. Darkthrone <br>
    </p>





    <p id="more-alter" class="more-stuff-section" style="display: none;">
      <strong>Music Bands : </strong>
      <br>
      1. Linkin Park <br>
      2. Children of Bodom <br>
      3. Nirvana <br>
      4. System of A Down <br>
      5. Bullet for My Valentine <br>
      6. Bloodbath <br>
      7. Radiohead <br>
      8. Red Hot Chili Peppers <br>
      9. Arcade Fire <br>
      10. Arctic Monkeys <br>
    </p>

    <p id="more-asian" class="more-stuff-section" style="display: none;">
      <strong>Music Bands : </strong>
      <br>
      1. BTS <br>
      2. Blackpink <br>
      3. Seventeen <br>
      4. Itzy <br>
      5. Bingbang <br>
      6. Girls' Generation <br>
      7. Red Velvet <br>
      8. Twice <br>
      9. NCT 127 <br>
    </p>

    <p id="more-folk" class="more-stuff-section" style="display: none;">
      <strong>Music Bands : </strong>
      <br>
      1. The Beatles <br>
      2. Led Zeppelin <br>
      3. Simon & Garfunkel <br>
      4. The Lumineers <br>
      5. Fairport Convention <br>
      6. The Byrds <br>
      7. Buffalo Springfield <br>
    </p>


    <p id="more-prog-rock" class="more-stuff-section" style="display: none;">
      <strong>Music Bands : </strong>
      <br>
      1. Pink Floyd <br>
      2. Led Zeppelin <br>
      3. Simon & Garfunkel <br>
      4. Eric Clapton <br>
      5. Fairport Convention <br>
      6. The Byrds <br>
      7. Buffalo Springfield <br>
    </p>


    <p id="more-punk-rock" class="more-stuff-section" style="display: none;">
      <strong>Music Bands : </strong>
      <br>
      1. Green Day <br>
      2. Dead Kennedys <br>
      3. Green Day <br>
      4. The Sex Pistols <br>
      5. The Clash <br>
      6. Black Flag <br>
    </p>



  </div>
  <div id="footer">
    <p>All right reserved by Rhythmic Pulse - The Art of Music</p>
  </div>
</div>

<link href="{{ asset('js/jquery.js') }}" rel="stylesheet">
        <script src="{{ asset('js/jquery.js') }}"></script> 

		<!-- Bootstrap JS -->
        <link href="{{ asset('js/bootstrap.min.js') }}" rel="stylesheet">
        <script src="{{ asset('js/bootstrap.min.js') }}"></script> 

		

<script>
  function changeContent(section) {
    var contentSections = document.getElementsByClassName('content-section');
    for (var i = 0; i < contentSections.length; i++) {
      contentSections[i].style.display = 'none';
    }

    var selectedSection = document.getElementById(section);
    if (selectedSection) {
      selectedSection.style.display = 'block';
    }

    var moreStuffSections = document.getElementsByClassName('more-stuff-section');
    for (var j = 0; j < moreStuffSections.length; j++) {
      moreStuffSections[j].style.display = 'none';
    }

    var moreStuffId = 'more-' + section;
    var selectedMoreStuff = document.getElementById(moreStuffId);
    if (selectedMoreStuff) {
      selectedMoreStuff.style.display = 'block';
    }
  }
</script>



</body>
</html>
