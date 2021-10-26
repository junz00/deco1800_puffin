<?php $pageTitle="Article 2 - Part 3"; ?>
<?php $pageFile="article2P3"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
			<div id="leftpage">
				<h1>Chapter 2: Roads Pt. III</h1>
				<section id="scrapMessage">
					<img id="scrap" src="images/paper_scrap.png" width=40%>
					<div class="scrapText">
						<span id="close"   onclick="closeBox()">&#10006;</span>
						<p><strong>You received another mysterious scrap of paper!...</strong><br> It seems to fit together with the other piece.</p>
						<img src="images/certificate_scrap.png" width="25%" style= "transform: scaleX(-1)">
					</div>
				</section>

				<p id=congrats> Thanks for your help<span id="enterName"></span>!</p>
				<p>Though you managed to keep yourself safe, Eva's car was not as lucky.</p>
				<p>She chose to drive through the flooded road. </p>
				<p>"So then I followed the cars and just as I was going across, about eight or 10 feet upstream there was 
					this broken branch lodged with all this debris," she says.</p>
				<div class="gallery-images" query="station wagon" limit="1"></div>

				<!--<figure id="aaron">
					<img src="images/Article2-car_stuck.jpg" alt="A car sinking" class="articleImage">
					<figcaption>Figure: Her car sunk after being swept off the road</figcaption>
				</figure>
				<figure id="aaron">
					<img src="images/Article2-car_towed.jpg" alt="A car being pulled from water" class="articleImage">
					<figcaption>Figure: A tow truck was called to remove it from flood waters</figcaption>
				</figure>-->

				<a id="button-prev" href="article2_p2.php">previous</a>
			</div>
			<div id="rightpage">
				<p>"There was an almighty crack and the branch just splintered into pieces and this wave of debris and water just hit the car.
					Then it was history because the stream was flowing quite rapidly." 
				</p>
				<p>	Eva managed to open her window and climb onto the roof of the vehicle before jumping into the
					floodwaters and making her way to the edge.
				</p>
				
				<div class="gallery-images" query="Car stuck in flood water in Lockhart" limit="1"></div>
				
				<!--<figure id="aaron">
					<img src="images/Article2-stranded_car.jpg" alt="A car up to its tires in flood water"class="articleImage">
					<figcaption>Figure: Too many people make the same mistake as Eva</figcaption>
				</figure>-->
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