<?php include 'delovi/heder.php'; ?>

<div class="container my-5">
    <h1 class="mb-4">Naš Meni</h1>

<?php if (!$korisnik): ?>
<div class="alert alert-warning" role="alert">
		<strong>Pažnja!</strong> Ulogujte se da biste mogli da poručite.
</div>
<?php endif; ?>

<div class="row">
    <?php foreach ($jela as $jelo): ?>
        <div class="col-md-4 mb-4 animated fadeIn">
            <div class="card">
                <div class="card-img-container">
                    <img src="<?= $jelo->img_url ?>" class="card-img-top" alt="<?= $jelo->name ?>">
                </div>
                <div class="card-body">
                    <h5 class="card-title text-center"><?= $jelo->name ?></h5>
                    <hr class="divider mb-3">
                    <p class="card-text"><?= $jelo->description ?></p>
                    <p>Alergeni: <?= $jelo->alergens ? $jelo->alergens : 'Nema' ?></p>
                    <p class="font-weight-bold"><?= number_format($jelo->price, 2) ?> RSD</p>
										<?php if (!isset($korpa[$jelo->id]) && $korisnik) :?>
											<button data-id="<?= $jelo->id ?>" class="btn btn-primary dodajUKorpu">Dodaj u korpu</a>
										<?php endif; ?>
										<?php if (isset($korpa[$jelo->id]) && $korisnik) :?>
											<button data-id="<?= $jelo->id ?>" class="btn btn-danger ukloniIzKorpe">Ukloni iz korpe</button>
										<?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

	<script>
$(document).ready(function() {
$('.dodajUKorpu').click(function(e) {
	e.preventDefault();

	var jeloId = $(this).data('id');

	$.ajax({
		url: 'api.php',
		method: 'POST',
		data: {
				action: 'dodajUKorpu',
				jeloId: jeloId,
		},
		success: function(response) {
			console.log(response);
			response = JSON.parse(response);
			if (response.success) {
					// alert('Dodato u korpu!');
					location.reload(); 
			}
		}
	});
});
});

 $('.ukloniIzKorpe').click(function(e) {
	e.preventDefault();
	var jeloId = $(this).data('id');
	$.ajax({
			url: 'api.php',
			method: 'POST',
			data: {
					action: 'ukloniIzKorpe',
					jeloId: jeloId,
			},
			success: function(response) {
			console.log(response);
					response = JSON.parse(response);
					if (response.success) {
							location.reload(); 
					}
			}
	});
});
</script>

<?php include 'delovi/futer.php'; ?>

