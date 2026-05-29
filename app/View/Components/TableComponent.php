<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TableComponent extends Component
{
    /**
     * The table headers.
     *
     * @var array
     */
    public array $headers;

    /**
     * The table items.
     *
     * @var mixed
     */
    public mixed $items;

    /**
     * The message to show when the table is empty.
     *
     * @var string
     */
    public string $emptyMessage;

    /**
     * Whether rows should have a hover effect.
     *
     * @var bool
     */
    public bool $hoverable;

    /**
     * Whether the table should be striped.
     *
     * @var bool
     */
    public bool $striped;

    /**
     * Create a new component instance.
     */
    public function __construct(
        array $headers = [],
        mixed $items = null,
        string $emptyMessage = 'No records found.',
        bool $hoverable = true,
        bool $striped = false
    ) {
        $this->headers = $headers;
        $this->items = $items;
        $this->emptyMessage = $emptyMessage;
        $this->hoverable = $hoverable;
        $this->striped = $striped;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.table');
    }
}
