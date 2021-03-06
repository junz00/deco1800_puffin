<?php $pageTitle="Map"; ?>
<?php $pageFile="map"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<!--<body onload="openBox(this)">-->
<div id="book-container">

	<section id="scrapMessage" class="hidden">
		<img id="scrap" src="images/paper_scrap.png" width=40%>
		<div class="scrapText">
			<span id="close" onclick="closeBox()">&#10006;</span>
			<div id="helpText">
				<h3>Keeping Progress</h3>
				<p>This map of the Brisbane River shows your progress through the journal.<br><br>
				Select a point on the map to begin that story.</p>
			</div>
			<div id="chapterCompleteText">
				<h3>Congratulations, you completed all the chapters!</h3>
				<p>To finish the Brisbane Flood Journal, put your knowledge
                to the test in the Quiz, or if you would like to let the
                knowledge sink in for a bit longer, why not visit the Gallery
                to view further experiences of flooding from around Australia</p>
				<nav>
					<a href="quiz.php">Quiz</a>
					<a href="gallery.php">Gallery</a>
				</nav>
			</div>
		</div>
	</section>

	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages" class="spread">
			<div id="pagespread">
				<h2 id="title">Map of Brisbane<img src="images/help_symbol.png" id="help"></h2>

				<img src="images/floodmapingwotape.jpg" id="map" alt="Map of Brisbane">

				<div id="mapPoints">
				    <a href="article1_p1.php"><div class="mapPoint" id="ch1"></div>
					<div id="ch1Message" class="mapPointMessage">Chapter 1</div></a>

					<a href="article2_p1.php"><div class="mapPoint"  id="ch2"></div>
					<div id="ch2Message" class="mapPointMessage">Chapter 2</div></a>

					<a><div class="mapPoint"  id="ch3"></div>
					<div id="ch3Message" class="mapPointMessage">Chapter 3: Locked</div></a>

					<a><div class="mapPoint"  id="ch4"></div>
					<div id="ch4Message" class="mapPointMessage">Chapter 4: Locked</div></a>
					
					<a><div class="mapPoint"  id="ch5"></div>
					<div id="ch5Message" class="mapPointMessage">Chapter 5: Locked</div></a>
				</div>
			</div>
			<a id="button-prev" href="intro.php">previous</a>
		</div>
	</section>
</div>

<?php include("footer.php"); ?>
