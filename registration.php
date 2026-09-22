<?php

declare(strict_types=1);
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Kursus - KursusKu</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="utility-page">
<main class="utility-card form-card">
    <span class="eyebrow">MILESTONE 5 · FORM + POST</span>
    <h1>Mulai belajar bersama KursusKu</h1>
    <p>Gunakan data latihan. Field bertanda wajib harus diisi. Method akhir form adalah <strong>POST</strong>.</p>

    <form action="process-registration.php" method="POST" class="stack-form">
        <input type="hidden" name="source" value="week-05">

        <div class="form-grid">
            <div class="field">
                <label for="name">Nama Lengkap</label>
                <input id="name" name="name" type="text" minlength="3" maxlength="100"
                       autocomplete="name" required>
            </div>
            <div class="field">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" maxlength="120"
                       autocomplete="email" required>
            </div>
            <div class="field">
                <label for="phone">Nomor HP</label>
                <input id="phone" name="phone" type="tel" maxlength="15" autocomplete="tel"
                       placeholder="Contoh: 081234567890" required>
            </div>
            <div class="field">
                <label for="study_program">Program Studi</label>
                <input id="study_program" name="study_program" type="text" maxlength="100" required>
            </div>
        </div>

        <div class="field">
            <label for="course">Kursus yang Dipilih</label>
            <select id="course" name="course" required>
                <option value="">-- Pilih kursus --</option>
                <option value="web-dasar">Web Dasar</option>
                <option value="php-dasar">PHP Dasar</option>
                <option value="laravel-fundamental">Laravel Fundamental</option>
            </select>
        </div>

        <fieldset class="field">
            <legend>Jenis Peserta</legend>
            <div class="choice-row">
                <label><input type="radio" name="participant_type" value="mahasiswa" required> Mahasiswa</label>
                <label><input type="radio" name="participant_type" value="umum"> Umum</label>
            </div>
        </fieldset>

        <fieldset class="field">
            <legend>Minat Tambahan</legend>
            <div class="choice-row">
                <label><input type="checkbox" name="interests[]" value="ui-ux"> UI/UX</label>
                <label><input type="checkbox" name="interests[]" value="database"> Database</label>
                <label><input type="checkbox" name="interests[]" value="backend"> Backend</label>
            </div>
        </fieldset>

        <div class="field">
            <label for="note">Catatan</label>
            <textarea id="note" name="note" rows="5" maxlength="300"
                      placeholder="Tuliskan kebutuhan belajar Anda (opsional)"></textarea>
            <small class="table-note">Maksimal 300 karakter.</small>
        </div>

        <div class="button-row">
            <button class="button" type="submit">Kirim Pendaftaran</button>
            <a class="button button-secondary" href="get-demo.php">Eksperimen GET</a>
            <a class="button button-secondary" href="index.php">Beranda</a>
        </div>
    </form>
</main>
</body>
</html>
