<?php
function add_Match(){
$conn = mysqli_connect('localhost','root','','sportsoversight');
$club1 = mysqli_real_escape_string($conn, $_POST['club1']);
$matchDay = mysqli_real_escape_string($conn, $_POST['matchDay']);
$matchTime = mysqli_real_escape_string($conn, $_POST['matchTime']);
$club2 = mysqli_real_escape_string($conn, $_POST['club2']);
$Place = mysqli_real_escape_string($conn, $_POST['Place']);
$comentator = mysqli_real_escape_string($conn, $_POST['comentator']);


$matchName= $club1.' Vs '.$club2;

$sql1 = "CREATE TABLE `sportsoversight`.`$matchName` ( `postID` INT NOT NULL AUTO_INCREMENT , `post` VARCHAR(255) NOT NULL, `like` INT NULL , `dislike` INT NULL, `comentator` VARCHAR(100) NULL, `time` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,  PRIMARY KEY (`postID`)) ENGINE = InnoDB;";
// "CREATE TABLE `".$name."` ( name VARCHAR(30), age INT, car VARCHAR(30))"
$result = mysqli_query($conn, $sql1);

if (!$result) {
	# code...
	echo "error";
}
else{
	$addTo_matach = "INSERT INTO `match`(`club1ID`, `club2ID`, `matchDay`, `matchTime`, `place`, `comentator`)
	VALUES ('$club1', '$club2', '$matchDay', '$matchTime', '$Place', '$comentator')";
	$add_to_match = mysqli_query($conn, $addTo_matach);

	echo '<div id="match_added_succesfully">Match is Added Succesfully</div> <script>
var alreadyAdded = document.getElementById("match_added_succesfully");


alreadyAdded.className = "show";


setTimeout(function(){ alreadyAdded.className = alreadyAdded.className.replace("show", ""); }, 3000);
</script>';


}
}
?>
