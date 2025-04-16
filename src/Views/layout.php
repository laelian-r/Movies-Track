<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="shortcut icon" href="./assets/images/logo 4.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/c1d0ab37d6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style.css">
    <link 
        rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" 
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" 
    />
</head>
<body>
    <header>
        <nav>
            <a href="/"><img src="./assets/images/logo 4.png" alt=""></a>

            <ul>
                <li>
                    <a href="/">Home</a>
                </li>

                <li>
                    <a href="/films">Films</a>
                </li>

                <li>
                    <a href="/series">Series</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <?= $content; ?>
    </main>
</body>
</html>
<?php
unset($_SESSION['error']);
unset($_SESSION['old']);