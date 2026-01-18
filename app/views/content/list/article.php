<?php require_once __DIR__ . '/../../layouts/header.php'; ?>

<main class="container blog-list">

    <h1 class="page-title">
        <?= $type['name'] ?? 'Blog'; ?>
    </h1>

    <?php require __DIR__ . '/../components/filter.php'; ?>

    <div class="blog-grid">
        <?php if (empty($contents)): ?>
            <p>Belum ada tulisan.</p>
        <?php else: ?>
            <?php foreach ($contents as $item): ?>
                <?php require __DIR__ . '/../components/card.php'; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</main>

<?php require_once __DIR__ . '/../../layouts/footer.php'; ?>
