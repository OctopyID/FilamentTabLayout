<?php

namespace Octopy\Filament\TabLayout\Components\Tabs;

use Closure;
use Illuminate\Support\Str;
use Octopy\Filament\TabLayout\Components\FilamentComponent;
use Octopy\Filament\TabLayout\Concerns;

class Tab extends FilamentComponent
{
    use Concerns\Components\HasIcon;
    use Concerns\Components\HasBadge;

    protected string $view = 'tab-layout-plugin::components.tabs.tab';

    protected bool $shouldOpenUrlInNewTab = false;

    protected string|Closure|null $url = null;

    final public function __construct(string $label, string $id = null)
    {
        $this->label($label);
        $this->id(Str::slug($id ?: $label));
    }

    public static function make(string $label, string $id = null) : static
    {
        $static = app(static::class, ['label' => $label, 'id' => $id]);
        $static->configure();

        return $static;
    }

    public function url(string|Closure|null $url, bool $shouldOpenInNewTab = false) : static
    {
        $this->shouldOpenUrlInNewTab = $shouldOpenInNewTab;
        $this->url = $url;

        return $this;
    }

    public function openUrlInNewTab(bool $condition = true) : static
    {
        $this->shouldOpenUrlInNewTab = $condition;

        return $this;
    }

    public function getId() : string
    {
        return $this->getContainer()->getParentComponent()->getId() . '-' . parent::getId() . '-tab';
    }

    public function getColumnsConfig() : array
    {
        return $this->columns ?? $this->getContainer()->getColumnsConfig();
    }

    public function getUrl() : ?string
    {
        return value($this->url);
    }

    public function shouldOpenUrlInNewTab() : bool
    {
        return $this->shouldOpenUrlInNewTab;
    }

    public function canConcealComponents() : bool
    {
        return true;
    }
}
