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
				<form class="col-lg-6 col-md-8 mx-auto" method="get" action=""> 
					<!-- Postback and perform search here in this file -->
					<input class="form-control" type="text" placeholder="Search" aria-label="Search" name="search-keywords">
					<div class="space-above-below">
						<div>
							<input type="radio" class="form-check-input" name="search-type" id="search-type-name" value="author" checked>
							<label for="search-type-name" class="text-muted">Search by author name</label>
						</div>
						<div>
							<input type="radio" class="form-check-input" name="search-type" id="search-type-blog" value="book">
							<label for="search-type-blog" class="text-muted">Search by blog title</label>
						</div>
					</div>
				</form>
				
				<section class="space-above-below">
					<h2 class="fw-light">Recent Blogs</h2>
					<hr>
					<section id="result1" class="space-above-below">
						<h4 class="fw-light">I am Rey Skywalker</h4>
						<h6 class="fw-light">Posted by Rey Skywalker on 2021-01-01</h6>
						<p class="text-muted">I know my past but my past does not define my path. I cannot avoid my Palpatine ancestry, but from now, I am Rey Skywalker. I am creating my own path using the Force to guide me. Lorem ipsum dolor ...</p>
						<a href="post.php" role="button" class="btn btn-primary">More details &raquo;</a>
					</section>
				</section>
			</div>
		</main>

<?php
	require_once "includes/footer.php";
?>