<!DOCTYPE html>
<html>
<head>
  <title>PSL Homepage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="home.css">
  <style>
    .counter {
      transition: all 0.3s ease-in-out;
    }
  </style>
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
        <a href="#">RESULTS</a>
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

  <div class="content">
    <img src="https://scontent.fisb23-1.fna.fbcdn.net/v/t39.30808-6/497982303_1225065422531908_792558665363347783_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=86c6b0&_nc_eui2=AeEu9iRva-kAOMkmwLZ2eap3pdgBvlTFu7Sl2AG-VMW7tI1E3QUsBIdv54JV5SsBT7X3Jh9BxDoSSFXCZ7dhlxwF&_nc_ohc=FlH2ZysTDlYQ7kNvwFzLwAa&_nc_oc=AdlsAYadGthrHBHNppYDAnhksrlsjhFdFPNATc4vWAXjcj1mg4sUOMqYZJCdfmfGotU&_nc_zt=23&_nc_ht=scontent.fisb23-1.fna&_nc_gid=huBjEBUE5gxLL_Di2SA9Gg&oh=00_AfPYIMzcY3gftPr2tg2w8zcBr4HVltQp2rqfCq_Km3mOsg&oe=684FA75C" style="width: 100%;" alt="PSL Banner">
  </div>

<?php
$con = mysqli_connect("localhost", "root", "", "test");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$q = mysqli_query($con, "SELECT * FROM test");
$data = mysqli_fetch_all($q, MYSQLI_ASSOC);
?>

<div class="points-table-container">
  <h2 class="teams-heading" style="color: #003300;">Points Table</h2>
  <table class="points-table" id="pointsTable">
    <thead>
      <tr>
        <th>Teams</th>
        <th>Matches</th>
        <th>Won</th>
        <th>Lost</th>
        <th>Tied</th>
        <th>No Result</th>
        <th>Points</th>
        <th>Net RR</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($data as $row): ?>
      <tr>
        <td><?php echo ($row['Teams']); ?></td>
        <td><?php echo (int)$row['Matches']; ?></td>
        <td><?php echo (int)$row['Won']; ?></td>
        <td><?php echo (int)$row['Lost']; ?></td>
        <td><?php echo (int)$row['Tied']; ?></td>
        <td><?php echo (int)$row['No_Result']; ?></td>
        <td><?php echo (int)$row['Points']; ?></td>
        <td><?php echo ($row['Net_rr']); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<div class="content" style="text-align: center; padding: 20px;">
  <h2 class="teams-heading" style="font-size: 24px; margin-bottom: 20px;">HBL PSL 10 - TEAMS</h2>
  <div class="teams-logos" style="display: flex; justify-content: center; align-items: center; gap: 20px; flex-wrap: nowrap; overflow-x: auto;">
    <div class="team" style="flex: 0 0 auto;"><img src="https://psl-t20.com/wp-content/uploads/2016/01/psl-islamabad-united.png" alt="Islamabad United"></div>
    <div class="team" style="flex: 0 0 auto;"><img src="https://psl-t20.com/wp-content/uploads/2017/02/psl-karachi-kings.png" alt="Karachi Kings"></div>
    <div class="team" style="flex: 0 0 auto;"><img src="https://psl-t20.com/wp-content/uploads/2016/01/psl-lahore-qalandars.png" alt="Lahore Qalandars"></div>
    <div class="team" style="flex: 0 0 auto;"><img src="https://psl-t20.com/wp-content/uploads/2019/01/psl-multan-sultan.png" alt="Multan Sultans"></div>
    <div class="team" style="flex: 0 0 auto;"><img src="https://psl-t20.com/wp-content/uploads/2016/01/psl-peshawar-zalmi.png" alt="Peshawar Zalmi"></div>
    <div class="team" style="flex: 0 0 auto;"><img src="https://psl-t20.com/wp-content/uploads/2017/02/psl-quetta-gladiators.png" alt="Quetta Gladiators"></div>
  </div>
</div>


<h2 style="text-align:center; font-size:36px; color:#1B5E20;">HBL PSL SEASON 10</h2>

<div id="psl-stats" style="display: flex; justify-content: center; flex-wrap: wrap; gap: 80px; background: #1B5E20; color: white; padding: 20px; border-radius: 12px; max-width: 1000px; margin: 30px auto; font-family: 'Segoe UI', sans-serif;">
  <div style="text-align: center;">
    <h1 class="counter" data-target="11201" style="font-size: 60px; margin: 20px;">0</h1>
    <p style="font-size: 22px; margin: 5px 0 0;">RUNS</p>
  </div>
  <div style="text-align: center;">
    <h1 class="counter" data-target="462" style="font-size: 60px; margin: 20px;">0</h1>
    <p style="font-size: 22px; margin: 5px 0 0;">WICKETS</p>
  </div>
  <div style="text-align: center;">
    <h1 class="counter" data-target="520" style="font-size: 60px; margin: 20px;">0</h1>
    <p style="font-size: 22px; margin: 5px 0 0;">SIXES</p>
  </div>
  <div style="text-align: center;">
    <h1 class="counter" data-target="1000" style="font-size: 60px; margin: 20px;">0</h1>
    <p style="font-size: 22px; margin: 5px 0 0;">FOURS</p>
  </div>
</div>

<div style="background:white; padding:50px 20px; text-align:center;">
  <h2 style="color:#1B5E20;">OUR SPONSORS</h2>
  <img src="https://psl-t20.com/wp-content/uploads/2025/04/HBL-PSL-SEASON-10-SPONSORS-Grid-2048x235.jpg" style="width:90%;" alt="Sponsors">
</div>

<div style="background: #003300; color: white; padding: 20px; text-align: center;">
  &copy; 2025 HBL PSL X. All Rights Reserved. | Designed by Noor
</div>

<script>
  function animateCounter(counterElement, target) {
    let current = 0;
    const increment = target / 200;
    const updateCounter = () => {
      current += increment;
      if (current < target) {
        counterElement.textContent = Math.floor(current);
        requestAnimationFrame(updateCounter);
      } else {
        counterElement.textContent = target.toLocaleString();
      }
    };
    updateCounter();
  }

  function initCounters() {
    const counters = document.querySelectorAll(".counter");
    counters.forEach(counter => {
      const target = +counter.getAttribute("data-target");
      animateCounter(counter, target);
    });
  }

  function animateRows() {
    const rows = document.querySelectorAll("#pointsTable tbody tr");
    const windowHeight = window.innerHeight;

    rows.forEach(row => {
      const rect = row.getBoundingClientRect();
      if (rect.top < windowHeight - 50) {
        row.classList.add("visible");
      }
    });
  }

  window.addEventListener("load", () => {
    initCounters();
    animateRows();
  });

  window.addEventListener("scroll", animateRows);
</script>
</body>
</html>