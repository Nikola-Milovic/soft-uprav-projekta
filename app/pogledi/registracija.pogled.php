<?php include 'delovi/head.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <img src="/assets/slike/ikonica-96.png" class="mx-auto d-block" alt="Logo">
            <h2 class="text-center mb-4">Registracija</h2>

            <?php if(!empty($greske)): ?>
                <div class="alert alert-danger">
                    <?php foreach($greske as $greska): ?>
                        <p><?= $greska ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <form method="post">
                <div class="mb-3">
                    <label for="korisnickoIme" class="form-label">Korisničko Ime</label>
                    <input type="text" class="form-control" id="korisnickoIme" name="korisnickoIme" required>
                </div>
                <div class="mb-3">
                    <label for="ime" class="form-label">Ime</label>
                    <input type="text" class="form-control" id="ime" name="ime" required>
                </div>
                <div class="mb-3">
                    <label for="sifra" class="form-label">Šifra</label>
                    <input type="password" class="form-control" id="sifra" name="sifra" required>
                </div>
                <button type="submit" class="btn btn-primary mb-3">Registruj se</button>
            </form>
						<a href="?stranica=prijava">Vec imas nalog? Prijavi se</a>
        </div>
    </div>
</div>
