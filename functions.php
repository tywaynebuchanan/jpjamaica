<?php include 'config/config.php';


function SearchDB(){
	global $conn;
	global $error;
if (isset($_GET['submit'])){
			$conn = new mysqli('localhost', 'root', '', 'listing');
			$q = $conn->real_escape_string($_GET['keyword']);
			$sql = $conn->query("SELECT * FROM tblstcatherine WHERE CONCAT_WS(FirstName,'',LastName) LIKE '%$q%'");
			
			
			if ($sql->num_rows > 0) {
				while ($row = $sql->fetch_assoc())
				


				echo "<tr>";
				echo "<td>";
				echo "$row["LastName"]";
				echo "</td>";
				echo "<td>";
				echo "$row["FirstName"]";
				echo "</td>";
				echo "<td>";
				echo "$row["Address"]";
				echo "</td>";
				echo "<td>";
				echo "$row["City"]";
				echo "</td>";
				echo "<td>";
				echo "$row["PhoneNumber"]";
				echo "</td>";
				echo "</tr>";
					
				
			}else{
				
				echo "There is no Justice of the Peace by the name of".($_GET['keyword']);}

			}

			
			}








?>

