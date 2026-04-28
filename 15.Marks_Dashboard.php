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
margin:60px auto;
background:white;
padding:20px;
border-radius:6px;
box-shadow:0 0 10px rgba(0,0,0,0.1);
text-align:center;
}

table{
width:100%;
border-collapse:collapse;
margin-top:10px;
}

table,th,td{
border:1px solid #ccc;
padding:8px;
text-align:center;
}

th{
background:#003366;
color:white;
}

.result{
margin-top:15px;
font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h2>Student Marks Dashboard</h2>

<?php

$marks=array(
"Web Development"=>85,
"DBMS"=>78,
"Operating Systems"=>90,
"Computer Networks"=>82
);

echo "<table>";
echo "<tr><th>Subject</th><th>Marks</th></tr>";

foreach($marks as $subject=>$mark){
echo "<tr><td>$subject</td><td>$mark</td></tr>";
}

echo "</table>";

$max=max($marks);

$total=array_sum($marks);

$percentage=$total/count($marks);

echo "<div class='result'>";
echo "Maximum Marks: ".$max."<br>";
echo "Student Percentage: ".number_format($percentage,2)."%";
echo "</div>";

?>

</div>

</body>
</html>
