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
    <form method="post" action="/send-contact-us-request">
        <h2>Contact Us</h2>
        <div class="field">
            <label for="contact-name">Your name:</label>
            <input type="text" id="contact-name" placeholder="John Doe">
        </div>
        <div class="field">
            <label for="contact-email">Your email:</label>
            <input type="email" id="contact-email" placeholder="email@example.com">
        </div>
        <div class="field">
            <label for="contact-question">Question:</label>
            <textarea id="contact-question" rows="4" placeholder="Please, enter your question"></textarea>
        </div>
        <button type="submit">Submit</button>
    </form>
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