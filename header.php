<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login System</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
        <link rel="stylesheet" href="css/bulma.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
            <nav class="nav">
                <ul class="ul-menu">
                    <li class="li-menu"><a href="./" class="a-link">HOME</a></li>
                    <li class="li-menu"><a href="#" class="a-link">PORTFOLIO</a></li>
                    <li class="li-menu"><a href="#" class="a-link">ABOUT ME</a></li>
                    <li class="li-menu"><a href="#" class="a-link">CONTACT</a></li>
                </ul>
                <form class="login-form" action="">
                    <input placeholder="Email/Username" name="mailid" type="text" class="input-text input is-small">
                    <input placeholder="Password" name="pwd" type="password" class="input-text input is-small">
                    <button class="button is-dark is-small">LOGIN</button>
                    <a href="/signup.php" class="button is-light is-small">SIGNUP</a>
                    <a href="#" class="button is-dark is-small">LOGOUT</a>
                </form>
            </nav>
        </header>