<?php $pageTitle="Quiz"; ?>
<?php $pageFile="quiz"; ?>
<?php $pagePrev="article1_p1.php"; ?>
<?php $result = 0; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>


<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
			<div id="leftpage">
				<h1>Quiz</h1>
				<p>So, do you think you would know what to do in a real flood to save yourself and your belongings? Take this quiz to find out!</p>
				<div id="papers-not-found">
					<p>Hmmm... looks like you don't have all the clues needed to take the quiz. You'll need to look around for them!</p>
					<!-- Icons representing the items are not yet found will appear here -->
				</div>

				<form id="quiz-form" action = "" method = "post">
					<p id = "Q1">Question 1 : Which year did the Brisbane Floods occur?</p>
					<input type="radio" id="q1a" name="q1" value="a">
					<label for="q1a">a) 2011</label> <br>
					<input type="radio" id="q1b" name="q1" value="b">
					<label for="q1b">b) 2008</label> <br>
					<input type="radio" id="q1c" name="q1" value="c">
					<label for="q1c">c) 2012</label> <br>
					<input type="radio" id="q1d" name="q1" value="d">
					<label for="q1d">d) 1998</label> <br>

					<p id = "Q2">Question 2 : Where should you place sandbags in the event of a flood?</p>

					<input type="radio" id="q2a" name="q2" value="a">
					<label for="q2a">a) In front of your doors</label> <br>
					<input type="radio" id="q2b" name="q2" value="b">
					<label for="q2b">b) On top of drainages and toilets</label> <br>
					<input type="radio" id="q2c" name="q2" value="c">
					<label for="q2c">c) Beside the window</label> <br>
					<input type="radio" id="q2d" name="q2" value="d">
					<label for="q2d">d) Both Option a) and b)</label> <br>

					<p id = "Q3">Question 3 : Which of the following should you NOT do when driving in flooded areas</p>

					<input type="radio" id="q3a" name="q3" value="a">
					<label for="q3a">a) Check if flooding is likely in the area</label> <br>
					<input type="radio" id="q3b" name="q3" value="b">
					<label for="q3b">b) Follow the directions of flood road signs</label> <br>
					<input type="radio" id="q3c" name="q3" value="c">
					<label for="q3c">c) Drive over previously flooded roads before it is open</label> <br>
					<input type="radio" id="q3d" name="q3" value="d">
					<label for="q3d">d) Make alternate arrangements if you feel unsafe</label> <br>

					<br>
					
					<input type="submit" value="Submit" name="submit">
				</form>
			</div>

			<div id="rightpage">
				<?php include("results.php"); ?>
				<br><br>
				<p>Images from the <a href="gallery.php">ABC image archive</a></p>
				<div class="gallery-images" query="" limit="1"></div>
			</div>
		</div>
	</section>
</div>

<?php include("footer.php"); ?>