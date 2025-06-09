<?php

namespace App\View\Components;

use Closure;
use App\Models\Contact;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;

class PageCta extends Component
{
    public $phone;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->phone = Cache::rememberForever('top_contacts_phone', function () {
            $elem = Contact::where('name', 'phone')->first();
            return $elem->value;
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.page-cta');
    }
}
