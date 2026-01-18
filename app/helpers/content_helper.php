<?php

function getContentsByType($type)
{
    return [
        [
            'title' => 'Judul Artikel Pertama',
            'slug' => 'judul-artikel-pertama',
            'category' => 'berita',
            'excerpt' => 'Ini ringkasan artikel...',
            'cover' => 'dummy.jpg'
        ]
    ];
}

function getContentsByCategory($type, $category)
{
    if ($category === 'berita') {
        return getContentsByType($type);
    }

    return [];
}

function getContentBySlug($slug)
{
    if ($slug === 'judul-artikel-pertama') {
        return [
            'title' => 'Judul Artikel Pertama',
            'content' => 'Isi artikel sangat panjang...',
            'author' => 'Admin',
            'cover' => 'dummy.jpg'
        ];
    }

    return null;
}

function getCategoriesByType($typeSlug)
{
    return [
        ['name' => 'Berita', 'slug' => 'berita'],
        ['name' => 'Esai', 'slug' => 'esai'],
        ['name' => 'Komunitas', 'slug' => 'komunitas'],
        ['name' => 'Tradisi', 'slug' => 'tradisi'],
        ['name' => 'Ekosistem', 'slug' => 'ekosistem'],
    ];
}

