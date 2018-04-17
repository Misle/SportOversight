<?php
	// session_start();
	$conn = mysqli_connect('localhost','root','','sportsoversight');
	$matchID = $_GET['matchID'];
	$sql1 = "SELECT * FROM `match` WHERE `match_id`= '$matchID'";
	$result1 = mysqli_query($conn, $sql1);
	$row1 = mysqli_fetch_array($result1);
	$table_name = $row1['club1ID'].' vs '.$row1['club2ID'];
	
	$sql = "SELECT * FROM `$table_name` WHERE 1";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		while ($row = mysqli_fetch_array($result)) {
			# code...
			echo "<div class='direct-chat-msg' >
	                        <div class='direct-chat-info clearfix'>
	                          <span class='direct-chat-name pull-left text-blue'><i><h4>04 Min</h4></i></span>
	                          
	                        </div>
	                        <!-- /.direct-chat-info -->
	                        <img class='direct-chat-img' src='../../dist/img/user1-128x128.jpg' alt='message user image'><!-- /.direct-chat-img -->
	                        <div class='direct-chat-text' >
	                          <div id='getdata'>".$row['post']."</div>
                          </div>
	                        <!-- /.direct-chat-text -->
	                      </div>";
			// echo ;

		}
		
	}
	
	
	$rowcount=mysqli_fetch_array($result);
	
	for ($i=$rowcount; $i>0; $i--) { 
		$row = mysqli_fetch_row($result);
		$count = $i;
		echo "sada";
		// echo $row[1];

		echo "<br>";
	}



?>