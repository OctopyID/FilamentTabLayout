<?php

namespace Octopy\Filament\TabLayout\Components\Tabs;

use Filament\Support\Concerns\EvaluatesClosures;
use Octopy\Filament\TabLayout\Concerns\Components\CanBeHidden;
use Octopy\Filament\TabLayout\Concerns\Components\CanSpanColumns;
use Octopy\Filament\TabLayout\Concerns\Components\HasComponent;
use Octopy\Filament\TabLayout\Concerns\Components\HasComponentData;

class TabContainer
{
    use HasComponent;
    use HasComponentData;
    use CanBeHidden;
    use CanSpanColumns;
    use EvaluatesClosures;

    public function __construct(?string $component = null)
    {
        $this->component($component);
    }

    public static function make(string $component) : static
    {
        $static = app(static::class, ['component' => $component]);

        return $static;
    }
}
