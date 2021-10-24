<?php $pageTitle="Article 1 - Part 1"; ?>
<?php $pageFile="article1P1"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
			<div id="leftpage">
				<h1>Chapter 1: Chelmer Part I</h1>
				<article>
					<p>Let's get started<span id="enterName"></span></p>
					<p>The Brisbane floods of 2011 hit many people hard. The suburb of Chelmer was immersed in water with houses and roads being flooded. </p>
					<figure>
						<img src="images/Article1-chelmer_tape.png" alt="chelmer" width="100%">
						<figcaption>Figure: Chelmer, January 2011 </figcaption>
					</figure>
					<figure>
						<img src="images/Article1-chelmer2.jpg" alt="flooded roads" width="80%">
						<figcaption>Figure: Flooded roads </figcaption>
					</figure>
				</article>

				<a id="button-prev" href="map.php">previous</a>
			</div>
			<div id="rightpage">

				<article>	
					<p>However, with the proper preparation, the worst of the damage was avoided.</p>
					<p>On the 12th of January, the night before the flood, everyone was getting ready for 
						the upcoming disaster. Meet Aaron and his family. To prepare for the floods, they 
						stayed up sandbagging their Graceville home until 4:00 in the morning.</p>
					<figure>
						<img src="images/Article1-aaron_family.jpg" alt="Aaron and his family" width="100%">
						<figcaption>Figure: Aaron and his family </figcaption>
					</figure>

					<p>In order to help them out, let's learn more about sandbags and the best way to use 
						them to safeguard houses. </p>
				</article>	
				<a id="button-next" href="article1_p2.php">next</a>
			</div>
		</div>
	</section>
</div>
</body>

<?php include("footer.php"); ?>