<?php $pageTitle="Article 2 - Part 3"; ?>
<?php $pageFile="article2P3"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
			<div id="leftpage">
				<h1>Chapter 2: Flooded Roads PtIII</h1>
				<section id="scrapMessage">
					<img id="scrap" src="images/paper_scrap.png" width=40%>
					<div class="scrapText">
						<span id="close"   onclick="closeBox()">&#10006;</span>
						<p>You received another mysterious scrap of paper!... It seems to form something with the other one.</p>
						<img src="images/certificate_scrap.png" width="30%" style= "transform: scaleX(-1)">
					</div>
				</section>

				<p id=congrats> Thanks for your help<span id="enterName"></span>!</p>
				<p>Though you managed to keep you and your car safe, Ms Petersen was not as lucky.</p>
				<p>"So then I followed the cars and just as I was going across, about eight or 10 feet upstream there was 
					this broken branch lodged with all this debris... and there was an almighty crack and the branch just
					splintered into pieces and this wave of debris and water just hit the car," she says.
				</p>
				<figure id="aaron">
					<img src="images/Article2-car_stuck.jpg" alt="A car sinking" width="80%" height="60%">
					<figcaption>Figure: Her car sunk after being swept off the road</figcaption>
				</figure>
				<figure id="aaron">
					<img src="images/Article2-car_towed.jpg" alt="A car being pulled from water" width="80%" height="60%">
					<figcaption>Figure: A tow truck was called to remove it from flood waters</figcaption>
				</figure>
				<a id="button-prev" href="article2_p1.php">previous</a>
			</div>
			<div id="rightpage">
				<p>"Then it was history because the stream was flowing quite rapidly."<br>
					Ms Petersen managed to open her window and climb onto the roof of the vehicle before jumping into the
					floodwaters and making her way to the edge.
				</p>
				<figure id="aaron">
					<img src="images/Article2-stranded_car.jpg" alt="A car up to its tires in flood water" width="80%" height="60%">
					<figcaption>Figure: Too many people make the same mistake as Ms Petersen</figcaption>
				</figure>
				<p>
					She says she will never drive through water again.<br>
					"It was really terrifying and it was really quick, it happened so quickly," she says.
					"I would just say never even try it, it's really deceptive. You watch other cars go through, you think it's fine and it's not."
				</p>
				<a id="button-next" href="map.php">next</a>
			</div>
			</div>
	</section>
</div>

<?php include("footer.php"); ?>