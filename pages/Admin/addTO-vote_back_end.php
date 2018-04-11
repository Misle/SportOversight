  <?php
  function addtoVote(){
  $conn = mysqli_connect('localhost','root','','sportsoversight');


$sqlVote  = "SELECT 1 FROM vote WHERE (player_ID ='".$_POST['playerID']."')";

$resultSqlVote = mysqli_query($conn, $sqlVote);

$resultArray = mysqli_fetch_array($resultSqlVote);

if ($resultArray[0]>0) {
  echo '<div id="snackbar3">Player is Already Added</div> <script>
var alreadyAdded = document.getElementById("snackbar3");


alreadyAdded.className = "show";


setTimeout(function(){ alreadyAdded.className = alreadyAdded.className.replace("show", ""); }, 3000);
</script>';

}

else{





  $insert_into_vote = "INSERT INTO vote  VALUES (NULL,NULL,'".$_POST['firstname']."','".$_POST['lastname']."', '".$_POST['playerID']."')";
  $query_run_to_VOTE_table = mysqli_query($conn, $insert_into_vote);


    if(!$query_run_to_VOTE_table){
    echo 'error'.mysqli_error($conn);

  }

  else{

      echo '<div id="snackbar">Player is Add to Vote Succesfully</div> <script>
    var x = document.getElementById("snackbar");


    x.className = "show";


    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    </script>';


  }



    }









}

  ?>
