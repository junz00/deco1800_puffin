<?php $pageTitle="Introduction"; ?>
<?php $pageFile="intro"; ?>
<?php $pagePrev="article_p1.php"; ?>
<?php $pageNext="quiz.php"; ?>
<?php include("header.php"); ?>
<style>
<?php include 'css/intro.css'; ?>
</style>

	<div id="book-container">
		<section id="book">
			<img id="book-bg" src="images/diary_bg.jpg">
			<div id="pages">
				<div id="leftpage">

                    <div class="nameInput">
                        <h2>This Journal Belongs to:</h2>

                        <form action="intro.php" method="post" id="enterName">
                            <input type="text"  onkeydown="if (event.keyCode == 1) document.getElementById('submitButton').click()" id="userName" name="user-Name" placeholder="Enter your name" autofocus>
                            <button onclick="setCookie('user-Name', 'userName')" type="button">Enter</button>
                            <br>
                        </form>

                        <div id="value"></div>
                    </div>


                <button id="button-prev" onclick="prevPage()"> previous </button>
                </div>

				<div id="rightpage">
                    <div class="introMessage">
                        <h2>Welcome to the Brisbane Flood Journal!<h2>
                        <p>
                            Here, you will explore the reality of flooding and the dangers it presents through the stories
                            of people who really lived through the events. Help them survive the floods by reading their 
                            stories, completing the mini-games and learning more about how to prepare and how to stay safe during 
                            a flood. <br><br>
                            Press Next to begin. <br><br>
                            Good luck!
                        <p>
                    <div>

                <button id="button-next" onclick="nextPage()"> next </button>
				</div>
			</div>
			<div id="rightpage">
				<form action="map.php" method="post" id="username-entry">
					<label for="username">This book belongs to...</label>
					<input type="text" id="username" name="username">
					<input type="submit" value="Submit">
				</form>
			<button id="button-next" onclick="nextPage()"> next </button>
			</div>
		</div>
	</section>
</div>

<?php include("footer.php"); ?>