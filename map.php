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
				<img src="images/nav-map.jpg" id="map" alt="Map of Brisbane">

				<div id="mapPoints">
				    <a href="article1_p1.php"><div class="mapPoint" id="ch1"></div></a>
					<div class="mapPoint"  id="ch2"></div>
					<div class="mapPoint"  id="ch3"></div>
					<div class="mapPoint"  id="ch4"></div>
					<div class="mapPoint"  id="ch5"></div>
				</div>

				<button id="button-prev" onclick= "prevPage()" > previous </button>
				<button id="button-next" onclick="nextPage()"> next </button>
			</div>
		</div>
	</section>
</div>

<?php include("footer.php"); ?>
