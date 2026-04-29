<!DOCTYPE html>
<html>
<head>
<title>Feedback Form</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
}

.container{
width:400px;
margin:60px auto;
background:white;
padding:25px;
border-radius:8px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

h2{
text-align:center;
color:#003366;
}

input,textarea{
width:100%;
padding:8px;
margin:6px 0;
border:1px solid #ccc;
border-radius:4px;
}

button{
width:100%;
padding:10px;
background:#003366;
color:white;
border:none;
border-radius:4px;
}

button:hover{
background:#0055aa;
}

.result{
margin-top:15px;
background:#f4f6f9;
padding:10px;
}

</style>

</head>

<body>

<div class="container">

<h2>User Feedback Form</h2>

<form method="POST">

Name
<input type="text" name="name" required>

Feedback
<textarea name="feedback" rows="4" required></textarea>

<button type="submit">Submit Feedback</button>

</form>

<?php

date_default_timezone_set("Asia/Kolkata");

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST["name"];
$feedback=$_POST["feedback"];

echo "<div class='result'>";

echo "<b>Thank you for your feedback!</b><br><br>";

echo "<b>Name:</b> ".$name."<br>";

echo "<b>Feedback:</b> ".$feedback."<br><br>";

echo "<b>Date:</b> ".date("d-m-Y")."<br>";

echo "<b>Time:</b> ".date("h:i:s A");

echo "</div>";

}

?>

</div>

</body>
</html>
