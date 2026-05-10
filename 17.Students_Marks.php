<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = htmlspecialchars($_POST['name']);
  $marks = array_map('intval', $_POST['marks']);
  $total = array_sum($marks);
  $avg = $total / count($marks);
  $upper = strtoupper($name);
  $len = strlen($name);
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Marks</title>

<style>
  body {
    font-family: Arial;
    background: #f0f4f8;
    padding: 30px;
  }

  .box {
    background: white;
    max-width: 480px;
    margin: auto;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 4px 16px rgba(0,0,0,0.1);
  }

  h2 {
    color: #2c3e50;
    text-align: center;
  }

  label {
    display: block;
    margin: 8px 0 4px;
    font-weight: bold;
  }

  input[type=text],
  input[type=number] {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 6px;
    margin-bottom: 10px;
  }

  button {
    width: 100%;
    padding: 10px;
    background: #8e44ad;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 10px;
  }

  .result {
    background: #f0e6ff;
    border-left: 4px solid #8e44ad;
    padding: 16px;
    border-radius: 8px;
    margin-top: 20px;
  }

  .result p {
    margin: 6px 0;
  }
</style>

</head>

<body>

<div class="box">

  <h2>Student Marks Entry</h2>

  <form method="POST">

    <label>Student Name</label>
    <input type="text" name="name" placeholder="Enter name" required>

    <label>Subject 1 Marks</label>
    <input type="number" name="marks[]" min="0" max="100" required>

    <label>Subject 2 Marks</label>
    <input type="number" name="marks[]" min="0" max="100" required>

    <label>Subject 3 Marks</label>
    <input type="number" name="marks[]" min="0" max="100" required>

    <label>Subject 4 Marks</label>
    <input type="number" name="marks[]" min="0" max="100" required>

    <label>Subject 5 Marks</label>
    <input type="number" name="marks[]" min="0" max="100" required>

    <button type="submit">Calculate</button>

  </form>

  <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>

  <div class="result">
    <h3>Results for <?= $name ?></h3>

    <p><b>Name (Uppercase):</b> <?= $upper ?></p>

    <p><b>Name Length:</b> <?= $len ?> characters</p>

    <p><b>Total Marks:</b> <?= $total ?> / 500</p>

    <p><b>Average:</b> <?= number_format($avg, 2) ?></p>
  </div>

  <?php endif; ?>

</div>

</body>
</html>
