<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>View Movies Data</title>

	<?php
	include("conn.php");
	?>
</head>

<body>
	<div id="content">
		<div class="container">
			<br>
			<h2>Search by Keyword</h2>
			<hr>
			<br>
			<div class="row">
				<form action="keyword_search.php" method="post" enctype="">
					<div class="col-12 input-group mb-3">
						<input type="text" name="movie" class="form-control" placeholder="Movie Name">
						<div class="input-group-append">
							<input type="submit" name="movie_btn" class="btn btn-primary" />
						</div>
					</div>
				</form>

				<form action="keyword_search.php" method="post" enctype="">
					<div class="col input-group mb-3">
						<input type="text" name="director" class="form-control" placeholder="Director Name">
						<div class="input-group-append">
							<input type="submit" name="director_btn" class="btn btn-primary" />
						</div>
					</div>
				</form>

				<form action="keyword_search.php" method="post" enctype="">
					<div class="col input-group mb-3">
						<input type="text" name="actor" class="form-control" placeholder="Actor Name">
						<div class="input-group-append">
							<input type="submit" name="actor_btn" class="btn btn-primary" />
						</div>
					</div>
				</form>

				<form action="keyword_search.php" method="post" enctype="">
					<div class="col input-group mb-3">
						<input type="text" name="actress" class="form-control" placeholder="Actress Name">
						<div class="input-group-append">
							<input type="submit" name="actress_btn" class="btn btn-primary" />
						</div>
					</div>
				</form>

				<form action="keyword_search.php" method="post" enctype="">
					<div class="col input-group mb-3">
						<input type="text" name="year" class="form-control" placeholder="Year of Release">
						<div class="input-group-append">
							<input type="submit" name="year_btn" class="btn btn-primary" />
						</div>
					</div>
				</form>
			</div>

			<!-- add code here -->
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Sr. No.</th>
						<th>Movie Name</th>
						<th>Lead Actor</th>
						<th>Lead Actress</th>
						<th>Director</th>
						<th>Year of Release</th>
					</tr>
				</thead>
				<tbody>

					<?php

					function printdata($run)
					{

						while ($row_user = mysqli_fetch_array($run)) {


							$id = $row_user['id'];
							$mname = $row_user['movie_name'];
							$actor = $row_user['actor'];
							$actress = $row_user['actress'];
							$director = $row_user['director'];
							$release = $row_user['year_of_release'];

					?>
							<tr>
								<td><?php echo $id; ?></td>
								<td><?php echo $mname; ?></td>
								<td><?php echo $actor; ?></td>
								<td><?php echo $actress; ?></td>
								<td><?php echo $director; ?></td>
								<td><?php echo $release; ?></td>
							</tr>
					<?php }
					}
					?>

					<?php
					if (isset($_POST["movie_btn"])) {
						$movie = $_POST['movie'];
						$select = "SELECT * FROM movies where movie_name='$movie'";
						$run = mysqli_query($conn, $select);

						printdata($run);
					}
					?>

					<?php
					if (isset($_POST["director_btn"])) {
						$director = $_POST['director'];
						$select = "SELECT * FROM movies where director='$director'";
						$run = mysqli_query($conn, $select);

						printdata($run);
					}
					?>

					<?php
					if (isset($_POST["actor_btn"])) {
						$actor = $_POST['actor'];
						$select = "SELECT * FROM movies where actor='$actor'";
						$run = mysqli_query($conn, $select);

						printdata($run);
					}
					?>

					<?php
					if (isset($_POST["actress_btn"])) {
						$actress = $_POST['actress'];
						$select = "SELECT * FROM movies where actress='$actress'";
						$run = mysqli_query($conn, $select);

						printdata($run);
					}
					?>

					<?php
					if (isset($_POST["year_btn"])) {
						$actress = $_POST['year'];
						$select = "SELECT * FROM movies where year_of_release='$actress'";
						$run = mysqli_query($conn, $select);

						printdata($run);
					}
					?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>