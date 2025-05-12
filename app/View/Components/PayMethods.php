<?php

namespace App\View\Components;

use Closure;
use App\Models\Parametr;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class PayMethods extends Component
{
    public $pay_methods;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->pay_methods = Cache::rememberForever('pay_methods', function () {
            return Parametr::where('section', 'Способы оплаты')->get();
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.pay-methods');
    }
}
