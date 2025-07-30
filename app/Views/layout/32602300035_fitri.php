<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v6.4.0/css/all.css"
  />
  <link rel="stylesheet" href="/css/style.css" />
  <title>Layouting</title>
</head>

<body>
  <div class="navbar">
    <div class="navbar-icon">
      <i class="fa-solid fa-circle-user fa-2xl"></i>
    </div>

    <div class="navbar-page">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Portofolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </div>

    <div class="navbar-sosmed">
      <a href="https://linkedin.com" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
      <a href="https://instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
      <a href="https://github.com" target="_blank"><i class="fa-brands fa-github"></i></a>
      <a href="https://wa.me/6282135352803" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
    </div>
  </div>

  <div class="banner">
    <span class="name">Fitri Nur Kholifah</span><br />
    <span class="description">
      Mahasiswa Fakultas Teknologi Industri Prodi Teknik Informatika Angkatan 23
    </span>
  </div>

  <?= $this->renderSection('content'); ?>
</body>

</html>
