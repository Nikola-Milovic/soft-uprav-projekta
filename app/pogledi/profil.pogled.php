<?php include 'delovi/heder.php'; ?>

<main class="container my-5 animated fadeIn">
    <div class="bg-light p-5 rounded">
        <h2 class="mb-4">Vaše Narudžbine</h2>

        <?php if (empty($narudzbine)): ?>
            <p class="alert alert-warning">Nemate prethodnih narudžbina.</p>
        <?php else: ?>
            <ul class="list-group mb-4">
                <?php
                foreach ($narudzbine as $narudzbina) {
                    echo "<li class='list-group-item'>";
                    echo "<strong>Datum narudžbine:</strong> {$narudzbina->ordered_at}<br/>";
                    echo "<strong>Naručeni artikli:</strong> {$narudzbina->items_names}<br/>";
                    echo "<strong>Ukupno:</strong> " . number_format($narudzbina->total, 2) . " RSD";
                    echo "</li>";
                }
                ?>
            </ul>
        <?php endif; ?>
    </div>
</main>

<?php include 'delovi/futer.php'; ?>
