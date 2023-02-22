<?php

namespace Tiime\EN16931\DataType\Identifier;

use Tiime\EN16931\DataType\InternationalCodeDesignator;

class LocationIdentifier
{
    public function __construct(public readonly string $value, public readonly ?InternationalCodeDesignator $scheme)
    {
    }
}
