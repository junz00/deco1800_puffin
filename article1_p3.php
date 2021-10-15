<?php $pageTitle="Article 1 - Part 2"; ?>
<?php $pageFile="article1P3"; ?>
<?php $pagePrev="article_p2.php"; ?>
<?php $pageNext="quiz.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<body onload="displayCookieValue();">
	<div id="book-container">
	<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="leftpage">
				<h1> Chapter: Chelmer Part III</h1><br>
					<p id=congrats> Congratulations<span id="enterName"></span>! You did it!</p>
					<figure id="aaron">
						<img src="images/aaron2.jpeg" alt="Aaron and co" width="80%" height="60%">
						<figcaption>Figure: A very happy Aaron and his family</figcaption>
					</figure>

					<article>
						<p>You successfully helped Aaron and his family  protect their home from the flood by
						 placing sandbags in vulnerable locations.</p>

						<p>Remember: Sandbags can be placed along doorways, drainage holes, floor drains and toilets
						 to prevent the backflow of water.</p>
					</article>
					<button id="button-prev" onclick="prevPage()"> previous </button>
				</div>
		<div id="rightpage">
			<figure>
				<img src="images/Article1-sandbags.jpg" alt="Sandbag" width="80%">
				<figcaption>Figure: House protected by sandbags</figcaption>
			</figure>
			
			<article>
				<p>To find out more information on how to use sandbags to prepare for a flood be sure to go
				the Queensland Government's website on <a href="https://www.disaster.qld.gov.au/dmp/sandbagging/Pages/default.aspx" target="_blank">Using
				sandbags to protect your home and business</a>.
			</article>
			
			<p>Atfer all, the best tip is to keep calm and follow the Qld Government Recommended Steps</p>

			<p>Click next to continue on with the journal.</p>


			<button id="button-next" onclick="nextPage()"> next </button>
			</div>
			</div>
		</section>
	</div>
</body>

<?php include("footer.php"); ?>