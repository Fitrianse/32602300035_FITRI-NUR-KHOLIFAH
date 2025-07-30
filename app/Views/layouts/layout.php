<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Fitri - Profile & Experience</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f1f1; 
            color: #333;
        }

        header,
        footer,
        .navbar {
            background-color: #800000 !important; 
        }

        .nav-link {
            color: #ffffff !important;
        }

        .nav-link:hover {
            color: #f4cccc !important;
        }

        .content-container {
            padding: 2rem;
            background-color: #fff5f5;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(128, 0, 0, 0.3);
        }

        .social-icons a {
            color: #fff;
            margin: 0 10px;
            transition: transform 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2);
            color: #f4cccc;
        }

        @media (max-width: 768px) {
            .content-container {
                padding: 1rem;
            }

            .social-icons i {
                font-size: 1.5rem;
            }
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <header class="text-white text-center py-3">
        <h3>Selamat datang di Web Fitri!</h3>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark px-3">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
       
        <ul class="navbar-nav ms-3">
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('profile') ?>">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('experience') ?>">Experience</a>
            </li>
        </ul>

       
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle fa-lg me-1"></i>
                    <span class="d-none d-md-inline">Profil</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                    <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


    <div class="container flex-grow-1 d-flex justify-content-center align-items-center py-4">
        <div class="content-container w-100" style="max-width: 800px;">
            <?= $this->renderSection('content') ?>
        </div>
    </div>

    <footer class="text-white text-center py-3">
        &copy; MG
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
