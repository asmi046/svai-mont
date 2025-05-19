<?php

namespace App\View\Components;

use Closure;
use App\Models\Service;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class ServiceInMain extends Component
{

    public $services;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->services = Cache::rememberForever('services_in_main', function () {
            return Service::orderBy('order', 'asc')->take(6)->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.service-in-main');
    }
}
