<?php

namespace Octopy\Filament\TabLayout\Concerns\Components;

use Octopy\Filament\TabLayout\Components\ComponentContainer;

trait BelongsToContainer
{
    protected ComponentContainer $container;

    public function container(ComponentContainer $container) : static
    {
        $this->container = $container;

        return $this;
    }

    public function getContainer() : ComponentContainer
    {
        return $this->container;
    }
}
