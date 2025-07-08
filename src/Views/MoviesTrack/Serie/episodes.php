<?php
ob_start();
$title = "Épisodes";
?>
<h1>Épisodes</h1>
<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';