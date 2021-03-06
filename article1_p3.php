<?php $pageTitle="Article 1 - Part 3"; ?>
<?php $pageFile="article1P3"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="leftpage">

				<section id="scrapMessage">
					<img id="scrap" src="images/paper_scrap.png" width=40%>
					<div class="scrapText">
						<span id="close"   onclick="closeBox()">&#10006;</span>
						<p><strong>You received a mysterious scrap of paper...</strong><br>This will come in handy later.</p>
						<img src="images/certificate_scrap.png" width="30%">
					</div>
				</section>

				<h1> Chapter 1: Sandbags Pt. III</h1><br>
					<p id=congrats> Congratulations<span id="enterName"></span>! You did it!</p>

					<div class="gallery-images" query="army personnel" limit="1"></div>

					<article>
						<p>You successfully helped Aaron and his family  protect their home from the flood by
						 placing sandbags in vulnerable locations.</p>

						<p><strong>Remember</strong>: Sandbags can be placed along doorways, drainage holes, floor drains and toilets
						 to prevent the backflow of water.</p>
					</article>
					<a id="button-prev" href="article1_p2.php">previous</a>
				</div>
		<div id="rightpage">
			<div class="container">
				<img src="images/Article1-sandbags.jpg" alt="Sandbags lining a wall" class="articleImage">
				<div class="imgOverlay"><strong>A house succesfully protected by sandbags</strong></div>
			</div>

			<br>
			<article>
				<p>To find out more informations on how to use sandbags to prepare for a flood be sure to
				the Queensland Government's website on <mark title="https://www.disaster.qld.gov.au/dmp/sandbagging/Pages/default.aspx"><a href="https://www.disaster.qld.gov.au/dmp/sandbagging/Pages/default.aspx" target="_blank">
				Using sandbags to protect your home and business</a></mark>.
			</article>
			
			<p>Atfer all, the best tip is to keep calm and follow the Qld Government Recommended Steps.</p>
			<p><strong>Click next to continue on with the journal.</strong></p>

			<a id="button-next" href="map.php">next</a>
			</div>
			</div>
		</section>
	</div>
</body>

<?php include("footer.php"); ?>