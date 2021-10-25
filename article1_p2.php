<?php $pageTitle="Article 1 - Part 2"; ?>
<?php $pageFile="article1P2"; ?>
<?php $pagePrev="article_p1.php"; ?>
<?php $pageNext="game.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

	<div id="book-container">
		<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="leftpage">
					<h1> Chapter 1: Sandbags Pt. II</h1>
					<article>
						<p>Sandbags correctly placed appropriately around the home <mark title="According to the Qld gov, they 'significantly reduce the impact of flooding'">are one of the most effective defenses against flooding</mark>.</p> 
						<!--<div class=id="distribution"">
							<figure id="sandbag_distribution">
								<img src="images/Article1-sandbag_distribution.png" alt="sandbags being distributed" class="articleImage">
								<figcaption>Figure: Sandbags will be distributed by local council </figcaption>
							</figure>
						</div>-->
						<p>They can be purchased from your local hardware
								store or are distributed by your local Council or by <mark title="State Emergency Services">SES</mark> in an emergency flood.</p>
						
								<div class="gallery-images" query="SES volunteers in Rochester" limit="1"></div>
							
						<p>Before laying down a sandbag, place down a layer of plastic sheeting to act as a <mark title="used to prevent any leakage that the sandbags let through">waterproof membrane</mark>.</p>
						<p>Sandbags should be placed in front of doorways / roller doors and brickwork vents with
					sandbag walls being at least at <mark title="This is sufficient for most flash floodings, but a higher wall could be built in extreme circumstances">2 sandbags high </mark> for maximum effectiveness.</p>
					</article>
					<a id="button-prev" href="article1_p1.php">previous</a>
				</div>
		<div id="rightpage">

			<article>		
				<p> Make sure you cover all drainage holes and floor drains, including toilets, laundry, shower
					and bath drains to stop the backflow of <mark title="Contaminated water from domestic use">grey water</mark>.</p>

				<div class="container">
					<img src="images/Article1-sandbag_membrane.jfif" alt="sandbags in front of a door" class="articleImage">
					<div class="imgOverlay"><b>Place sandbags in front of doors (Don't forget the plastic sheeting!)<b></div>
				</div>

				
				<p>With this information, you will be easily able to aid Aaron and his family in sandbagging their home!
					Click on the box below to help them out.</p>
			</article>

			<a href="game.php">
				<div id="access_game">
					<p id="access_game_text"> Click here to help Aaron sandbag his house</p>
				</div>
			</a>

			<!--<button id="button-next" onclick="nextPage()"> next </button>-->
			</div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>