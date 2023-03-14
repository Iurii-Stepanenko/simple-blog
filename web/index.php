<?php

declare(strict_types=1);

require_once 'data.php';
$requestUri = trim($_SERVER['REQUEST_URI'], '/');

switch ($requestUri) {
    case '':
        $page = 'home.php';
        break;
    case 'contact':
        $page = 'contact.php';
        break;
    case 'about':
        $page = 'about.php';
        break;
    case 'blog':
        $page = 'blog.php';
        break;
    default:
        if ($data = catalogGetCategoryByUrl($requestUri)) {
            $page = 'category.php';
            break;
        }

        if ($data = catalogGetPostByUrl($requestUri)) {
            $page = 'post.php';
            break;
        }

        break;
}

require_once $page;
