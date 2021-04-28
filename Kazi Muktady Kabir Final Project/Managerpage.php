<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Manager</title>
<link rel="stylesheet" type="text/css" href="registration.css">

<style>
* {
  box-sizing: border-box;
}

body {
 background-image: url('foodmania.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
 margin: 0;
}


.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}


.topnav {
  overflow: hidden;
  background-color: #333;
}


.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.column {
  float: left;
  width: 33.33%;
  padding: 15px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>
<h4 class="alert-heading">Well done!</h4>
<h2><p><b>You are logged in as a Manager</b></p></h4>
<div class="header">
  <h1>Manager Page</h1>
</div>

<div class="topnav">
  <a href="Food.php"> Food Mania Collections</a>
  <a href="registration.php">Registration Page</a>
  <a href="home.php">Logout</a>
</div>

<div class="row">
  <div class="column">
    <a href="Employee.php"><h2>Employee list</h2></a>
    <p style="color: red">You can check your employee lists over here</p>
  </div>
  
  <div class="column">
    <a href="Inventory.php"><h2>Inventory</h2></a>
    <p style="color: red">Here you can check your inventory of food ingradients</p>
  </div>
  
  <div class="column">
    <a href="Income.php"><h2>Todays Income</h2></a>
    <p style="color: red">Here you can keep your daily updates of your Income</p>
  </div>
</div>

<div id="demo">
<h2>Manager Info</h2>
<button type="button" onclick="loadDoc()">Check Info</button>
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);
  xhttp.send();
}
</script>

</body>
</html>
