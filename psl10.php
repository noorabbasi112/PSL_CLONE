<!DOCTYPE html>
<head>
  <title>HBL PSL X </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="psl10.css">
  <style>
.fade-in {
    opacity: 0;
    animation: fadeIn ease-in 1s forwards;
}
@keyframes fadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
}
a:hover, button:hover {
    transform: scale(1.05);
    transition: transform 0.3s ease;
}
</style>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add('fade-in');
      const detailButtons = document.querySelectorAll('.scorecard-btn');
      detailButtons.forEach(button => {
        button.addEventListener('click', function() {
          const matchResult = this.previousElementSibling.textContent;
          showMatchDetails(matchResult);
        });
      });
    });

    function showMatchDetails(result) {
      alert(result);
    }
  </script>
</head>

<body>
  <div class="top-bar">
    <div class="social-icons">
      <a href="https://www.facebook.com/thePSL" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
      <a href="https://www.youtube.com/pakistansuperleagueofficial" target="_blank"><i class="fa-brands fa-youtube"></i></a>
      <a href="https://www.instagram.com/thepsl/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://x.com/thepslt20" target="_blank"><i class="fa-brands fa-twitter"></i></a>
    </div>
  </div>

  <nav class="menu-bar">
    <div class="menu-left">
      <a href="home.php">HOME</a>
      <a href="latest.html">LATEST</a>
      <a href="Watch.html">WATCH HBL PSL X</a>
    </div>

    <div class="psl-logo">
      <img src="https://psl-t20.com/wp-content/uploads/2018/11/HBL-PSL-Logo_White.png" alt="PSL Logo">
    </div>

    <div class="menu-right">
      <a href="psl10.php">HBL PSL X</a>
      <div class="dropdown">
        <a href="results.html">RESULTS</a>
        <div class="dropdown-content">
          <a href="season9.php">Season 9</a>
          <a href="season8.php">Season 8</a>
          <a href="season7.php">Season 7</a>
          <a href="season6.php">Season 6</a>
          <a href="season5.php">Season 5</a>
          <a href="season4.php">Season 4</a>
          <a href="season3.php">Season 3</a>
          <a href="season2.php">Season 2</a>
          <a href="season1.php">Season 1</a>
        </div>
      </div>

      <div class="dropdown">
        <a href="teams.html">TEAMS</a>
        <div class="dropdown-content">
          <a href="islu.html">Islamabad United</a>
          <a href="karachi.html">Karachi Kings</a>
          <a href="lahore.html">Lahore Qalandars</a>
          <a href="multan.html">Multan Sultans</a>
          <a href="peshawar.html">Peshawar Zalmi</a>
          <a href="quetta.html">Quetta Gladiators</a>
        </div>
      </div>
    </div>
  </nav>

<h1 class="main-heading">HBL PSL X </h1>


<?php
$con = mysqli_connect("localhost", "root", "", "psl_10");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$q = mysqli_query($con, "SELECT * FROM psl2025_results ORDER BY match_date ASC");
$matches = mysqli_fetch_all($q, MYSQLI_ASSOC);
mysqli_close($con);
?>
<div class="fixtures-container">
  <h2>HBL PSL 2025 Fixtures/Results</h2>
  <?php foreach ($matches as $m): ?>
    <div class="match-card">
      <div class="team">
        <img src="<?= ($m['team1_logo']) ?>" alt="<?= ($m['team1']) ?>">
        <div class="team-name"><?= ($m['team1']) ?></div>
        <div class="team-score"><?= ($m['team1_score']) ?></div>
      </div>
      <div class="match-info">
        <div class="match-date"><?= date("D M d, Y", strtotime($m['match_date'])) ?></div>
        <div class="match-result"><?= ($m['result']) ?></div>
        <button class="scorecard-btn">View Details</button>
      </div>
      <div class="team">
        <img src="<?= ($m['team2_logo']) ?>" alt="<?= ($m['team2']) ?>">
        <div class="team-name"><?= ($m['team2']) ?></div>
        <div class="team-score"><?= ($m['team2_score']) ?></div>
      </div>
    </div>
  <?php endforeach; ?>
</div>