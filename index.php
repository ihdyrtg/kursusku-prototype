<?php
$siteName = 'KursusKu';
$tagline = 'Belajar, daftar, dan kelola kursus dalam satu tempat.';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= htmlspecialchars($siteName) ?></title>
</head>
<body>
<header>
  <nav><a href="index.php"><?= htmlspecialchars($siteName) ?></a></nav>
</header>
<main>
  <section>
    <h1><?= htmlspecialchars($tagline) ?></h1>
    <p>Temukan kursus teknologi yang relevan.</p>
    <a href="#katalog">Lihat Katalog</a>
  </section>
  <section id="katalog"><h2>Katalog Kursus</h2></section>
</main>
<footer><small>&copy; <?= date('Y') ?> KursusKu</small></footer>
</body>
</html>

<?php
$serverTime = date('Y-m-d H:i:s');
echo 'Waktu server: ' . $serverTime;
