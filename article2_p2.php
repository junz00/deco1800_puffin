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
				<button id="button-prev" onclick="prevPage()"> previous </button>
			</div>
			<div id="rightpage">
				<button id="button-next" onclick="nextPage()"> next </button>
			</div>
			</div>
	</section>
</div>
<script src="js/api-abc.js"></script>

<?php include("footer.php"); ?>