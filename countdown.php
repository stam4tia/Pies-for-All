
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>π time!</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lisu+Bosa:wght@900&family=Rubik+Iso&display=swap">
  <style>
    body {
      font-family: 'Lisu Bosa', sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://media0.giphy.com/media/xUOrw3Cefz0PcZrLFu/giphy.gif?cid=ecf05e47ypmdfmtq5cwbj42uvzpdxdyy2bxxduiauo2sog3m&ep=v1_gifs_related&rid=giphy.gif&ct=g');
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
      text-align: center;
      color: white; 
      font-size: 30px;
    }
  
    footer {
      position: absolute; /* Change from fixed to absolute */
      bottom: 0;
      left: 0;
      width: 100%;
      color: white;
      font-family: 'Lisu Bosa', sans-serif;
      text-align: center;
      padding: 10px 0;
    }
  
    .footer-text {
      color: #ffffff;
      font-size: 17px;
      text-align: center;
    }
  
    footer a {
      text-decoration: none;
    }
  
    footer a:hover {
  color: rgb(0, 200, 255) !important;
}
   
  </style>
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



<h1> Pie Time </h1>

<?php
// get the current date
$currentDate = new DateTime();

// set the target date (March 14th of the current year)
$targetDate = new DateTime(date('Y') . '-03-14');

// check if the target date has already passed this year
if ($currentDate > $targetDate) {
    // if it has, set the target date to March 14th of the next year
    $targetDate->modify('+1 year');
}

// calculate the difference in days
$interval = $currentDate->diff($targetDate);
$daysUntilMarch14 = $interval->format('%a');

// output the result
echo "<h2>Countdown to Pi Day: $daysUntilMarch14 days!</h2>";
?>



</body>
</html>
















