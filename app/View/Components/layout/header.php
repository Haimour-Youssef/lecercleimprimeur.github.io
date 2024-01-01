<?php

namespace App\View\Components\layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Categorie;

class header extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = Categorie::whereNull('categorie_id')
        ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout.header',['categories'=> $this->categories]);
    }
}
