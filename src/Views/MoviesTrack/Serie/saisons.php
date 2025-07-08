<?php
ob_start();
$title = "Saisons de " . htmlspecialchars($serie->nom_serie);
?>
<h1>Saison 1</h1>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';