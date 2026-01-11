<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs</title>
</head>
<body>
<header>
    <h1>Blog Posts</h1>
    <x-nav-links/>
</header>
<div>
    <h2>Blog list</h2>
        <div>
            <h3><?php echo $title ?></h3>
            <datetime>2026-01-01</datetime>
            <p>
                <?php echo $content?>
            </p>
        </div>


</div>

</body>
</html>
