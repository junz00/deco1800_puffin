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
					<h1> Chapter: Chelmer Part I</h1><br>
					<article>
						<p>Sandbags correctly placed appropriately around the home can impact of flooding 
							significantly. They can be purchased from your local hardware
							store or distributed by your local Council in an emergency flood.</p>
						<figure>
							<img src="images/Article1-sandbag_distribution.jpg" alt="Aaron and co" width="50%">
							<figcaption>Figure: Chelmer, January 2011 </figcaption>
						</figure>
						<p>Before laying down a sandbag, place down a layer of plastic sheeting to act as a waterproof membrane.</p>
						<figure>
							<img src="images/Article1-sandbag_membrane.jfif" alt="Aaron and co" width="50%">
							<figcaption>Figure: Chelmer, January 2011 </figcaption>
						</figure>
					</article>
					<button id="button-prev" onclick="prevPage()"> previous </button>
				</div>
		<div id="rightpage">

			<article>		
				<p>Sandbags should be placed in front of doorways / roller doors and brickwork vents with
					sandbag walls being at least at 2 sandbags high for maximum effectiveness.</p>
				<figure>
					<img src="images/Article1-sandbag_doors.jpg" alt="Aaron and co" width="50%">
					<figcaption>Figure: Chelmer, January 2011 </figcaption>
				</figure>
				<p> Make sure you cover all drainage holes and floor drains, including toilets, laundry, shower
					and bath drains to stop the backflow of contaminated water.</p>
				<p>With this information, you will be easily able to aid Aaron and his family in sandbagging their home!
					Click on the box below to help them out.</p>
			</article>

			<a href="game.php">
				<div id="access_game">
					<p id="access_game_text"> Click here to play</p>
				</div>
			</a>

			<button id="button-next" onclick="nextPage()"> next </button>
			</div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>