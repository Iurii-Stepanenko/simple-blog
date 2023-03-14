<?php

require_once 'data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Travel Blog</title>
    <style>
        header,
        main,
        footer {
            border: 1px dashed black;
        }

        .post-list {
            display: flex;
        }

        .post-list .post {
            max-width: 30%;
        }
    </style>
</head>
<body>
<header>
    <a href="/" title="Travel Blog">
        <img src="logo.png" alt="Logo" width="200"/>
    </a>
    <nav>
        <ul>
            <li><a href="/home">Home</a></li>
            <li><a href="/blog">Blog</a></li>
            <ul><span>Categories</span>
                <?php foreach (catalogGetCategory() as $category) : ?>
                    <li>
                        <a href="/<?= $category['url'] ?>"><?= $category['name'] ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </ul>
    </nav>
</header>
<main>
    <h1><?= $data['name'] ?></h1>
    <img src="post-placeholder.png" alt="<?= $data['name'] ?>" width="300"/>
    <p><?= $data['description'] ?></p>
    <p><?= $data['author_name'] ?></p>
    <p><?= $data['publication_date']?></p>
</main>

<footer>
    <nav>
        <ul>
            <li>
                <a href="/about">About Us</a>
            </li>
            <li>
                <a href="/contact">Contact Us</a>
            </li>
        </ul>
    </nav>
    <p>© Iurii Stepanenko 2023. All Rights Reserved.</p>
</footer>
</body>
</html>