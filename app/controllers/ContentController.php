<?php

class ContentController extends Controller
{
    public function handle()
    {
        // ambil parameter dari URL
        $type = $_GET['type'] ?? null;
        $slug = $_GET['slug'] ?? null;

        if (!$type) {
            return $this->view('errors/404');
        }

        // ambil content type (dummy dulu)
        $contentType = $this->getContentType($type);

        if (!$contentType) {
            return $this->view('errors/404');
        }

        // 1️⃣ HALAMAN LIST
        if (!$slug) {
            return $this->view(
                'content/list/' . $contentType['template'],
                [
                    'type' => $contentType,
                    'contents' => getContentsByType($type)
                ]
            );
        }

        // 2️⃣ CEK APAKAH KATEGORI
        $contentsByCategory = getContentsByCategory($type, $slug);

        if (!empty($contentsByCategory)) {
            return $this->view(
                'content/list/' . $contentType['template'],
                [
                    'type' => $contentType,
                    'contents' => $contentsByCategory,
                    'activeCategory' => $slug
                ]
            );
        }

        // 3️⃣ DETAIL KONTEN
        $content = getContentBySlug($slug);

        if ($content) {
            return $this->view(
                'content/detail/' . $contentType['template'],
                [
                    'type' => $contentType,
                    'content' => $content
                ]
            );
        }

        return $this->view('errors/404');
    }

    private function getContentType($slug)
    {
        $data = require __DIR__ . '/../config/content.php';

        foreach ($data['content_types'] as $type) {
            if ($type['slug'] === $slug && $type['status'] === 'aktif') {
                return $type;
            }
        }

        return null;
    }
}
