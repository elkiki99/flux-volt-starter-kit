<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class DashboardLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct
    (
        public string $title = 'Dashboard • Flux Kit'
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('layouts.dashboard');
    }
}
