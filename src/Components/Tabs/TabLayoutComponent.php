<?php

namespace Octopy\Filament\TabLayout\Components\Tabs;

use Filament\Support\Concerns\EvaluatesClosures;
use Octopy\Filament\TabLayout\Concerns\Components\CanBeHidden;
use Octopy\Filament\TabLayout\Concerns\Components\CanSpanColumns;
use Octopy\Filament\TabLayout\Concerns\Components\HasComponent;
use Octopy\Filament\TabLayout\Concerns\Components\HasComponentData;

abstract class TabLayoutComponent
{
    use HasComponent;
    use HasComponentData;
    use CanBeHidden;
    use CanSpanColumns;
    use EvaluatesClosures;

    public static function make() : static
    {
        return app(static::class);
    }
}
