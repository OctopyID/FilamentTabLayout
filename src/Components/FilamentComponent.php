<?php

namespace Octopy\Filament\TabLayout\Components;

use Filament\Support\Components\ViewComponent;
use Octopy\Filament\TabLayout\Concerns\Components\{BelongsToContainer,
    CanBeHidden,
    CanSpanColumns,
    HasChildComponents,
    HasColumns,
    HasExtraAttributes,
    HasId,
    HasLabel,
    HasMaxWidth};

class FilamentComponent extends ViewComponent
{
    use BelongsToContainer;
    use CanBeHidden;
    use CanSpanColumns;
    use HasChildComponents;
    use HasId;
    use HasLabel;
    use HasMaxWidth;
    use HasColumns;
    use HasExtraAttributes;

    protected string $evaluationIdentifier = 'component';
}
