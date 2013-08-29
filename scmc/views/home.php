{% extends "layouts/default.php" %}


{% block content %}


<!-- Intro -->
<div class="scape">
	<div class="container text-center facebook-prompt">
		
			<a href="http://www.facebook.com/SpongeCakeMonsterClash" class="facebook btn btn-blue">
				<img src="/img/sprites/fb.png" width="55" height="54"> 
				<span>Like us on Facebook for updates!</span>
			</a>
			<!-- <h2 class="lead">and sponge cake...</h2> -->
	</div>
</div>

<!-- Video -->
<section class="purple text-center">
	<div class="container">
		<!-- <h1>Last week, on Sponge Cake Monster Clash...</h1> -->
		<h2 class="big">Last week</h2>
		<h2 class="lead">on Sponge Cake Monster Clash...</h2>
		<div class="video-container">
			<iframe class="trailer" width="1280" height="720" src="http://www.youtube.com/embed/yon2hW9RSb4?rel=0&controls=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>



<!-- Monsters -->
<section class="purple text-center">
	<div class="container">
		<h1>Meet your monsters</h1>
		<div class="row monster-gallery">
			<div class="span3">
				<img src="/img/monsters/screech.png" data-at2x="/img/monsters/screech-2x.png" width="" height="" alt="Screech is a giant chicken wearing a suit.">
				<h2>Screech</h2>
			</div>
			<div class="span3">
				<img src="/img/monsters/scary.png" data-at2x="/img/monsters/scary-2x.png" width="" height="" alt="Scary is a scarecrow who hates water.">
				<h2>Scary</h2>
			</div>
			<div class="span3">
				<img src="/img/monsters/shivers.png" data-at2x="/img/monsters/shivers-2x.png" width="" height="">
				<h2>Shivers</h2>
			</div>
			<div class="span3">
				<img src="/img/monsters/spooky.png" data-at2x="/img/monsters/spooky-2x.png" width="" height="">
				<h2>Spooky</h2>
			</div>
		</div>
		<p class="action">
			<a class="btn btn-purple" href="/monsters">Hear their stories</a>
		</p>
		<p class="hint">
			Psst! You can learn even more by finding <a href="diaries">diary entries</a>!
		</p>
	</div>
</section>

<!-- Get Involved -->
<section class="blue text-center">
	<div class="container">
		<h1 id="getinvolved">Get involved!</h1>
		<h2 class="lead">Sponge Cake Monster Clash goes for <strong>4 weeks</strong>.</h2>
		<h2 class="lead">It takes place at <strong>Swinburne</strong>, near the <strong>Atrium</strong>.</h2>
		<h2 class="lead">Be there <strong>Thursdays</strong> at <strong>12.30pm</strong>.</h2>
		<p class="action">
			<a class="btn btn-blue" href="/get-involved">More info</a>
		</p>
	</div>
</section>



<!-- Diary Entries -->
<section class="green text-center">
	<div class="container">
		<h1>Recent diary entries</h1>
		<div class="entries">
			<div class="entry">
				<p>
					Shivers, when can I see you next? You give me chills. Multiplying chills.
				</p>
			</div>
			<div class="entry">
				<p>
					Spooky has made himself a friend with the model skeleton I have in my science room. He gets quite defensive whenever I approach or try to move it. <del>You people just can’t grasp that the object of the game is to not rattle his bones.</del>
				</p>
			</div>
			<div class="entry">
				<p>
					Spooky isn’t very fond of Shivers. Often he will get him in a headlock or attempt to remove his fingers <del>if he points at me one more time</del>.
				</p>
			</div>
			<div class="entry">
				<p>
					Poor Spooky. After his battle with Shivers and a reward of 2 sponge cakes, it turns out even a ghost can bleed! <del>Don’t misrepresent me, that’s not what happened at all.</del>
				</p>
			</div>
		</div>
		<p class="action">
			<a class="btn btn-green" href="/diaries">Read more</a>
		</p>
		<p class="hint">
			Diary entries are hidden throughout Swinburne! <a href="#getinvolved">Find out where.</a>
		</p>
	</div>
</section>






{% endblock %}