<?php
ob_start();
$title = "Homepage";
?>

    <h1>Séries</h1>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';