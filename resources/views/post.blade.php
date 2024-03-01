<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-8</title>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
</head>
<body>
    <article>
        <!-- This call from Route in Web.php -->
        <h1><?= $posts->title; ?></h1>
        <p>
        <?= $posts->body; ?>
        </p>
        <a href="/">Go back</a>

    </article>
        
</body>
</html>