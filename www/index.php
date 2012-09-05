<?php
include('classes/mobile_detect.php');
$detector = new Mobile_Detect();
$mobile = $detector -> isMobile();
?>

<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="UTF-8" /> 
	<title>Piccolo Trattoria | Ministry of Pasta &amp; Certain Other Things</title>
	
	<link rel="stylesheet" href="css/default.css" />
	<link rel="icon" type="image/x-icon" href="images/piccoloFavi.ico" />
	
	<meta name="viewport" content="initial-scale=1.0, width=device-width" />
	
	<!--<link rel="icon" type="image/x-icon" href="favicon.ico" />
	<meta name="viewport" content="initial-scale=1.0, width=device-width" /> -->
	
	<link rel="stylesheet" href="css/desktop.css" media="all and (min-width: 481px)"/>
	
	<?php 
	if(!$mobile){
		//<!-- jquery CDN -->
		$html .='<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>' . "\n";
		
		//maps
		$html .='<script src="http://maps.google.com/maps/api/js?sensor=true"></script>' . "\n";
		$html .='<script src="js/panorama.js"></script>' . "\n";
		
		//menu
		$html .='<script src="js/menu.js"></script>' . "\n";
		
		//cycle slider
		$html .='<script src="js/cycle.js"></script>' . "\n";
		$html .='<script type="text/javascript"> $(document).ready(function() {' . "\n";
		$html .='$(\'#reviewContainers\').cycle({' . "\n";
		$html .='fx: \'fade\',' . "\n";
		$html .='pager: ".slide_nav",' . "\n";
		$html .='timeout: 4000,' . "\n";
		$html .='pause: 1, ' . "\n";
		$html .='cleartype:  true,' . "\n";
		$html .='cleartypeNoBg:  true ' ."\n";
		$html .='});' . "\n";
		$html .='}); </script>' . "\n";
		$html .='<script type="text/javascript" src="http://cloud.github.com/downloads/malsup/cycle/jquery.cycle.all.latest.js"></script>' . "\n";
		
		//lightbox plugin
		$html .= '<script src="lightbox/js/lightbox.js"></script>';
		$html .= '<link href="lightbox/css/lightbox.css" rel="stylesheet" />' . "\n";
		
		//add class js if non-mobile and javascript is active
		$html .='<script type="text/javascript"> document.documentElement.className = \'js\'; </script>';
		
		echo $html;
	}
	?>

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!--[if lt IE 9 & !IEMobile]>
		<link rel="stylesheet" href="css/desktop.css" />
	<![endif]-->
	
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" />
	<![endif]-->
	
	<!--[if IE 8]>
		<link rel="stylesheet" href="css/ie8.css" />
	<![endif]-->
</head>

<body> 
	
	<header>
		<hgroup>
			<h1>Piccolo Trattoria</h1>
			<h2>MINISTRY OF PASTA &amp; CERTAIN OTHER THINGS</h2>
		</hgroup>
	</header>
	
	<section id="intro">
		<div>
			<h3>Great food and cosy ambience in the heart of Wellington City</h3>
			<p>Piccolo trattoria is the ideal place to enjoy a traditional Italian meal with top service and some fun.</p>
			<p>Located at <strong>103 Vivian Street</strong>, Wellington CBD &ndash; Piccolo is Wellington's best-kept secret that everyone's talking about!</p>
			<p>Phone <strong>04 382 8882</strong> to make a booking. Group bookings welcome!</p>
		</div>
		
		<article id="review">	
		
			<div id="reviewContainers">
				<div id="first-review">
					<p class="gap-top">Great place for a romantic date. Nice food and the service is just wonderful. If you want to try real Italian food this is the place to be :) I ordered traditional bolognaise and my bf ordered a steak, both meals were lovely! Warm service, felt very welcome.</p>
					<aside>Annie<br />18 July 2012</aside>
				</div>
				
				<div>
					<p class="gap-top">Although it doesn't look like much on the outside, the inside is nicely intimate. The menu is short and the food and service that we received were all great.</p>

					<p>Make sure that credit card isn't your only method of payment and enjoy a relaxed evening with authentic, freshly cooked Italian dishes.</p>
					<aside>Matthew H<br />31 January 2011</aside>
				</div> 
				
				<div>
					<p class="gap-top">Thank you so much Tom for yet another excellent dining experience. The food as always was wonderful and as always it was only too easy to eat WAY too much. Thank you also for taking such good care of us and making us feel so welcome.</p>
					<aside>Jacqui L<br />26 January 2011</aside>
				</div>
				
				<div>
					<p class="gap-top">Went to this restaurant to celebrate my partners birthday and boy was it an awesome experience. Fantastic service, lovely music and most importantly - GREAT food. The gentleman who served us was so pleasant and funny.I'm definitely putting this place down as one of my favourites. The best pasta yet.</p>
					<aside>Juanita<br />27 April 2010</aside>
				</div>
				
				<div >
					<p class="gap-top">Absolutely divine cuisine, superb service which could not be faulted. The food was totally flavoursome and traditionally Italian. Although not really suited for families, this establishment was more than accommodating for our young family.</p>
					<aside>Rebecca B<br />12 October 2010</aside>
				</div>
				
				<div>
					<p class="gap-top">	This is the best Italian restaurant in town!! The owner/host is pleasant and friendly and has the beautiful selection of Italian wines stored in his head the staff and friendly and welcoming and the food is great for an amazingly reasonable price. highly recommended</p>
					<aside>Nicole<br />21 April 2009</aside>
				</div>
			</div>
			<div class="slide_nav"></div>
			<!-- if js? -->
			
		</article>
	</section>
	
	<div class="container">
		<section id="map">
		<?php
			$html = '<img src="images/';
			if($mobile){
				$html .='mobile-panorama';
			} else {
				$html .='panorama';
			}
			
			$html .='.jpg" alt="Interior view of Piccolo Trattoria Vivian Street" />' . "\n";
			echo $html;
		?>
		</section>
	</div>
	
	<div id="menuStrip">
		<h4 id="menuTitle">Menu</h4>
	</div>	
	
	<article id="menu">
		<div class="container" id="menuCont">
			<div id="menuNav">
				<ul>
					<li><a href="#antipasti" class="active">Antipasti</a></li>
					<li><a href="#zuppe">Zuppe</a></li>
					<li><a href="#carne">Carne, Pollo e Pesce</a></li>
					<li><a href="#insalata">Insalata</a></li>
					<li><a href="#speciale">Piccolo Speciale</a></li>
					<li><a href="#pasta">Pasta</a></li>
					<li><a href="#dolci">Dolci</a></li>
					<li><a href="#bevande">Bevande</a></li>
					<li><a href="#vino">Vino</a></li>
				</ul>
			</div>
			
			<?php
			// ANTIPASTI
			$antipasti = array(
				array('Pane all\' Aglio <span class="veg">(v)</span>', '6.00','Garlic Bread'),
				array('Pane con Olio <span class="veg">(v)</span>', '6.00','Dipping Bread <sup>w</sup> Tomato, Pesto &amp; Olive Oil'),
				array('Coppa d\' Olive <span class="veg">(v)</span>','6.00','Bowl of Olives'),
				array('Funghi all\' Aglio <span class="veg">(v)</span>','12.00', 'Wonderful Garlic Mushrooms'),
				array('Fegato Alla Genovese', '14.00','Chicken Livers in Onion, Bacon &amp; Brandy Sauce'),
				array('Insalata di Calamari', '12.00','Calamari, Fresh Salad Olive Oil &amp; Pepper')
			);
			
			//CARNE, POLLO E PESCE
			$carne = array(
				array('Bistecca', '26.00', 'Prime Scotch Fillet Topped <sup>w</sup> The Chef\'s Special Sauce. Served <sup>w</sup> Insalata Piccolo.'),
				array('Pollo Arancione', '24.00', 'Boneless Chicken Breast, Pan fried in Orange & Marsala Cream. Served <sup>w</sup> Insalata Piccolo.'),
				array('Pesce Piccolo \'Danielle\'', '24.00', 'Terakihi Fillet in a Cream Sauce of Lemon, White Wine & Capers. Served <sup>w</sup> Insalata Piccolo.')
			);
			
			//PASTA
			$pasta = array(
				array('Penne al Pomodoro <span class="veg">(v)</span>', '20.00', 'Penne Pasta &amp; Tomato'),
				array('Spaghetti alla Carbonara', '20.00', 'Spaghetti in a Cream Sauce <sup>w</sup> Bacon &amp; Parmesan'),
				array('Penne ai Frutti di Mare	', '20.00','Seafood in a Tomato Sauce <sup>w</sup> Penne Pasta.'),
				array('Spaghetti alla Bolognese', '20.00','Traditional Beef Bolognese.'),
				array('Ravioli della Nonna <span class="veg">(v)</span>', '20.00','Pasta Pockets <sup>w</sup> butter, Sage and Granny\'s Special
Tomato Sauce'),
				array('Spaghetti al Salmone', '20.00','Smoked Salmon <sup>w</sup> A Cream Sauce.'),
				array('Lasagne al Forno	', '20.00','Homemade Lasagne <sup>w</sup> Italian Herbs &amp; Spices.')
			);	

			//DRINKS
			$bevande = array(
				'Limonata' => '5.00',
				'Mineral Water' =>'4.00',
				'Orange Juice' => '4.00',
				'Coke' => '4.00',
				'Caffe' =>'4.00',
				'Caffe Correto' =>'8.00',
				'Birra' => '7.00',
				'Low Alcohol Birra' =>'6.00'
			);
			
			$vino = array(
				'Glass' => '7.00',
				'Bottle' =>'35.00'
			);
			
			$html = '<div class="menuContent" id="antipasti">' ."\n";
			$html .= '<h5>Antipasti</h5>' . "\n";
			$html .= displayMenu($antipasti);
			$html .= '</div>';
			
			$html .= '<div class="menuContent" id="zuppe">' ."\n";
			$html .= '<h5>Zuppe</h5>' . "\n";
			$html .= '<p>';
			$html .= '<span class="title">Zuppa di Basilico e Pomodoro <span class="veg">(v)</span></span><br />' . "\n";
			$html .= '<span class="descrip">Tomato &amp; Basil Soup</span>';
			$html .= '<span id="twoOptions">Entree 10.00 &nbsp; Main 16.00</span>' . "\n";
			$html .= '</p>';
			$html .= '<p>';
			$html .= '<span class="title">Minestrone Toscano</span>' . "\n";
			$html .= '<span class="price">16.00</span> <br/>' . "\n";
			$html .= '<span class="descrip">Tuscan Vegetable Soup</span>';
			$html .= '</p>';
			$html .= '<a href="#menuTitle" class="top">back to menu &uarr;</a>' . "\n";
			$html .= '</div>';
			
			$html .= '<div class="menuContent" id="carne">' ."\n";
			$html .= '<h5>Carne, Pollo e Pesce</h5>' . "\n";
			$html .= displayMenu($carne);
			$html .= '</div>';
			
			$html .= '<div class="menuContent" id="insalata">' ."\n";
			$html .= '<h5>Insalata</h5>' . "\n";
			$html .= '<p>';
			$html .= '<span class="title">Insalata Piccolo</span><br />' . "\n";
			$html .= '<span class="descrip">Fresh Garden Salad</span>';
			$html .= '</p>';
			$html .= '<a href="#menuTitle" class="top">back to menu &uarr;</a>' . "\n";
			$html .= '</div>' . "\n";
			
			$html .= '<div class="menuContent" id="speciale">' ."\n";
			$html .= '<h5>Piccolo Speciale</h5>' . "\n"	;
			$html .= '<p>';
			$html .= '<span class="title">Blackboard Selection</span><br />' . "\n";
			$html .= '<span class="descrip">Check out our blackboard for the Chef\'s specials.</span>';
			$html .= '</p>';
			$html .= '<a href="#menuTitle" class="top">back to menu &uarr;</a>' . "\n";
			$html .= '</div>';
			
			$html .= '<div class="menuContent" id="pasta">' ."\n";
			$html .= '<h5>Pasta</h5>' . "\n";	
			$html .= displayMenu($pasta);
			$html .= '</div>';
			
			$html .= '<div class="menuContent" id="dolci">' ."\n";
			$html .= '<h5>Dolci</h5>' . "\n";	
			$html .= '<p>';
			$html .= '<span class="title">Blackboard Selection</span><br />' . "\n";
			$html .= '<span class="descrip">Check out our blackboard for dessert specials.</span>';
			$html .= '</p>';
			$html .= '<a href="#menuTitle" class="top">back to menu &uarr;</a>' . "\n";
			$html .= '</div>';
			
			$html .= '<div class="menuContent" id="bevande">' ."\n";
			$html .= '<h5>Bevande</h5>' . "\n";
			$html .= displayDrinks($bevande);
			$html .= '</div>';
			
			$html .= '<div class="menuContent" id="vino">' ."\n";
			$html .= '<h5>Vino</h5>' . "\n";
			$html .= '<p class="descrip">Ask us about our selection of House Wines</p>' . "\n";
			$html .= displayDrinks($vino);
			$html .= '</div>';
			
			echo $html;
			
			function displayMenu($categoryListing){
				foreach($categoryListing as $catList) {
					$html .= '<p>';
					$html .= '<span class="title">' . $catList[0] . '</span>' . "\n";
					$html .= '<span class="price">'.$catList[1] .'</span> <br/>' . "\n";
					$html .= '<span class="descrip">' . $catList[2] . '</span>'. "\n";
					$html .= '</p>';
					
				}
				$html .= '<a href="#menuTitle" class="top">back to menu &uarr;</a>' . "\n";
				return $html;
			}
			
			function displayDrinks($drinks){
				foreach($drinks as $name => $price) {
					$html .= '<p>';
					$html .= '<span class="title">' . $name . '</span>' . "\n";
					$html .= '<span class="price">'.$price .'</span>' . "\n";
					$html .= '</p>';
				}
				$html .= '<a href="#menuTitle" class="top">back to menu &uarr;</a>' . "\n";
				return $html;
			}
			?>

			<div id="note">
				<p id="veggie"><span class="veg">(v)</span> - Vegetarian</p>
				<p id="please">Please advise us of any allergies. Gluten free pasta options available.</p>
				<p id="byo">BYO corkage 7.00</p>
			</div>
		</div>
	</article>
	
	<div id="photo-strip">
		<h4 id="photos">Photos</h4>
	</div>
	<div class="container">
		<a href="images/piccolo-1.jpg" rel="lightbox[piccolo]"><img class="photo" src="images/piccolo-1-small.jpg" alt="Piccolo Restaurant" /></a>
		<a href="images/piccolo-2.jpg" rel="lightbox[piccolo]"><img class="photo" src="images/piccolo-2-small.jpg" alt="Piccolo Restaurant" /></a>
		<a href="images/piccolo-3.jpg" rel="lightbox[piccolo]"><img class="photo" src="images/piccolo-3-small.jpg" alt="Piccolo Restaurant" /></a>
		<a href="images/piccolo-4.jpg" rel="lightbox[piccolo]"><img class="photo" src="images/piccolo-4-small.jpg" alt="Piccolo Restaurant" /></a>
	</div>
	<footer>
		<p class="foot" id="visit">Visit our other store <a href="http://www.piccolo.net.nz/" target="_blank">Il Piccolo on Willis Street</a></p>
		<p class="foot">&copy; Piccolo Trattoria <?php echo date('Y'); ?> </p>
		<p class="foot" id="street">103 Vivian Street, Wellington <br />Open Monday- Saturday 6.30pm till late <br />Group bookings welcome<p>
	</footer>
</body> 
</html>