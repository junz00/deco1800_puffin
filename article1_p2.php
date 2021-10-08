<?php $pageTitle="Article 1 - Part 1"; ?>
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
					<h1> Chapter: Chelmer Part I</h1>
					<article>
						<p>Sandbags correctly placed appropriately around the home can reduce the impact of flooding significantly.</p> 
						<div class=id="distribution"">
							<figure id="sandbag_distribution">
								<img src="images/Article1-sandbag_distribution.png" alt="sandbags being distributed" width="100%">
								<figcaption>Figure: Sandbags will be distributed by local council </figcaption>
							</figure>
							
							<p>They can be purchased from your local hardware
								store or distributed by your local Council or by <mark title="State Emergency Services">SES</mark> in an emergency flood.</p>
						</div>
							
						<p>Before laying down a sandbag, place down a layer of plastic sheeting to act as a waterproof membrane.</p>
						<p>Sandbags should be placed in front of doorways / roller doors and brickwork vents with
					sandbag walls being at least at 2 sandbags high for maximum effectiveness.</p>
					</article>
					<button id="button-prev" onclick="prevPage()"> previous </button>
				</div>
		<div id="rightpage">

			<article>		
				<p> Make sure you cover all drainage holes and floor drains, including toilets, laundry, shower
					and bath drains to stop the backflow of contaminated water.</p>
				<figure>
					<img src="images/Article1-sandbag_membrane.jfif" alt="sandbags in front of a door" width="100%">
					<figcaption>Figure: Place sandbags in front of doors (Don't forget the plastic sheeting!) </figcaption>
				</figure>
				<p>With this information, you will be easily able to aid Aaron and his family in sandbagging their home!
					Click on the box below to help them out.</p>
			</article>

			<a href="game.php">
				<div id="access_game">
					<p id="access_game_text"> Click here to play</p>
				</div>
			</a>

			<!--<button id="button-next" onclick="nextPage()"> next </button>-->
			</div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>