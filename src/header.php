<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title><?php echo $_SERVER['SERVER_NAME']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

$body_class = match ($_SERVER['DOCUMENT_URI']) {
    '/index.php' => 'home',
    '/settings.php' => 'settings',
    '/login.php' => 'login',
    '/signup.php' => 'signup',
    default => '',
};

?>


<body class="<?php echo $body_class; ?>">
    <div class="container">
        <header>
            <h1><a href="/"><?php echo $_SERVER['SERVER_NAME']; ?></a></h1>
            <nav class="nav">
                <ul id="service-links">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <li><a href="/settings">Настройки</a></li>
                    <?php endif; ?>
                </ul>
                <ul id="user-links">
                    <?php if (isset($_SESSION['user'])) : ?>
                        <li style="color: gray; font-style: italic;">
                            <?php echo $_SESSION['user']['email']; ?>
                        </li>
                        <li><a href="/logout">Выйти</a></li>
                    <?php else : ?>
                        <li><a href="/login">Войти</a></li>
                        <li><a href="/signup">Регистрация</a></li>
                    <?php endif; ?>
                </ul>
            </nav>
        </header>