<?php $pageTitle="Certificate"; ?>
<?php $pageFile="cert"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
    <section id="book">
        <img id="book-bg" src="images/diary_bg.jpg">
        <div id="pages">
            <div id="pagespread">
                <img id="cert" src="images/certificate.jpg" alt="certificate">
                <h1 id="recipient">Name on certificate</h1>
                <em id="date">[Today's date]</em>
                <!-- <button type="button" id=exit_button onclick="printCert()">print</button> -->
                <a id="button-next" href="index.php">finish</a>
            </div>
        </div>
    </section>
</div>

<?php include("footer.php"); ?>