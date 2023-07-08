<?php

namespace Octopy\Filament\TabLayout\Widgets;

use Filament\Widgets\Widget;
use Octopy\Filament\TabLayout\Concerns;

class TabsWidget extends Widget
{
    use Concerns\Layouts\InteractsWithTab;

    protected static string $view = 'tab-layout-plugin::widgets.tabs-widget';

    protected int|string|array $columnSpan = 'full';
}
