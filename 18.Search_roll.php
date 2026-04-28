<!DOCTYPE html>
<html>
<head>
<title>Roll Number Search</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
}

.container{
width:380px;
margin:60px auto;
background:white;
padding:20px;
border-radius:6px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
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

<h2>Search Student Roll Number</h2>

<form method="POST">

Enter Roll Number
<input type="number" name="roll" required>

<button type="submit">Search</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$roll=$_POST["roll"];

/* Array of roll numbers */

$roll_numbers=array(101,102,103,104,105,106);

/* Search value */

if(in_array($roll,$roll_numbers)){

echo "<div class='result'>";
echo "Roll Number <b>$roll</b> found in the list.";
echo "</div>";

}

else{

echo "<div class='result'>";
echo "Roll Number <b>$roll</b> not found.";
echo "</div>";

}

}

?>

</div>

</body>
</html>
