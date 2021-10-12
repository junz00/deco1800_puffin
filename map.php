<?php $pageTitle="map"; ?>
<?php $pageFile="map"; ?>
<?php $pagePrev="index.php"; ?>
<?php $pageNext="article1_p1.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<!--<body onload="openBox(this)">-->
<div id="book-container">

	<section id="scrapMessage">
		<img id="scrap" src="images/paper_scrap.png" width=40%>
		<div class="scrapText">
			<span id="close"   onclick="closeBox()">&#10006;</span>
			<p>This map of the Brisbane River shows your progress through the journal. <br>
			Select a point on the map to begin that story or simply press next to 
			begin the first article.</p>
		</div>
	</section>

	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages" class="spread">
			<div id="pagespread">
				<h2>Map of Brisbane</h2>
				<a href="article_p1.php" id="map"><img src="images/floodmapingwotape.jpg" alt="Map of Brisbane"></a>
				<button id="button-prev" onclick= "prevPage()" > previous </button>
				<button id="button-next" onclick="nextPage()"> next </button>
			</div>
		</div>
	</section>
</div>

<?php include("footer.php"); ?>
