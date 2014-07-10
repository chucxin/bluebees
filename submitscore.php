<?php

$dbc = mysqli_connect("localhost", "chucxin2", "heiyanjing", "bluebees");

$name = $_POST["name"];
$score = $_POST["score"];

$query = "INSERT INTO highscores (name, score, date) 
				VALUES ('$name', '$score', NOW())";

mysqli_query($dbc,$query);

echo "success";




// $xml = simplexml_load_file("highscores.xml");

// $new = $xml->addChild("case","");
// $new->addChild("name", $name);
// $new->addChild("score", $score);

// $newxml = $xml->asXML();

// $file = fopen("highscores.xml", "w");
// fwrite($file, $newxml);

// fclose($fil);

// echo $newxml;


?>