<?php

declare(strict_types=1);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: registration.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$studyProgram = trim($_POST['study_program'] ?? '');
$course = trim($_POST['course'] ?? '');
$participantType = trim($_POST['participant_type'] ?? '');
$interests = $_POST['interests'] ?? [];
$note = trim($_POST['note'] ?? '');
$source = trim($_POST['source'] ?? '');

if (!is_array($interests)) {
    $interests = [];
}

$interestText = implode(', ', array_map(static fn ($value): string => (string) $value, $interests));

function e5(mixed $value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasil Pendaftaran - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="utility-page">
<main class="utility-card">
    <span class="eyebrow">MILESTONE 5 · HASIL POST</span>
    <h1>Pendaftaran Diterima untuk Diproses</h1>
    <p>Periksa kembali data latihan berikut.</p>

    <div class="result-grid">
        <p><b>Nama:</b><br><?= e5($name) ?></p>
        <p><b>Email:</b><br><?= e5($email) ?></p>
        <p><b>Nomor HP:</b><br><?= e5($phone) ?></p>
        <p><b>Program Studi:</b><br><?= e5($studyProgram) ?></p>
        <p><b>Kursus:</b><br><?= e5($course) ?></p>
        <p><b>Jenis Peserta:</b><br><?= e5($participantType) ?></p>
        <p><b>Minat:</b><br><?= e5($interestText !== '' ? $interestText : 'Belum memilih minat') ?></p>
        <p><b>Sumber:</b><br><?= e5($source) ?></p>
    </div>

    <div class="formula-box">
        <strong>Catatan</strong>
        <span><?= e5($note !== '' ? $note : 'Tidak ada catatan.') ?></span>
    </div>

    <div class="button-row">
        <a class="button" href="registration.php">Kembali ke Form</a>
        <a class="button button-secondary" href="index.php">Beranda</a>
    </div>
</main>
</body>
</html>
