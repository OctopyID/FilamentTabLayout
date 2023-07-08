<?php

namespace Octopy\Filament\TabLayout\Concerns\Components;

trait HasComponentData
{
    protected array $data = [];

    public function data(array $data) : static
    {
        $this->data = $data;

        return $this;
    }

    public function getData() : array
    {
        return $this->data;
    }
}
