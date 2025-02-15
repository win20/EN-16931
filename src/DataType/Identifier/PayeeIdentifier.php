<?php

declare(strict_types=1);

namespace Tiime\EN16931\DataType\Identifier;

use Tiime\EN16931\DataType\InternationalCodeDesignator;

class PayeeIdentifier
{
    public function __construct(public readonly string $value, public readonly InternationalCodeDesignator $scheme)
    {
    }
}
