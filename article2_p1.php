<?php $pageTitle="Article 2 - Part 1"; ?>
<?php $pageFile="article2P1"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
		<div id="leftpage">
				<h1>Chapter 2: Roads Pt. I</h1>
				<article>
					<p>As the rain continued during the Brisbane Floods, roads were flooded and remote communities
						 cut off. Local police, emergency services and councils were all emphasizing the message "If it's flooded, forget it!
					</p>

					<!--<figure>
						<img src="images/Article2-flooded_road.jfif" alt="a flooded road under a bridge" class="articleImage">
						<figcaption>Figure: Flooded roads are no joke </figcaption>
					</figure>-->
					<div class="gallery-images" query="the floodwater in Donald" limit="1"></div>

					<p>With more than half of flood-related deaths being a result of driving through floodwater, this is great advice.</p>
					<p>Even if it looks calm, no one can predict what floodwater will do or what’s happened to the road underneath.
					</p>
				</article>

				<a id="button-prev" href="map.php">previous</a>
			</div>
			<div id="rightpage">

			<div class="gallery-images" query="Floodwaters have blocked the Tyers Road" limit="1"></div>

				<p>However, the various risks didn't stop some of the more foolhardy people from trying to cross flooded roads. 
					Local, Eva, says she was wary of crossing a flooded causeway on 20th of January 2011, 
					but decided to do so after watching three other vehicles make it through.</p>
					<!--<figure>
						<img src="images/Article2-car_in_water.jpg" alt="A car beginning to drive into flooded water" class="articleImage">
						<figcaption>Figure: Eva driving into flooded waters </figcaption>
					</figure>-->
					<div class="gallery-images" query="The SES says its biggest problem is people driving" limit="1"></div>

				<p>Let's learn more about what to do in this situation to try and help Eva in this situation</p>
				</div>
			</div>
			<a id="button-next" href="article2_p2.php">next</a>
	</section>
</div>

<?php include("footer.php"); ?>