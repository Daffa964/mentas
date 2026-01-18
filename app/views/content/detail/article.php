<?php require_once __DIR__ . '/../../layouts/header.php'; ?>

<main class="container blog-detail">

    <article class="blog-article">

        <header class="blog-header">
            <h1><?= $content['title']; ?></h1>

            <div class="blog-meta">
                <span>✍ <?= $content['author']; ?></span>
                <span>• <?= ucfirst($content['category']); ?></span>
            </div>
        </header>

        <div class="blog-cover">
            <img src="<?= BASE_URL ?>/assets/images/default-cover.jpg" alt="<?= $content['title']; ?>">
        </div>

        <div class="blog-body">
            <?= nl2br($content['body']); ?>
        </div>

    </article>

</main>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
