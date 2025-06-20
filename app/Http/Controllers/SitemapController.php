<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Product;
use App\Models\Service;
use App\Models\Fondation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        $products = Product::all(); // Пример данных
        $services = Service::all(); // Пример данных
        $fondations = Fondation::all();
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"/>');

        $url = $xml->addChild('url');
        $url->addChild('loc', route('quiz'));
        $url->addChild('lastmod', Carbon::now()->toAtomString());
        $url->addChild('changefreq', 'weekly');
        $url->addChild('priority', '0.8');

        $url = $xml->addChild('url');
        $url->addChild('loc', route('rewiews'));
        $url->addChild('lastmod', Carbon::now()->toAtomString());
        $url->addChild('changefreq', 'weekly');
        $url->addChild('priority', '0.8');
        $url->addChild('priority', '0.8');

        $url = $xml->addChild('url');
        $url->addChild('loc', route('price'));
        $url->addChild('lastmod', Carbon::now()->toAtomString());
        $url->addChild('changefreq', 'weekly');
        $url->addChild('priority', '0.8');

        $url = $xml->addChild('url');
        $url->addChild('loc', route('galery'));
        $url->addChild('lastmod', Carbon::now()->toAtomString());
        $url->addChild('changefreq', 'weekly');
        $url->addChild('priority', '0.8');

        $url = $xml->addChild('url');
        $url->addChild('loc', route('faq'));
        $url->addChild('lastmod', Carbon::now()->toAtomString());
        $url->addChild('changefreq', 'weekly');
        $url->addChild('priority', '0.8');

        $url = $xml->addChild('url');
        $url->addChild('loc', route('contacts'));
        $url->addChild('lastmod', Carbon::now()->toAtomString());
        $url->addChild('changefreq', 'weekly');
        $url->addChild('priority', '0.8');

        foreach ($pages as $post) {
            $url = $xml->addChild('url');
            $url->addChild('loc', route('page', $post->slug));
            $url->addChild('lastmod', $post->updated_at->toAtomString());
            $url->addChild('changefreq', 'weekly');
            $url->addChild('priority', '0.8');
        }

        foreach ($products as $post) {
            $url = $xml->addChild('url');
            $url->addChild('loc', route('product_page', $post->slug));
            $url->addChild('lastmod', $post->updated_at->toAtomString());
            $url->addChild('changefreq', 'weekly');
            $url->addChild('priority', '0.8');
        }

        foreach ($services as $post) {
            $url = $xml->addChild('url');
            $url->addChild('loc', route('service_page', $post->slug));
            $url->addChild('lastmod', $post->updated_at->toAtomString());
            $url->addChild('changefreq', 'weekly');
            $url->addChild('priority', '0.8');
        }

        foreach ($fondations as $post) {
            $url = $xml->addChild('url');
            $url->addChild('loc', route('fondation_page', $post->slug));
            $url->addChild('lastmod', $post->updated_at->toAtomString());
            $url->addChild('changefreq', 'weekly');
            $url->addChild('priority', '0.8');
        }

        return Response::make($xml->asXML(), 200, [
            'Content-Type' => 'application/xml'
        ]);
    }
}
