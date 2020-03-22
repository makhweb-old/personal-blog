<?php namespace Makhweb\Lights\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

class SitemapController extends Controller
{
    const STATIC_PAGES_URL = 'data/sitemap/static.json';

    public function __invoke()
    {
        dd(url('/'));
        return $this->makePartial(
            $this->getBasePath('views/sitemap.htm')
        );
    }

    private function getStaticPages() : array
    {
        
    }

    private function dataFromJson() : array
    {
        return $this->getBasePath(self::STATIC_PAGES_URL);
    }

    private function getBasePath(string $path) : string
    {
        return plugins_path('makhweb/lights/' . $path);
    }
}
