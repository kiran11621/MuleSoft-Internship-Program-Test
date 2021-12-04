<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<title>View Movies Data</title>

	<?php
	include("conn.php");
	?>
</head>

<body>
	<div id="content">
		<div class="container">
			<br>
			<h2>View Movie Details</h2>
			<hr>
			<br>

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
						<th>Delete</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$select = "SELECT * FROM movies";
					$run = mysqli_query($conn, $select);

					if (isset($_GET['del'])) {
						$del_id = $_GET['del'];
						$delete = "DELETE FROM movies WHERE id='$del_id'";

						$run_delete = mysqli_query($conn, $delete);

						if ($run_delete === true) {
						} else {
						}
					}

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
							<td><a class="btn btn-danger" href="view_data.php?del=<?php echo $id; ?>">Delete</a></td>
						</tr>
					<?php } ?>
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