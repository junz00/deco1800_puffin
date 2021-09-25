<?php $pageTitle="Article- Part 1"; ?>
<?php $pageFile="articleP1"; ?>
<?php $pagePrev="map.php"; ?>
<?php $pageNext="game.php"; ?>
<?php include("left_page.php"); ?>
	<h1>Chapter: Chelmer Part I</h1>
	<figure>
		<img src="images/chelmer.jpg" alt="chelmer" width="50%" height="50%">
		<figcaption>Figure: Chelmer, January 2011 </figcaption>
	</figure>
	<article>
	On the night of the 12th of January, the suburb of Chelmer is getting ready for a devastating flood.<br><br>
	This is where we meet Aaron and his family. They'll be staying up all night sandbagging their home.<br><br>
	And they sure could use some help right now.
	</article>

<?php include("right_page.php");?>
	<figure id="aaron">
		<img src="images/aaron1.jpeg" alt="Aaron and co" width="80%" height="60%">
		<figcaption>Figure: Aaron and his family</figcaption>
	</figure>
	<p>Click on the box below to help them out.</p>
	<a href="game.php">
		<div id="access_game">
		<p id="access_game_text"> Click here to play</p>
		</div>
	</a>
	
<?php include("end_page.php"); ?>