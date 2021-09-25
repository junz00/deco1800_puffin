<?php $pageTitle="game"; ?>
<?php $pageFile="game"; ?>
<?php $pagePrev="article_p1.php"; ?>
<?php include("left_page.php"); ?>
			<img id="game_bg" src="images/grass.jpg">


			<button type="button" id =exit_button onclick="exitGame()">exit</button>

			<div id = "images">
				<a href ="article_p2.php">
					<div id = "cont">
						<strong id = "cont_text"> Continue</strong>
					</div>
				</a>
				<img id="dog_girl" src="images/dog_girl.jpg" draggable="true">
				<img id="bernie" src="images/bernie.png" draggable="true">
				<img id="fruits" src="images/fruits.png" draggable="true">

				<div id = "box" ondragover="showDrop(event)" 
					ondrop="drop(event)"> 
				<p>Place Sandbag inside</p></div>
					<img id="among_us" src="images/among_us.png" draggable="true">
				<img id="sandbag" src="images/sandbag.png" draggable="true"
					 ondragstart="dragStart(event)">
<?php include("right_page.php"); ?>
<?php include("end_page.php"); ?>