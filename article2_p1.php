<?php $pageTitle="Article 2 - Part 1"; ?>
<?php $pageFile="article2P1"; ?>
<?php $pagePrev="map.php"; ?>
<?php $pageNext="game.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
			<div id="leftpage">
				<h2>New satellite imagery reveals extent of flooding</h2>
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