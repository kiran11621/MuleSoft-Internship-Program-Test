<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>Insert Movies Data</title>

	<?php
	include("conn.php");
	?>
</head>

<body>
	<div id="content">
		<div class="container">
			<br>
			<h2>Insert Movie Data</h2>
			<hr>
			<br>

			<?php
			if (isset($_POST["insert_btn"])) {
				$movie_name = $_POST['movie_name'];
				$actor = $_POST['actor'];
				$actress = $_POST['actress'];
				$director = $_POST['director'];
				$yof_release = $_POST['yof_release'];

				// insert query for movie data
				$insert = "INSERT INTO movies(movie_name, actor, actress, director, year_of_release) 
                    VALUES('$movie_name', '$actor', '$actress', '$director', '$yof_release')";

				$run_insert = mysqli_query($conn, $insert);

				if($run_insert) {
					echo "<h4 style='color:green;'>Data Inserted</h4><br>";
				} else {
					echo "Error: ". $conn->error;
				}
			}

			?>

			<form action="insert_data.php" method="post" enctype="">
				<div class="form-group">
					<label for="movie_name">Movie Name:</label>
					<input type="text" class="form-control" placeholder="Movie Name" name="movie_name" required>
				</div>
				<div class="form-group">
					<label for="actor">Lead Actor Name:</label>
					<input type="text" class="form-control" placeholder="Actor Name" name="actor" required>
				</div>
				<div class="form-group">
					<label for="actress">Lead Actress Name:</label>
					<input type="text" class="form-control" placeholder="Actress Name" name="actress" required>
				</div>
				<div class="form-group">
					<label for="director">Director Name:</label>
					<input type="text" class="form-control" placeholder="Director Name" name="director" required>
				</div>
				<div class="form-group">
					<label for="yof_release">Date of Release:</label>
					<input type="int" class="form-control" placeholder="YYYY" name="yof_release" required>
				</div>
				<input type="submit" name="insert_btn" class="btn btn-primary" />
				<button class="btn btn-success" onclick="document.location='view_data.php'">View Movies</button>
			</form>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>