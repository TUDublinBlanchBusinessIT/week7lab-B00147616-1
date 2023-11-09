<?php

include 'Team.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $teamName = $_GET["teamName"];
    $homeTeam = new Team($teamName);
    $homeScore1 = $_GET["homeScore1"];
    $opposingScore1 =$_GET["opposingScore1"];
    
    $homeScore2 = $_GET["homeScore2"];
    $opposingScore2 =$_GET["opposingScore2"];
    
    $homeScore3 = $_GET["homeScore3"];
    $opposingScore3 =$_GET["opposingScore3"];
    
    $homeTeam->finalScore($homeScore1, $opposingScore1);
    $homeTeam->finalScore($homeScore2, $opposingScore2);
    $homeTeam->finalScore($homeScore3, $opposingScore3);
    
    $goalAverage = $homeTeam->$getGoalAverage();
    echo "Goal average for $teamName: $goalAverage";
    
}

?>