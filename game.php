<?php $pageTitle="game"; ?>
<?php $pageFile="game"; ?>
<?php $pagePrev="article_p1.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

	<div id="book-container">
		<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="pagespread">
					<img id="game_bg" src="images/grass.jpg">
					<button type="button" id =exit_button onclick="exitGame()">exit</button>

					<div id = "images">
						<a href ="article1_p2.php">
							<div id = "cont"><strong id = "cont_text"> Continue</strong></div>
						</a>
						<img id="dog_girl" src="images/dog_girl.jpg" draggable="true">
						<img id="bernie" src="images/bernie.png" draggable="true">
						<img id="fruits" src="images/fruits.png" draggable="true">

						<div id = "box" ondragover="showDrop(event)" ondrop="drop(event)"> 
							<p>Place Sandbag inside</p>
						</div>
						<img id="among_us" src="images/among_us.png" draggable="true">
						<img id="sandbag" src="images/sandbag.png" draggable="true"	ondragstart="dragStart(event)">
						<button id="button-prev" onclick="prevPage()"> previous </button>
						<button id="button-next" onclick="nextPage()"> next </button>
					</div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>