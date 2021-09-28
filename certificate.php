<?php $pageTitle="Certificate"; ?>
<?php $pageFile="cert"; ?>
<?php $pagePrev="article_p2.php"; ?>
<?php $pageNext="index.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

	<div id="book-container">
		<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="pagespread">
                    <button type="button"  id =exit_button onclick="exitCert()">exit</button>
                    <img id="cert" src="images/certificate.png" alt="certificate">
                    <button id="button-prev" onclick="prevPage()"> previous </button>
					<button id="button-next" onclick="nextPage()"> next </button>
                </div>
            </div>
        </section>
    </div>

<?php include("footer.php"); ?>