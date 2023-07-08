<?php

namespace Octopy\Filament\TabLayout;

use Filament\PluginServiceProvider;
use Livewire\Livewire;
use Octopy\Filament\TabLayout\Components\Tabs\ComponentWrapper;
use Spatie\LaravelPackageTools\Package;

class TabLayoutPluginServiceProvider extends PluginServiceProvider
{
    public static string $name = 'tab-layout-plugin';

    /**
     * @param  Package $package
     * @return void
     */
    public function configurePackage(Package $package) : void
    {
        $package->name(static::$name)->hasViews();
    }

    /**
     * @return void
     */
    public function bootingPackage() : void
    {
        parent::bootingPackage();

        Livewire::component(static::$name . '::component-wrapper', ComponentWrapper::class);
    }
}
