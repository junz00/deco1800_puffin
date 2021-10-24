<?php $pageTitle="quiz"; ?>
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
					<label for="q1a">Option a</label> <br>
					<input type="radio" id="q1b" name="q1" value="b">
					<label for="q1b">Option b</label> <br>
					<input type="radio" id="q1c" name="q1" value="c">
					<label for="q1c">Option c</label> <br>
					<input type="radio" id="q1d" name="q1" value="d">
					<label for="q1d">Option d</label> <br>

					<p id = "Q2">Question 2 : Where should you place sandbags?</p>

					<input type="radio" id="q2a" name="q2" value="a">
					<label for="q2a">a)</label> <br>
					<input type="radio" id="q2b" name="q2" value="b">
					<label for="q2b">b)</label> <br>
					<input type="radio" id="q2c" name="q2" value="c">
					<label for="q2c">c)</label> <br>
					<input type="radio" id="q2d" name="q2" value="d">
					<label for="q2d">d)</label> <br>

					<p id = "Q3">Question 3 : Which all should you do during a flood?</p>

					<input type="radio" id="q3a" name="q3" value="a">
					<label for="q3a">Option a</label> <br>
					<input type="radio" id="q3b" name="q3" value="b">
					<label for="q3b">Option b</label> <br>
					<input type="radio" id="q3c" name="q3" value="c">
					<label for="q3c">Option c</label> <br>
					<input type="radio" id="q3d" name="q3" value="d">
					<label for="q3d">Option d</label> <br>

					<br>
					
					<input type="submit" value="Submit" name="submit">
				</form>
				<?php include("results.php"); ?>

			</div>
		</div>
	</section>
</div>

<?php include("footer.php"); ?>