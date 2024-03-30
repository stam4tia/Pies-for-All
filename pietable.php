<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>π table</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lisu+Bosa:wght@900&family=Rubik+Iso&display=swap">
 
</head>
<body>

<header>
  <a href="index.html">
    <img src="https://pngimg.com/d/pizza_PNG43991.png" />
  </a>
  <nav>
    <button onclick="window.location.href='about.html'">About</button>
    <button onclick="window.location.href='randompie.html'">Random Pie</button>
    <button onclick="window.location.href='countdown.html'" id="countdownLink">Pie Time</button>
    <button onclick="window.location.href='pietable.html'">Pie Table</button>
  </nav>
</header>

<h1> Pie Table</h1>
<h2> What will you bring to the table? </h2>

<div class="tables-container">
  <?php
  // database connection
  $servername = "localhost:3308";
  $username = "dev10dbuser";
  $password = "M0jyKlhXjpgKU7IJ";
  $dbname = "dev10db";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // fetch data from the pies table
  $sqlSweet = "SELECT * FROM pies WHERE pie_type = 'Sweet'";
  $sqlSavory = "SELECT * FROM pies WHERE pie_type = 'Savory'";
  $resultSweet = $conn->query($sqlSweet);
  $resultSavory = $conn->query($sqlSavory);

  // display the data in two separate tables
  echo "<table>";
  echo "<tr><th>Sweet Pies</th><th>Image</th><th>Description</th></tr>";
  while ($row = $resultSweet->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td><img src='" . $row['image_url'] . "' alt='" . $row['name'] . "' width='100'></td>";
      echo "<td>" . $row['description'] . "</td>";
      echo "</tr>";
  }
  echo "</table>";

  echo "<table>";
  echo "<tr><th>Savory Pies</th><th>Image</th><th>Description</th></tr>";
  while ($row = $resultSavory->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . $row['name'] . "</td>";
      echo "<td><img src='" . $row['image_url'] . "' alt='" . $row['name'] . "' width='100'></td>";
      echo "<td>" . $row['description'] . "</td>";
      echo "</tr>";
  }
  echo "</table>";

  $conn->close();
  ?>
</div>

</body>
</html>














