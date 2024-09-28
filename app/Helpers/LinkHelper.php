<?php

namespace App\Helpers;

class LinkHelper
{
    public static function fetchLinkData($url)
    {
        $html = @file_get_contents($url);
        if ($html === FALSE) {
            return [
                'title' => 'Başlık Bulunamadı',
                'description' => 'Açıklama Bulunamadı',
                'image' => null,
            ];
        }

        preg_match('/<meta property="og:title" content="(.*?)"/', $html, $title);
        preg_match('/<meta property="og:description" content="(.*?)"/', $html, $description);
        preg_match('/<meta property="og:image" content="(.*?)"/', $html, $image);

        return [
            'title' => $title[1] ?? 'Başlık Bulunamadı',
            'description' => $description[1] ?? 'Açıklama Bulunamadı',
            'image' => $image[1] ?? null,
        ];
    }
}
