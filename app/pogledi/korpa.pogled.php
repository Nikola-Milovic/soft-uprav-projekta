<?php include 'delovi/heder.php'; ?>

<main class="container my-5 animated fadeIn">
    <div class="bg-light p-5 rounded">
        <h2 class="mb-4">Vaša Korpa</h2>

        <?php if (empty($korpa)): ?>
            <p class="alert alert-warning">Vaša korpa je prazna</p>
        <?php else: ?>
            <ul class="list-group mb-4">
                <?php
                $total = 0;
								foreach ($korpa as $jeloId => $jelo) {
										$total += $jelo->price;
										echo "<li class='list-group-item d-flex align-items-center'>";
										echo "<div class='small-img-container'><img class='img-thumbnail' src='$jelo->img_url' alt='$jelo->name'></div>"; // Note the use of img-container
										echo "<div class='ms-3'>";
										echo "<h5>$jelo->name</h5>";
										echo "<p>$jelo->description</p>";
										echo "<p class='font-weight-bold'>Cena: " . number_format($jelo->price, 2) . " RSD</p>";
										echo "</div>";
										echo "<button data-id='$jeloId' class='ms-auto btn btn-danger ukloniIzKorpe'><i class='fas fa-trash-alt'></i></button>";
										echo "</li>";
								}
								?>
            </ul>
            <div class="d-flex justify-content-between align-items-center">
                <h4>Ukupno: <?= number_format($total, 2) ?> RSD</h4>
                <button class="btn btn-primary btn-lg" id="poruci">Naruči</a>
            </div>
        <?php endif; ?>
    </div>
</main>

<script>
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
		response = JSON.parse(response);
		if (response.success) {
			location.reload(); 
		}
	}
	});
});

$('#poruci').click(function(e) {
	e.preventDefault();
	$.ajax({
		url: 'api.php',
		method: 'POST',
		data: {
				action: 'poruci',
		},
		success: function(response) {
		response = JSON.parse(response);
		if (response.success) {
			window.location = '?stranica=potvrda&&order_id='+response.id;
		}
	}
	});
});
</script>

<?php include 'delovi/futer.php'; ?>
