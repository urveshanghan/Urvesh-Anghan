<html>
<body> 

<?php


$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student87-35303133bf82", "ua92-studentAc", "student87-35303133bf82");

if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="10px">Student Id<br><hr></th>
				<th width="100px">Name<br><hr></th>
                <th width="150px">Address<br><hr></th>
				<th width="50px">Contact No<br><hr></th>
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT StudentId, Name, Address, ContactNo  FROM Students");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['StudentId']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['ContactNo']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


