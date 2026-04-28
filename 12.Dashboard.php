<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
margin:0;
}

.container{
width:400px;
margin:80px auto;
background:white;
padding:25px;
text-align:center;
border-radius:6px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

h2{
color:#003366;
}

.time{
font-size:18px;
color:#444;
margin-top:10px;
}

</style>

</head>

<body>

<div class="container">

<h2>Welcome to the Dashboard</h2>

<?php

date_default_timezone_set("Asia/Kolkata");

echo "<p class='time'>Today's Date: ".date("d-m-Y")."</p>";

echo "<p class='time'>Current Time: ".date("h:i:s A")."</p>";

?>

</div>

</body>
</html>
