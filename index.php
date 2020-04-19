<?php
	
	$students = [];

	$conn = mysqli_connect('localhost','root','','crud');

	$sql = "SELECT * FROM student";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
		$cr = 0;
	    while($row = mysqli_fetch_assoc($result)) {

	    	$students[$cr]['sId'] = $row ['sId'];
	    	$students[$cr]['fName'] = $row ['fName'];
	    	$students[$cr]['lName'] = $row ['lName'];
	    	$students[$cr]['email'] = $row ['email'];
	    	$cr++;

	    	echo json_encode($students);


	    }
	} 
	else {
	    echo "0 results";
	}


?>
