<?php $pageTitle="Article 2 - Part 1"; ?>
<?php $pageFile="article2P1"; ?>
<?php $pagePrev="map.php"; ?>
<?php $pageNext="game.php"; ?>
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

					<p>For Police Sergeant, Peter Cochran, the message was "don't travel. There is no travel at all.
						 We have broadcast messages not to travel and it is probably a bit of common sense among the community
						 that you don't."
					</p>

					<p>What with more than half of flood-related deaths being a result of driving through floodwater, this is great advice.
						Even if it looks calm, no one can predict what floodwater will do or what’s happened to the road underneath.
						Any amount of swift flowing water can sweep away your car and even six inches of water is deep enough
						 to reach the bottom of most passenger cars, running the risk of flooding the exhaust and leaving your car immobile.
					</p>

					<p>Floods can occur almost anywhere in Queensland and can rise over days, or in minutes in a 'flash flood'.
						Flood waters can move fast, so never try to drive over roads that have water over them.

						To stay safe while driving in flooded areas:
						<ul>
							<li>Check if flooding is likely, plan ahead and make alternative arrangements so you are not driving on flooded roads.</li>
							<li>Never drive on a road or bridge covered with water—floodwaters can be fast moving and hide dips, debris and roads that have been washed away entirely.</li>
							<li>Always follow the directions of flood road signs, in particular road closure signs. Learn the flood barriers and signs.</li>
							<li>When floodwater starts to go down, don't drive over the roads until the road is open again. Sometimes the road damage is not known until
							the road is completely dry and is being driven on again.</li>
							<li>Look out for landslides as many roadsides will have exposed layers of rocks and soil that could slip.</li>
						</ul>

					<p>However, that didn't stop some of the more foolhardy people from trying. 
						Ms Petersen says she was wary of crossing a flooded causeway on 20th of January 2011, 
						but decided to do so after watching three other vehicles make it through.
						"So then I followed them and just as I was going across, about eight or 10 feet upstream there was 
						this broken branch lodged with all this debris... and there was an almighty crack and the branch just
						splintered into pieces and this wave of debris and water just hit the car," she says.
						"Then it was history because the stream was flowing quite rapidly."
						Ms Petersen managed to open her window and climb onto the roof of the vehicle before jumping into the
						floodwaters and making her way to the edge.
						She says she will never drive through water again.
						"It was really terrifying and it was really quick, it happened so quickly," she says.
						"I would just say never even try it, it's really deceptive.
						"You watch other cars go through, you think it's fine and it's not."
						
					<figure>
						<img src="images/Article1-chelmer_tape.png" alt="chelmer" width="100%">
						<figcaption>Figure: Chelmer, January 2011 </figcaption>
					</figure>
					<figure>
						<img src="images/Article1-chelmer2.jpg" alt="flooded roads" width="80%">
						<figcaption>Figure: Flooded roads </figcaption>
					</figure>
				</article>

				<button id="button-prev" onclick="prevPage()"> previous </button>
			</div>
			<div id="rightpage">
				<button id="button-next" onclick="nextPage()"> next </button>
			</div>
			</div>
	</section>
</div>
<script src="js/api-abc.js"></script>

<?php include("footer.php"); ?>