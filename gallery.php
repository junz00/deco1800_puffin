<?php $pageTitle="Gallery"; ?>
<?php $pageFile="gallery"; ?>
<?php $pagePrev="index.php"; ?>
<?php $pageNext="article1_p1.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<!--<body onload="openBox(this)">-->
<div id="book-container">

<!--
	<section id="scrapMessage">
		<img id="scrap" src="images/paper_scrap.png" width=40%>
		<div class="scrapText">
			<span id="close"   onclick="closeBox()">&#10006;</span>
			<p>This map of the Brisbane River shows your progress through the journal. <br>
			Select a point on the map to begin that story or simply press next to 
			begin the first article.</p>
		</div>
	</section>
-->

	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages" class="spread">
			<ul id="db-queries">
				<li search="sandbag">Sandbag</li>
				<li search="road">Flooded Road</li>
			</ul>
			<div id="pagespread">
				<div id="gallery-images"></div>
			</div>
		</div>
	</section>
</div>

<?php include("footer.php"); ?>
