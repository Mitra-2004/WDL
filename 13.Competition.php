<!DOCTYPE html>
<html>
<head>
<title>Project Competition Registration</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
margin:0;
}

.container{
width:400px;
margin:40px auto;
background:white;
padding:20px;
border-radius:6px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
}

h2{
text-align:center;
color:#003366;
}

input,select{
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
margin-top:20px;
background:#f4f6f9;
padding:10px;
}

</style>

</head>

<body>

<div class="container">

<h2>Project Competition Registration</h2>

<form method="POST">

Name
<input type="text" name="name" required>

Email
<input type="email" name="email" required>

Project Title
<input type="text" name="project" required>

Category
<select name="category">
<option>AI</option>
<option>Web Development</option>
<option>Cyber Security</option>
<option>Data Science</option>
</select>

<button type="submit">Register</button>

</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

$name=$_POST["name"];
$email=$_POST["email"];
$project=$_POST["project"];
$category=$_POST["category"];

echo "<div class='result'>";
echo "<h3>Registration Details</h3>";
echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Project Title: ".$project."<br>";
echo "Category: ".$category;
echo "</div>";

}

?>

</div>

</body>
</html>
