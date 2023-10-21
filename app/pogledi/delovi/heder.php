<?php include 'head.php'; ?>
<?php 
		$korisnik = $_SESSION['korisnik'] ?? NULL;
?>

<script type="text/javascript">
    $(document).ready(function() {
        $("#odjava").click(function(e) {
            e.preventDefault();

            $.ajax({
                url: 'api.php',
                type: 'POST',
                data: {action: 'odjava'},
                success: function(response) {
										var parsedResponse = JSON.parse(response);  
                    if(parsedResponse.success) {
                        window.location.href = '/prijava';
                    } else {
                        alert('Odjava neuspešna. Molimo pokušajte ponovo.');
                    }
                },
                error: function() {
                    alert('Došlo je do greške prilikom odjave.');
                }
            });
        });
    });
</script>

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
								<li class="nav-item">
									<a class="nav-link <?= $stranica === 'predlozi' ? 'active' : '' ?>" href="/predlozi">Vasi Recepti</a>
								</li>

                <?php if ($korisnik): ?> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
														<?php echo $korisnik->name; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/profil">Prikaz Profila</a></li>
                            <li><a id="odjava"class="dropdown-item">Odjava</a></li>
                        </ul>
                    </li>
										<li class="nav-item position-relative">
												<a class="nav-link" href="/korpa">
														<i class="fas fa-shopping-cart"></i> 
														<span id="cartItemCount" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
															<?php echo array_sum($_SESSION['korpa'] ?? []);?>
														</span>
												</a>
										</li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/prijava">Prijava</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>

