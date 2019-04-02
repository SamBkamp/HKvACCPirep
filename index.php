<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="header">
        <h3 id="title">HKvACC PDC System</h3>
      </div>
      <div id="text">
        <p id="callsign" class="header">Callsign</p>
        <p id="aircrafttype" class="header">Aircraft Type</p>
        <p id="depaip" class="header">Departure airport</p>
        <p id="arraip" class="header">Arrival Airport</p>
      </div>
      <div id="inputs">
        <input id="callsignIN" name="callsign" class="inps" placeholder="CPA666">
     	<input id="aircrafttypeIN" name="aircrafttype" class="inps" placeholder="H/B77W/L">
        <input id="depaipIN" name="dep" class="inps" placeholder="VHHH">
        <input id="arraipIN" name="arr" class="inps" placeholder="RCTP">
      </div>
      <div id="freetext">
        <p id="textheader">Freetext</p>
        <textarea id="freetextIN" placeholder="Freetext... (optional)"></textarea>
      </div>
      <button id="button"></button>
      <script type="text/javascript" src="script.js"></script>
</body>
</html>