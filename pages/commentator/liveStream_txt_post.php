<?php
$conn = mysqli_connect('localhost','root','','sportsoversight');

function post(){
	$conn = mysqli_connect('localhost','root','','sportsoversight');
	$liveStream = mysqli_real_escape_string($conn, $_POST['liveStream']);
	$matchID = $_GET['matchID'];
	// $date = strtotime($row1['matchDay']);
	// $time = strtotime($row['matchTime']);
                              
	$sql1 = "SELECT * FROM `match` WHERE `match_id`= '$matchID'";
	$result1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_array($result1);
	$table_name = $row1['club1ID'].' Vs '.$row1['club2ID'];
	
	$sql = "INSERT INTO `$table_name` (post) VALUES ('".$liveStream."')";

	$result = mysqli_query($conn, $sql);
	
	if(!$result){
		echo mysqli_error($conn);
	}
	
	// display($matchID);
}

/*function display($id){
	$mID = $id;
$conn = mysqli_connect('localhost','root','','sportsoversight');
	
	$sql1 = "SELECT * FROM `match` WHERE `match_id`= '$mID'";
	$result1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_array($result1);
	$table_name = $row1['club1ID'].' vs '.$row1['club2ID'];
	
	$sql = "SELECT * FROM `$table_name` WHERE 1";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		while ($row = mysqli_fetch_array($result)) {
			# code...
			echo $row['post'].'<br>';
		}
		
	}
}*/

?>