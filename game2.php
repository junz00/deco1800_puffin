<?php $pageTitle="Floded Road Game"; ?>
<?php $pageFile="game2"; ?>
<?php $pagePrev="article1_p1.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

	<div id="book-container">
<!-- 		<section id="scrapMessage">
			<img id="scrap" src="images/paper_scrap.png" width=40%>
			<div class="scrapText">
				<span id="close"   onclick="closeBox()">&#10006;</span>
				<p>Welcome to the Sandbag Game! <br>
					Use your knowledge of sandbags to help Aaron and his family protect their home. <br>
					Remember, sandbag walls should be at least 2 sandbags high for maximum effectiveness. <br>
					(Don't forget the plastic sheeting either!)
				</p>
			</div>
		</section> -->
		<section id = "book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="pagespread">
                    <img id="game_bg" src="images/garage_bg.jpg">
                    <p>
                    <button id = "move" onclick="move_car()">Click to start</button> 
                    </p>
                    <p>
                    <button id = "stop" onclick="stop_car()">stop</button>
                    </p>
                    <a href = "article2_p2.php">
							<div id = "cont"><strong id = "cont_text">Well done! Click to Continue</strong></div>
						</a>
					<div id = "car_animation">
                        <img id = "car" src="images/fruits.png">
				    </div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>