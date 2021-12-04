<h1 align="center">MuleSoft Internship Program Test</h1>

<h3>Setup Connection</h3>

```bash
  $conn = new mysqli($server_name, $username, $password);
```

<img alt="hello_world" src="https://github.com/kiran11621/MuleSoft-Internship-Program-Test/blob/main/images/Screenshot%20(18).png" />

<h3>Create Database and Table</h3>

```bash
  $sql = "CREATE DATABASE Movies_Database;";
  $database_name = "Movies_Database";
  if (mysqli_select_db($conn, $database_name)) {
      echo "<h3>Database Already Exists</h3>";
  }
  // if database not exist create 
  else {
      if (mysqli_query($conn, $sql)) {
          echo "<h3>Database Created Successfully</h3>";
      } else {
          echo "Error occured creating Database: " . mysqli_error($conn);
      }
  }
```

<img alt="hello_world" src="https://github.com/kiran11621/MuleSoft-Internship-Program-Test/blob/main/images/Screenshot%20(19).png" />

```bash
  $sql = "CREATE TABLE `movies_database`.`movies` ( `id` 0INT(11) NOT NULL AUTO_INCREMENT , `movie_name` VARCHAR(256) NOT NULL , `actor` VARCHAR(256) NOT NULL , `actress` VARCHAR(256) NOT NULL , `director` VARCHAR(256) NOT NULL , `year_of_release` VARCHAR(256) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
         
  if (mysqli_query($conn, $sql)) {
    echo "<h3>Table Movies created successfully</h3>";
  } else {
    echo "Error creating table: " . $conn->error;
  }
```

<img alt="hello_world" src="https://github.com/kiran11621/MuleSoft-Internship-Program-Test/blob/main/images/Screenshot%20(20).png" />

<h3>Insert Movie Data</h3>

```bash
  if (isset($_POST["insert_btn"])) {
		$movie_name = $_POST['movie_name'];
		$actor = $_POST['actor'];
		$actress = $_POST['actress'];
		$director = $_POST['director'];
		$yof_release = $_POST['yof_release'];
   
		$insert = "INSERT INTO movies(movie_name, actor, actress, director, year_of_release) 
                    VALUES('$movie_name', '$actor', '$actress', '$director', '$yof_release')";

		$run_insert = mysqli_query($conn, $insert);

		if($run_insert) {
			echo "<h4 style='color:green;'>Data Inserted</h4><br>";
		} else {
			echo "Error: ". $conn->error;
		}
	}
```

<img alt="hello_world" src="https://github.com/kiran11621/MuleSoft-Internship-Program-Test/blob/main/images/Screenshot%20(21).png" />
<img alt="hello_world" src="https://github.com/kiran11621/MuleSoft-Internship-Program-Test/blob/main/images/Screenshot%20(22).png" />

<h3>Delete Data</h3>

<img alt="hello_world" src="https://github.com/kiran11621/MuleSoft-Internship-Program-Test/blob/main/images/Screenshot%20(23).png" />
<img alt="hello_world" src="https://github.com/kiran11621/MuleSoft-Internship-Program-Test/blob/main/images/Screenshot%20(24).png" />

<h3>Keyword Search</h3>
<img alt="hello_world" src="https://github.com/kiran11621/MuleSoft-Internship-Program-Test/blob/main/images/Screenshot%20(25).png" />
<img alt="hello_world" src="https://github.com/kiran11621/MuleSoft-Internship-Program-Test/blob/main/images/Screenshot%20(26).png" />
