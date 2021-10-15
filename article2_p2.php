<?php $pageTitle="Article 2 - Part 2"; ?>
<?php $pageFile="article2P2"; ?>
<?php $pagePrev="map.php"; ?>
<?php $pageNext="game.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
			<div id="leftpage">
				<p>Congratulations, you made the right decision and stayed safe during the floods!</p>
				<p> Ms Peterson was not as lucky however.<br><br>
					"So then I followed them and just as I was going across, about eight or 10 feet upstream there was 
					this broken branch lodged with all this debris... and there was an almighty crack and the branch just
					splintered into pieces and this wave of debris and water just hit the car," she says.
				</p>
				<figure id="aaron">
					<img src="images/aaron2.jpeg" alt="Aaron and co" width="80%" height="60%">
					<figcaption>Figure: A very happy Aaron and his family</figcaption>
				</figure>
				<button id="button-prev" onclick="prevPage()"> previous </button>
			</div>
			<div id="rightpage">
				<p>
					"Then it was history because the stream was flowing quite rapidly."<br>
					Ms Petersen managed to open her window and climb onto the roof of the vehicle before jumping into the
					floodwaters and making her way to the edge.
				</p>
				<figure id="aaron">
					<img src="images/aaron2.jpeg" alt="Aaron and co" width="80%" height="60%">
					<figcaption>Figure: A very happy Aaron and his family</figcaption>
				</figure>
				<p>
					She says she will never drive through water again.<br>
					"It was really terrifying and it was really quick, it happened so quickly," she says.
					"I would just say never even try it, it's really deceptive.
					"You watch other cars go through, you think it's fine and it's not."
				</p>
				<button id="button-next" onclick="nextPage()"> next </button>
			</div>
			</div>
	</section>
</div>
<script src="js/api-abc.js"></script>

<?php include("footer.php"); ?>