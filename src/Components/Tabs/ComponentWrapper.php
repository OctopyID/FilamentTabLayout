<?php

namespace Octopy\Filament\TabLayout\Components\Tabs;

use Filament\Support\Concerns\EvaluatesClosures;
use Livewire\Component;
use Octopy\Filament\TabLayout\Concerns\Components\CanBeHidden;
use Octopy\Filament\TabLayout\Concerns\Components\CanSpanColumns;
use Octopy\Filament\TabLayout\Concerns\Components\HasComponent;
use Octopy\Filament\TabLayout\Concerns\Components\HasComponentData;

class ComponentWrapper extends Component
{
    use HasComponent;
    use HasComponentData;
    use CanBeHidden;
    use CanSpanColumns;
    use EvaluatesClosures;

    protected $rawComponent = null;

    public static function make() : static
    {
        $static = app(static::class);

        return $static;
    }

    public function mount($rawComponent)
    {
        $this->rawComponent = $rawComponent;

        return $this;
    }

    public function getRawComponent()
    {
        return $this->rawComponent;
    }

    public function render()
    {
        return view('tab-layout-plugin::tabs.component-wrapper');
    }
}
