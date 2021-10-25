<?php $pageTitle="Floded Road Game"; ?>
<?php $pageFile="game2"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

	<div id="book-container">
 		<section id="scrapMessage">
			<img id="scrap" src="images/paper_scrap.png" width=40%>
			<div class="scrapText">
				<span id="close"   onclick="closeBox()">&#10006;</span>
				<p>Welcome to the Flooded Roads Game! <br>
					Use your knowledge on the dangers of flooded roads to help this car from getting into an accident <br>
					Click 'Start' to move the car and 'Stop' to stop the car<br>
					(Be sure to stop the car before it hits the water!)
				</p>
			</div>
		</section>
		<section id = "book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="pagespread">
                    <img id="game_bg" src="images/road.jpg">
					<a id="button-exit" href="article2_p1.php">exit</a>
                    <p>
                    <button id = "movebutton" onclick="move_car()">Start</button> 
                    </p>
                    <p>
                    <button id = "stopbutton" onclick="stop_car()">Stop</button>
                    </p>
                    <a href = "article2_p3.php">
							<div id = "cont"><strong id = "cont_text">Well done! Click to Continue</strong></div>
						</a>

							<div id = "restart"><strong id = "restart_text">Oh No! Click Start to try again</strong></div>
					<div id = "car_animation">
                        <img id = "car" src="images/car.png">
				    </div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>