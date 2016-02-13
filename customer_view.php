<!-- this is customer view page -->
<!DOCTYPE html>

<html>
	<head>
		
		<!-- Website Title & Description for Search Engine purposes -->
		<title>View Customers</title>
		<meta name="description" content="Bootstrap Table">
		
		<!-- Mobile viewport optimized -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		
		<!-- Bootstrap CSS -->
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<div class="container-fluid">
			<!-- create a bootstrap table -->
			<div class="table-responsive">
			  <table class="table table-striped">
			    <tr>
			    	<th>First Name</th>
			    	<th>Last Name</th>
			    	<th>Address</th>
			    	<th>City</th>
			    	<th>State</th>
			    	<th>Zip</th>
			    	<th>Email</th>
			    	<th>Phone</th>
			    </tr>
			   	<!-- fetch values from database using php script -->
			    <?php // query.php

						// require_once 'login.php';

						// login.php
						$hn = 'www.it354.com';
						$db = 'it354_students';
						$un = 'it354_students';
						$pw = 'steinway';

						$conn = new mysqli($hn, $un, $pw, $db);
						if ($conn->connect_error) die($conn->connect_error);

						$query = "SELECT * FROM customers";
						$result = $conn->query($query);
						if (!$result) die($conn->error);

						$rows = $result->num_rows;

						for ($j = 0 ; $j < $rows ; ++$j)
						{
						  $result-> data_seek($j);
						  $row = $result->fetch_array(MYSQLI_ASSOC);

						  echo '<tr><td>' . $row['firstName'] . '</td>';
						  echo '<td>' . $row['lastName'] . '</td>';
						  echo '<td>' . $row['address'] . '</td>';
						  echo '<td>' . $row['city'] . '</td>';
						  echo '<td>' . $row['state'] . '</td>';
						  echo '<td>' . $row['zip'] . '</td>';
						  echo '<td>' . $row['email'] . '</td>';
						  echo '<td>' . $row['phone'] . '</td></tr>';
						}

						$result->close();
						$conn->close();
				?>


			  </table><!-- end table -->
			</div><!-- end table-responsive -->
		</div><!-- end container-fluid -->

	<!-- Bootstrap JS -->
	<script src="dist/js/bootstrap.min.js"></script>
	
	</body>
</html>

