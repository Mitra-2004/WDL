<!DOCTYPE html>
<html>
<head>
<title>PHP String Manipulation</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
}

.container{
width:420px;
margin:60px auto;
background:white;
padding:25px;
border-radius:6px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
}

input{
width:100%;
padding:8px;
margin:8px 0;
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

<h2>PHP String Manipulation</h2>

<form method="POST">

Enter String:
<input type="text" name="text" required>

<button type="submit">Process</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$text=$_POST["text"];

$length=strlen($text);
$reverse=strrev($text);
$substring=substr($text,0,5);

echo "<div class='result'>";
echo "<b>Original String:</b> ".$text."<br>";
echo "<b>Length:</b> ".$length."<br>";
echo "<b>Reversed String:</b> ".$reverse."<br>";
echo "<b>Substring (first 5 characters):</b> ".$substring;
echo "</div>";

}

?>

</div>

</body>
</html>
