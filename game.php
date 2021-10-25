<?php $pageTitle="Sandbag Game"; ?>
<?php $pageFile="game"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

	<div id="book-container">
		<section id="scrapMessage">
			<img id="scrap" src="images/paper_scrap.png" width=40%>
			<div class="scrapText">
				<span id="close" onclick="closeBox()">&#10006;</span>
				<p>Welcome to the Sandbag Game! <br>
					Use your knowledge of sandbags to help Aaron and his family protect their home. <br>
					Remember, sandbag walls should be at least 2 sandbags high for maximum effectiveness. <br>
					(Don't forget the plastic sheeting either!)
				</p>
			</div>
		</section>
		<section id = "book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="pagespread">
					<img id="game_bg" src="images/garage_bg.jpg" draggable="false">
					<a id="button-exit" href="article1_p1.php">exit</a>

					<div id = "images">
						<a href = "article1_p3.php">
							<div id = "cont"><strong id = "cont_text">Well done! Click to Continue</strong></div>
						</a>
						
						<div id = "plastic_cover"></div>
						<div id = "box2" ondragover = "showDrop(event)" ondrop = "drop2(event)"></div>

						<img id = "plastic_sheeting" src = "images/plastic_sheeting.png" draggable = "true" ondragstart = "dragStart1(event)">

						
						<div id = "box1" ondragover="showDrop(event)" ondrop="drop1(event)"> 
							<p>Place objects here</p>
						</div>

						<img id="sandbag1" src="images/sandbag.png" draggable="true" ondragstart="dragStart2(event)">
						<img id="sandbag2" src="images/sandbag.png" draggable="true" ondragstart="dragStart2(event)">

						<img id="sandbag1_placed" src="images/sandbag.png" draggable="false">
						<img id="sandbag2_placed" src="images/sandbag.png" draggable="false">

					</div>
				</div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>