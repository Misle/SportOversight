<?php

function requestCoach()
{


$conn = mysqli_connect('localhost','root','','sportsoversight');


//to get club_head_ID
$sql_for_Club_head_ID = "SELECT * FROM club_head WHERE (account_ID ='".$_SESSION['accountID']."')";
$run_query = mysqli_query($conn, $sql_for_Club_head_ID);
$toGetCH_ID = mysqli_fetch_array($run_query);
$club_head_ID = $toGetCH_ID[0];


//to get club_ID
$sql_for_Club_ID = "SELECT * FROM club WHERE (cludHead_ID = '".$club_head_ID."')";
$run_query_2 =  mysqli_query($conn, $sql_for_Club_ID);
$toGetClub_ID = mysqli_fetch_array($run_query_2);
$club_ID = $toGetClub_ID[0];

//detailsOfCocach
$coachLastName = $_POST['coachLastName'];
$coachName = $_POST['coachFirstName'];
$coach_ID = $_POST['coachID'];

//checking the cocah is already requested by the club
$sql_get_requests = "SELECT 1 FROM coach_requests WHERE (requested_coach_ID ='".$coach_ID."' AND requested_by = '".$club_ID."')";
$qury_run_to_get_requests = mysqli_query($conn,$sql_get_requests);
$resultArray_to_get_requests = mysqli_fetch_array($qury_run_to_get_requests);



if ($resultArray_to_get_requests[0]>0) {
  echo '<div id="alreadyRequested">Coach is Already Requested</div> <script>
var alreadyRequestedVAR = document.getElementById("alreadyRequested");


alreadyRequestedVAR.className = "show";


setTimeout(function(){ alreadyRequestedVAR.className = alreadyRequestedVAR.className.replace("show", ""); }, 3000);
</script>';

}

else{
  $sql_Inset_TO_request_table = "INSERT INTO coach_requests(request_id, requested_coach_ID, 	requested_coach_F_Name,requested_coach_L_Name,requested_by) VALUES (NULL,'".$coach_ID."','".$coachName."', '".$coachLastName."','".$club_ID."')";
  $qury_run_to_request = mysqli_query($conn,$sql_Inset_TO_request_table);
if($qury_run_to_request){
  echo '<div id="request_sent_successfully">request_sent_successfully</div> <script>
  var x = document.getElementById("request_sent_successfully");


  x.className = "show";


  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
  </script>';
}else{
  echo mysqli_error($conn);
}


}













}



 ?>
