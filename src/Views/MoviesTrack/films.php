<?php
ob_start();
$title = "Homepage";
?>

    <h1>Films</h1>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';