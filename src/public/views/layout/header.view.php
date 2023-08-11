<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Classic Models</title>
</head>
<body>
    <header>
        <h1>Workshop Header</h1>
        <nav>
            Bonjour <?= $_SESSION["user"]["username"] ?>    
            <ul>
                <li>
                    <a href="/index.php">Home</a>
                </li>
                <li>
                    <a href="/login.php">Login</a>
                </li>
                <li>
                    <a href="/logout.php">Logout</a>
                </li>
                <li>
                    <a href="/register.php">Register</a>
                </li>
            </ul>
        </nav>
    </header>

    <main> -->

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.classless.min.css">
    <title>Workshop Classic Models</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/"><strong>Classic Models</strong></a></li>
            </ul>
            <ul>
                <?php if (!empty($_SESSION['user'])): ?>
                    Bonjour <?= $_SESSION['user']['username'] ?>
                    <li><a href="/logout.php">Register</a></li>
                <?php else: ?>
                    <li><a href="/login.php"></a>Login</li>
                    <li><a href="/register.php"></a>Register</li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main> 