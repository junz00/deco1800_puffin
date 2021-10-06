<?php $pageTitle="Article- Part 2"; ?>
<?php $pageFile="articleP2"; ?>
<?php $pagePrev="article_p1.php"; ?>
<?php $pageNext="quiz.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

	<div id="book-container">
		<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="leftpage">
					<h1> Chapter: Chelmer Part II</h1><br>
					<figure id="aaron">
						<img src="images/aaron2.jpeg" alt="Aaron and co" width="80%" height="60%">
						<figcaption>Figure: A very happy Aaron and his family</figcaption>
					</figure>
					<p id=congrats> Yay! You did it</p>
					<article>
						Aaron and his family successfully protected his home from the flood with your 
						help by placing sandbags in front of vulnerable locations.<br><br>

						Sandbags can be placed along doorways, drainage holes and floor drains, and toilets to prevent the backflow of water.
					</article>
					<button id="button-prev" onclick="prevPage()"> previous </button>
				</div>
				<div id="rightpage">
					<figure id="aaron">
						<img src="images/sandbag_example.jpg" alt="Sandbag" width="80%" height="60%">
						<figcaption>Figure: House protected by sandbags</figcaption>
					</figure>
					<article>To find out more informations on how to prepare for a flood be sure to
						the Queensland Government Website below:
					</article>
					<a href="https://www.disaster.qld.gov.au/dmp/sandbagging/Pages/default.aspx">
						<p>https://www.disaster.qld.gov.au/dmp/sandbagging/Pages/default.aspx</p>
					</a>
					<p>The best tip is to keep calm and follow the Qld Gov Recommended Steps</p>
					<img src="images/keep_calm.jpg" alt="Keep calm and follow the QLD Gov Steps" height = 40%>
					<button id="button-next" onclick="nextPage()"> next </button>
				</div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>