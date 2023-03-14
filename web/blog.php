<?php

require_once 'data.php';

?>
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
            <li><a href="home.php">Home</a></li>
            <li><a href="blog.php">Blog</a></li>
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
    <section title="Posts">
        <?php foreach (catalogGetPost() as $post) : ?>
            <div class="post">
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>"><?= $post['name'] ?></a>
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>">
                    <img src="/post-placeholder.png" alt="<?= $post['name'] ?>" width="200"/>
                </a>
                <p><?= substr($post['description'], 0, 150) . '...' ?></p>
                <p><?= $post['author_name'] ?></p>
                <p><?= $post['publication_date']?></p>
                <a href="/<?= $post['url'] ?>">Read more</a>
            </div>
        <?php endforeach; ?>
    </section>
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
