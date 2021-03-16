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

<?php
	if(isset($_GET['loginerror'])){
		echo "<p style='color:red;'>User info not found. Please try again</p>";
	}
	if(isset($_GET['accesserror'])){
		echo "<p style='color:red;'>You do not have access to this page, Please log in</p>";
	}
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
					<?php 
					/*
					This code to implement blog data retrieval, display and search has been used with some
					modification from my submission for Assignment 2 in CSCI 2170 (Winter 2021)
					
					Kyle Cumming, Assignment 2: CSCI 2170 (Winter 2021), Faculty of Computer Science,
					Dalhousie Uniersity. Available online on Gitlab at [URL]: https://git.cs.dal.ca/courses/2021-winter/csci-2170/a2/cumming
					Date accessed: 3/15/2021
					*/




					//Getting input from searchbar
					$radiocheck = $_GET['search-type'];
				
					//checking if the author radio button was pressed
					if($radiocheck == "author"){
						//Getting input from searchbar
						$input = $_GET['search-keywords'];
						$querySQL = "SELECT * FROM `jediblog` WHERE `jedi_author` LIKE '%$input%'";
						$result = $dbconnection->query($querySQL);

							//Loop to print out all database entries which match the search results
							while($row = $result->fetch_assoc()){
								//Variable to increment the id number of the sections
								$i++;
								//Printing out the sections that match the string inputted
								echo "<section id='result$i' class='space-above-below'>\n";
									echo "<h4 class='fw-light'>" . $row[jedi_post_title] . "</h4>\n";
									echo "<h6 class='fw-light'>" . "Posted by " . $row[jedi_author] . " on " . $row[jedi_post_date] . "</h6>\n";
									echo "<p class='text-muted'>" . substr($row[jedi_post_content], 0, 200) . "</p>\n";
									echo "<a href='post.php?title=$row[jedi_post_title]&author=$row[jedi_author]&date=$row[jedi_post_date]&content=$row[jedi_post_content]&category=$row[jedi_post_category]' role='button' class='btn btn-primary'>" . "More details" . "&raquo;" . "</a>\n";
								echo "</section>\n";
								
							}
					}
					//checking if the bookname radio button was pressed
					else if($radiocheck == "book"){
						//getting input from search bar
						$input = $_GET['search-keywords'];
						$querySQL = "SELECT * FROM `jediblog` WHERE `jedi_post_title` LIKE '%$input%'";
						$result = $dbconnection->query($querySQL);
			
							//Loop to print out all database entries which match the search results
							while($row = $result->fetch_assoc()){
								//Variable to increment the id number of the sections
								$i++;
								//Printing out the sections that match the string inputted
								echo "<section id='result$i' class='space-above-below'>\n";
									echo "<h4 class='fw-light'>" . $row[jedi_post_title] . "</h4>\n";
									echo "<h6 class='fw-light'>" . "Posted by " . $row[jedi_author] . " on " . $row[jedi_post_date] . "</h6>\n";
									echo "<p class='text-muted'>" . $row[jedi_post_content] . "</p>\n";
									echo "<a href='post.php' role='button' class='btn btn-primary'>" . "More details" . "&raquo;" . "</a>\n";
								echo "</section>\n";
							}
				
					}
					//showing error message if no radio buttons were pressed
					else{
						echo "Please input search keywords to preform a search";
					}

					
					?>
					<!--
					<section id="result1" class="space-above-below">
						<h4 class="fw-light">I am Rey Skywalker</h4>
						<h6 class="fw-light">Posted by Rey Skywalker on 2021-01-01</h6>
						<p class="text-muted">I know my past but my past does not define my path. I cannot avoid my Palpatine ancestry, but from now, I am Rey Skywalker. I am creating my own path using the Force to guide me. Lorem ipsum dolor ...</p>
						<a href="post.php" role="button" class="btn btn-primary">More details &raquo;</a>
					</section>
					!-->
				</section>
			</div>
		</main>

<?php
	require_once "includes/footer.php";
?>