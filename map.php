<?php $pageTitle="map"; ?>
<?php $pageFile="map"; ?>
<?php $pagePrev="index.php"; ?>
<?php $pageNext="article_p1.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

	<div id="book-container">
		<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="pagespread">
					<a href="article_p1.php"><img id="map" src="images/nav-map.jpg" alt="Map of Brisbane"></a>
					<button id="button-prev" onclick="prevPage()"> previous </button>
					<button id="button-next" onclick="nextPage()"> next </button>
				</div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>