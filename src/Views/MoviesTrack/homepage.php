<?php
ob_start();
$title = "Movies Track";
$homeActive = "active";
$filmsActive = "";
$deriesActive = "";
?>

<div class="bg">
    <section class="section-container">
    <?php
    foreach ($movies as $movie) :
    ?>
        <article>
            <img src="<?= $movie->image; ?>" alt="">
            
            <div class="infos">
                <a href=""><i class="fa-solid fa-play"></i></a>

                <footer>
                    <h2><?= $movie->titre; ?></h2>
                </footer>
            </div>
        </article>
    <?php
    endforeach;
    ?>
    </section>
</div>

<?php
$content = ob_get_clean();
require VIEWS . 'layout.php';