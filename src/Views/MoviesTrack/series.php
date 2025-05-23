<?php
ob_start();
$title = "Séries | Movies Track";

// Set active class for the navigation menu items
$homeActive = "";
$filmsActive = "";
$deriesActive = "active";
?>

    <div class="bg">
        <section class="section-container">
        <?php
        foreach ($series as $serie) :
        ?>
            <article>
                <img src="<?= $serie->image; ?>" alt="">
                
                <div class="infos">
                    <a href=""><i class="fa-solid fa-play"></i></a>

                    <footer>
                        <h2><?= $serie->titre; ?></h2>
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