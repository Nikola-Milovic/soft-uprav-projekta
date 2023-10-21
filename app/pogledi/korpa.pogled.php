<?php include 'delovi/heder.php'; ?>

<main class="container my-5 h-25">
    <h2>Vaša Korpa</h2>
    <ul class="list-group">

        <?php
        if (empty($_SESSION['korpa'])) {
            echo "<li class='list-group-item'>Vaša korpa je prazna</li>";
        } else {
            foreach ($_SESSION['korpa'] as $itemId => $quantity) {
                $jelo = $meni->dohvatiJeloPoId($itemId); // Assuming you have a method to fetch a meal by its ID
                echo "<li class='list-group-item'>";
                echo "<h5>$jelo->name</h5>";
                echo "<p>$jelo->description</p>";
                echo "<p>Količina: $quantity</p>";
                echo "<button data-id='$itemId' class='btn btn-danger removeFromCart'>Ukloni iz korpe</button>";
                echo "</li>";
            }
        }
        ?>

    </ul>
</main>

<?php include 'delovi/futer.php'; ?>
