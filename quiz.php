<?php $pageTitle="quiz"; ?>
<?php $pageFile="quiz"; ?>
<?php $pagePrev="article1_p1.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

	<div id="book-container">
		<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="leftpage">
					<h1>Quiz</h1>

					<form action = "" method = "post">
						<p>Question 1 : Which year did the Brisbane Floods occur?</p>
						<input type="radio" id="q1a" name="q1" value="a">
						<label for="q1a">Option a</label> <br>
						<input type="radio" id="q1b" name="q1" value="b">
						<label for="q1b">Option b</label> <br>
						<input type="radio" id="q1c" name="q1" value="c">
						<label for="q1c">Option c</label> <br>
						<input type="radio" id="q1d" name="q1" value="d">
						<label for="q1d">Option d</label> <br>
					
					<p>Question 2 : Where should you place sandbags?</p>
					
						<input type="radio" id="q2a" name="q2" value="a">
						<label for="q2a">a)</label> <br>
						<input type="radio" id="q2b" name="q2" value="b">
						<label for="q2b">b)</label> <br>
						<input type="radio" id="q2c" name="q2" value="c">
						<label for="q2c">c)</label> <br>
						<input type="radio" id="q2d" name="q2" value="d">
						<label for="q2d">d)</label> <br>
					
					<p>Question 3 : Which all should you do during a flood?</p>
					
						<input type="radio" id="q3a" name="q3" value="a">
						<label for="q3a">Option a</label> <br>
						<input type="radio" id="q3b" name="q3" value="b">
						<label for="q3b">Option b</label> <br>
						<input type="radio" id="q3c" name="q3" value="c">
						<label for="q3c">Option c</label> <br>
						<input type="radio" id="q3d" name="q3" value="d">
						<label for="q3d">Option d</label> <br>

						<br>
						<?php include("results.php"); ?>
						<input type="submit" value="Submit" name="submit">
					</form>

					<!-- <div id=serialize></div> -->
					<!-- <button id="submit" onclick="submit()">Submit</button> -->
					<div id="win">
						<p>Congratualtions! You Passed</p>
					<a href="certificate.php"><div id="get_cert"> Click here to get your certificate!</div></a>

					<button id="button-next" onclick="nextPage()"> next </button>
					</div>
				</div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>