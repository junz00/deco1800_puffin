<?php $pageTitle="Article 1 - Part 1"; ?>
<?php $pageFile="article1P1"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
			<div id="leftpage">
				<h1>Chapter 1: Sandbags Pt. I</h1>
				<article>
					<p>Let's get started<span id="enterName"></span></p>
					<p>The Brisbane floods of 2011 hit many people hard. </p>
					
					<!--<figure>
						<img src="images/Article1-chelmer.jpg" alt="a flooded chelmer" class="articleImage">
						<figcaption>Figure: Chelmer, January 2011 </figcaption>
					</figure>
					<figure>
						<img src="images/Article1-chelmer2.jpg" alt="flooded roads" class="articleImage">
						<figcaption>Figure: Flooded roads </figcaption>
					</figure>-->

					<div class="gallery-images" query="Keep safe and dry down there" limit="1"></div>
					<div class="gallery-images" query="Wimmera Bridge" limit="1"></div>
				</article>

				<a id="button-prev" href="map.php">previous</a>
			</div>
			<div id="rightpage">

				<article>	
					<p> The suburb of Chelmer was immersed in water with houses and roads being flooded. However, with the proper preparation, the worst of the damage was avoided.</p>
					<p>On the <mark title="A series of floods hit Brisbane spanning 2011, the first beginning in November 2011.">12th of January </mark>, the night before the flood, everyone was getting ready for 
						the upcoming disaster. Meet Aaron and his family. To prepare for the floods, they 
						stayed up sandbagging their Graceville home until 4:00 in the morning.</p>
							
					<figure>
					<img src="images/Article1-aaron_family.jpg" alt="Aaron and his family" class="articleImage">
						<figcaption>Figure: Aaron and his family </figcaption>
					</figure>
					<br>
					<p>In order to help them out, let's learn more about <mark title="Aptly named sand filled bags used for barricading or stopping water">sandbags</mark> and the best way to use 
						them to safeguard houses. </p>
				</article>	
				<a id="button-next" href="article1_p2.php">next</a>
			</div>
		</div>
	</section>
</div>
</body>

<?php include("footer.php"); ?>