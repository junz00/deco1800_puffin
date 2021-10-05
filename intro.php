<?php $pageTitle="Introduction"; ?>
<?php $pageFile="intro"; ?>
<?php $pagePrev="article_p1.php"; ?>
<?php $pageNext="quiz.php"; ?>
<?php include("header.php"); ?>

	<div id="book-container">
		<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="leftpage">
                    <p> Concept explaination </p>
                <button id="button-prev" onclick="prevPage()"> previous </button>
                </div>
				<div id="rightpage">
                    <p> User login </p>

                <button id="button-next" onclick="nextPage()"> next </button>
				</div>
			</div>
		</section>
	</div>

<?php include("footer.php"); ?>