<?php
ob_start();
$title = "Séries | Movies Track";

// Set active class for the navigation menu items
$homeActive = "";
$filmsActive = "";
$deriesActive = "active";
?>

    <div class="bg">
        <h1>Séries</h1>
    </div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';