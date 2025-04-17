<?php
ob_start();
$title = "Films";
?>
    <div class="bg">
        <h1>Films</h1>
    </div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';