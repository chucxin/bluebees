<?php
$dbc = mysqli_connect("localhost", "chucxin2", "heiyanjing", "bluebees");

$query = "SELECT name, score FROM highscores";

$data = mysqli_query($dbc,$query);

$result = array();

for($i=0;$i<mysqli_num_rows($data);$i++){
	$row = mysqli_fetch_array($data);
	$result[] = array($row["name"], $row["score"]);
}

echo json_encode($result);
?>