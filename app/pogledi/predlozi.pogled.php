<?php include 'delovi/heder.php'; ?>

<div class="container mt-5">
    <h2>Predložite Recept</h2>
    <p>Brinemo o našim klijentima i želimo doneti vašu omiljenu hranu do vas. Podelite sa nama vaše omiljene recepte!</p>
    <form id="receptForm" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="ime" class="form-label">Naziv Recepta</label>
            <input type="text" class="form-control" id="ime" name="ime" required>
        </div>
        <div class="mb-3">
            <label for="opis" class="form-label">Opis Recepta</label>
            <textarea class="form-control" id="opis" name="opis" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="slika" class="form-label">Slika Jela</label>
            <input type="file" accept='image/*' class="form-control" id="slika" name="slika" required>
        </div>
        <button type="submit" class="btn btn-primary mb-3">Pošalji</button>
    </form>
</div>

<script>
    $('#receptForm').submit(function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        formData.append('action', 'submitrecept');
        $.ajax({
            url: 'api.php',
            type: 'POST',
            data: formData,
            success: function(response) {
							alert('Vaš predlog je poslat!');
							$('#receptForm')[0].reset();
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });
</script>

<?php include 'delovi/futer.php'; ?>
