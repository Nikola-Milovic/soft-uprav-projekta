<?php include 'head.php'; ?>

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
                    <a class="nav-link <?= $stranica === 'pocetna' ? 'active' : '' ?>" href="/">Pocetna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $stranica === 'meni' ? 'active' : '' ?>" href="/meni">Meni</a>
                </li>
								<li class="nav-item">
									<a class="nav-link <?= $stranica === 'onama' ? 'active' : '' ?>" href="/onama">O nama</a>
								</li>

                <?php if ($loginovan): ?> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
														<?php echo $korisnik["name"]; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?stranica=profil">Prikaz Profila</a></li>
                            <li><a class="dropdown-item" href="skripte/odjava.php">Odjava</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="?stranica=prijava">Prijava</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

