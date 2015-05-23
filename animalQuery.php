<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 'On');
    session_start();
    include 'password.php';
    
    $mysqli = new mysqli("oniddb.cws.oregonstate.edu", "hansejod-db", $password, "hansejod-db");
    
    if(session_status() == PHP_SESSION_ACTIVE){
		$animal = $_POST['animal'];
    
    
    if (!($stmt = $mysqli->prepare("SELECT * FROM furryFriends WHERE animal='$animal'"))) {
        echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error . "<br>";
    }
    
    if (!($stmt->execute())) {
        echo "Execute failed: (" . $stmt->errno . ") " . $stmt.error;
    }
    
    else {
        $stmt->execute();
    }
    
    $res = $stmt->get_result();
    $row = $res->fetch_assoc();
    
    //Create an array of all results
    $allResults = array();
    while ($row) {
        array_push($allResults, $row);
        $row = $res->fetch_assoc();
    }
    
    }
    
    $stmt->close();
    
    echo json_encode($allResults);

?>