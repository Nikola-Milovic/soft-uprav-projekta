<!doctype html>
<html lang="sr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/glavni.css" rel="stylesheet">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">

    <title>Eko Zdrava Hrana</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/assets/slike/ikonica-48.png" alt="EkoHrana Logo" width="30" height="30"> 
            EkoHrana
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
                <li class="nav-item">
                    <a class="nav-link <?= $trenutnaStranica === 'pocetna' ? 'active' : '' ?>" href="/">Pocetna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $trenutnaStranica === 'onama' ? 'active' : '' ?>" href="onama.php">O nama</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $trenutnaStranica === 'meni' ? 'active' : '' ?>" href="meni.php">Meni</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $trenutnaStranica === 'cene' ? 'active' : '' ?>" href="cene.php">Cene</a>
                </li>

                <?php if ($loginovan): ?> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Profil
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Prikaz Profila</a></li>
                            <li><a class="dropdown-item" href="odjava.php">Odjava</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="prijava.php">Prijava</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

