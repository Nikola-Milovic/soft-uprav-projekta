<?php include 'delovi/heder.php'; ?>

<div class="container my-5">
    <h1 class="mb-4">Naš Meni</h1>

    <div class="row">
        <?php foreach ($jela as $jelo): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= $jelo->img_url ?>" class="card-img-top" alt="<?= $jelo->name ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $jelo->name ?></h5>
                        <p class="card-text"><?= $jelo->description ?></p>
                        <p>Alergeni: <?= $jelo->alergens ? $jelo->alergens : 'Nema' ?></p>
                        <p class="font-weight-bold"><?= number_format($jelo->price, 2) ?> RSD</p>
                        <a href="#" class="btn btn-primary">Naruči</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'delovi/futer.php'; ?>

