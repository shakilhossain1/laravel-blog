<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts page</title>
</head>

<body>

    <?php foreach ($posts as $post) : ?>
        <article>
            <h2>
                <a href="/posts/<?= $post->slug ?>">
                    <?= $post->title ?>
                </a>
            </h2>
            <div>
                <?= $post->excerpt ?>
            </div>
        </article>
    <?php endforeach; ?>

</body>

</html>