<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SearchField extends Component
{
    public string $action;
    public string $method;
    public string $name;
    public string $value;
    public string $placeholder;
    public string $buttonLabel;
    public string $buttonVariant;
    public bool $withButton;
    public string $inputId;
    public string $formId;
    public int $debounceMs;
    public string $buttonClasses;
    public string $inputPaddingClass;

    public function __construct(
        string $action = '#',
        string $method = 'GET',
        string $name = 'search',
        ?string $value = null,
        string $placeholder = 'Search...',
        string $buttonLabel = 'Search',
        string $buttonVariant = 'primary',
        bool $withButton = false,
        ?string $inputId = null,
        ?string $formId = null,
        int $debounceMs = 300
    ) {
        $this->action = $action;
        $this->method = $method;
        $this->name = $name;
        $this->value = $value ?? request($name, '');
        $this->placeholder = $placeholder;
        $this->buttonLabel = $buttonLabel;
        $this->buttonVariant = $buttonVariant;
        $this->withButton = $withButton;
        $this->inputId = $inputId ?? $this->generateUid($action, $name, $placeholder);
        $this->formId = $formId ?? "searchForm_{$this->inputId}";
        $this->debounceMs = $debounceMs;

        $this->buttonClasses = match ($buttonVariant) {
            'secondary' => 'bg-white text-stone-700 border border-orange-200 hover:bg-orange-50 focus:ring-orange-400',
            default => 'bg-orange-500 text-white hover:bg-orange-600 focus:ring-orange-400',
        };

        $this->inputPaddingClass = $withButton ? 'pr-28' : 'pr-4';
    }

    protected function generateUid(string $action, string $name, string $placeholder): string
    {
        return "searchInput_" . substr(md5($action . $name . $placeholder), 0, 8);
    }

    public function render(): View|Closure|string
    {
        return view('components.search-field');
    }
}
