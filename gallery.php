<?php $pageTitle="Gallery"; ?>
<?php $pageFile="gallery"; ?>
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
			<div id="pagespread">
				<h1>Archive of flood footage</h1>
				<p>Click on the categories below to see the effects that flooding has had on the lives of real people.</p>
				<ul class="db-queries">
					<li query="plan" limit="12">Planning</li>
					<li query="prepar" limit="12">Preparation</li>
					<li query="sandbag" limit="12">Sandbagging</li>

					<li query="evacuat" limit="12">Evacuation</li>
					<li query="road" limit="12">Flooded Roads</li>

					<li query="storm" limit="12">Storms</li>
					<li query="weather" limit="12">Weather</li>

					<li query="cut" limit="12">Cut-off towns</li>
					<li query="aerial" limit="12">Aerial Imagery</li>

					<li query="damage" limit="12">Damage</li>
					<li query="clean" limit="12">Clean-up</li>

					<li query="rescue" limit="12">Rescue</li>
					<li query="community" limit="12">Community</li>
					<li query="volunteer" limit="12">Volunteers</li>
					<li query="help" limit="12">Help</li>
				</ul>
				<div class="gallery-images" query="" limit="12"></div>
			</div>
		</div>
	</section>
</div>

<?php include("footer.php"); ?>
