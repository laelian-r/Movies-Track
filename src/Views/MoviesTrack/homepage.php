<?php
ob_start();
$title = "Movies Track";
$homeActive = "active";
$filmsActive = "";
$deriesActive = "";
?>

<div class="bg">
    <h2>FIlms</h2>
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

    <h2>Series</h2>
    <section class="section-container">
        <?php
        foreach ($series as $serie) :
        ?>
        <article>
            <img src="<?= $serie->image_serie; ?>" alt="<?= $serie->nom_serie; ?>">
                
            <div class="infos">
                <a href=""><i class="fa-solid fa-play"></i></a>

                <footer>
                    <h2><?= $serie->nom_serie; ?></h2>
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