<?php
ob_start();
$title = "Séries";
?>

    <div class="bg">
        <h1>Séries</h1>
    </div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';