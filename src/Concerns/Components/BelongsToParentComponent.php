<?php

namespace Octopy\Filament\TabLayout\Concerns\Components;

use Octopy\Filament\TabLayout\Components\FilamentComponent;

trait BelongsToParentComponent
{
    protected ?FilamentComponent $parentComponent = null;

    public function parentComponent(FilamentComponent $component) : static
    {
        $this->parentComponent = $component;

        return $this;
    }

    public function getParentComponent() : ?FilamentComponent
    {
        return $this->parentComponent;
    }
}
