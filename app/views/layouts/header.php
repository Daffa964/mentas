<?php
$blogCategories = getCategoriesByType('blog');
?>

<header class="header">
        <div class="header-container">
            <div class="logo">
                <img src="<?= BASE_URL ?>/assets/images/Mentas-logo.png" alt="Mentas Logo">
            </div>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="navbar">
                <a href="#">Home</a>
                <div class="nav-item has-dropdown">
                    <a href="<?= BASE_URL ?>/blog">Blog</a>

                    <?php if (!empty($blogCategories)): ?>
                        <div class="dropdown-menu">
                            <?php foreach ($blogCategories as $cat): ?>
                                <a href="<?= BASE_URL ?>/blog/<?= $cat['slug']; ?>">
                                    <?= $cat['name']; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <a href="#">Bulletin Sastra</a>
                <a href="#">Katalog</a>
                <a href="#">Jual Beli</a>
                <a href="#">Halaman Tiket</a>
                <a href="#">About</a>
                <a href="#">Contribute</a>
            </nav>
            <a href="<?= BASE_URL ?>/login" class="profile-icon">
                <i class="fa-regular fa-user"></i>
            </a>
        </div>
        <div class="mobile-menu">
            <div class="mobile-menu-header">
                <span class="close">X</span>
            </div>
            <ul>
                <li><a href="#">Home</a></li>
                <li class="has-sub">
                    <a href="#" class="mobile-toggle">
                        Blog <span class="icon">></span>
                    </a>

                    <?php if (!empty($blogCategories)): ?>
                        <ul class="sub-menu">
                            <?php foreach ($blogCategories as $cat): ?>
                                <li>
                                    <a href="<?= BASE_URL ?>/blog/<?= $cat['slug']; ?>">
                                        <?= $cat['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </li>
                <li class="has-sub">
                    <a href="#">Bulletin Sastra</a>
                </li>
                <li class="has-sub">
                    <a href="#">Katalog</a>
                </li>
                <li class="has-sub">
                    <a href="#">Jual Beli</a>
                </li>
                <li class="has-sub">
                    <a href="#">Halaman Tiket</a>
                </li>
                <li class="has-sub">
                    <a href="#">About</a>
                </li>
                <li class="has-sub">
                    <a href="#">Contribute</a>
                </li>
            </ul>
        </div>
</header>
