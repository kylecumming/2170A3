<?php
	/*
	* CSCI 2170: ONLINE EDITION, WINTER 2021
	* STARTER CODE FOR ASSIGNMENT 3
	* 
	* This code was developed by Dr. Raghav V. Sampangi (raghav@cs.dal.ca)
	*
	* Website homepage
	*/

	require_once "includes/header.php";
	require_once "includes/db.php";

?>

		<main id="pg-main-content">
			<div class="py-5 text-center container">
				<div class="row">
					<div class="col-lg-6 col-md-8 mx-auto">
						<h1 class="fw-light">Jedi Blog</h1>
						<p class="lead text-muted">Your one stop shop for all Jedi knowledge.</p>
						<p class="lead text-muted">Sith, keep away!</p>
					</div>
				</div>
			</div>

			<div class="container">
				<article class="space-above-below">

					<h2 class="fw-light">I am Rey Skywalker</h2>
					<hr>
					<h5 class="fw-light">Posted by Rey Skywalker on 2021-01-01, under: Introduction; The Force</h5>
					<p class="text-muted">I know my past but my past does not define my path. I cannot avoid my Palpatine ancestry, but from now, I am Rey Skywalker. I am creating my own path using the Force to guide me. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vel varius sem. Vivamus vel erat et massa pretium condimentum quis eget quam. Suspendisse cursus mollis metus, quis sodales felis sodales ut. Praesent luctus eu augue at malesuada. Integer nec mauris enim. Morbi est risus, suscipit quis fringilla eget, commodo id diam. Suspendisse cursus urna vitae tempus consequat. Proin euismod felis nisi, a dictum arcu eleifend sit amet. Aliquam leo nisi, dapibus a odio sit amet, mollis vulputate nunc. Donec ex mi, pharetra ac urna nec, pretium malesuada metus. Etiam et tortor sagittis, facilisis purus eu, auctor ex.</p>

				</section>
			</div>
		</main>

<?php
	require_once "includes/footer.php";
?>