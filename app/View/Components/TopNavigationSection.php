<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Contact;

class TopNavigationSection extends Component
{
    public array $contacts;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->contacts = Cache::rememberForever('all_contacts', function () {
            return get_collection_array(Contact::all(), 'name');
        });
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.top-navigation-section');
    }
}
