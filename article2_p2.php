<?php $pageTitle="Article 2 - Part 1"; ?>
<?php $pageFile="article2P2"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
		<div id="leftpage">
				<h1>Chapter 2: If It's Flooded, Forget It!</h1>
				<article>
				<p>To stay safe while driving in flooded areas:</p>
						<ul>
							<li>Check if flooding is likely and make alternative arrangements so you are not driving on flooded roads.</li>
							<li>Never drive on a road covered with water—floodwaters can be fast moving and hide dips, debris and roads that have been washed away entirely.</li>
							<li>Always follow the directions of flood road signs and road closures.</li>
							<li>Don't drive over previously roads until the road is open again. Sometimes the road damage is not known until
							the road is completely dry.</li>
						</ul>
					<figure>
						<img src="images/Article2-road_closure.jfif" alt="A road closure sign in front of a flooded road" width="100%">
						<figcaption>Figure: Follow the road safety signs</figcaption>
					</figure>
				</article>

				<a id="button-prev" href="article2_p1.php">previous</a>
			</div>
			<div id="rightpage">
				<p>Remember: Swift flowing water can sweep away your car and even six inches of water is deep enough
					to reach the bottom of most passenger cars, flooding the exhaust and leaving your car immobile.</p>
			
					<figure>
						<img src="images/Article2-water_in_exhaust.jpg" alt="a car stuck in floodwater" width="100%">
						<figcaption>Figure: 6 inches of water is all it takes</figcaption>
					</figure>

				<p>After learning about the dangers of driving on flooded roads, it's time to put your knowledge to the test. Click below
					 to play the car game and see what choice you would have made in Ms Petersen's position.</p>
				
				<a href="game2.php">
					<div id="access_game">
						<p id="access_game_text"> Help Ms Petersen!</p>
					</div>
				</a>
			</div>
			</div>
	</section>
</div>

<?php include("footer.php"); ?>