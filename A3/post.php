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
				<?php 
				echo "<h2 class='fw-light'>" . $_GET['title'] . "</h2>";
				echo "<hr>";
				echo "<h5 class='fw-light'>" . "Posted by " . $_GET['author'] . " on " . $_GET['date'] . " under: " . $_GET['category'] . "</h5>";
				echo "<p class='text-muted'>" . $_GET['content'] . "</p>";
				?>
				</section>
			</div>
		</main>

<?php
	require_once "includes/footer.php";
?>