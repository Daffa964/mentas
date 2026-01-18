<article class="blog-card">
    <a href="<?= BASE_URL ?>/blog/<?= $item['slug']; ?>">
        <img src="<?= BASE_URL ?>/assets/images/default-cover.jpg" alt="<?= $item['title']; ?>">
    </a>

    <div class="blog-card-body">
        <span class="blog-category">
            <?= ucfirst($item['category']); ?>
        </span>

        <h2>
            <a href="<?= BASE_URL ?>/blog/<?= $item['slug']; ?>">
                <?= $item['title']; ?>
            </a>
        </h2>

        <p class="blog-excerpt">
            <?= $item['excerpt']; ?>
        </p>

        <div class="blog-meta">
            <span>✍ <?= $item['author']; ?></span>
        </div>
    </div>
</article>

<!-- 📌 Catatan penting
Nanti saat DB masuk:

category → join table

author → users.name
View TIDAK PERLU DIUBAH -->
