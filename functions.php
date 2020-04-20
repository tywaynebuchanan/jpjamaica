<?php include 'config/config.php';


function SearchDB(){
	global $conn;
if (isset($_GET['submit'])){
			$conn = new mysqli('localhost', 'root', '', 'listing');
			$q = $conn->real_escape_string($_GET['keyword']);
			
			$limit = 50;
			$page = isset($_GET['page']) ? $_GET['page'] : 1;
			$start =($page - 1) * $limit;

			$sql = $conn->query("SELECT * FROM tblstcatherine WHERE CONCAT_WS(FirstName,'',LastName) LIKE '%$q%' LIMIT $start, $limit;");

			
			
			
			if ($sql->num_rows > 0) {
				while ($row = $sql->fetch_assoc())
					echo "<tr><td>" . $row["LastName"] . "</td><td>"
						. $row["FirstName"]. "</td><td>".$row["Address"]. "</td><td>". $row["City"]."</td><td>". $row["PhoneNumber"]."</td></tr>";
					echo "</table>";
					echo $rows = mysqli_num_rows($sql);
			}else{
				
				echo ' There is no Justice of the Peace by the name of '.($_GET['keyword']);}

			}



			
			}








?>

