<?php

namespace App\View\Components;

use Closure;
use App\Models\Product;
use App\Models\Service;
use App\Models\Fondation;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class PageSidebar extends Component
{
    public $products;
    public $services;
    public $fondations;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->products = Cache::rememberForever('sb_product', function () {
            return Product::all();
        });

        $this->services = Cache::rememberForever('sb_services', function () {
            return Service::all();
        });

        $this->fondations = Cache::rememberForever('sb_fondation', function () {
            return Fondation::all();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-sidebar');
    }
}
