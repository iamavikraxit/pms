<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class StatCard extends Component
{
    public string $title;
    public string $value;
    public ?string $trend;
    public string $color;
    public array $theme;
    /**
     * Create a new component instance.
     */
    public function __construct(
        string $title,
        string $value,
        ?string $trend = null,
        string $color = 'lime'
    ) {
        $this->title = $title;
        $this->value = $value;
        $this->trend = $trend;
        $this->color = $color;

        $themes = [

            'lime' => [
                'text' => 'text-lime-700 dark:text-lime-400',
                'bg' => 'bg-lime-400 dark:bg-lime-400',
                'border' => 'border-lime-200 dark:border-lime-400/30',
            ],

            'blue' => [
                'text' => 'text-sky-700 dark:text-sky-400',
                'bg' => 'bg-sky-400 dark:bg-sky-400',
                'border' => 'border-sky-200 dark:border-sky-400/30',
            ],

            'emerald' => [
                'text' => 'text-emerald-700 dark:text-emerald-400',
                'bg' => 'bg-emerald-400 dark:bg-emerald-400',
                'border' => 'border-emerald-200 dark:border-emerald-400/30',
            ],

            'rose' => [
                'text' => 'text-rose-700 dark:text-rose-400',
                'bg' => 'bg-rose-400 dark:bg-rose-400',
                'border' => 'border-rose-200 dark:border-rose-400/30',
            ],

        ];

        $this->theme = $themes[$color] ?? $themes['lime'];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.stat-card');
    }
}
