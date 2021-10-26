<?php $pageTitle="Article 2 - Part 2"; ?>
<?php $pageFile="article2P2"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
		<div id="leftpage">
			<h1>Chapter 2: Roads Pt. II</h1>
				<article>
				<p>To stay safe while driving in flooded areas:</p>
						<ul>
							<li><mark title="You can see live updates of flooded roads on the Qld Gov Department of Transport and Main Roads' website">
								Check if flooding is likely and make alternative arrangements so you are not driving on flooded roads.</mark></li>
							<li>Never drive on a road covered with water — floodwaters can be fast moving and hide dips, debris and roads that have been washed away entirely.</li>
							<li><mark title="Sometimes the road damage is not known until the road is completely dry">Don't drive over previously flooded
								roads until the road is officially open again.</mark></li>
							<li>Always follow the directions of flood road signs and road closures.</li>
						</ul>
					<!--<figure>
						<img src="images/Article2-road_closure.jfif" alt="A road closure sign in front of a flooded road" class="articleImage">
						<figcaption>Figure: Follow the road safety signs</figcaption>
					</figure>-->
					<div class="gallery-images" query="Pomona railway underwater - February 2013" limit="1"></div>
				</article>

				<a id="button-prev" href="article2_p1.php">previous</a>
			</div>
			<div id="rightpage">
				<p><b>Remember:</b> Swift flowing water can sweep away your car and even six inches of water is deep enough
					to reach the bottom of most passenger cars, flooding the exhaust and leaving your car immobile.</p>
			
					<!--<figure>
						<img src="images/Article2-water_in_exhaust.jpg" alt="a car stuck in floodwater" class="articleImage">
						<figcaption>Figure: 6 inches of water is all it takes</figcaption>
					</figure>-->
					<div class="gallery-images" query="Brisbane floods and winds" limit="1"></div>


				<p>After learning about the dangers of driving on flooded roads, it's time to put your knowledge to the test. Click below
					 to play the car game and see what choice you would have made in Eva's position.</p>
				
					<div id="access_game">
					<a href="game2.php"><p id="access_game_text">Click here to help Eva!</p><a>
					</div>
			</div>
			</div>
	</section>
</div>

<?php include("footer.php"); ?>