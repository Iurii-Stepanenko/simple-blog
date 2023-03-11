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
    <menu>
        <li>Home</li>
        <li>Blog</li>
        <li>Categories</li>
    </menu>
</header>
<main>
    <section title="Recently added posts">
        <h2>Recently Added Posts</h2>
        <div class="post-list">
            <div class="post">
                <a href="/post-1-url" title="post 1">
                    <img src="/post-placeholder.png" alt="post 1" width="200"/>
                </a>
                <a href="/post-1-url" title="post 1">post 1</a>
                <button type="button">Read more</button>
            </div>
            <div class="post">
                <a href="/post-2-url" title="post 2">
                    <img src="/post-placeholder.png" alt="post 2" width="200"/>
                </a>
                <a href="/post-2-url" title="post 2">post 2</a>
                <button type="button">Read more</button>
            </div>
            <div class="post">
                <a href="/post-3-url" title="post 3">
                    <img src="/post-placeholder.png" alt="post 3" width="200"/>
                </a>
                <a href="/post-3-url" title="post 3">post 3</a>
                <button type="button">Read more</button>
            </div>
        </div>
    </section>
</main>
<footer>
    <nav>
        <ul>
            <li>
                <a href="/about-us">About Us</a>
            </li>
            <li>
                <a href="/terms-and-conditions">Terms & Conditions</a>
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