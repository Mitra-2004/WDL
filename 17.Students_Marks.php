<!DOCTYPE html>
<html>
<head>
<title>Student Marks Dashboard</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
}

.container{
width:420px;
margin:50px auto;
background:white;
padding:20px;
border-radius:6px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

h2{
text-align:center;
color:#003366;
}

input{
width:100%;
padding:8px;
margin:6px 0;
}

button{
width:100%;
padding:8px;
background:#003366;
color:white;
border:none;
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

<h2>Student Marks Form</h2>

<form method="POST">

Student Name
<input type="text" name="name" required>

Marks 1
<input type="number" name="m1" required>

Marks 2
<input type="number" name="m2" required>

Marks 3
<input type="number" name="m3" required>

<button type="submit">Calculate</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST["name"];

$m1=$_POST["m1"];
$m2=$_POST["m2"];
$m3=$_POST["m3"];

/* String manipulation */

$uppercase=strtoupper($name);
$length=strlen($name);

/* Array of marks */

$marks=array($m1,$m2,$m3);

/* Total and average */

$total=array_sum($marks);
$average=$total/count($marks);

echo "<div class='result'>";

echo "<b>Student Name:</b> ".$name."<br>";
echo "<b>Name in Uppercase:</b> ".$uppercase."<br>";
echo "<b>Name Length:</b> ".$length."<br><br>";

echo "<b>Total Marks:</b> ".$total."<br>";
echo "<b>Average Marks:</b> ".number_format($average,2);

echo "</div>";

}

?>

</div>

</body>
</html>
