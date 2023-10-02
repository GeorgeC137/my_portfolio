<?php

namespace App\View\Components\Home;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\View\Component;

class Portfolio extends Component
{

    public array $items = [];
    public array $tabs = [];

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Vue3', 'Tailwind.css'],
                'title' => 'Survey App with Laravel, Vue3 and Tailwindcss',
                'image' => url('https://picsum.photos/300'),
                'github' => 'https://github.com/GeorgeC137/survey_app'
            ],
            [
                'category' => ['Laravel', 'PHP', 'Livewire', 'Tailwind.css'],
                'title' => 'Movie App with Tailwind.css, Laravel and Livewire',
                'image' => url('https://picsum.photos/300'),
                'github' => 'https://github.com/GeorgeC137/movie_app'
            ],
            [
                'category' => ['Vuex', 'Vue3', 'Tailwind.css'],
                'title' => 'Safron Lunches App with Vuex, Vue3, and Tailwindcss',
                'image' => url('https://picsum.photos/300'),
                'github' => 'https://github.com/GeorgeC137/safron_lunches'
            ],
            [
                'category' => ['Laravel', 'PHP', 'Postman'],
                'title' => 'Image Resize App with Laravel, and Postman',
                'image' => url('https://picsum.photos/300'),
                'github' => 'https://github.com/GeorgeC137/image-resize'
            ],
            [
                'category' => ['Laravel', 'AlpineJs', 'Tailwind.css'],
                'title' => 'MyGigs App with Laravel, AlpineJS and Tailwindcss',
                'image' => url('https://picsum.photos/300'),
                'github' => 'https://github.com/GeorgeC137/my_gigs'
            ],
            [
                'category' => ['Laravel', 'PHP'],
                'title' => 'Laravel API with Laravel and PHP',
                'image' => url('https://picsum.photos/300'),
                'github' => 'https://github.com/GeorgeC137/laravel-api'
            ]
        ];

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.home.portfolio');
    }
}
