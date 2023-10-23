<?php include 'head.php'; ?>
<?php 
		$korisnik = $_SESSION['korisnik'] ?? NULL;
		$korpa = $_SESSION['korpa'] ?? NULL;
?>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="?stranica=pocetna">
            <img src="assets/slike/ikonica-48.png" alt="EkoHrana Logo" width="30" height="30"> 
            EkoHrana
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> 
                <li class="nav-item">
                    <a class="nav-link <?= $stranica === 'pocetna' ? 'active' : '' ?>" href="?stranica=pocetna">Pocetna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $stranica === 'meni' ? 'active' : '' ?>" href="?stranica=meni">Meni</a>
                </li>
								<li class="nav-item">
									<a class="nav-link <?= $stranica === 'onama' ? 'active' : '' ?>" href="?stranica=onama">O nama</a>
								</li>
								<li class="nav-item">
									<a class="nav-link <?= $stranica === 'predlozi' ? 'active' : '' ?>" href="?stranica=predlozi">Vasi Recepti</a>
								</li>

                <?php if ($korisnik): ?> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
														<?php echo $korisnik->name; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="?stranica=profil">Prikaz Profila</a></li>
                            <li><a id="odjava"class="dropdown-item">Odjava</a></li>
                        </ul>
                    </li>
										<li class="nav-item position-relative">
												<a class="nav-link" href="?stranica=korpa">
														<i class="fas fa-shopping-cart"></i> 
														<span id="cartItemCount" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
															<?php echo count($korpa ?? []);?>
														</span>
												</a>
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


<script type="text/javascript">
$(document).ready(function() {
		$("#odjava").click(function(e) {
				e.preventDefault();

				$.ajax({
						url: 'api.php',
						type: 'POST',
						data: {action: 'odjava'},
						success: function(response) {
				console.log(response);
								var parsedResponse = JSON.parse(response);  
								if(parsedResponse.success) {
										window.location.href = '?stranica=prijava';
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
