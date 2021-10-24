<?php $pageTitle="Article 2 - Part 1"; ?>
<?php $pageFile="article2P1"; ?>
<?php $pagePrev="article_p3.php"; ?>
<?php $pageNext="article2_p2.php"; ?>
<?php include("header.php"); ?>
<?php include("bookmarks.php"); ?>

<div id="book-container">
	<section id="book">
		<img id="book-bg" src="images/diary_bg.jpg">
		<div id="pages">
		<div id="leftpage">
				<h1>Chapter 2: If It's Flooded, Forget It!</h1>
				<article>
					<p>Housing isn't the only thing impacted in flooding, and as the rain continued during the Brisbane Floods,
						roads were flooded and remote communities cut off. Local police, emergency services and councils were all 
						emphasizing the message "If it's flooded, forget it!
					</p>

					<figure>
						<img src="images/Article1-chelmer_tape.png" alt="chelmer" width="100%">
						<figcaption>Figure: Chelmer, January 2011 </figcaption>
					</figure>

					<p>With more than half of flood-related deaths being a result of driving through floodwater, this is great advice.
					Even if it looks calm, no one can predict what floodwater will do or what’s happened to the road underneath.
					</p>
				</article>

				<button id="button-prev" onclick="prevPage()">previous</button>
			</div>
			<div id="rightpage">
				<p>Swift flowing water can sweep away your car and even six inches of water is deep enough
					to reach the bottom of most passenger cars, flooding the exhaust and leaving your car immobile.</p>
				<p>To stay safe while driving in flooded areas:</p>
						<ul>
							<li>Check if flooding is likely and make alternative arrangements so you are not driving on flooded roads.</li>
							<li>Never drive on a road covered with water—floodwaters can be fast moving and hide dips, debris and roads that have been washed away entirely.</li>
							<li>Always follow the directions of flood road signs and road closures.</li>
							<li>Don't drive over previously roads until the road is open again. Sometimes the road damage is not known until
							the road is completely dry.</li>
						</ul>
				<p>Flooding didn't stop some of the more foolhardy people from trying to cross them though. Local Ms Petersen says she was wary of crossing a flooded causeway on 20th of January 2011, 
					but decided to do so after watching three other vehicles make it through.</p>
				<p> Click here to play the car game and see what choice you would make</p>
				<button id="button-next" onclick="nextPage()">next</button>
			</div>
			</div>
	</section>
</div>

<?php include("footer.php"); ?>