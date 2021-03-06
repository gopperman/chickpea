<?php get_template_part('templates/page', 'header'); ?>
<div itemscope itemtype=”http://schema.org/Restaurant">
	<div id="hero">
		<img itemprop="logo" src="/app/themes/chickpea/assets/img/logo.png" />
		<div class="social">
			<span>Follow us:</span>
        <?php if (array_key_exists('facebook', $options)) {?>
            <a target="_blank" href="https://www.facebook.com/<?=$options['facebook'];?>">
            <i class="fa fa-facebook"></i></a>
        <?php } ?>
        <?php if (array_key_exists('twitter', $options)) {?>
            <a target="_blank" href="https://www.twitter.com/<?=$options['twitter'];?>">
            <i class="fa fa-twitter"></i></a>
        <?php } ?>
        <?php if (array_key_exists('instagram', $options)) {?>
            <a target="_blank" href="https://www.instagram.com/<?=$options['instagram'];?>">
            <i class="fa fa-instagram"></i></a>
        <?php } ?>
    </div>
	</div>
	<div id="about">
		<div class="container-fluid">
			<h2>About Chickpea</h2>
			<?= get_field('about'); ?>
		</div>
	</div>
	<div id="menu">
			<div id="appetizers" class="container-fluid">
				<h2>Appetizers</h2>
				<div class="col-sm-6">
					<h3>Buffalo Tempeh Tenders</h3>
					<p>Seasoned, breaded, and baked tempeh served with a creamy dressing for dipping</p>
				</div>
				<div class="col-sm-6">
					<h3>Hummus and Pita</h3>
					<p>Grilled and seasoned pita bread with hummus</p>
				</div>
			</div>
		<div class="container-fluid" id="sandwiches">
			<h2>Sandwiches</h2>
			<div class="col-sm-6">
				<h3>Mediterranean</h3>
				<p>Mushrooms, hummus, artichoke, peppers, sun dried tomatoes, olive tapenade, pepperoncini, capers, baby spinach, and fresh tomato on ciabatta</p>

				<h3>Garden</h3>
				<p>Hummus, spinach, house relish, grilled peppers, and avocado on ciabatta</p>

				<h3>Reuben</h3>
				<p>Sauerkraut, Russian dressing, dijon mustard, and marinated tempeh on marble rye</p>

				<h3>BLT</h3>
				<p>Tempeh bacon, aioli sauce, arugula, and tomato on ciabatta</p>

				<h3>Buffalo Tempeh</h3>
				<p>Breaded and baked buffalo tempeh, baby romaine, and tomato drizzled in creamy vegan ranch dressing on ciabatta</p>
			</div>
			<div class="col-sm-6">
				<h3>Classic Grilled Cheese</h3>
				<p>Our three-cheese blend grilled between two slices of ciabatta bread</p>

				<h3>Bacon Grilled Cheese</h3>
				<p>Our three-cheese blend, tempeh bacon, and crisp "bacon" bits"</p>

				<h3>Jalapeno Grilled Cheese</h3>
				<p>Our three-cheese blend and jalapenos drizzled in creamy buffalo bleu cheese</p>

				<h3>Veggie Grilled Cheese</h3>
				<p>Our three-cheese blend, spinach, grilled peppers, tomato, red onion</p>

				<h3>Buffalo Grilled Cheese</h3>
				<p>Our three-cheese blend, tomato, and pieces of buffalo tempeh drizzled in creamy ranch</p>
			</div>
			<p class="clearfix">Gluten-free options available</p>
		</div>
		<div class="slideshow">
			<ul>
				<li><img src="/app/themes/chickpea/assets/img/blt.jpg" />
				<li><img src="/app/themes/chickpea/assets/img/buffalotempeh2.jpg" />
				<li><img src="/app/themes/chickpea/assets/img/quesadilla.jpg" />
				<li><img src="/app/themes/chickpea/assets/img/stuffedshells.jpg" />
				<li><img src="/app/themes/chickpea/assets/img/icecream.jpg" />
			</ul>
		</div>
		<div class="container-fluid">
			<div id="salads">
				<h2>Salads</h2>
				<div class="description">
					<p>Available as a side, entree, or wrap. Entree served with grilled garlic bread. Wraps are available in spinach, tomato, or original, served with chips and a pickle spear</p>
				</div>								
				<div class="container-fluid">
				<div class="col-sm-6 col-md-4">
					<h3>Side Salad</h3>
					<p>Mixed greens drizzled in our perfecto dressing with salt and pepper.</p>
				</div>
				<div class="col-sm-6 col-md-4">
					<h3>Buffalo Tempeh Salad</h3>
					<p>Bits of Buffalo Tempeh, tomato, and cucumber topped with our creamy ranch dressing</p>
				</div>
				<div class="col-sm-6 col-md-4">
					<h3>Zesty Salad</h3>
					<p>Mixed greens tossed in our lemon oil with red onion, cucumber, salt, and pepper</p>
				</div>
				<div class="col-sm-6 col-md-4">
					<h3>Mediterranean Salad</h3>
					<p>A serving of our olive tapenade on a bed of spinach and tomato, drizzled in oil and vinegar</p>
				</div>
				<div class="col-sm-6 col-md-4">
					<h3>Avocado Salad</h3>
					<p>Mixed greens, tomato, and cucumber, drizzled in our creamy avocado dressing</p>
				</div>
				</div>
			</div>
			<div id="cheese">
				<h2>Quesadillas</h2>
				<div class="description">
					<p>Our three-cheese blend grilled in a folded tortilla, with your choice of:</p>
				</div>
				<div id="toppings">
					<h2>Toppings</h2>
					<div class="col-xs-12 col-sm-4">Mushrooms</div>
					<div class="col-xs-12 col-sm-4">Peppers</div>
					<div class="col-xs-12 col-sm-4">Onions</div>
					<div class="col-xs-12 col-sm-4">Tomato</div>
					<div class="col-xs-12 col-sm-4">Fresh Garlic</div>
					<div class="col-xs-12 col-sm-4">Jalapeno</div>
					<div class="col-xs-12 col-sm-4"><b>Buffalo Tempeh</b></div>
					<div class="col-xs-12 col-sm-4"><b>Artichoke Hearts</b></div>
					<div class="col-xs-12 col-sm-4"><b>Olive Tapenade</b></div>
				</div>
			</div>

		</div>

		<div id="shakes">
			<div class="container-fluid">
				<h2>Ice Cream</h2>
				<p>Featuring specialty flavors from Sweet Date Vegan Ice Cream.</p>
				<h2>Milkshakes</h2>
				<p>Shakes are available in chocolate, vanilla, strawberry/banana, or our specialty flavors. Ask about our weekly specials.</p>
			</div>
		</div>
	</div>
	<div id="map">
		<div class="col-sm-4 col-md-3">
			<div class="col-xs-6 col-sm-12">
			<h2>Location</h2>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><p>
          <span itemprop="streetAddress"><?=$options['street'];?></span><br /> 
          <span itemprop="addressLocality"><?=$options['city'];?></span>, <span itemprop="addressRegion"><?=$options['state'];?></span> <?=$options['postcode'];?>
        </p></div>
			</div>
			<div class="col-xs-6 col-sm-12">
				<h2>Hours</h2>
 				<p><time itemprop="openingHours" datetime="Mo Closed">Monday: Closed<br /></time>
 					<time itemprop="openingHours" datetime="Tu,We 15:00-01:00">Tue-Wed: 3pm - 1am<br /></time>
 					<time itemprop="openingHours" datetime="Th,Fr,Sa 15:00-02:00">Thu-Sat: 3pm - 2am<br /></time>
 					<time itemprop="openingHours" datetime="Su 11:00-02:00">Sunday: 11am - 2am<br /></time></p>
			</div>
		</div>
		<div class="col-sm-8 col-md-9">
			<?php if (array_key_exists('longitude', $options) && array_key_exists('latitude', $options)) { ?>
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<div style="overflow:hidden;height:360px;width:100%;"><div id="gmap_canvas" style="height:360px;width:100%;"></div>
				<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
				<a class="google-map-code" href="http://www.mapsembed.com" id="get-map-data">www.mapsembed.com</a></div>
				<script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(<?=$options['latitude']; ?>,<?=$options['longitude']; ?>),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(<?=$options['latitude'];?>, <?=$options['longitude'];?>)});infowindow = new google.maps.InfoWindow({content:"<b>Chickpea</b><br/>482 Park Avenue<br/> Worcester, ma" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
			<?php } ?>
		</div>
	</div>
</div>
<?php //get_template_part('templates/content', 'page'); ?>
