<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php 
  $mysqli = new mysqli("localhost", "root", "", "PDC");
  if ($mysqli->connect_error) {
    echo("Connection failed: 0x636f6e6572726f72 (" . $mysqli->connect_error . ")");
    echo("<br>");
    echo("<br>");
    die("This is an error, please report it via email to samuel@bonnekamp.net");
  } 
  if(isset($_POST["callsign"])){

  if ($_POST["callsign"] == "" or $_POST["aircrafttype"] == "" or $_POST["dep"] == "" or $_POST["arr"] == ""){
    $GOLBALS["error"] = "please enter all fields";
    exit();
  }else {
    //$sql = "INSERT INTO pdclog (cs, atype, dep, arr) VALUES ('yes', 'yes', 'yes', 'yes')";
    $sql = "INSERT INTO pdclog (cs, atype, dep, arr, free) VALUES ('" . $_POST["callsign"] . "', '" . $_POST["aircrafttype"] . "', '" . $_POST["dep"] . "', '" . $_POST["arr"] . "', '" . $_POST["free"] . "')";

    
    if ($mysqli->query($sql) === TRUE) {
      $GOLBALS["error"] = "success";
    } else {
      $GOLBALS["error"] = $mysqli->error;
      echo($mysqli->error);
      }
  }
}
?>
<div id="header">
        <h3 id="title">HKvACC PDC System</h3>
      </div>
      <div id="text">
        <p id="callsign" class="header">Callsign</p>
        <p id="aircrafttype" class="header">Aircraft Type</p>
        <p id="depaip" class="header">Departure airport</p>
        <p id="arraip" class="header">Arrival Airport</p>
      </div>
      <form action="index.php" method="post">
      <div id="inputs">
        <input id="callsignIN" name="callsign" class="inps" placeholder="CPA666">
     	<input id="aircrafttypeIN" name="aircrafttype" class="inps" placeholder="H/B77W/L">
        <input id="depaipIN" name="dep" class="inps" placeholder="VHHH">
        <input id="arraipIN" name="arr" class="inps" placeholder="RCTP">
      </div>
      <div id="freetext">
        <p id="textheader">Freetext</p>
        <textarea id="freetextIN" placeholder="Freetext... (optional)" name="free"></textarea>
      </div>
      <button id="button"></button>
      </form>
      <script type="text/javascript" src="script.js"></script>
</body>
</html>