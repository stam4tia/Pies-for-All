<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>π table</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lisu+Bosa:wght@900&family=Rubik+Iso&display=swap">
  <style>
    body {
      font-family: 'Lisu Bosa', sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://images.unsplash.com/32/Mc8kW4x9Q3aRR3RkP5Im_IMG_4417.jpg?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8dGFibGUlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fHww');
      background-size: cover;
      background-repeat: no-repeat;
      text-align: center;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      color: white; 
    }
  
    header {
      text-align: center;
      padding: 10px;
      display: flex;
      justify-content: space-between; 
      align-items: center;
    }
  
    header img {
      width: 100px;
      height: 100px;
      cursor: pointer;
      transition: transform 0.3s ease; 
      margin-right: 30px; 
      margin-left: 30px;
    }
  
    header img:hover {
      transform: scale(1.1) rotate(360deg); 
    }
  
    nav {
      display: flex;
      justify-content: flex-end; 
      align-items: center;
      margin-right: 20px; 
    }
  
    nav a {
      color: white; 
      font-size: 25px; 
      text-decoration: none; 
      margin-left: 30px; 
      cursor: pointer;
      border: none;
      background: none;
      padding: 5px;
      transition: color 0.3s ease, transform 0.1s ease;
    }
  
    nav a:hover {
      color: #9c3b8f; 
      transform: translateY(1px); 
    }
  
    h1 {
      font-family: 'Lisu Bosa', sans-serif;
      font-weight: 900;
      font-style: italic;
      text-align: center;
      text-decoration: underline;
      color: white; 
      font-size: 40px;
    }
   h2 {
      font-family: 'Lisu Bosa', sans-serif;
      font-weight: 900;
      font-style: italic;
      text-align: center;
      color: #ffbdeb;
      font-size: 30px;

    
    }

    table {
  margin: 30px;
  border-collapse: collapse;
  width: 80%;
}

table, th, td {
  border: 3px solid white;
}

th, td {
  padding: 15px;
  text-align: left;
}

img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

table img:hover {
  transform: scale(1.5); 
}

.tables-container {
  display: flex;
  justify-content: space-between;
  border-radius: 10px;
}

footer {
  position: relative;
  bottom: 0;
  left: 0;
  width: 100%;
  /* background-color: rgba(0, 0, 0, 0.5); Semi-transparent background */
  color: white;
  font-family: 'Lisu Bosa', sans-serif;
  text-align: center;
  padding: 10px 0; /* Add some padding for better visibility */
  z-index: 100; /* Ensure footer stays on top */
}

  </style>
</head>
<body>

<header>
  <a href="index.html">
    <img src="https://pngimg.com/d/pizza_PNG43991.png" />
  </a>
  <nav>
    <a href="about.html">About</a>
    <a href="randompie.html">Random Pie</a>
    <a href="countdown.html">Pie Time</a>
    <a href="pietable.html">Pie Table</a>
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
<footer>© 2024 Stamatia Daramboukas</footer>

</body>
</html>














