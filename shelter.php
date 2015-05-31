<?php
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', 'On');
  include  'storedInfo.php';

  // Test MYSQL connection. The authentication information is in a separate file
  $mysqli = new mysqli("oniddb.cws.oregonstate.edu", $myUsername, $myPassword, $myUsername);
  if ($mysqli->connect_errno) {
    echo "Failed to connect to MYSQL <br>";
  }

  // Check if session is active
  if (session_status() != PHP_SESSION_ACTIVE) {
    echo "sessionInactive";
    die();
  }
  
  if ($_SERVER['REQUEST_METHOD'] === 'POST' and count($_POST) > 0) {
 
    // Gets all the shelter info for the volunteer page
    if (isset($_POST['getAllShelters'])) {
      getAllShelters();
    }    
  }

  /*
  * Purpose: Gets all the shelters for the volunteer page
  * @return {object} - a JSON object with all the shelters in the format 'shelterName - addressLine1'
  */
  function getAllShelters() {
     global $mysqli;

    // Prepare the select statment
    if (!($stmt = $mysqli->prepare("SELECT concat(shelterName, ' - ', addressLine1) as display, emailAddress FROM shelters"))) {
      echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
      die();
    }
    
    // Execute the query
    if (!$stmt->execute()) {
      echo "Execute failed: (" . $mysqli->errno . ") " . $mysqli->error;
    }

	// Check if result set is valid
    if (!($res = $stmt->get_result())) {
      echo "Getting result set failed: (" . $stmt->errno . ") " . $stmt->error;
    }

    // No results were returned, exit.
    if ($res->num_rows === 0) {
      echo "noRecords";
      return;
    }

    // Generate the return object
    for($row_no = ($res->num_rows - 1); $row_no >= 0; $row_no--) {
      $res->data_seek($row_no);
      $row = $res->fetch_assoc();

      $stocksArr[] = json_encode($row);
    }

    $finaljson = json_encode($stocksArr);
    echo $finaljson;
  }
?>